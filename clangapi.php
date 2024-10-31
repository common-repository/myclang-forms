<?php

class Struct{
    var $any;//<anyXML>
    var $id;//ID
    var $href;//anyURI
}
class duration{
    var $_;//duration
    var $id;//ID
    var $href;//anyURI
}
class NOTATION{
    var $_;//QName
    var $id;//ID
    var $href;//anyURI
}
class time{
    var $_;//time
    var $id;//ID
    var $href;//anyURI
}
class date{
    var $_;//date
    var $id;//ID
    var $href;//anyURI
}
class gYearMonth{
    var $_;//gYearMonth
    var $id;//ID
    var $href;//anyURI
}
class gYear{
    var $_;//gYear
    var $id;//ID
    var $href;//anyURI
}
class gMonthDay{
    var $_;//gMonthDay
    var $id;//ID
    var $href;//anyURI
}
class gDay{
    var $_;//gDay
    var $id;//ID
    var $href;//anyURI
}
class gMonth{
    var $_;//gMonth
    var $id;//ID
    var $href;//anyURI
}
class boolean{
    var $_;//boolean
    var $id;//ID
    var $href;//anyURI
}
class base64Binary{
    var $_;//base64Binary
    var $id;//ID
    var $href;//anyURI
}
class hexBinary{
    var $_;//hexBinary
    var $id;//ID
    var $href;//anyURI
}
class float{
    var $_;//float
    var $id;//ID
    var $href;//anyURI
}
class double{
    var $_;//double
    var $id;//ID
    var $href;//anyURI
}
class anyURI{
    var $_;//anyURI
    var $id;//ID
    var $href;//anyURI
}
class QName{
    var $_;//QName
    var $id;//ID
    var $href;//anyURI
}
class string{
    var $_;//string
    var $id;//ID
    var $href;//anyURI
}
class normalizedString{
    var $_;//normalizedString
    var $id;//ID
    var $href;//anyURI
}
class token{
    var $_;//token
    var $id;//ID
    var $href;//anyURI
}
class language{
    var $_;//language
    var $id;//ID
    var $href;//anyURI
}
class Name{
    var $_;//Name
    var $id;//ID
    var $href;//anyURI
}
class NMTOKEN{
    var $_;//NMTOKEN
    var $id;//ID
    var $href;//anyURI
}
class NCName{
    var $_;//NCName
    var $id;//ID
    var $href;//anyURI
}
class NMTOKENS{
    var $_;//NMTOKENS
    var $id;//ID
    var $href;//anyURI
}
class ID{
    var $_;//ID
    var $id;//ID
    var $href;//anyURI
}
class IDREF{
    var $_;//IDREF
    var $id;//ID
    var $href;//anyURI
}
class ENTITY{
    var $_;//ENTITY
    var $id;//ID
    var $href;//anyURI
}
class IDREFS{
    var $_;//IDREFS
    var $id;//ID
    var $href;//anyURI
}
class ENTITIES{
    var $_;//ENTITIES
    var $id;//ID
    var $href;//anyURI
}
class decimal{
    var $_;//decimal
    var $id;//ID
    var $href;//anyURI
}
class integer{
    var $_;//integer
    var $id;//ID
    var $href;//anyURI
}
class nonPositiveInteger{
    var $_;//nonPositiveInteger
    var $id;//ID
    var $href;//anyURI
}
class negativeInteger{
    var $_;//negativeInteger
    var $id;//ID
    var $href;//anyURI
}
class long{
    var $_;//long
    var $id;//ID
    var $href;//anyURI
}
class int{
    var $_;//int
    var $id;//ID
    var $href;//anyURI
}
class short{
    var $_;//short
    var $id;//ID
    var $href;//anyURI
}
class byte{
    var $_;//byte
    var $id;//ID
    var $href;//anyURI
}
class nonNegativeInteger{
    var $_;//nonNegativeInteger
    var $id;//ID
    var $href;//anyURI
}
class unsignedLong{
    var $_;//unsignedLong
    var $id;//ID
    var $href;//anyURI
}
class unsignedInt{
    var $_;//unsignedInt
    var $id;//ID
    var $href;//anyURI
}
class unsignedShort{
    var $_;//unsignedShort
    var $id;//ID
    var $href;//anyURI
}
class unsignedByte{
    var $_;//unsignedByte
    var $id;//ID
    var $href;//anyURI
}
class positiveInteger{
    var $_;//positiveInteger
    var $id;//ID
    var $href;//anyURI
}
class ArrayOfString{
    var $string;//string
}
class ArrayOfInt{
    var $integer;//integer
}
class Option{
    var $type;//string
    var $name;//string
    var $value;//string
}
class ArrayOfOption{
    var $Option;//Option
}
class MethodOptions{
    var $method;//string
    var $options;//ArrayOfOption
}
class ArrayOfMethodOptions{
    var $MethodOptions;//MethodOptions
}
class sms_listOptions{
    var $uuid;//string
}
class sms_listOptionsResponse{
    var $code;//integer
    var $msg;//ArrayOfMethodOptions
}
class SmsBlock{
    var $id;//int
    var $name;//string
    var $content;//string
}
class ArrayOfSmsBlock{
    var $SmsBlock;//SmsBlock
}
class SmsBlockContainer{
    var $id;//int
    var $name;//string
    var $type;//string
    var $defaultBlockId;//int
    var $blocks;//ArrayOfSmsBlock
}
class ArrayOfSmsBlockContainer{
    var $SmsBlockContainer;//SmsBlockContainer
}
class Sms{
    var $id;//int
    var $campaignId;//int
    var $name;//string
    var $fromName;//string
    var $plainText;//string
    var $enableUnicodeSupport;//boolean
    var $maxSmsMessages;//int
    var $createdBy;//string
    var $createdAt;//string
    var $modifiedBy;//string
    var $modifiedAt;//string
    var $textBlocks;//ArrayOfSmsBlockContainer
}
class sms_create{
    var $uuid;//string
}
class sms_createResponse{
    var $code;//integer
    var $msg;//Sms
}
class sms_delete{
    var $uuid;//string
    var $smsId;//int
}
class sms_deleteResponse{
    var $code;//integer
    var $msg;//boolean
}
class sms_sendToCustomer{
    var $uuid;//string
    var $smsId;//int
    var $customerId;//int
    var $manualOptions;//ArrayOfOption
    var $options;//ArrayOfOption
}
class sms_sendToCustomerResponse{
    var $code;//integer
    var $msg;//boolean
}
class sms_sendToCustomers{
    var $uuid;//string
    var $smsId;//int
    var $customerIds;//ArrayOfInt
    var $manualOptions;//ArrayOfOption
    var $options;//ArrayOfOption
}
class sms_sendToCustomersResponse{
    var $code;//integer
    var $msg;//boolean
}
class ArrayOfSms{
    var $Sms;//Sms
}
class sms_getAll{
    var $uuid;//string
}
class sms_getAllResponse{
    var $code;//integer
    var $msg;//ArrayOfSms
}
class sms_getById{
    var $uuid;//string
    var $smsId;//int
}
class sms_getByIdResponse{
    var $code;//integer
    var $msg;//Sms
}
class sms_insert{
    var $uuid;//string
    var $sms;//Sms
}
class sms_insertResponse{
    var $code;//integer
    var $msg;//Sms
}
class sms_getByObject{
    var $uuid;//string
    var $sms;//Sms
}
class sms_getByObjectResponse{
    var $code;//integer
    var $msg;//ArrayOfSms
}
class sms_sendToProfile{
    var $uuid;//string
    var $smsId;//int
    var $profileId;//int
}
class sms_sendToProfileResponse{
    var $code;//integer
    var $msg;//boolean
}
class sms_hasChanged{
    var $uuid;//string
    var $broadcastId;//int
}
class sms_hasChangedResponse{
    var $code;//integer
    var $msg;//boolean
}
class sms_update{
    var $uuid;//string
    var $sms;//Sms
}
class sms_updateResponse{
    var $code;//integer
    var $msg;//Sms
}
class sms_upsert{
    var $uuid;//string
    var $sms;//Sms
}
class sms_upsertResponse{
    var $code;//integer
    var $msg;//Sms
}
class sms_sendToGroup{
    var $uuid;//string
    var $smsId;//int
    var $groupId;//int
    var $options;//ArrayOfOption
}
class sms_sendToGroupResponse{
    var $code;//integer
    var $msg;//boolean
}
class campaignObjectStatisticsOption_getCustomerSet{
    var $uuid;//string
    var $campaignObjectStatisiticsOptionId;//string
}
class campaignObjectStatisticsOption_getCustomerSetResponse{
    var $code;//integer
    var $msg;//int
}
class MagentoCategory{
    var $id;//int
    var $externalCategoryId;//int
    var $name;//string
}
class ArrayOfMagentoCategory{
    var $MagentoCategory;//MagentoCategory
}
class MagentoProduct{
    var $orderItemId;//int
    var $attributes;//ArrayOfOption
    var $id;//int
    var $externalProductId;//int
    var $sku;//string
    var $name;//string
    var $description;//string
    var $url;//string
    var $image;//string
    var $orderId;//int
    var $quantity;//int
    var $priceEx;//double
    var $price;//double
    var $discount;//double
    var $categories;//ArrayOfMagentoCategory
    var $related;//ArrayOfInt
    var $upSell;//ArrayOfInt
    var $crossSell;//ArrayOfInt
}
class ArrayOfMagentoProduct{
    var $MagentoProduct;//MagentoProduct
}
class MagentoAbandonedOrder{
    var $id;//int
    var $quoteId;//int
    var $storeview;//string
    var $storeviewId;//int
    var $customerId;//int
    var $subtotal;//double
    var $total;//double
    var $taxAmount;//double
    var $discount;//double
    var $currency;//string
    var $createDate;//int
    var $products;//ArrayOfMagentoProduct
}
class magentoAbandonedOrder_create{
    var $uuid;//string
}
class magentoAbandonedOrder_createResponse{
    var $code;//integer
    var $msg;//MagentoAbandonedOrder
}
class magentoAbandonedOrder_insert{
    var $uuid;//string
    var $order;//MagentoAbandonedOrder
}
class magentoAbandonedOrder_insertResponse{
    var $code;//integer
    var $msg;//MagentoAbandonedOrder
}
class Resource{
    var $id;//int
    var $type;//string
    var $status;//string
    var $size;//int
}
class resource_getById{
    var $uuid;//string
    var $resourceId;//int
}
class resource_getByIdResponse{
    var $code;//integer
    var $msg;//Resource
}
class resource_free{
    var $uuid;//string
    var $resourceId;//int
}
class resource_freeResponse{
    var $code;//integer
    var $msg;//boolean
}
class magentoProduct_upsert{
    var $uuid;//string
    var $product;//MagentoProduct
    var $abandoned;//boolean
}
class magentoProduct_upsertResponse{
    var $code;//integer
    var $msg;//MagentoProduct
}
class magentoProduct_create{
    var $uuid;//string
}
class magentoProduct_createResponse{
    var $code;//integer
    var $msg;//MagentoProduct
}
class EmailBlock{
    var $id;//int
    var $name;//string
    var $content;//string
}
class ArrayOfEmailBlock{
    var $EmailBlock;//EmailBlock
}
class EmailBlockContainer{
    var $id;//int
    var $name;//string
    var $type;//string
    var $defaultBlockId;//int
    var $blocks;//ArrayOfEmailBlock
}
class ArrayOfEmailBlockContainer{
    var $EmailBlockContainer;//EmailBlockContainer
}
class Email{
    var $defaultMailingType;//string
    var $folder;//string
    var $class;//string
    var $id;//int
    var $type;//string
    var $templateId;//int
    var $name;//string
    var $campaignId;//int
    var $fromAddress;//string
    var $fromName;//string
    var $replyToAddress;//string
    var $replyToName;//string
    var $subject;//string
    var $createdBy;//string
    var $createdAt;//string
    var $modifiedBy;//string
    var $modifiedAt;//string
    var $htmlContent;//string
    var $htmlBlocks;//ArrayOfEmailBlockContainer
    var $textContent;//string
}
class email_insert{
    var $uuid;//string
    var $email;//Email
}
class email_insertResponse{
    var $code;//integer
    var $msg;//Email
}
class email_update{
    var $uuid;//string
    var $email;//Email
}
class email_updateResponse{
    var $code;//integer
    var $msg;//Email
}
class email_upsert{
    var $uuid;//string
    var $email;//Email
}
class email_upsertResponse{
    var $code;//integer
    var $msg;//Email
}
class email_getById{
    var $uuid;//string
    var $emailId;//int
}
class email_getByIdResponse{
    var $code;//integer
    var $msg;//Email
}
class email_listOptions{
    var $uuid;//string
}
class email_listOptionsResponse{
    var $code;//integer
    var $msg;//ArrayOfMethodOptions
}
class email_sendToGroup{
    var $uuid;//string
    var $emailId;//int
    var $groupId;//int
    var $manualOptions;//ArrayOfOption
    var $options;//ArrayOfOption
}
class email_sendToGroupResponse{
    var $code;//integer
    var $msg;//boolean
}
class email_sendToProfile{
    var $uuid;//string
    var $emailId;//int
    var $profileId;//int
    var $manualOptions;//ArrayOfOption
    var $options;//ArrayOfOption
}
class email_sendToProfileResponse{
    var $code;//integer
    var $msg;//boolean
}
class email_sendToCustomer{
    var $uuid;//string
    var $emailId;//int
    var $customerId;//int
    var $manualOptions;//ArrayOfOption
    var $options;//ArrayOfOption
}
class email_sendToCustomerResponse{
    var $code;//integer
    var $msg;//boolean
}
class email_sendToCustomers{
    var $uuid;//string
    var $emailId;//int
    var $customerIds;//ArrayOfInt
    var $manualOptions;//ArrayOfOption
    var $options;//ArrayOfOption
}
class email_sendToCustomersResponse{
    var $code;//integer
    var $msg;//boolean
}
class ArrayOfEmail{
    var $Email;//Email
}
class email_getByObject{
    var $uuid;//string
    var $email;//Email
}
class email_getByObjectResponse{
    var $code;//integer
    var $msg;//ArrayOfEmail
}
class email_delete{
    var $uuid;//string
    var $emailId;//int
}
class email_deleteResponse{
    var $code;//integer
    var $msg;//boolean
}
class email_getAll{
    var $uuid;//string
}
class email_getAllResponse{
    var $code;//integer
    var $msg;//ArrayOfEmail
}
class email_hasChanged{
    var $uuid;//string
    var $broadcastId;//int
}
class email_hasChangedResponse{
    var $code;//integer
    var $msg;//boolean
}
class email_create{
    var $uuid;//string
}
class email_createResponse{
    var $code;//integer
    var $msg;//Email
}
class BrowserInformation{
    var $name;//string
    var $version;//string
    var $platform;//string
    var $country;//string
    var $httpAcceptCharset;//string
    var $httpAcceptLanguage;//string
    var $httpAcceptEncoding;//string
    var $httpAccept;//string
    var $httpUserAgent;//string
}
class Open{
    var $id;//int
    var $customerId;//int
    var $mailingId;//int
    var $openedAt;//string
    var $browserInformation;//BrowserInformation
}
class open_getById{
    var $uuid;//string
    var $openId;//int
}
class open_getByIdResponse{
    var $code;//integer
    var $msg;//Open
}
class openSet_getOpen{
    var $uuid;//string
    var $resourceId;//int
    var $index;//int
}
class openSet_getOpenResponse{
    var $code;//integer
    var $msg;//Open
}
class ArrayOfOpen{
    var $Open;//Open
}
class openSet_getOpens{
    var $uuid;//string
    var $resourceId;//int
    var $offset;//int
    var $size;//int
}
class openSet_getOpensResponse{
    var $code;//integer
    var $msg;//ArrayOfOpen
}
class openSet_getOpenIds{
    var $uuid;//string
    var $resourceId;//int
    var $offset;//int
    var $size;//int
}
class openSet_getOpenIdsResponse{
    var $code;//integer
    var $msg;//ArrayOfInt
}
class Group{
    var $id;//int
    var $parentId;//int
    var $name;//string
    var $description;//string
    var $createdBy;//string
    var $createdAt;//string
    var $modifiedBy;//string
    var $modifiedAt;//string
    var $countDate;//string
    var $customerCountRecursive;//int
    var $customerCount;//int
}
class CustomerOption{
    var $identifier;//string
    var $customerId;//int
    var $name;//string
    var $value;//string
}
class ArrayOfCustomerOption{
    var $CustomerOption;//CustomerOption
}
class Account{
    var $network;//string
    var $accountId;//string
}
class ArrayOfAccount{
    var $Account;//Account
}
class Customer{
    var $accounts;//ArrayOfAccount
    var $smsOptIn;//string
    var $optIn;//string
    var $id;//int
    var $title;//string
    var $lastname;//string
    var $firstname;//string
    var $middlename;//string
    var $prefix;//string
    var $suffix;//string
    var $initials;//string
    var $gender;//string
    var $maritalStatus;//string
    var $birthday;//string
    var $birthplace;//string
    var $address;//string
    var $address2;//string
    var $address3;//string
    var $addressNumber;//string
    var $addressNumberSuffix;//string
    var $zipCode;//string
    var $poBox;//string
    var $city;//string
    var $state;//string
    var $country;//string
    var $companyName;//string
    var $department;//string
    var $alternateAddress;//string
    var $alternateAddress2;//string
    var $alternateAddress3;//string
    var $alternateAddressNumber;//string
    var $alternateAddressNumberSuffix;//string
    var $alternateZipCode;//string
    var $alternateCity;//string
    var $alternateState;//string
    var $alternateCountry;//string
    var $contactMan;//string
    var $jobTitle;//string
    var $workPhone;//string
    var $workExtension;//string
    var $workMobile;//string
    var $homePhone;//string
    var $mobilePhone;//string
    var $faxNumber;//string
    var $emailAddress;//string
    var $alternateEmailAddress;//string
    var $emailType;//string
    var $mailStatus;//string
    var $softBounceCount;//int
    var $hardBounceCount;//int
    var $website;//string
    var $imageUrl;//string
    var $status;//string
    var $externalId;//string
    var $userName;//string
    var $password;//string
    var $createdBy;//string
    var $createdAt;//string
    var $modifiedBy;//string
    var $modifiedAt;//string
    var $options;//ArrayOfCustomerOption
}
class ArrayOfCustomer{
    var $Customer;//Customer
}
class group_addMembersInBulk{
    var $uuid;//string
    var $group;//Group
    var $customers;//ArrayOfCustomer
}
class group_addMembersInBulkResponse{
    var $code;//integer
    var $msg;//boolean
}
class GroupMembership{
    var $groupId;//int
    var $customerId;//int
    var $isMember;//boolean
    var $startedAt;//string
}
class group_hasMember{
    var $uuid;//string
    var $groupId;//int
    var $customerId;//int
    var $includeSubGroups;//boolean
}
class group_hasMemberResponse{
    var $code;//integer
    var $msg;//GroupMembership
}
class group_getById{
    var $uuid;//string
    var $groupId;//int
}
class group_getByIdResponse{
    var $code;//integer
    var $msg;//Group
}
class group_delete{
    var $uuid;//string
    var $groupId;//int
}
class group_deleteResponse{
    var $code;//integer
    var $msg;//boolean
}
class group_getMembers{
    var $uuid;//string
    var $groupId;//int
    var $recursive;//boolean
}
class group_getMembersResponse{
    var $code;//integer
    var $msg;//int
}
class group_update{
    var $uuid;//string
    var $group;//Group
}
class group_updateResponse{
    var $code;//integer
    var $msg;//Group
}
class group_move{
    var $uuid;//string
    var $group;//Group
    var $newParentId;//int
}
class group_moveResponse{
    var $code;//integer
    var $msg;//Group
}
class group_getParent{
    var $uuid;//string
    var $group;//Group
}
class group_getParentResponse{
    var $code;//integer
    var $msg;//Group
}
class group_create{
    var $uuid;//string
}
class group_createResponse{
    var $code;//integer
    var $msg;//Group
}
class group_insert{
    var $uuid;//string
    var $group;//Group
}
class group_insertResponse{
    var $code;//integer
    var $msg;//Group
}
class group_upsert{
    var $uuid;//string
    var $group;//Group
}
class group_upsertResponse{
    var $code;//integer
    var $msg;//Group
}
class ArrayOfGroup{
    var $Group;//Group
}
class group_getByObject{
    var $uuid;//string
    var $group;//Group
}
class group_getByObjectResponse{
    var $code;//integer
    var $msg;//ArrayOfGroup
}
class group_getAll{
    var $uuid;//string
}
class group_getAllResponse{
    var $code;//integer
    var $msg;//ArrayOfGroup
}
class group_getChildren{
    var $uuid;//string
    var $group;//Group
}
class group_getChildrenResponse{
    var $code;//integer
    var $msg;//ArrayOfGroup
}
class group_addMember{
    var $uuid;//string
    var $group;//Group
    var $customer;//Customer
}
class group_addMemberResponse{
    var $code;//integer
    var $msg;//boolean
}
class group_removeMember{
    var $uuid;//string
    var $group;//Group
    var $customer;//Customer
}
class group_removeMemberResponse{
    var $code;//integer
    var $msg;//boolean
}
class group_calculate{
    var $uuid;//string
}
class group_calculateResponse{
    var $code;//integer
    var $msg;//boolean
}
class MagentoCreditMemoItem{
    var $orderItemId;//int
    var $externalProductId;//string
    var $sku;//string
    var $name;//string
    var $price;//double
    var $priceInclTax;//double
    var $weeeTaxApplied;//string
    var $weeeTaxAppliedAmount;//double
    var $weeeTaxAppliedRowAmount;//double
    var $weeeTaxDisposition;//string
    var $weeeTaxRowDisposition;//string
    var $quantity;//int
    var $rowTotal;//double
    var $rowTotalInclTax;//double
    var $taxAmount;//double
    var $hiddenTaxAmount;//double
    var $backToStock;//int
    var $createdAt;//string
    var $updatedAt;//string
    var $basePrice;//double
    var $baseCost;//double
    var $basePriceInclTax;//double
    var $baseWeeeTaxAppliedAmount;//double
    var $baseWeeeTaxAppliedRowAmount;//double
    var $baseWeeeTaxAppliedRowAmnt;//double
    var $baseWeeeTaxDisposition;//string
    var $baseWeeeTaxRowDisposition;//string
    var $baseRowTotal;//double
    var $baseRowTotalInclTax;//double
    var $baseTaxAmount;//double
    var $baseHiddenTaxAmount;//double
}
class ArrayOfMagentoCreditMemoItem{
    var $MagentoCreditMemoItem;//MagentoCreditMemoItem
}
class MagentoCreditMemo{
    var $id;//int
    var $externalOrderId;//string
    var $customerId;//int
    var $globalCurrencyCode;//string
    var $storeCurrencyCode;//string
    var $orderCurrencyCode;//string
    var $storeToBaseRate;//double
    var $storeToOrderRate;//double
    var $discountDescription;//string
    var $shippingTaxAmount;//double
    var $totalQuantity;//int
    var $adjustmentPositive;//string
    var $adjustmentNegative;//string
    var $subtotal;//double
    var $subtotalInclTax;//double
    var $grandTotal;//double
    var $taxAmount;//double
    var $discountAmount;//double
    var $shippingAmount;//double
    var $shippingInclTax;//double
    var $adjustment;//string
    var $hiddenTaxAmount;//double
    var $offlineRequested;//string
    var $doTransaction;//boolean
    var $state;//string
    var $incrementId;//int
    var $createdAt;//string
    var $updatedAt;//string
    var $baseCurrencyCode;//string
    var $baseToGlobalRate;//double
    var $baseToOrderRate;//double
    var $baseShippingTaxAmount;//double
    var $baseShippingAmount;//double
    var $baseAdjustmentPositive;//double
    var $baseAdjustmentNegative;//double
    var $baseSubtotal;//double
    var $baseSubtotalInclTax;//double
    var $baseGrandTotal;//double
    var $baseTaxAmount;//double
    var $baseDiscountAmount;//double
    var $baseShippingInclTax;//double
    var $baseCost;//double
    var $baseAdjustment;//double
    var $baseHiddenTaxAmount;//double
    var $items;//ArrayOfMagentoCreditMemoItem
}
class magentoCreditMemo_insert{
    var $uuid;//string
    var $creditmemo;//MagentoCreditMemo
}
class magentoCreditMemo_insertResponse{
    var $code;//integer
    var $msg;//MagentoCreditMemo
}
class campaign_executeAsync{
    var $uuid;//string
    var $campaignId;//int
    var $options;//ArrayOfOption
}
class campaign_executeAsyncResponse{
    var $code;//integer
    var $msg;//boolean
}
class campaign_getMembers{
    var $uuid;//string
    var $campaignId;//int
}
class campaign_getMembersResponse{
    var $code;//integer
    var $msg;//int
}
class campaign_hasMember{
    var $uuid;//string
    var $campaignId;//int
    var $customerId;//int
}
class campaign_hasMemberResponse{
    var $code;//integer
    var $msg;//boolean
}
class campaign_addMember{
    var $uuid;//string
    var $campaignId;//int
    var $customerId;//int
}
class campaign_addMemberResponse{
    var $code;//integer
    var $msg;//boolean
}
class campaign_removeMember{
    var $uuid;//string
    var $campaignId;//int
    var $customerId;//int
}
class campaign_removeMemberResponse{
    var $code;//integer
    var $msg;//boolean
}
class campaign_execute{
    var $uuid;//string
    var $campaignId;//int
    var $options;//ArrayOfOption
}
class campaign_executeResponse{
    var $code;//integer
    var $msg;//boolean
}
class Bounce{
    var $id;//int
    var $customerId;//int
    var $mailingId;//int
    var $bouncedAt;//string
    var $rule;//string
    var $category;//string
}
class bounceSet_getBounce{
    var $uuid;//string
    var $resourceId;//int
    var $index;//int
}
class bounceSet_getBounceResponse{
    var $code;//integer
    var $msg;//Bounce
}
class ArrayOfBounce{
    var $Bounce;//Bounce
}
class bounceSet_getBounces{
    var $uuid;//string
    var $resourceId;//int
    var $offset;//int
    var $size;//int
}
class bounceSet_getBouncesResponse{
    var $code;//integer
    var $msg;//ArrayOfBounce
}
class bounceSet_getBounceIds{
    var $uuid;//string
    var $resourceId;//int
    var $offset;//int
    var $size;//int
}
class bounceSet_getBounceIdsResponse{
    var $code;//integer
    var $msg;//ArrayOfInt
}
class Tag{
    var $id;//int
    var $name;//string
    var $weight;//int
}
class ArrayOfTag{
    var $Tag;//Tag
}
class MailingLink{
    var $mailingId;//int
    var $id;//int
    var $url;//string
    var $description;//string
    var $track;//boolean
    var $source;//boolean
    var $tags;//ArrayOfTag
    var $google_source;//string
    var $google_medium;//string
    var $google_term;//string
    var $google_content;//string
    var $google_campaign;//string
    var $sitestat_campaign;//string
    var $sitestat_source;//string
    var $sitestat_mchannel;//string
    var $sitestat_linkname;//string
    var $sitestat_fee;//string
}
class Click{
    var $link;//MailingLink
    var $id;//int
    var $customerId;//int
    var $mailingId;//int
    var $clickedAt;//string
    var $browserInformation;//BrowserInformation
}
class clickSet_getClick{
    var $uuid;//string
    var $resourceId;//int
    var $index;//int
}
class clickSet_getClickResponse{
    var $code;//integer
    var $msg;//Click
}
class ArrayOfClick{
    var $Click;//Click
}
class clickSet_getClicks{
    var $uuid;//string
    var $resourceId;//int
    var $offset;//int
    var $size;//int
}
class clickSet_getClicksResponse{
    var $code;//integer
    var $msg;//ArrayOfClick
}
class clickSet_getClickIds{
    var $uuid;//string
    var $resourceId;//int
    var $offset;//int
    var $size;//int
}
class clickSet_getClickIdsResponse{
    var $code;//integer
    var $msg;//ArrayOfInt
}
class magentoCategory_create{
    var $uuid;//string
}
class magentoCategory_createResponse{
    var $code;//integer
    var $msg;//MagentoCategory
}
class magentoCategory_upsert{
    var $uuid;//string
    var $category;//MagentoCategory
}
class magentoCategory_upsertResponse{
    var $code;//integer
    var $msg;//MagentoCategory
}
class customerSet_getCustomer{
    var $uuid;//string
    var $resourceId;//int
    var $index;//int
}
class customerSet_getCustomerResponse{
    var $code;//integer
    var $msg;//Customer
}
class customerSet_getCustomers{
    var $uuid;//string
    var $resourceId;//int
    var $offset;//int
    var $size;//int
}
class customerSet_getCustomersResponse{
    var $code;//integer
    var $msg;//ArrayOfCustomer
}
class customerSet_getCustomerIds{
    var $uuid;//string
    var $resourceId;//int
    var $offset;//int
    var $size;//int
}
class customerSet_getCustomerIdsResponse{
    var $code;//integer
    var $msg;//ArrayOfInt
}
class MagentoOrder{
    var $quoteId;//string
    var $subtotalInclTax;//double
    var $couponCode;//string
    var $totalQtyOrdered;//int
    var $weight;//double
    var $taxString;//string
    var $shippingInclTax;//double
    var $discountDescription;//string
    var $shippingDiscountAmount;//double
    var $totalItemCount;//int
    var $status;//string
    var $externalOrderId;//string
    var $note;//string
    var $id;//int
    var $storeview;//string
    var $customerId;//int
    var $subtotal;//double
    var $total;//double
    var $taxAmount;//double
    var $shippingCost;//double
    var $discount;//double
    var $currency;//string
    var $rewardPoints;//int
    var $billingFirstname;//string
    var $billingMiddlename;//string
    var $billingTitle;//string
    var $billingLastname;//string
    var $billingAddress;//string
    var $billingZipCode;//string
    var $billingPoBox;//int
    var $billingCity;//string
    var $billingState;//string
    var $billingCountry;//string
    var $billingCompanyName;//string
    var $billingPhone;//string
    var $billingEmailAddress;//string
    var $shippingFirstname;//string
    var $shippingMiddlename;//string
    var $shippingTitle;//string
    var $shippingLastname;//string
    var $shippingAddress;//string
    var $shippingZipCode;//string
    var $shippingPoBox;//int
    var $shippingCity;//string
    var $shippingState;//string
    var $shippingCountry;//string
    var $shippingCompanyName;//string
    var $shippingPhone;//string
    var $paymentMethod;//string
    var $shippingMethod;//string
    var $orderDate;//int
    var $products;//ArrayOfMagentoProduct
    var $billingPrefix;//string
    var $billingSuffix;//string
    var $shippingPrefix;//string
    var $shippingSuffix;//string
}
class magentoOrder_update{
    var $uuid;//string
    var $order;//MagentoOrder
}
class magentoOrder_updateResponse{
    var $code;//integer
    var $msg;//boolean
}
class magentoOrder_create{
    var $uuid;//string
}
class magentoOrder_createResponse{
    var $code;//integer
    var $msg;//MagentoOrder
}
class magentoOrder_insert{
    var $uuid;//string
    var $order;//MagentoOrder
}
class magentoOrder_insertResponse{
    var $code;//integer
    var $msg;//MagentoOrder
}
class ArrayOfMagentoOrder{
    var $MagentoOrder;//MagentoOrder
}
class magentoOrder_insertBulk{
    var $uuid;//string
    var $orders;//ArrayOfMagentoOrder
}
class magentoOrder_insertBulkResponse{
    var $code;//integer
    var $msg;//ArrayOfMagentoOrder
}
class CampaignObjectStatisticsOption{
    var $id;//string
    var $name;//string
    var $value;//string
    var $hasCustomerSet;//boolean
}
class ArrayOfCampaignObjectStatisticsOption{
    var $CampaignObjectStatisticsOption;//CampaignObjectStatisticsOption
}
class CampaignObjectStatistics{
    var $campaignId;//int
    var $campaignObjectId;//int
    var $options;//ArrayOfCampaignObjectStatisticsOption
}
class campaignObjectStatistics_getByCampaignObjectId{
    var $uuid;//string
    var $campaignObjectId;//string
}
class campaignObjectStatistics_getByCampaignObjectIdResponse{
    var $code;//integer
    var $msg;//CampaignObjectStatistics
}
class bounce_getById{
    var $uuid;//string
    var $bounceId;//int
}
class bounce_getByIdResponse{
    var $code;//integer
    var $msg;//Bounce
}
class ArrayOfMailingLink{
    var $MailingLink;//MailingLink
}
class Mailing{
    var $plannedFor;//string
    var $uniqueClicks;//int
    var $uniqueOpens;//int
    var $received;//int
    var $campaignId;//int
    var $campaignName;//string
    var $id;//int
    var $contentName;//string
    var $sourceType;//string
    var $sourceName;//string
    var $customers;//int
    var $throttle;//int
    var $status;//string
    var $links;//ArrayOfMailingLink
    var $type;//string
    var $description;//string
    var $startedAt;//string
    var $endedAt;//string
    var $bounces;//int
    var $opens;//int
    var $clicks;//int
    var $complaints;//int
}
class mailing_getComplaintSet{
    var $uuid;//string
    var $mailing;//Mailing
}
class mailing_getComplaintSetResponse{
    var $code;//integer
    var $msg;//int
}
class mailing_getDeliverySet{
    var $uuid;//string
    var $mailing;//Mailing
}
class mailing_getDeliverySetResponse{
    var $code;//integer
    var $msg;//int
}
class mailing_getByCampaignObjectId{
    var $uuid;//string
    var $campaignObjectId;//string
}
class mailing_getByCampaignObjectIdResponse{
    var $code;//integer
    var $msg;//int
}
class mailing_getByDate{
    var $uuid;//string
    var $fromDate;//string
    var $toDate;//string
}
class mailing_getByDateResponse{
    var $code;//integer
    var $msg;//int
}
class mailing_getAll{
    var $uuid;//string
}
class mailing_getAllResponse{
    var $code;//integer
    var $msg;//int
}
class mailing_getById{
    var $uuid;//string
    var $mailingId;//int
}
class mailing_getByIdResponse{
    var $code;//integer
    var $msg;//Mailing
}
class mailing_getQuickmails{
    var $uuid;//string
}
class mailing_getQuickmailsResponse{
    var $code;//integer
    var $msg;//int
}
class mailing_getQuickmailsByDate{
    var $uuid;//string
    var $fromDate;//string
    var $toDate;//string
}
class mailing_getQuickmailsByDateResponse{
    var $code;//integer
    var $msg;//int
}
class mailing_getOpenSet{
    var $uuid;//string
    var $mailing;//Mailing
}
class mailing_getOpenSetResponse{
    var $code;//integer
    var $msg;//int
}
class mailing_getBounceSet{
    var $uuid;//string
    var $mailing;//Mailing
}
class mailing_getBounceSetResponse{
    var $code;//integer
    var $msg;//int
}
class magento_customerInsertBulkUnique{
    var $uuid;//string
    var $customers;//ArrayOfCustomer
    var $websiteId;//int
    var $websiteName;//string
}
class magento_customerInsertBulkUniqueResponse{
    var $code;//integer
    var $msg;//ArrayOfCustomer
}
class magento_customerInsertUnique{
    var $uuid;//string
    var $customer;//Customer
    var $websiteId;//int
}
class magento_customerInsertUniqueResponse{
    var $code;//integer
    var $msg;//Customer
}
class magento_getCampaigns{
    var $uuid;//string
}
class magento_getCampaignsResponse{
    var $code;//integer
    var $msg;//ArrayOfOption
}
class magento_getAvailableCustomerFields{
    var $uuid;//string
    var $lang;//string
}
class magento_getAvailableCustomerFieldsResponse{
    var $code;//integer
    var $msg;//ArrayOfOption
}
class magento_testConnection{
    var $uuid;//string
    var $wsdl;//string
    var $username;//string
    var $password;//string
}
class magento_testConnectionResponse{
    var $code;//integer
    var $msg;//boolean
}
class magento_executeAbandonedCart{
    var $uuid;//string
    var $customerIds;//ArrayOfInt
}
class magento_executeAbandonedCartResponse{
    var $code;//integer
    var $msg;//int
}
class MagentoEmail{
    var $folder;//string
    var $class;//string
    var $id;//int
    var $type;//string
    var $templateId;//int
    var $name;//string
    var $campaignId;//int
    var $fromAddress;//string
    var $fromName;//string
    var $replyToAddress;//string
    var $replyToName;//string
    var $subject;//string
    var $createdBy;//string
    var $createdAt;//string
    var $modifiedBy;//string
    var $modifiedAt;//string
    var $htmlContent;//string
    var $htmlBlocks;//ArrayOfEmailBlockContainer
    var $textContent;//string
}
class magentoEmail_insert{
    var $uuid;//string
    var $email;//MagentoEmail
    var $campaignName;//string
}
class magentoEmail_insertResponse{
    var $code;//integer
    var $msg;//int
}
class mailingSet_getMailing{
    var $uuid;//string
    var $resourceId;//int
    var $index;//int
}
class mailingSet_getMailingResponse{
    var $code;//integer
    var $msg;//Mailing
}
class ArrayOfMailing{
    var $Mailing;//Mailing
}
class mailingSet_getMailings{
    var $uuid;//string
    var $resourceId;//int
    var $offset;//int
    var $size;//int
}
class mailingSet_getMailingsResponse{
    var $code;//integer
    var $msg;//ArrayOfMailing
}
class mailingSet_getMailingIds{
    var $uuid;//string
    var $resourceId;//int
    var $offset;//int
    var $size;//int
}
class mailingSet_getMailingIdsResponse{
    var $code;//integer
    var $msg;//ArrayOfInt
}
class Complaint{
    var $feedbackloop;//string
    var $id;//int
    var $customerId;//int
    var $mailingId;//int
    var $complaintAt;//string
}
class Delivery{
    var $id;//string
    var $status;//string
    var $customer;//Customer
    var $mailingId;//int
    var $deliveryDate;//string
    var $firstOpenDate;//string
    var $lastOpenDate;//string
    var $firstClickDate;//string
    var $lastClickDate;//string
    var $opens;//ArrayOfOpen
    var $clicks;//ArrayOfClick
    var $bounce;//Bounce
    var $complaint;//Complaint
}
class deliverySet_getDelivery{
    var $uuid;//string
    var $resourceId;//int
    var $index;//int
}
class deliverySet_getDeliveryResponse{
    var $code;//integer
    var $msg;//Delivery
}
class ArrayOfDelivery{
    var $Delivery;//Delivery
}
class deliverySet_getDeliveries{
    var $uuid;//string
    var $resourceId;//int
    var $offset;//int
    var $size;//int
}
class deliverySet_getDeliveriesResponse{
    var $code;//integer
    var $msg;//ArrayOfDelivery
}
class MagentoShipment{
    var $id;//int
    var $externalShipmentId;//string
    var $externalOrderId;//string
    var $storeview;//string
    var $customerId;//int
    var $billingFirstname;//string
    var $billingMiddlename;//string
    var $billingPrefix;//string
    var $billingSuffix;//string
    var $billingLastname;//string
    var $billingAddress;//string
    var $billingZipCode;//string
    var $billingPoBox;//int
    var $billingCity;//string
    var $billingState;//string
    var $billingCountry;//string
    var $billingCompanyName;//string
    var $billingPhone;//string
    var $billingEmailAddress;//string
    var $shippingFirstname;//string
    var $shippingMiddlename;//string
    var $shippingPrefix;//string
    var $shippingSuffix;//string
    var $shippingLastname;//string
    var $shippingAddress;//string
    var $shippingZipCode;//string
    var $shippingPoBox;//int
    var $shippingCity;//string
    var $shippingState;//string
    var $shippingCountry;//string
    var $shippingCompanyName;//string
    var $shippingPhone;//string
    var $shippingDate;//int
    var $products;//ArrayOfMagentoProduct
}
class magentoShipment_create{
    var $uuid;//string
}
class magentoShipment_createResponse{
    var $code;//integer
    var $msg;//MagentoShipment
}
class magentoShipment_insert{
    var $uuid;//string
    var $shipment;//MagentoShipment
}
class magentoShipment_insertResponse{
    var $code;//integer
    var $msg;//MagentoShipment
}
class click_getById{
    var $uuid;//string
    var $clickId;//int
}
class click_getByIdResponse{
    var $code;//integer
    var $msg;//Click
}
class mailingLink_getClickSet{
    var $uuid;//string
    var $mailingLink;//MailingLink
}
class mailingLink_getClickSetResponse{
    var $code;//integer
    var $msg;//int
}
class CampaignStatistics{
    var $smsableCustomers;//int
    var $uniqueCustomers;//int
    var $mailableCustomers;//int
    var $uniqueEmailAddresses;//int
    var $uniqueMobilePhoneNumbers;//int
}
class campaignStatistics_getByCampaignId{
    var $uuid;//string
    var $campaignId;//int
}
class campaignStatistics_getByCampaignIdResponse{
    var $code;//integer
    var $msg;//CampaignStatistics
}
class campaignStatistics_getCustomerSet{
    var $uuid;//string
    var $campaignId;//int
}
class campaignStatistics_getCustomerSetResponse{
    var $code;//integer
    var $msg;//int
}
class complaintSet_getComplaint{
    var $uuid;//string
    var $resourceId;//int
    var $index;//int
}
class complaintSet_getComplaintResponse{
    var $code;//integer
    var $msg;//Complaint
}
class ArrayOfComplaint{
    var $Complaint;//Complaint
}
class complaintSet_getComplaints{
    var $uuid;//string
    var $resourceId;//int
    var $offset;//int
    var $size;//int
}
class complaintSet_getComplaintsResponse{
    var $code;//integer
    var $msg;//ArrayOfComplaint
}
class complaintSet_getComplaintIds{
    var $uuid;//string
    var $resourceId;//int
    var $offset;//int
    var $size;//int
}
class complaintSet_getComplaintIdsResponse{
    var $code;//integer
    var $msg;//ArrayOfInt
}
class account_addToCustomer{
    var $uuid;//string
    var $customerId;//int
    var $accountId;//string
    var $network;//string
}
class account_addToCustomerResponse{
    var $code;//integer
    var $msg;//boolean
}
class account_deleteFromCustomer{
    var $uuid;//string
    var $customerId;//int
    var $accountId;//string
    var $network;//string
}
class account_deleteFromCustomerResponse{
    var $code;//integer
    var $msg;//boolean
}
class customer_insertBulkUnique{
    var $uuid;//string
    var $customers;//ArrayOfCustomer
    var $uniqueCustomerFields;//ArrayOfString
    var $uniqueOptionFields;//ArrayOfString
}
class customer_insertBulkUniqueResponse{
    var $code;//integer
    var $msg;//ArrayOfCustomer
}
class customer_create{
    var $uuid;//string
}
class customer_createResponse{
    var $code;//integer
    var $msg;//Customer
}
class customer_insert{
    var $uuid;//string
    var $customer;//Customer
}
class customer_insertResponse{
    var $code;//integer
    var $msg;//Customer
}
class customer_update{
    var $uuid;//string
    var $customer;//Customer
}
class customer_updateResponse{
    var $code;//integer
    var $msg;//Customer
}
class customer_insertUnique{
    var $uuid;//string
    var $customer;//Customer
    var $uniqueCustomerFields;//ArrayOfString
    var $uniqueOptionFields;//ArrayOfString
}
class customer_insertUniqueResponse{
    var $code;//integer
    var $msg;//Customer
}
class customer_getById{
    var $uuid;//string
    var $customerId;//int
}
class customer_getByIdResponse{
    var $code;//integer
    var $msg;//Customer
}
class customer_getByAccountId{
    var $uuid;//string
    var $accountId;//string
    var $network;//string
}
class customer_getByAccountIdResponse{
    var $code;//integer
    var $msg;//Customer
}
class customer_getGroups{
    var $uuid;//string
    var $customerId;//int
}
class customer_getGroupsResponse{
    var $code;//integer
    var $msg;//ArrayOfGroup
}
class customer_getAll{
    var $uuid;//string
}
class customer_getAllResponse{
    var $code;//integer
    var $msg;//int
}
class customer_getByObject{
    var $uuid;//string
    var $customer;//Customer
}
class customer_getByObjectResponse{
    var $code;//integer
    var $msg;//int
}
class customer_getByEmailAddress{
    var $uuid;//string
    var $emailAddress;//string
}
class customer_getByEmailAddressResponse{
    var $code;//integer
    var $msg;//ArrayOfCustomer
}
class customer_getByMobilePhone{
    var $uuid;//string
    var $mobilePhone;//string
}
class customer_getByMobilePhoneResponse{
    var $code;//integer
    var $msg;//ArrayOfCustomer
}
class customer_getByExternalId{
    var $uuid;//string
    var $externalId;//string
}
class customer_getByExternalIdResponse{
    var $code;//integer
    var $msg;//ArrayOfCustomer
}
class customer_getByUserNameAndPassword{
    var $uuid;//string
    var $userName;//string
    var $password;//string
}
class customer_getByUserNameAndPasswordResponse{
    var $code;//integer
    var $msg;//ArrayOfCustomer
}
class customer_delete{
    var $uuid;//string
    var $customer;//Customer
}
class customer_deleteResponse{
    var $code;//integer
    var $msg;//boolean
}
class customer_getTotalNumberOfCustomers{
    var $uuid;//string
}
class customer_getTotalNumberOfCustomersResponse{
    var $code;//integer
    var $msg;//int
}
class customer_upsert{
    var $uuid;//string
    var $customer;//Customer
}
class customer_upsertResponse{
    var $code;//integer
    var $msg;//Customer
}
class conversionTracking_track{
    var $uuid;//string
    var $keywords;//ArrayOfOption
    var $id;//string
}
class conversionTracking_trackResponse{
    var $code;//integer
    var $msg;//boolean
}
class clangAPI
{
    var $soapClient;

    private static $classmap = array(
    'Struct'=>'Struct'
    ,'duration'=>'duration'
    ,'NOTATION'=>'NOTATION'
    ,'time'=>'time'
    ,'date'=>'date'
    ,'gYearMonth'=>'gYearMonth'
    ,'gYear'=>'gYear'
    ,'gMonthDay'=>'gMonthDay'
    ,'gDay'=>'gDay'
    ,'gMonth'=>'gMonth'
    ,'boolean'=>'boolean'
    ,'base64Binary'=>'base64Binary'
    ,'hexBinary'=>'hexBinary'
    ,'float'=>'float'
    ,'double'=>'double'
    ,'anyURI'=>'anyURI'
    ,'QName'=>'QName'
    ,'string'=>'string'
    ,'normalizedString'=>'normalizedString'
    ,'token'=>'token'
    ,'language'=>'language'
    ,'Name'=>'Name'
    ,'NMTOKEN'=>'NMTOKEN'
    ,'NCName'=>'NCName'
    ,'NMTOKENS'=>'NMTOKENS'
    ,'ID'=>'ID'
    ,'IDREF'=>'IDREF'
    ,'ENTITY'=>'ENTITY'
    ,'IDREFS'=>'IDREFS'
    ,'ENTITIES'=>'ENTITIES'
    ,'decimal'=>'decimal'
    ,'integer'=>'integer'
    ,'nonPositiveInteger'=>'nonPositiveInteger'
    ,'negativeInteger'=>'negativeInteger'
    ,'long'=>'long'
    ,'int'=>'int'
    ,'short'=>'short'
    ,'byte'=>'byte'
    ,'nonNegativeInteger'=>'nonNegativeInteger'
    ,'unsignedLong'=>'unsignedLong'
    ,'unsignedInt'=>'unsignedInt'
    ,'unsignedShort'=>'unsignedShort'
    ,'unsignedByte'=>'unsignedByte'
    ,'positiveInteger'=>'positiveInteger'
    ,'ArrayOfString'=>'ArrayOfString'
    ,'ArrayOfInt'=>'ArrayOfInt'
    ,'Option'=>'Option'
    ,'ArrayOfOption'=>'ArrayOfOption'
    ,'MethodOptions'=>'MethodOptions'
    ,'ArrayOfMethodOptions'=>'ArrayOfMethodOptions'
    ,'sms_listOptions'=>'sms_listOptions'
    ,'sms_listOptionsResponse'=>'sms_listOptionsResponse'
    ,'SmsBlock'=>'SmsBlock'
    ,'ArrayOfSmsBlock'=>'ArrayOfSmsBlock'
    ,'SmsBlockContainer'=>'SmsBlockContainer'
    ,'ArrayOfSmsBlockContainer'=>'ArrayOfSmsBlockContainer'
    ,'Sms'=>'Sms'
    ,'sms_create'=>'sms_create'
    ,'sms_createResponse'=>'sms_createResponse'
    ,'sms_delete'=>'sms_delete'
    ,'sms_deleteResponse'=>'sms_deleteResponse'
    ,'sms_sendToCustomer'=>'sms_sendToCustomer'
    ,'sms_sendToCustomerResponse'=>'sms_sendToCustomerResponse'
    ,'sms_sendToCustomers'=>'sms_sendToCustomers'
    ,'sms_sendToCustomersResponse'=>'sms_sendToCustomersResponse'
    ,'ArrayOfSms'=>'ArrayOfSms'
    ,'sms_getAll'=>'sms_getAll'
    ,'sms_getAllResponse'=>'sms_getAllResponse'
    ,'sms_getById'=>'sms_getById'
    ,'sms_getByIdResponse'=>'sms_getByIdResponse'
    ,'sms_insert'=>'sms_insert'
    ,'sms_insertResponse'=>'sms_insertResponse'
    ,'sms_getByObject'=>'sms_getByObject'
    ,'sms_getByObjectResponse'=>'sms_getByObjectResponse'
    ,'sms_sendToProfile'=>'sms_sendToProfile'
    ,'sms_sendToProfileResponse'=>'sms_sendToProfileResponse'
    ,'sms_hasChanged'=>'sms_hasChanged'
    ,'sms_hasChangedResponse'=>'sms_hasChangedResponse'
    ,'sms_update'=>'sms_update'
    ,'sms_updateResponse'=>'sms_updateResponse'
    ,'sms_upsert'=>'sms_upsert'
    ,'sms_upsertResponse'=>'sms_upsertResponse'
    ,'sms_sendToGroup'=>'sms_sendToGroup'
    ,'sms_sendToGroupResponse'=>'sms_sendToGroupResponse'
    ,'campaignObjectStatisticsOption_getCustomerSet'=>'campaignObjectStatisticsOption_getCustomerSet'
    ,'campaignObjectStatisticsOption_getCustomerSetResponse'=>'campaignObjectStatisticsOption_getCustomerSetResponse'
    ,'MagentoCategory'=>'MagentoCategory'
    ,'ArrayOfMagentoCategory'=>'ArrayOfMagentoCategory'
    ,'MagentoProduct'=>'MagentoProduct'
    ,'ArrayOfMagentoProduct'=>'ArrayOfMagentoProduct'
    ,'MagentoAbandonedOrder'=>'MagentoAbandonedOrder'
    ,'magentoAbandonedOrder_create'=>'magentoAbandonedOrder_create'
    ,'magentoAbandonedOrder_createResponse'=>'magentoAbandonedOrder_createResponse'
    ,'magentoAbandonedOrder_insert'=>'magentoAbandonedOrder_insert'
    ,'magentoAbandonedOrder_insertResponse'=>'magentoAbandonedOrder_insertResponse'
    ,'Resource'=>'Resource'
    ,'resource_getById'=>'resource_getById'
    ,'resource_getByIdResponse'=>'resource_getByIdResponse'
    ,'resource_free'=>'resource_free'
    ,'resource_freeResponse'=>'resource_freeResponse'
    ,'magentoProduct_upsert'=>'magentoProduct_upsert'
    ,'magentoProduct_upsertResponse'=>'magentoProduct_upsertResponse'
    ,'magentoProduct_create'=>'magentoProduct_create'
    ,'magentoProduct_createResponse'=>'magentoProduct_createResponse'
    ,'EmailBlock'=>'EmailBlock'
    ,'ArrayOfEmailBlock'=>'ArrayOfEmailBlock'
    ,'EmailBlockContainer'=>'EmailBlockContainer'
    ,'ArrayOfEmailBlockContainer'=>'ArrayOfEmailBlockContainer'
    ,'Email'=>'Email'
    ,'email_insert'=>'email_insert'
    ,'email_insertResponse'=>'email_insertResponse'
    ,'email_update'=>'email_update'
    ,'email_updateResponse'=>'email_updateResponse'
    ,'email_upsert'=>'email_upsert'
    ,'email_upsertResponse'=>'email_upsertResponse'
    ,'email_getById'=>'email_getById'
    ,'email_getByIdResponse'=>'email_getByIdResponse'
    ,'email_listOptions'=>'email_listOptions'
    ,'email_listOptionsResponse'=>'email_listOptionsResponse'
    ,'email_sendToGroup'=>'email_sendToGroup'
    ,'email_sendToGroupResponse'=>'email_sendToGroupResponse'
    ,'email_sendToProfile'=>'email_sendToProfile'
    ,'email_sendToProfileResponse'=>'email_sendToProfileResponse'
    ,'email_sendToCustomer'=>'email_sendToCustomer'
    ,'email_sendToCustomerResponse'=>'email_sendToCustomerResponse'
    ,'email_sendToCustomers'=>'email_sendToCustomers'
    ,'email_sendToCustomersResponse'=>'email_sendToCustomersResponse'
    ,'ArrayOfEmail'=>'ArrayOfEmail'
    ,'email_getByObject'=>'email_getByObject'
    ,'email_getByObjectResponse'=>'email_getByObjectResponse'
    ,'email_delete'=>'email_delete'
    ,'email_deleteResponse'=>'email_deleteResponse'
    ,'email_getAll'=>'email_getAll'
    ,'email_getAllResponse'=>'email_getAllResponse'
    ,'email_hasChanged'=>'email_hasChanged'
    ,'email_hasChangedResponse'=>'email_hasChangedResponse'
    ,'email_create'=>'email_create'
    ,'email_createResponse'=>'email_createResponse'
    ,'BrowserInformation'=>'BrowserInformation'
    ,'Open'=>'Open'
    ,'open_getById'=>'open_getById'
    ,'open_getByIdResponse'=>'open_getByIdResponse'
    ,'openSet_getOpen'=>'openSet_getOpen'
    ,'openSet_getOpenResponse'=>'openSet_getOpenResponse'
    ,'ArrayOfOpen'=>'ArrayOfOpen'
    ,'openSet_getOpens'=>'openSet_getOpens'
    ,'openSet_getOpensResponse'=>'openSet_getOpensResponse'
    ,'openSet_getOpenIds'=>'openSet_getOpenIds'
    ,'openSet_getOpenIdsResponse'=>'openSet_getOpenIdsResponse'
    ,'Group'=>'Group'
    ,'CustomerOption'=>'CustomerOption'
    ,'ArrayOfCustomerOption'=>'ArrayOfCustomerOption'
    ,'Account'=>'Account'
    ,'ArrayOfAccount'=>'ArrayOfAccount'
    ,'Customer'=>'Customer'
    ,'ArrayOfCustomer'=>'ArrayOfCustomer'
    ,'group_addMembersInBulk'=>'group_addMembersInBulk'
    ,'group_addMembersInBulkResponse'=>'group_addMembersInBulkResponse'
    ,'GroupMembership'=>'GroupMembership'
    ,'group_hasMember'=>'group_hasMember'
    ,'group_hasMemberResponse'=>'group_hasMemberResponse'
    ,'group_getById'=>'group_getById'
    ,'group_getByIdResponse'=>'group_getByIdResponse'
    ,'group_delete'=>'group_delete'
    ,'group_deleteResponse'=>'group_deleteResponse'
    ,'group_getMembers'=>'group_getMembers'
    ,'group_getMembersResponse'=>'group_getMembersResponse'
    ,'group_update'=>'group_update'
    ,'group_updateResponse'=>'group_updateResponse'
    ,'group_move'=>'group_move'
    ,'group_moveResponse'=>'group_moveResponse'
    ,'group_getParent'=>'group_getParent'
    ,'group_getParentResponse'=>'group_getParentResponse'
    ,'group_create'=>'group_create'
    ,'group_createResponse'=>'group_createResponse'
    ,'group_insert'=>'group_insert'
    ,'group_insertResponse'=>'group_insertResponse'
    ,'group_upsert'=>'group_upsert'
    ,'group_upsertResponse'=>'group_upsertResponse'
    ,'ArrayOfGroup'=>'ArrayOfGroup'
    ,'group_getByObject'=>'group_getByObject'
    ,'group_getByObjectResponse'=>'group_getByObjectResponse'
    ,'group_getAll'=>'group_getAll'
    ,'group_getAllResponse'=>'group_getAllResponse'
    ,'group_getChildren'=>'group_getChildren'
    ,'group_getChildrenResponse'=>'group_getChildrenResponse'
    ,'group_addMember'=>'group_addMember'
    ,'group_addMemberResponse'=>'group_addMemberResponse'
    ,'group_removeMember'=>'group_removeMember'
    ,'group_removeMemberResponse'=>'group_removeMemberResponse'
    ,'group_calculate'=>'group_calculate'
    ,'group_calculateResponse'=>'group_calculateResponse'
    ,'MagentoCreditMemoItem'=>'MagentoCreditMemoItem'
    ,'ArrayOfMagentoCreditMemoItem'=>'ArrayOfMagentoCreditMemoItem'
    ,'MagentoCreditMemo'=>'MagentoCreditMemo'
    ,'magentoCreditMemo_insert'=>'magentoCreditMemo_insert'
    ,'magentoCreditMemo_insertResponse'=>'magentoCreditMemo_insertResponse'
    ,'campaign_executeAsync'=>'campaign_executeAsync'
    ,'campaign_executeAsyncResponse'=>'campaign_executeAsyncResponse'
    ,'campaign_getMembers'=>'campaign_getMembers'
    ,'campaign_getMembersResponse'=>'campaign_getMembersResponse'
    ,'campaign_hasMember'=>'campaign_hasMember'
    ,'campaign_hasMemberResponse'=>'campaign_hasMemberResponse'
    ,'campaign_addMember'=>'campaign_addMember'
    ,'campaign_addMemberResponse'=>'campaign_addMemberResponse'
    ,'campaign_removeMember'=>'campaign_removeMember'
    ,'campaign_removeMemberResponse'=>'campaign_removeMemberResponse'
    ,'campaign_execute'=>'campaign_execute'
    ,'campaign_executeResponse'=>'campaign_executeResponse'
    ,'Bounce'=>'Bounce'
    ,'bounceSet_getBounce'=>'bounceSet_getBounce'
    ,'bounceSet_getBounceResponse'=>'bounceSet_getBounceResponse'
    ,'ArrayOfBounce'=>'ArrayOfBounce'
    ,'bounceSet_getBounces'=>'bounceSet_getBounces'
    ,'bounceSet_getBouncesResponse'=>'bounceSet_getBouncesResponse'
    ,'bounceSet_getBounceIds'=>'bounceSet_getBounceIds'
    ,'bounceSet_getBounceIdsResponse'=>'bounceSet_getBounceIdsResponse'
    ,'Tag'=>'Tag'
    ,'ArrayOfTag'=>'ArrayOfTag'
    ,'MailingLink'=>'MailingLink'
    ,'Click'=>'Click'
    ,'clickSet_getClick'=>'clickSet_getClick'
    ,'clickSet_getClickResponse'=>'clickSet_getClickResponse'
    ,'ArrayOfClick'=>'ArrayOfClick'
    ,'clickSet_getClicks'=>'clickSet_getClicks'
    ,'clickSet_getClicksResponse'=>'clickSet_getClicksResponse'
    ,'clickSet_getClickIds'=>'clickSet_getClickIds'
    ,'clickSet_getClickIdsResponse'=>'clickSet_getClickIdsResponse'
    ,'magentoCategory_create'=>'magentoCategory_create'
    ,'magentoCategory_createResponse'=>'magentoCategory_createResponse'
    ,'magentoCategory_upsert'=>'magentoCategory_upsert'
    ,'magentoCategory_upsertResponse'=>'magentoCategory_upsertResponse'
    ,'customerSet_getCustomer'=>'customerSet_getCustomer'
    ,'customerSet_getCustomerResponse'=>'customerSet_getCustomerResponse'
    ,'customerSet_getCustomers'=>'customerSet_getCustomers'
    ,'customerSet_getCustomersResponse'=>'customerSet_getCustomersResponse'
    ,'customerSet_getCustomerIds'=>'customerSet_getCustomerIds'
    ,'customerSet_getCustomerIdsResponse'=>'customerSet_getCustomerIdsResponse'
    ,'MagentoOrder'=>'MagentoOrder'
    ,'magentoOrder_update'=>'magentoOrder_update'
    ,'magentoOrder_updateResponse'=>'magentoOrder_updateResponse'
    ,'magentoOrder_create'=>'magentoOrder_create'
    ,'magentoOrder_createResponse'=>'magentoOrder_createResponse'
    ,'magentoOrder_insert'=>'magentoOrder_insert'
    ,'magentoOrder_insertResponse'=>'magentoOrder_insertResponse'
    ,'ArrayOfMagentoOrder'=>'ArrayOfMagentoOrder'
    ,'magentoOrder_insertBulk'=>'magentoOrder_insertBulk'
    ,'magentoOrder_insertBulkResponse'=>'magentoOrder_insertBulkResponse'
    ,'CampaignObjectStatisticsOption'=>'CampaignObjectStatisticsOption'
    ,'ArrayOfCampaignObjectStatisticsOption'=>'ArrayOfCampaignObjectStatisticsOption'
    ,'CampaignObjectStatistics'=>'CampaignObjectStatistics'
    ,'campaignObjectStatistics_getByCampaignObjectId'=>'campaignObjectStatistics_getByCampaignObjectId'
    ,'campaignObjectStatistics_getByCampaignObjectIdResponse'=>'campaignObjectStatistics_getByCampaignObjectIdResponse'
    ,'bounce_getById'=>'bounce_getById'
    ,'bounce_getByIdResponse'=>'bounce_getByIdResponse'
    ,'ArrayOfMailingLink'=>'ArrayOfMailingLink'
    ,'Mailing'=>'Mailing'
    ,'mailing_getComplaintSet'=>'mailing_getComplaintSet'
    ,'mailing_getComplaintSetResponse'=>'mailing_getComplaintSetResponse'
    ,'mailing_getDeliverySet'=>'mailing_getDeliverySet'
    ,'mailing_getDeliverySetResponse'=>'mailing_getDeliverySetResponse'
    ,'mailing_getByCampaignObjectId'=>'mailing_getByCampaignObjectId'
    ,'mailing_getByCampaignObjectIdResponse'=>'mailing_getByCampaignObjectIdResponse'
    ,'mailing_getByDate'=>'mailing_getByDate'
    ,'mailing_getByDateResponse'=>'mailing_getByDateResponse'
    ,'mailing_getAll'=>'mailing_getAll'
    ,'mailing_getAllResponse'=>'mailing_getAllResponse'
    ,'mailing_getById'=>'mailing_getById'
    ,'mailing_getByIdResponse'=>'mailing_getByIdResponse'
    ,'mailing_getQuickmails'=>'mailing_getQuickmails'
    ,'mailing_getQuickmailsResponse'=>'mailing_getQuickmailsResponse'
    ,'mailing_getQuickmailsByDate'=>'mailing_getQuickmailsByDate'
    ,'mailing_getQuickmailsByDateResponse'=>'mailing_getQuickmailsByDateResponse'
    ,'mailing_getOpenSet'=>'mailing_getOpenSet'
    ,'mailing_getOpenSetResponse'=>'mailing_getOpenSetResponse'
    ,'mailing_getBounceSet'=>'mailing_getBounceSet'
    ,'mailing_getBounceSetResponse'=>'mailing_getBounceSetResponse'
    ,'magento_customerInsertBulkUnique'=>'magento_customerInsertBulkUnique'
    ,'magento_customerInsertBulkUniqueResponse'=>'magento_customerInsertBulkUniqueResponse'
    ,'magento_customerInsertUnique'=>'magento_customerInsertUnique'
    ,'magento_customerInsertUniqueResponse'=>'magento_customerInsertUniqueResponse'
    ,'magento_getCampaigns'=>'magento_getCampaigns'
    ,'magento_getCampaignsResponse'=>'magento_getCampaignsResponse'
    ,'magento_getAvailableCustomerFields'=>'magento_getAvailableCustomerFields'
    ,'magento_getAvailableCustomerFieldsResponse'=>'magento_getAvailableCustomerFieldsResponse'
    ,'magento_testConnection'=>'magento_testConnection'
    ,'magento_testConnectionResponse'=>'magento_testConnectionResponse'
    ,'magento_executeAbandonedCart'=>'magento_executeAbandonedCart'
    ,'magento_executeAbandonedCartResponse'=>'magento_executeAbandonedCartResponse'
    ,'MagentoEmail'=>'MagentoEmail'
    ,'magentoEmail_insert'=>'magentoEmail_insert'
    ,'magentoEmail_insertResponse'=>'magentoEmail_insertResponse'
    ,'mailingSet_getMailing'=>'mailingSet_getMailing'
    ,'mailingSet_getMailingResponse'=>'mailingSet_getMailingResponse'
    ,'ArrayOfMailing'=>'ArrayOfMailing'
    ,'mailingSet_getMailings'=>'mailingSet_getMailings'
    ,'mailingSet_getMailingsResponse'=>'mailingSet_getMailingsResponse'
    ,'mailingSet_getMailingIds'=>'mailingSet_getMailingIds'
    ,'mailingSet_getMailingIdsResponse'=>'mailingSet_getMailingIdsResponse'
    ,'Complaint'=>'Complaint'
    ,'Delivery'=>'Delivery'
    ,'deliverySet_getDelivery'=>'deliverySet_getDelivery'
    ,'deliverySet_getDeliveryResponse'=>'deliverySet_getDeliveryResponse'
    ,'ArrayOfDelivery'=>'ArrayOfDelivery'
    ,'deliverySet_getDeliveries'=>'deliverySet_getDeliveries'
    ,'deliverySet_getDeliveriesResponse'=>'deliverySet_getDeliveriesResponse'
    ,'MagentoShipment'=>'MagentoShipment'
    ,'magentoShipment_create'=>'magentoShipment_create'
    ,'magentoShipment_createResponse'=>'magentoShipment_createResponse'
    ,'magentoShipment_insert'=>'magentoShipment_insert'
    ,'magentoShipment_insertResponse'=>'magentoShipment_insertResponse'
    ,'click_getById'=>'click_getById'
    ,'click_getByIdResponse'=>'click_getByIdResponse'
    ,'mailingLink_getClickSet'=>'mailingLink_getClickSet'
    ,'mailingLink_getClickSetResponse'=>'mailingLink_getClickSetResponse'
    ,'CampaignStatistics'=>'CampaignStatistics'
    ,'campaignStatistics_getByCampaignId'=>'campaignStatistics_getByCampaignId'
    ,'campaignStatistics_getByCampaignIdResponse'=>'campaignStatistics_getByCampaignIdResponse'
    ,'campaignStatistics_getCustomerSet'=>'campaignStatistics_getCustomerSet'
    ,'campaignStatistics_getCustomerSetResponse'=>'campaignStatistics_getCustomerSetResponse'
    ,'complaintSet_getComplaint'=>'complaintSet_getComplaint'
    ,'complaintSet_getComplaintResponse'=>'complaintSet_getComplaintResponse'
    ,'ArrayOfComplaint'=>'ArrayOfComplaint'
    ,'complaintSet_getComplaints'=>'complaintSet_getComplaints'
    ,'complaintSet_getComplaintsResponse'=>'complaintSet_getComplaintsResponse'
    ,'complaintSet_getComplaintIds'=>'complaintSet_getComplaintIds'
    ,'complaintSet_getComplaintIdsResponse'=>'complaintSet_getComplaintIdsResponse'
    ,'account_addToCustomer'=>'account_addToCustomer'
    ,'account_addToCustomerResponse'=>'account_addToCustomerResponse'
    ,'account_deleteFromCustomer'=>'account_deleteFromCustomer'
    ,'account_deleteFromCustomerResponse'=>'account_deleteFromCustomerResponse'
    ,'customer_insertBulkUnique'=>'customer_insertBulkUnique'
    ,'customer_insertBulkUniqueResponse'=>'customer_insertBulkUniqueResponse'
    ,'customer_create'=>'customer_create'
    ,'customer_createResponse'=>'customer_createResponse'
    ,'customer_insert'=>'customer_insert'
    ,'customer_insertResponse'=>'customer_insertResponse'
    ,'customer_update'=>'customer_update'
    ,'customer_updateResponse'=>'customer_updateResponse'
    ,'customer_insertUnique'=>'customer_insertUnique'
    ,'customer_insertUniqueResponse'=>'customer_insertUniqueResponse'
    ,'customer_getById'=>'customer_getById'
    ,'customer_getByIdResponse'=>'customer_getByIdResponse'
    ,'customer_getByAccountId'=>'customer_getByAccountId'
    ,'customer_getByAccountIdResponse'=>'customer_getByAccountIdResponse'
    ,'customer_getGroups'=>'customer_getGroups'
    ,'customer_getGroupsResponse'=>'customer_getGroupsResponse'
    ,'customer_getAll'=>'customer_getAll'
    ,'customer_getAllResponse'=>'customer_getAllResponse'
    ,'customer_getByObject'=>'customer_getByObject'
    ,'customer_getByObjectResponse'=>'customer_getByObjectResponse'
    ,'customer_getByEmailAddress'=>'customer_getByEmailAddress'
    ,'customer_getByEmailAddressResponse'=>'customer_getByEmailAddressResponse'
    ,'customer_getByMobilePhone'=>'customer_getByMobilePhone'
    ,'customer_getByMobilePhoneResponse'=>'customer_getByMobilePhoneResponse'
    ,'customer_getByExternalId'=>'customer_getByExternalId'
    ,'customer_getByExternalIdResponse'=>'customer_getByExternalIdResponse'
    ,'customer_getByUserNameAndPassword'=>'customer_getByUserNameAndPassword'
    ,'customer_getByUserNameAndPasswordResponse'=>'customer_getByUserNameAndPasswordResponse'
    ,'customer_delete'=>'customer_delete'
    ,'customer_deleteResponse'=>'customer_deleteResponse'
    ,'customer_getTotalNumberOfCustomers'=>'customer_getTotalNumberOfCustomers'
    ,'customer_getTotalNumberOfCustomersResponse'=>'customer_getTotalNumberOfCustomersResponse'
    ,'customer_upsert'=>'customer_upsert'
    ,'customer_upsertResponse'=>'customer_upsertResponse'
    ,'conversionTracking_track'=>'conversionTracking_track'
    ,'conversionTracking_trackResponse'=>'conversionTracking_trackResponse'

    );

    function __construct($url='https://secure.myclang.com/app/api/soap/public/index.php?wsdl&version=1.20')
    {
        $this->soapClient = new SoapClient($url,array("classmap"=>self::$classmap,"trace" => true,"exceptions" => true));
    }

    function sms_listOptions($sms_listOptions)
    {

        $sms_listOptionsResponse = $this->soapClient->sms_listOptions($sms_listOptions);
        return $sms_listOptionsResponse;

    }
    function sms_create($sms_create)
    {

        $sms_createResponse = $this->soapClient->sms_create($sms_create);
        return $sms_createResponse;

    }
    function sms_delete($sms_delete)
    {

        $sms_deleteResponse = $this->soapClient->sms_delete($sms_delete);
        return $sms_deleteResponse;

    }
    function sms_sendToCustomer($sms_sendToCustomer)
    {

        $sms_sendToCustomerResponse = $this->soapClient->sms_sendToCustomer($sms_sendToCustomer);
        return $sms_sendToCustomerResponse;

    }
    function sms_sendToCustomers($sms_sendToCustomers)
    {

        $sms_sendToCustomersResponse = $this->soapClient->sms_sendToCustomers($sms_sendToCustomers);
        return $sms_sendToCustomersResponse;

    }
    function sms_getAll($sms_getAll)
    {

        $sms_getAllResponse = $this->soapClient->sms_getAll($sms_getAll);
        return $sms_getAllResponse;

    }
    function sms_getById($sms_getById)
    {

        $sms_getByIdResponse = $this->soapClient->sms_getById($sms_getById);
        return $sms_getByIdResponse;

    }
    function sms_insert($sms_insert)
    {

        $sms_insertResponse = $this->soapClient->sms_insert($sms_insert);
        return $sms_insertResponse;

    }
    function sms_getByObject($sms_getByObject)
    {

        $sms_getByObjectResponse = $this->soapClient->sms_getByObject($sms_getByObject);
        return $sms_getByObjectResponse;

    }
    function sms_sendToProfile($sms_sendToProfile)
    {

        $sms_sendToProfileResponse = $this->soapClient->sms_sendToProfile($sms_sendToProfile);
        return $sms_sendToProfileResponse;

    }
    function sms_hasChanged($sms_hasChanged)
    {

        $sms_hasChangedResponse = $this->soapClient->sms_hasChanged($sms_hasChanged);
        return $sms_hasChangedResponse;

    }
    function sms_update($sms_update)
    {

        $sms_updateResponse = $this->soapClient->sms_update($sms_update);
        return $sms_updateResponse;

    }
    function sms_upsert($sms_upsert)
    {

        $sms_upsertResponse = $this->soapClient->sms_upsert($sms_upsert);
        return $sms_upsertResponse;

    }
    function sms_sendToGroup($sms_sendToGroup)
    {

        $sms_sendToGroupResponse = $this->soapClient->sms_sendToGroup($sms_sendToGroup);
        return $sms_sendToGroupResponse;

    }
    function campaignObjectStatisticsOption_getCustomerSet($campaignObjectStatisticsOption_getCustomerSet)
    {

        $campaignObjectStatisticsOption_getCustomerSetResponse = $this->soapClient->campaignObjectStatisticsOption_getCustomerSet($campaignObjectStatisticsOption_getCustomerSet);
        return $campaignObjectStatisticsOption_getCustomerSetResponse;

    }
    function magentoAbandonedOrder_create($magentoAbandonedOrder_create)
    {

        $magentoAbandonedOrder_createResponse = $this->soapClient->magentoAbandonedOrder_create($magentoAbandonedOrder_create);
        return $magentoAbandonedOrder_createResponse;

    }
    function magentoAbandonedOrder_insert($magentoAbandonedOrder_insert)
    {

        $magentoAbandonedOrder_insertResponse = $this->soapClient->magentoAbandonedOrder_insert($magentoAbandonedOrder_insert);
        return $magentoAbandonedOrder_insertResponse;

    }
    function resource_getById($resource_getById)
    {

        $resource_getByIdResponse = $this->soapClient->resource_getById($resource_getById);
        return $resource_getByIdResponse;

    }
    function resource_free($resource_free)
    {

        $resource_freeResponse = $this->soapClient->resource_free($resource_free);
        return $resource_freeResponse;

    }
    function magentoProduct_upsert($magentoProduct_upsert)
    {

        $magentoProduct_upsertResponse = $this->soapClient->magentoProduct_upsert($magentoProduct_upsert);
        return $magentoProduct_upsertResponse;

    }
    function magentoProduct_create($magentoProduct_create)
    {

        $magentoProduct_createResponse = $this->soapClient->magentoProduct_create($magentoProduct_create);
        return $magentoProduct_createResponse;

    }
    function email_insert($email_insert)
    {

        $email_insertResponse = $this->soapClient->email_insert($email_insert);
        return $email_insertResponse;

    }
    function email_update($email_update)
    {

        $email_updateResponse = $this->soapClient->email_update($email_update);
        return $email_updateResponse;

    }
    function email_upsert($email_upsert)
    {

        $email_upsertResponse = $this->soapClient->email_upsert($email_upsert);
        return $email_upsertResponse;

    }
    function email_getById($email_getById)
    {

        $email_getByIdResponse = $this->soapClient->email_getById($email_getById);
        return $email_getByIdResponse;

    }
    function email_listOptions($email_listOptions)
    {

        $email_listOptionsResponse = $this->soapClient->email_listOptions($email_listOptions);
        return $email_listOptionsResponse;

    }
    function email_sendToGroup($email_sendToGroup)
    {

        $email_sendToGroupResponse = $this->soapClient->email_sendToGroup($email_sendToGroup);
        return $email_sendToGroupResponse;

    }
    function email_sendToProfile($email_sendToProfile)
    {

        $email_sendToProfileResponse = $this->soapClient->email_sendToProfile($email_sendToProfile);
        return $email_sendToProfileResponse;

    }
    function email_sendToCustomer($email_sendToCustomer)
    {

        $email_sendToCustomerResponse = $this->soapClient->email_sendToCustomer($email_sendToCustomer);
        return $email_sendToCustomerResponse;

    }
    function email_sendToCustomers($email_sendToCustomers)
    {

        $email_sendToCustomersResponse = $this->soapClient->email_sendToCustomers($email_sendToCustomers);
        return $email_sendToCustomersResponse;

    }
    function email_getByObject($email_getByObject)
    {

        $email_getByObjectResponse = $this->soapClient->email_getByObject($email_getByObject);
        return $email_getByObjectResponse;

    }
    function email_delete($email_delete)
    {

        $email_deleteResponse = $this->soapClient->email_delete($email_delete);
        return $email_deleteResponse;

    }
    function email_getAll($email_getAll)
    {

        $email_getAllResponse = $this->soapClient->email_getAll($email_getAll);
        return $email_getAllResponse;

    }
    function email_hasChanged($email_hasChanged)
    {

        $email_hasChangedResponse = $this->soapClient->email_hasChanged($email_hasChanged);
        return $email_hasChangedResponse;

    }
    function email_create($email_create)
    {

        $email_createResponse = $this->soapClient->email_create($email_create);
        return $email_createResponse;

    }
    function open_getById($open_getById)
    {

        $open_getByIdResponse = $this->soapClient->open_getById($open_getById);
        return $open_getByIdResponse;

    }
    function openSet_getOpen($openSet_getOpen)
    {

        $openSet_getOpenResponse = $this->soapClient->openSet_getOpen($openSet_getOpen);
        return $openSet_getOpenResponse;

    }
    function openSet_getOpens($openSet_getOpens)
    {

        $openSet_getOpensResponse = $this->soapClient->openSet_getOpens($openSet_getOpens);
        return $openSet_getOpensResponse;

    }
    function openSet_getOpenIds($openSet_getOpenIds)
    {

        $openSet_getOpenIdsResponse = $this->soapClient->openSet_getOpenIds($openSet_getOpenIds);
        return $openSet_getOpenIdsResponse;

    }
    function group_addMembersInBulk($group_addMembersInBulk)
    {

        $group_addMembersInBulkResponse = $this->soapClient->group_addMembersInBulk($group_addMembersInBulk);
        return $group_addMembersInBulkResponse;

    }
    function group_hasMember($group_hasMember)
    {

        $group_hasMemberResponse = $this->soapClient->group_hasMember($group_hasMember);
        return $group_hasMemberResponse;

    }
    function group_getById($group_getById)
    {

        $group_getByIdResponse = $this->soapClient->group_getById($group_getById);
        return $group_getByIdResponse;

    }
    function group_delete($group_delete)
    {

        $group_deleteResponse = $this->soapClient->group_delete($group_delete);
        return $group_deleteResponse;

    }
    function group_getMembers($group_getMembers)
    {

        $group_getMembersResponse = $this->soapClient->group_getMembers($group_getMembers);
        return $group_getMembersResponse;

    }
    function group_update($group_update)
    {

        $group_updateResponse = $this->soapClient->group_update($group_update);
        return $group_updateResponse;

    }
    function group_move($group_move)
    {

        $group_moveResponse = $this->soapClient->group_move($group_move);
        return $group_moveResponse;

    }
    function group_getParent($group_getParent)
    {

        $group_getParentResponse = $this->soapClient->group_getParent($group_getParent);
        return $group_getParentResponse;

    }
    function group_create($group_create)
    {

        $group_createResponse = $this->soapClient->group_create($group_create);
        return $group_createResponse;

    }
    function group_insert($group_insert)
    {

        $group_insertResponse = $this->soapClient->group_insert($group_insert);
        return $group_insertResponse;

    }
    function group_upsert($group_upsert)
    {

        $group_upsertResponse = $this->soapClient->group_upsert($group_upsert);
        return $group_upsertResponse;

    }
    function group_getByObject($group_getByObject)
    {

        $group_getByObjectResponse = $this->soapClient->group_getByObject($group_getByObject);
        return $group_getByObjectResponse;

    }
    function group_getAll($group_getAll)
    {

        $group_getAllResponse = $this->soapClient->group_getAll($group_getAll);
        return $group_getAllResponse;

    }
    function group_getChildren($group_getChildren)
    {

        $group_getChildrenResponse = $this->soapClient->group_getChildren($group_getChildren);
        return $group_getChildrenResponse;

    }
    function group_addMember($group_addMember)
    {

        $group_addMemberResponse = $this->soapClient->group_addMember($group_addMember);
        return $group_addMemberResponse;

    }
    function group_removeMember($group_removeMember)
    {

        $group_removeMemberResponse = $this->soapClient->group_removeMember($group_removeMember);
        return $group_removeMemberResponse;

    }
    function group_calculate($group_calculate)
    {

        $group_calculateResponse = $this->soapClient->group_calculate($group_calculate);
        return $group_calculateResponse;

    }
    function magentoCreditMemo_insert($magentoCreditMemo_insert)
    {

        $magentoCreditMemo_insertResponse = $this->soapClient->magentoCreditMemo_insert($magentoCreditMemo_insert);
        return $magentoCreditMemo_insertResponse;

    }
    function campaign_executeAsync($campaign_executeAsync)
    {

        $campaign_executeAsyncResponse = $this->soapClient->campaign_executeAsync($campaign_executeAsync);
        return $campaign_executeAsyncResponse;

    }
    function campaign_getMembers($campaign_getMembers)
    {

        $campaign_getMembersResponse = $this->soapClient->campaign_getMembers($campaign_getMembers);
        return $campaign_getMembersResponse;

    }
    function campaign_hasMember($campaign_hasMember)
    {

        $campaign_hasMemberResponse = $this->soapClient->campaign_hasMember($campaign_hasMember);
        return $campaign_hasMemberResponse;

    }
    function campaign_addMember($campaign_addMember)
    {

        $campaign_addMemberResponse = $this->soapClient->campaign_addMember($campaign_addMember);
        return $campaign_addMemberResponse;

    }
    function campaign_removeMember($campaign_removeMember)
    {

        $campaign_removeMemberResponse = $this->soapClient->campaign_removeMember($campaign_removeMember);
        return $campaign_removeMemberResponse;

    }
    function campaign_execute($campaign_execute)
    {

        $campaign_executeResponse = $this->soapClient->campaign_execute($campaign_execute);
        return $campaign_executeResponse;

    }
    function bounceSet_getBounce($bounceSet_getBounce)
    {

        $bounceSet_getBounceResponse = $this->soapClient->bounceSet_getBounce($bounceSet_getBounce);
        return $bounceSet_getBounceResponse;

    }
    function bounceSet_getBounces($bounceSet_getBounces)
    {

        $bounceSet_getBouncesResponse = $this->soapClient->bounceSet_getBounces($bounceSet_getBounces);
        return $bounceSet_getBouncesResponse;

    }
    function bounceSet_getBounceIds($bounceSet_getBounceIds)
    {

        $bounceSet_getBounceIdsResponse = $this->soapClient->bounceSet_getBounceIds($bounceSet_getBounceIds);
        return $bounceSet_getBounceIdsResponse;

    }
    function clickSet_getClick($clickSet_getClick)
    {

        $clickSet_getClickResponse = $this->soapClient->clickSet_getClick($clickSet_getClick);
        return $clickSet_getClickResponse;

    }
    function clickSet_getClicks($clickSet_getClicks)
    {

        $clickSet_getClicksResponse = $this->soapClient->clickSet_getClicks($clickSet_getClicks);
        return $clickSet_getClicksResponse;

    }
    function clickSet_getClickIds($clickSet_getClickIds)
    {

        $clickSet_getClickIdsResponse = $this->soapClient->clickSet_getClickIds($clickSet_getClickIds);
        return $clickSet_getClickIdsResponse;

    }
    function magentoCategory_create($magentoCategory_create)
    {

        $magentoCategory_createResponse = $this->soapClient->magentoCategory_create($magentoCategory_create);
        return $magentoCategory_createResponse;

    }
    function magentoCategory_upsert($magentoCategory_upsert)
    {

        $magentoCategory_upsertResponse = $this->soapClient->magentoCategory_upsert($magentoCategory_upsert);
        return $magentoCategory_upsertResponse;

    }
    function customerSet_getCustomer($customerSet_getCustomer)
    {

        $customerSet_getCustomerResponse = $this->soapClient->customerSet_getCustomer($customerSet_getCustomer);
        return $customerSet_getCustomerResponse;

    }
    function customerSet_getCustomers($customerSet_getCustomers)
    {

        $customerSet_getCustomersResponse = $this->soapClient->customerSet_getCustomers($customerSet_getCustomers);
        return $customerSet_getCustomersResponse;

    }
    function customerSet_getCustomerIds($customerSet_getCustomerIds)
    {

        $customerSet_getCustomerIdsResponse = $this->soapClient->customerSet_getCustomerIds($customerSet_getCustomerIds);
        return $customerSet_getCustomerIdsResponse;

    }
    function magentoOrder_update($magentoOrder_update)
    {

        $magentoOrder_updateResponse = $this->soapClient->magentoOrder_update($magentoOrder_update);
        return $magentoOrder_updateResponse;

    }
    function magentoOrder_create($magentoOrder_create)
    {

        $magentoOrder_createResponse = $this->soapClient->magentoOrder_create($magentoOrder_create);
        return $magentoOrder_createResponse;

    }
    function magentoOrder_insert($magentoOrder_insert)
    {

        $magentoOrder_insertResponse = $this->soapClient->magentoOrder_insert($magentoOrder_insert);
        return $magentoOrder_insertResponse;

    }
    function magentoOrder_insertBulk($magentoOrder_insertBulk)
    {

        $magentoOrder_insertBulkResponse = $this->soapClient->magentoOrder_insertBulk($magentoOrder_insertBulk);
        return $magentoOrder_insertBulkResponse;

    }
    function campaignObjectStatistics_getByCampaignObjectId($campaignObjectStatistics_getByCampaignObjectId)
    {

        $campaignObjectStatistics_getByCampaignObjectIdResponse = $this->soapClient->campaignObjectStatistics_getByCampaignObjectId($campaignObjectStatistics_getByCampaignObjectId);
        return $campaignObjectStatistics_getByCampaignObjectIdResponse;

    }
    function bounce_getById($bounce_getById)
    {

        $bounce_getByIdResponse = $this->soapClient->bounce_getById($bounce_getById);
        return $bounce_getByIdResponse;

    }
    function mailing_getComplaintSet($mailing_getComplaintSet)
    {

        $mailing_getComplaintSetResponse = $this->soapClient->mailing_getComplaintSet($mailing_getComplaintSet);
        return $mailing_getComplaintSetResponse;

    }
    function mailing_getDeliverySet($mailing_getDeliverySet)
    {

        $mailing_getDeliverySetResponse = $this->soapClient->mailing_getDeliverySet($mailing_getDeliverySet);
        return $mailing_getDeliverySetResponse;

    }
    function mailing_getByCampaignObjectId($mailing_getByCampaignObjectId)
    {

        $mailing_getByCampaignObjectIdResponse = $this->soapClient->mailing_getByCampaignObjectId($mailing_getByCampaignObjectId);
        return $mailing_getByCampaignObjectIdResponse;

    }
    function mailing_getByDate($mailing_getByDate)
    {

        $mailing_getByDateResponse = $this->soapClient->mailing_getByDate($mailing_getByDate);
        return $mailing_getByDateResponse;

    }
    function mailing_getAll($mailing_getAll)
    {

        $mailing_getAllResponse = $this->soapClient->mailing_getAll($mailing_getAll);
        return $mailing_getAllResponse;

    }
    function mailing_getById($mailing_getById)
    {

        $mailing_getByIdResponse = $this->soapClient->mailing_getById($mailing_getById);
        return $mailing_getByIdResponse;

    }
    function mailing_getQuickmails($mailing_getQuickmails)
    {

        $mailing_getQuickmailsResponse = $this->soapClient->mailing_getQuickmails($mailing_getQuickmails);
        return $mailing_getQuickmailsResponse;

    }
    function mailing_getQuickmailsByDate($mailing_getQuickmailsByDate)
    {

        $mailing_getQuickmailsByDateResponse = $this->soapClient->mailing_getQuickmailsByDate($mailing_getQuickmailsByDate);
        return $mailing_getQuickmailsByDateResponse;

    }
    function mailing_getOpenSet($mailing_getOpenSet)
    {

        $mailing_getOpenSetResponse = $this->soapClient->mailing_getOpenSet($mailing_getOpenSet);
        return $mailing_getOpenSetResponse;

    }
    function mailing_getBounceSet($mailing_getBounceSet)
    {

        $mailing_getBounceSetResponse = $this->soapClient->mailing_getBounceSet($mailing_getBounceSet);
        return $mailing_getBounceSetResponse;

    }
    function magento_customerInsertBulkUnique($magento_customerInsertBulkUnique)
    {

        $magento_customerInsertBulkUniqueResponse = $this->soapClient->magento_customerInsertBulkUnique($magento_customerInsertBulkUnique);
        return $magento_customerInsertBulkUniqueResponse;

    }
    function magento_customerInsertUnique($magento_customerInsertUnique)
    {

        $magento_customerInsertUniqueResponse = $this->soapClient->magento_customerInsertUnique($magento_customerInsertUnique);
        return $magento_customerInsertUniqueResponse;

    }
    function magento_getCampaigns($magento_getCampaigns)
    {

        $magento_getCampaignsResponse = $this->soapClient->magento_getCampaigns($magento_getCampaigns);
        return $magento_getCampaignsResponse;

    }
    function magento_getAvailableCustomerFields($magento_getAvailableCustomerFields)
    {

        $magento_getAvailableCustomerFieldsResponse = $this->soapClient->magento_getAvailableCustomerFields($magento_getAvailableCustomerFields);
        return $magento_getAvailableCustomerFieldsResponse;

    }
    function magento_testConnection($magento_testConnection)
    {

        $magento_testConnectionResponse = $this->soapClient->magento_testConnection($magento_testConnection);
        return $magento_testConnectionResponse;

    }
    function magento_executeAbandonedCart($magento_executeAbandonedCart)
    {

        $magento_executeAbandonedCartResponse = $this->soapClient->magento_executeAbandonedCart($magento_executeAbandonedCart);
        return $magento_executeAbandonedCartResponse;

    }
    function magentoEmail_insert($magentoEmail_insert)
    {

        $magentoEmail_insertResponse = $this->soapClient->magentoEmail_insert($magentoEmail_insert);
        return $magentoEmail_insertResponse;

    }
    function mailingSet_getMailing($mailingSet_getMailing)
    {

        $mailingSet_getMailingResponse = $this->soapClient->mailingSet_getMailing($mailingSet_getMailing);
        return $mailingSet_getMailingResponse;

    }
    function mailingSet_getMailings($mailingSet_getMailings)
    {

        $mailingSet_getMailingsResponse = $this->soapClient->mailingSet_getMailings($mailingSet_getMailings);
        return $mailingSet_getMailingsResponse;

    }
    function mailingSet_getMailingIds($mailingSet_getMailingIds)
    {

        $mailingSet_getMailingIdsResponse = $this->soapClient->mailingSet_getMailingIds($mailingSet_getMailingIds);
        return $mailingSet_getMailingIdsResponse;

    }
    function deliverySet_getDelivery($deliverySet_getDelivery)
    {

        $deliverySet_getDeliveryResponse = $this->soapClient->deliverySet_getDelivery($deliverySet_getDelivery);
        return $deliverySet_getDeliveryResponse;

    }
    function deliverySet_getDeliveries($deliverySet_getDeliveries)
    {

        $deliverySet_getDeliveriesResponse = $this->soapClient->deliverySet_getDeliveries($deliverySet_getDeliveries);
        return $deliverySet_getDeliveriesResponse;

    }
    function magentoShipment_create($magentoShipment_create)
    {

        $magentoShipment_createResponse = $this->soapClient->magentoShipment_create($magentoShipment_create);
        return $magentoShipment_createResponse;

    }
    function magentoShipment_insert($magentoShipment_insert)
    {

        $magentoShipment_insertResponse = $this->soapClient->magentoShipment_insert($magentoShipment_insert);
        return $magentoShipment_insertResponse;

    }
    function click_getById($click_getById)
    {

        $click_getByIdResponse = $this->soapClient->click_getById($click_getById);
        return $click_getByIdResponse;

    }
    function mailingLink_getClickSet($mailingLink_getClickSet)
    {

        $mailingLink_getClickSetResponse = $this->soapClient->mailingLink_getClickSet($mailingLink_getClickSet);
        return $mailingLink_getClickSetResponse;

    }
    function campaignStatistics_getByCampaignId($campaignStatistics_getByCampaignId)
    {

        $campaignStatistics_getByCampaignIdResponse = $this->soapClient->campaignStatistics_getByCampaignId($campaignStatistics_getByCampaignId);
        return $campaignStatistics_getByCampaignIdResponse;

    }
    function campaignStatistics_getCustomerSet($campaignStatistics_getCustomerSet)
    {

        $campaignStatistics_getCustomerSetResponse = $this->soapClient->campaignStatistics_getCustomerSet($campaignStatistics_getCustomerSet);
        return $campaignStatistics_getCustomerSetResponse;

    }
    function complaintSet_getComplaint($complaintSet_getComplaint)
    {

        $complaintSet_getComplaintResponse = $this->soapClient->complaintSet_getComplaint($complaintSet_getComplaint);
        return $complaintSet_getComplaintResponse;

    }
    function complaintSet_getComplaints($complaintSet_getComplaints)
    {

        $complaintSet_getComplaintsResponse = $this->soapClient->complaintSet_getComplaints($complaintSet_getComplaints);
        return $complaintSet_getComplaintsResponse;

    }
    function complaintSet_getComplaintIds($complaintSet_getComplaintIds)
    {

        $complaintSet_getComplaintIdsResponse = $this->soapClient->complaintSet_getComplaintIds($complaintSet_getComplaintIds);
        return $complaintSet_getComplaintIdsResponse;

    }
    function account_addToCustomer($account_addToCustomer)
    {

        $account_addToCustomerResponse = $this->soapClient->account_addToCustomer($account_addToCustomer);
        return $account_addToCustomerResponse;

    }
    function account_deleteFromCustomer($account_deleteFromCustomer)
    {

        $account_deleteFromCustomerResponse = $this->soapClient->account_deleteFromCustomer($account_deleteFromCustomer);
        return $account_deleteFromCustomerResponse;

    }
    function customer_insertBulkUnique($customer_insertBulkUnique)
    {

        $customer_insertBulkUniqueResponse = $this->soapClient->customer_insertBulkUnique($customer_insertBulkUnique);
        return $customer_insertBulkUniqueResponse;

    }
    function customer_create($customer_create)
    {

        $customer_createResponse = $this->soapClient->customer_create($customer_create);
        return $customer_createResponse;

    }
    function customer_insert($customer_insert)
    {

        $customer_insertResponse = $this->soapClient->customer_insert($customer_insert);
        return $customer_insertResponse;

    }
    function customer_update($customer_update)
    {

        $customer_updateResponse = $this->soapClient->customer_update($customer_update);
        return $customer_updateResponse;

    }
    function customer_insertUnique($customer_insertUnique)
    {

        $customer_insertUniqueResponse = $this->soapClient->customer_insertUnique($customer_insertUnique);
        return $customer_insertUniqueResponse;

    }
    function customer_getById($customer_getById)
    {

        $customer_getByIdResponse = $this->soapClient->customer_getById($customer_getById);
        return $customer_getByIdResponse;

    }
    function customer_getByAccountId($customer_getByAccountId)
    {

        $customer_getByAccountIdResponse = $this->soapClient->customer_getByAccountId($customer_getByAccountId);
        return $customer_getByAccountIdResponse;

    }
    function customer_getGroups($customer_getGroups)
    {

        $customer_getGroupsResponse = $this->soapClient->customer_getGroups($customer_getGroups);
        return $customer_getGroupsResponse;

    }
    function customer_getAll($customer_getAll)
    {

        $customer_getAllResponse = $this->soapClient->customer_getAll($customer_getAll);
        return $customer_getAllResponse;

    }
    function customer_getByObject($customer_getByObject)
    {

        $customer_getByObjectResponse = $this->soapClient->customer_getByObject($customer_getByObject);
        return $customer_getByObjectResponse;

    }
    function customer_getByEmailAddress($customer_getByEmailAddress)
    {

        $customer_getByEmailAddressResponse = $this->soapClient->customer_getByEmailAddress($customer_getByEmailAddress);
        return $customer_getByEmailAddressResponse;

    }
    function customer_getByMobilePhone($customer_getByMobilePhone)
    {

        $customer_getByMobilePhoneResponse = $this->soapClient->customer_getByMobilePhone($customer_getByMobilePhone);
        return $customer_getByMobilePhoneResponse;

    }
    function customer_getByExternalId($customer_getByExternalId)
    {

        $customer_getByExternalIdResponse = $this->soapClient->customer_getByExternalId($customer_getByExternalId);
        return $customer_getByExternalIdResponse;

    }
    function customer_getByUserNameAndPassword($customer_getByUserNameAndPassword)
    {

        $customer_getByUserNameAndPasswordResponse = $this->soapClient->customer_getByUserNameAndPassword($customer_getByUserNameAndPassword);
        return $customer_getByUserNameAndPasswordResponse;

    }
    function customer_delete($customer_delete)
    {

        $customer_deleteResponse = $this->soapClient->customer_delete($customer_delete);
        return $customer_deleteResponse;

    }
    function customer_getTotalNumberOfCustomers($customer_getTotalNumberOfCustomers)
    {

        $customer_getTotalNumberOfCustomersResponse = $this->soapClient->customer_getTotalNumberOfCustomers($customer_getTotalNumberOfCustomers);
        return $customer_getTotalNumberOfCustomersResponse;

    }
    function customer_upsert($customer_upsert)
    {

        $customer_upsertResponse = $this->soapClient->customer_upsert($customer_upsert);
        return $customer_upsertResponse;

    }
    function conversionTracking_track($conversionTracking_track)
    {

        $conversionTracking_trackResponse = $this->soapClient->conversionTracking_track($conversionTracking_track);
        return $conversionTracking_trackResponse;

    }}


?>