<?php
/*
Plugin Name: My Clang Subscribe Form
Plugin URI: http://www.jobcastrop.nl/
Description: Subsribing without iFrames
Version: 0.2
Author: Job Castrop
Author URI: http://www.jobcastrop.nl
*/
require_once "clangapi.php";

class myClangForms
{
    public static function createMenu()
    {
        add_object_page( 'myClang Forms', 'myClang Forms', 'manage_options', 'myClangForms', array( 'myClangForms', 'dispatch' ));
    }


    public function dispatch()
    {
        $action = $_GET['action'];
        if(!$action)
        {
            self::displayOptions();
        }
    }

    public function displayOptions()
    {
        if (!current_user_can('manage_options'))
        {
            wp_die('You do not have sufficient permissions to access this page.');
        }

        if (isset($_POST["options"]))
        {
            foreach($_POST['options'] as $option => $value)
            {
                self::of_set_option($option, $value);
            }
        }

        if (isset($_POST["test_address"]))
        {
            self::sendOptin($_POST["test_address"]);
        }

        ?>

        <div class="wrap">
            <?php screen_icon('themes'); ?> <h2>myClangForms</h2>

            <form method="POST" action="">
                <table class="form-table">
                    <tr valign="top">
                        <th scope="row">
                            <label for="num_elements">
                                API Token
                            </label>
                        </th>
                        <td>
                            <input type="text" name="options[token]" value="<?=self::of_get_option('token'); ?>"/>
                        </td>
                    </tr>

                    <tr valign="top">
                        <th scope="row">
                            <label for="num_elements">
                                Subsriber group (in Clang)
                            </label>
                        </th>
                        <td>
                            <?=self::getGroups(self::of_get_option('group'));?>
                        </td>
                    </tr>

                    <tr valign="top">
                        <th scope="row">
                            <label for="num_elements">
                                Opt-in mail
                            </label>
                        </th>
                        <td>
                            <?=self::getMailings(self::of_get_option('optin_mail'));?>
                        </td>
                    </tr>

                    <tr valign="top">
                        <th scope="row">
                            <label for="num_elements">
                                E-mail fieldname
                            </label>
                        </th>
                        <td>
                            <input type="text" name="options[fieldname]" value="<?=self::of_get_option('fieldname'); ?>"/>
                        </td>
                    </tr>

                    <tr valign="top">
                        <th scope="row">
                            <label for="num_elements">
                                Button text
                            </label>
                        </th>
                        <td>
                            <input type="text" name="options[buttontext]" value="<?=self::of_get_option('buttontext'); ?>"/>
                        </td>
                    </tr>

                    <tr valign="top">
                        <th scope="row">
                            <label for="num_elements">
                                Post message
                            </label>
                        </th>
                        <td>
                            <input type="text" name="options[message]" value="<?=self::of_get_option('message'); ?>"/>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <input type="submit" value="Save"/>
                        </td>
                    </tr>
                </table>
            </form>
            <h2>Test mail</h2>
            <form method="POST" action="">
                <table class="form-table">
                    <tr valign="top">
                        <th scope="row">
                            <label for="num_elements">
                                Test address
                            </label>
                        </th>
                        <td>
                            <input type="text" name="test_address"/>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="submit" value="Send test"/>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    <?
    }

    public function showForm()
    {
        if (isset($_POST["myClang_email"]))
        {
            self::sendOptin($_POST["myClang_email"]);

            echo self::of_get_option('message');
        }
        else
        {
            echo '<form method="POST" action="">
                <label for="email">'. self::of_get_option('fieldname') . '</label>
                <br/>
                <input type="text" name="myClang_email" id="email"/>
                <br/>
                <input type="submit" value="'. self::of_get_option('buttontext') . '"/>
            </form>';
        }
    }

    public function getGroups($iActive)
    {
        $sToken = self::of_get_option('token');

        if(!$sToken)
        {
            return;
        }
        try {


            $oClang = new clangAPI();
            $params = new group_getAll();
            $params->uuid = $sToken;
            $oResponse = $oClang->group_getAll($params);

            $oGroups = $oResponse->msg->Group;
        }catch (Exception $e)
        {
            return 'FAILED';
        }

        $aGroups = array();
        foreach($oGroups as $group)
        {
            if($group->parentId == 0)
            {
                $aGroups[$group->id]['name'] = $group->name;
                $aGroups[$group->id]['groups'] = self::getChildren($group->id, $oGroups);
            }
        }

        $sHtml = '<select name="options[group]">';
        $sHtml .= self::displayChildren($aGroups, $iActive);
        $sHtml .= '</select>';

        return $sHtml;


    }

    public function getMailings($iActive)
    {
        $sToken = self::of_get_option('token');

        if(!$sToken)
        {
            return;
        }

        $oClang = new clangAPI();

        $params = new email_getAll();
        $params->uuid = $sToken;

        $oResponse = $oClang->email_getAll($params);
        $oEmails = $oResponse->msg->Email;

        $sHtml = '<select name="options[optin_mail]">';

        foreach($oEmails as $oEmail)
        {
            $selected = '';
            if($oEmail->id === intval($iActive)) $selected = ' selected="selected" ';
            $sHtml .= '<option value="' . $oEmail->id . '" ' . $selected . '>' . $oEmail->folder . ' -> ' . $oEmail->name . '</option>';
        }

        $sHtml .= '</select>';

        return $sHtml;
    }

    public function sendOptin($address)
    {
        $sToken = self::of_get_option('token');

        if(!$sToken)
        {
            return;
        }

        $iCustomer = self::getCustomer($address);
        $iEmail = self::of_get_option('optin_mail');

        $oClang = new clangAPI();

        $params = new email_sendToCustomer();
        $params->uuid = $sToken;
        $params->customerId = $iCustomer;
        $params->emailId = $iEmail;

        $oResponse = $oClang->email_sendToCustomer($params);

        return $oResponse->code;
    }

    public function getCustomer($address)
    {
        $sToken = self::of_get_option('token');

        if(!$sToken)
        {
            return;
        }

        $oClang = new clangAPI();

        $params = new customer_getByEmailAddress();
        $params->uuid = $sToken;
        $params->emailAddress = $address;

        $oResponse = $oClang->customer_getByEmailAddress($params);
        if(isset($oResponse->msg->Customer))
        {
            $oCustomer = $oResponse->msg->Customer;
        }
        else
        {
            $params = new customer_insert();
            $customer = new Customer();
            $customerOption = new CustomerOption();
            $customer->emailAddress = $address;

            $params->uuid = $sToken;
            $params->customer = $customer;

            $oResponse = $oClang->customer_insert($params);

            $oCustomer = $oResponse->msg;
        }

        return $oCustomer->id;
    }

    public function displayChildren($aGroups, $iActive = 0, $iDepth = 0)
    {
        $sHtml = '';
        foreach($aGroups as $iGroup => $aGroup)
        {
            $selected = '';
            if($iGroup === intval($iActive)) $selected = ' selected="selected" ';
            $sHtml .= '<option value="' . $iGroup . '" ' . $selected . '>' . str_pad('', $iDepth, "-") . $aGroup['name'] .  '</option>';
            $sHtml .= self::displayChildren($aGroup['groups'], $iActive, $iDepth+1);
        }

        return $sHtml;
    }

    public function getChildren($id, $oGroups)
    {
        $aGroups = array();
        foreach($oGroups as $group)
        {
            if($group->parentId == $id)
            {
                $aGroups[$group->id]['name'] = $group->name;
                $aGroups[$group->id]['groups'] = self::getChildren($group->id, $oGroups);
            }
        }

        return $aGroups;
    }

    public function of_get_option( $name, $default = false )
    {
        $options = unserialize(get_option( 'myClangForms' ));

        if ( ! isset( $options[$name] ) )
        {
            return $default;
        }

        return $options[$name];
    }

    public function of_set_option( $name, $value, $default = false )
    {
        $options = unserialize(get_option( 'myClangForms' ));

        if ( ! is_array( $options ) )
        {
            $options = array();
        }

        $options[$name] = $value;

        $options = serialize($options);

        update_option('myClangForms', $options);
    }
}

add_action('admin_menu', array( 'myClangForms', 'createMenu' ));
add_shortcode('myClangForm', array( 'myClangForms', 'showForm' ));
?>
