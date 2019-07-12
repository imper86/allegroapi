<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class ServiceService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'PackageInfoStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\PackageInfoStruct',
      'ArrayOfPackageinfostruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ArrayOfPackageinfostruct',
      'DoAddPackageInfoToPostBuyFormRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoAddPackageInfoToPostBuyFormRequest',
      'ArrayOfString' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ArrayOfString',
      'PostBuyFormPackageInfoStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\PostBuyFormPackageInfoStruct',
      'doAddPackageInfoToPostBuyFormResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doAddPackageInfoToPostBuyFormResponse',
      'UserBlackListStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\UserBlackListStruct',
      'ArrayOfUserblackliststruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ArrayOfUserblackliststruct',
      'DoAddToBlackListRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoAddToBlackListRequest',
      'UserBlackListAddResultStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\UserBlackListAddResultStruct',
      'ArrayOfUserblacklistaddresultstruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ArrayOfUserblacklistaddresultstruct',
      'doAddToBlackListResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doAddToBlackListResponse',
      'PharmacyRecipientDataStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\PharmacyRecipientDataStruct',
      'DoBidItemRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoBidItemRequest',
      'doBidItemResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doBidItemResponse',
      'RangeIntValueStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\RangeIntValueStruct',
      'RangeFloatValueStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\RangeFloatValueStruct',
      'RangeDateValueStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\RangeDateValueStruct',
      'FieldsValue' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\FieldsValue',
      'ArrayOfFieldsvalue' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ArrayOfFieldsvalue',
      'ArrayOfInt' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ArrayOfInt',
      'VariantQuantityStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\VariantQuantityStruct',
      'ArrayOfVariantquantitystruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ArrayOfVariantquantitystruct',
      'VariantStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\VariantStruct',
      'ArrayOfVariantstruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ArrayOfVariantstruct',
      'TagNameStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\TagNameStruct',
      'ArrayOfTagnamestruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ArrayOfTagnamestruct',
      'AfterSalesServiceConditionsStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\AfterSalesServiceConditionsStruct',
      'DoChangeItemFieldsRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoChangeItemFieldsRequest',
      'AmountStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\AmountStruct',
      'ItemSurchargeStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ItemSurchargeStruct',
      'ArrayOfItemsurchargestruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ArrayOfItemsurchargestruct',
      'ChangedItemStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ChangedItemStruct',
      'doChangeItemFieldsResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doChangeItemFieldsResponse',
      'DoChangePriceItemRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoChangePriceItemRequest',
      'doChangePriceItemResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doChangePriceItemResponse',
      'DoChangeQuantityItemRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoChangeQuantityItemRequest',
      'doChangeQuantityItemResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doChangeQuantityItemResponse',
      'DoCheckItemDescriptionRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoCheckItemDescriptionRequest',
      'ItemDescriptionStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ItemDescriptionStruct',
      'doCheckItemDescriptionResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doCheckItemDescriptionResponse',
      'DoCheckNewAuctionExtRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoCheckNewAuctionExtRequest',
      'doCheckNewAuctionExtResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doCheckNewAuctionExtResponse',
      'DoFinishItemRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoFinishItemRequest',
      'doFinishItemResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doFinishItemResponse',
      'FinishItemsStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\FinishItemsStruct',
      'ArrayOfFinishitemsstruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ArrayOfFinishitemsstruct',
      'DoFinishItemsRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoFinishItemsRequest',
      'ArrayOfLong' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ArrayOfLong',
      'FinishFailureStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\FinishFailureStruct',
      'ArrayOfFinishfailurestruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ArrayOfFinishfailurestruct',
      'doFinishItemsResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doFinishItemsResponse',
      'DoGetBidItem2Request' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoGetBidItem2Request',
      'BidListStruct2' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\BidListStruct2',
      'ArrayOfBidliststruct2' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ArrayOfBidliststruct2',
      'doGetBidItem2Response' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doGetBidItem2Response',
      'DoGetBlackListUsersRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoGetBlackListUsersRequest',
      'BlackListStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\BlackListStruct',
      'ArrayOfBlackliststruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ArrayOfBlackliststruct',
      'doGetBlackListUsersResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doGetBlackListUsersResponse',
      'DoGetCategoryPathRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoGetCategoryPathRequest',
      'CategoryData' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\CategoryData',
      'ArrayOfCategorydata' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ArrayOfCategorydata',
      'doGetCategoryPathResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doGetCategoryPathResponse',
      'DoGetCatsDataRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoGetCatsDataRequest',
      'CatInfoType' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\CatInfoType',
      'ArrayOfCatinfotype' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ArrayOfCatinfotype',
      'doGetCatsDataResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doGetCatsDataResponse',
      'DoGetCatsDataCountRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoGetCatsDataCountRequest',
      'doGetCatsDataCountResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doGetCatsDataCountResponse',
      'DoGetCatsDataLimitRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoGetCatsDataLimitRequest',
      'doGetCatsDataLimitResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doGetCatsDataLimitResponse',
      'DoGetCountriesRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoGetCountriesRequest',
      'CountryInfoType' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\CountryInfoType',
      'ArrayOfCountryinfotype' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ArrayOfCountryinfotype',
      'doGetCountriesResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doGetCountriesResponse',
      'DoGetDealsRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoGetDealsRequest',
      'DealsStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DealsStruct',
      'ArrayOfDealsstruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ArrayOfDealsstruct',
      'doGetDealsResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doGetDealsResponse',
      'DoGetFilledPostBuyFormsRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoGetFilledPostBuyFormsRequest',
      'FilledPostBuyFormsStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\FilledPostBuyFormsStruct',
      'doGetFilledPostBuyFormsResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doGetFilledPostBuyFormsResponse',
      'DoGetFreeDeliveryAmountRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoGetFreeDeliveryAmountRequest',
      'doGetFreeDeliveryAmountResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doGetFreeDeliveryAmountResponse',
      'DoGetItemFieldsRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoGetItemFieldsRequest',
      'doGetItemFieldsResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doGetItemFieldsResponse',
      'DoGetItemsInfoRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoGetItemsInfoRequest',
      'DurationInfoStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DurationInfoStruct',
      'ItemInfo' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ItemInfo',
      'ItemCatList' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ItemCatList',
      'ArrayOfItemcatlist' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ArrayOfItemcatlist',
      'ItemImageList' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ItemImageList',
      'ArrayOfItemimagelist' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ArrayOfItemimagelist',
      'AttribStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\AttribStruct',
      'ArrayOfAttribstruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ArrayOfAttribstruct',
      'FulfillmentTimeStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\FulfillmentTimeStruct',
      'PostageStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\PostageStruct',
      'ArrayOfPostagestruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ArrayOfPostagestruct',
      'ItemPaymentOptions' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ItemPaymentOptions',
      'CompanyInfoStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\CompanyInfoStruct',
      'ProductParametersStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ProductParametersStruct',
      'ArrayOfProductparametersstruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ArrayOfProductparametersstruct',
      'ProductParametersGroupStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ProductParametersGroupStruct',
      'ArrayOfProductparametersgroupstruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ArrayOfProductparametersgroupstruct',
      'ProductStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ProductStruct',
      'ItemInfoStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ItemInfoStruct',
      'ArrayOfIteminfostruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ArrayOfIteminfostruct',
      'doGetItemsInfoResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doGetItemsInfoResponse',
      'SortOptionsStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\SortOptionsStruct',
      'DoGetMyBidItemsRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoGetMyBidItemsRequest',
      'ItemPriceStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ItemPriceStruct',
      'ArrayOfItempricestruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ArrayOfItempricestruct',
      'UserInfoStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\UserInfoStruct',
      'BidItemStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\BidItemStruct',
      'ArrayOfBiditemstruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ArrayOfBiditemstruct',
      'doGetMyBidItemsResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doGetMyBidItemsResponse',
      'DoGetMyCurrentShipmentPriceTypeRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoGetMyCurrentShipmentPriceTypeRequest',
      'doGetMyCurrentShipmentPriceTypeResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doGetMyCurrentShipmentPriceTypeResponse',
      'DoGetMyDataRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoGetMyDataRequest',
      'UserDataStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\UserDataStruct',
      'InvoiceDataStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\InvoiceDataStruct',
      'CompanyExtraDataStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\CompanyExtraDataStruct',
      'CompanySecondAddressStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\CompanySecondAddressStruct',
      'PharmacyDataStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\PharmacyDataStruct',
      'AlcoholDataStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\AlcoholDataStruct',
      'RelatedPersonsStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\RelatedPersonsStruct',
      'doGetMyDataResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doGetMyDataResponse',
      'FutureFilterOptionsStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\FutureFilterOptionsStruct',
      'DoGetMyFutureItemsRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoGetMyFutureItemsRequest',
      'FutureItemStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\FutureItemStruct',
      'ArrayOfFutureitemstruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ArrayOfFutureitemstruct',
      'doGetMyFutureItemsResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doGetMyFutureItemsResponse',
      'DoGetMyIncomingPaymentsRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoGetMyIncomingPaymentsRequest',
      'PaymentDetailsStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\PaymentDetailsStruct',
      'ArrayOfPaymentdetailsstruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ArrayOfPaymentdetailsstruct',
      'UserIncomingPaymentStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\UserIncomingPaymentStruct',
      'ArrayOfUserincomingpaymentstruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ArrayOfUserincomingpaymentstruct',
      'doGetMyIncomingPaymentsResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doGetMyIncomingPaymentsResponse',
      'DoGetMyIncomingPaymentsRefundsRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoGetMyIncomingPaymentsRefundsRequest',
      'UserIncomingPaymentRefundsStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\UserIncomingPaymentRefundsStruct',
      'ArrayOfUserincomingpaymentrefundsstruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ArrayOfUserincomingpaymentrefundsstruct',
      'doGetMyIncomingPaymentsRefundsResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doGetMyIncomingPaymentsRefundsResponse',
      'FilterPriceStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\FilterPriceStruct',
      'NotSoldFilterOptionsStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\NotSoldFilterOptionsStruct',
      'DoGetMyNotSoldItemsRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoGetMyNotSoldItemsRequest',
      'NotSoldItemStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\NotSoldItemStruct',
      'ArrayOfNotsolditemstruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ArrayOfNotsolditemstruct',
      'doGetMyNotSoldItemsResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doGetMyNotSoldItemsResponse',
      'DoGetMyNotWonItemsRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoGetMyNotWonItemsRequest',
      'NotWonItemStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\NotWonItemStruct',
      'ArrayOfNotwonitemstruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ArrayOfNotwonitemstruct',
      'doGetMyNotWonItemsResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doGetMyNotWonItemsResponse',
      'DoGetMyPaymentsInfoRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoGetMyPaymentsInfoRequest',
      'PaymentsUserDataStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\PaymentsUserDataStruct',
      'PayoutAutoFrequencyStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\PayoutAutoFrequencyStruct',
      'PayoutAutoSettingsStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\PayoutAutoSettingsStruct',
      'PaymentsPayoutStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\PaymentsPayoutStruct',
      'PaymentsInfoStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\PaymentsInfoStruct',
      'doGetMyPaymentsInfoResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doGetMyPaymentsInfoResponse',
      'DoGetMyPayoutsRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoGetMyPayoutsRequest',
      'UserPayoutStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\UserPayoutStruct',
      'ArrayOfUserpayoutstruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ArrayOfUserpayoutstruct',
      'doGetMyPayoutsResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doGetMyPayoutsResponse',
      'DoGetMyPayoutsDetailsRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoGetMyPayoutsDetailsRequest',
      'PayoutPaymentsStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\PayoutPaymentsStruct',
      'ArrayOfPayoutpaymentsstruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ArrayOfPayoutpaymentsstruct',
      'PayoutRefundFromStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\PayoutRefundFromStruct',
      'ArrayOfPayoutrefundfromstruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ArrayOfPayoutrefundfromstruct',
      'PayoutRefundToStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\PayoutRefundToStruct',
      'ArrayOfPayoutrefundtostruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ArrayOfPayoutrefundtostruct',
      'doGetMyPayoutsDetailsResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doGetMyPayoutsDetailsResponse',
      'SellFilterOptionsStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\SellFilterOptionsStruct',
      'DoGetMySellItemsRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoGetMySellItemsRequest',
      'SellItemStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\SellItemStruct',
      'ArrayOfSellitemstruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ArrayOfSellitemstruct',
      'doGetMySellItemsResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doGetMySellItemsResponse',
      'SoldFilterOptionsStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\SoldFilterOptionsStruct',
      'DoGetMySoldItemsRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoGetMySoldItemsRequest',
      'SoldItemStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\SoldItemStruct',
      'ArrayOfSolditemstruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ArrayOfSolditemstruct',
      'doGetMySoldItemsResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doGetMySoldItemsResponse',
      'DoGetMyWonItemsRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoGetMyWonItemsRequest',
      'WonItemStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\WonItemStruct',
      'ArrayOfWonitemstruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ArrayOfWonitemstruct',
      'doGetMyWonItemsResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doGetMyWonItemsResponse',
      'DoGetPaymentMethodsRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoGetPaymentMethodsRequest',
      'PaymentMethodStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\PaymentMethodStruct',
      'ArrayOfPaymentmethodstruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ArrayOfPaymentmethodstruct',
      'doGetPaymentMethodsResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doGetPaymentMethodsResponse',
      'DoGetPostBuyDataRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoGetPostBuyDataRequest',
      'UserSentToDataStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\UserSentToDataStruct',
      'UserPostBuyDataStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\UserPostBuyDataStruct',
      'ArrayOfUserpostbuydatastruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ArrayOfUserpostbuydatastruct',
      'ItemPostBuyDataStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ItemPostBuyDataStruct',
      'ArrayOfItempostbuydatastruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ArrayOfItempostbuydatastruct',
      'doGetPostBuyDataResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doGetPostBuyDataResponse',
      'DoGetPostBuyFormsDataForSellersRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoGetPostBuyFormsDataForSellersRequest',
      'PostBuyFormItemDealsVariantStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\PostBuyFormItemDealsVariantStruct',
      'PostBuyFormItemDealsAdditionalServiceStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\PostBuyFormItemDealsAdditionalServiceStruct',
      'ArrayOfPostbuyformitemdealsadditionalservicestruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ArrayOfPostbuyformitemdealsadditionalservicestruct',
      'PostBuyFormItemDealsStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\PostBuyFormItemDealsStruct',
      'ArrayOfPostbuyformitemdealsstruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ArrayOfPostbuyformitemdealsstruct',
      'PostBuyFormItemStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\PostBuyFormItemStruct',
      'ArrayOfPostbuyformitemstruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ArrayOfPostbuyformitemstruct',
      'PostBuyFormAddressStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\PostBuyFormAddressStruct',
      'PostBuyFormShipmentTrackingStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\PostBuyFormShipmentTrackingStruct',
      'ArrayOfPostbuyformshipmenttrackingstruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ArrayOfPostbuyformshipmenttrackingstruct',
      'PostBuyFormDataStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\PostBuyFormDataStruct',
      'ArrayOfPostbuyformdatastruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ArrayOfPostbuyformdatastruct',
      'doGetPostBuyFormsDataForSellersResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doGetPostBuyFormsDataForSellersResponse',
      'RangeValueType' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\RangeValueType',
      'FilterOptionsType' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\FilterOptionsType',
      'ArrayOfFilteroptionstype' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ArrayOfFilteroptionstype',
      'DoGetPostBuyFormsIdsRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoGetPostBuyFormsIdsRequest',
      'FilterValueType' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\FilterValueType',
      'ArrayOfFiltervaluetype' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ArrayOfFiltervaluetype',
      'FilterRelationType' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\FilterRelationType',
      'FiltersListType' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\FiltersListType',
      'ArrayOfFilterslisttype' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ArrayOfFilterslisttype',
      'doGetPostBuyFormsIdsResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doGetPostBuyFormsIdsResponse',
      'DoGetRefundsDealsRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoGetRefundsDealsRequest',
      'RefundsDealsListType' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\RefundsDealsListType',
      'ArrayOfRefundsdealslisttype' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ArrayOfRefundsdealslisttype',
      'doGetRefundsDealsResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doGetRefundsDealsResponse',
      'DoGetRefundsListRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoGetRefundsListRequest',
      'RefundDetailsType' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\RefundDetailsType',
      'RefundListType' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\RefundListType',
      'ArrayOfRefundlisttype' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ArrayOfRefundlisttype',
      'doGetRefundsListResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doGetRefundsListResponse',
      'DoGetRefundsReasonsRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoGetRefundsReasonsRequest',
      'ReasonInfoType' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ReasonInfoType',
      'ArrayOfReasoninfotype' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ArrayOfReasoninfotype',
      'doGetRefundsReasonsResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doGetRefundsReasonsResponse',
      'DoGetSellFormFieldsForCategoryRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoGetSellFormFieldsForCategoryRequest',
      'SellFormType' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\SellFormType',
      'ArrayOfSellformtype' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ArrayOfSellformtype',
      'SellFormFieldsForCategoryStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\SellFormFieldsForCategoryStruct',
      'doGetSellFormFieldsForCategoryResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doGetSellFormFieldsForCategoryResponse',
      'DoGetShipmentDataRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoGetShipmentDataRequest',
      'ShipmentTimeStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ShipmentTimeStruct',
      'ShipmentDataStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ShipmentDataStruct',
      'ArrayOfShipmentdatastruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ArrayOfShipmentdatastruct',
      'doGetShipmentDataResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doGetShipmentDataResponse',
      'DoGetShipmentPriceTypesRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoGetShipmentPriceTypesRequest',
      'ShipmentPriceTypeStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ShipmentPriceTypeStruct',
      'ArrayOfShipmentpricetypestruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ArrayOfShipmentpricetypestruct',
      'doGetShipmentPriceTypesResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doGetShipmentPriceTypesResponse',
      'DoGetSiteJournalRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoGetSiteJournalRequest',
      'SiteJournal' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\SiteJournal',
      'ArrayOfSitejournal' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ArrayOfSitejournal',
      'doGetSiteJournalResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doGetSiteJournalResponse',
      'DoGetSiteJournalDealsRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoGetSiteJournalDealsRequest',
      'SiteJournalDealsStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\SiteJournalDealsStruct',
      'ArrayOfSitejournaldealsstruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ArrayOfSitejournaldealsstruct',
      'doGetSiteJournalDealsResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doGetSiteJournalDealsResponse',
      'DoGetSiteJournalDealsInfoRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoGetSiteJournalDealsInfoRequest',
      'SiteJournalDealsInfoStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\SiteJournalDealsInfoStruct',
      'doGetSiteJournalDealsInfoResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doGetSiteJournalDealsInfoResponse',
      'DoGetSiteJournalInfoRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoGetSiteJournalInfoRequest',
      'SiteJournalInfo' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\SiteJournalInfo',
      'doGetSiteJournalInfoResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doGetSiteJournalInfoResponse',
      'DoGetStatesInfoRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoGetStatesInfoRequest',
      'StateInfoStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\StateInfoStruct',
      'ArrayOfStateinfostruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ArrayOfStateinfostruct',
      'doGetStatesInfoResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doGetStatesInfoResponse',
      'DoGetSystemTimeRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoGetSystemTimeRequest',
      'doGetSystemTimeResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doGetSystemTimeResponse',
      'DoGetTransactionsIDsRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoGetTransactionsIDsRequest',
      'doGetTransactionsIDsResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doGetTransactionsIDsResponse',
      'DoGetUserIDRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoGetUserIDRequest',
      'doGetUserIDResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doGetUserIDResponse',
      'DoGetUserLoginRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoGetUserLoginRequest',
      'doGetUserLoginResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doGetUserLoginResponse',
      'DoLoginRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoLoginRequest',
      'doLoginResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doLoginResponse',
      'DoLoginEncRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoLoginEncRequest',
      'doLoginEncResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doLoginEncResponse',
      'DoLoginWithAccessTokenRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoLoginWithAccessTokenRequest',
      'doLoginWithAccessTokenResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doLoginWithAccessTokenResponse',
      'DoMyAccount2Request' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoMyAccount2Request',
      'MyAccountStruct2' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\MyAccountStruct2',
      'ArrayOfMyaccountstruct2' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ArrayOfMyaccountstruct2',
      'doMyAccount2Response' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doMyAccount2Response',
      'DoMyAccountItemsCountRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoMyAccountItemsCountRequest',
      'doMyAccountItemsCountResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doMyAccountItemsCountResponse',
      'DoMyBillingRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoMyBillingRequest',
      'doMyBillingResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doMyBillingResponse',
      'DoMyBillingItemRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoMyBillingItemRequest',
      'ItemBilling' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ItemBilling',
      'ArrayOfItembilling' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ArrayOfItembilling',
      'doMyBillingItemResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doMyBillingItemResponse',
      'ItemTemplateCreateStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ItemTemplateCreateStruct',
      'DoNewAuctionExtRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoNewAuctionExtRequest',
      'doNewAuctionExtResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doNewAuctionExtResponse',
      'DoQueryAllSysStatusRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoQueryAllSysStatusRequest',
      'SysStatusType' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\SysStatusType',
      'ArrayOfSysstatustype' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ArrayOfSysstatustype',
      'doQueryAllSysStatusResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doQueryAllSysStatusResponse',
      'DoQuerySysStatusRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoQuerySysStatusRequest',
      'doQuerySysStatusResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doQuerySysStatusResponse',
      'DoRemoveFromBlackListRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoRemoveFromBlackListRequest',
      'BlackListResStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\BlackListResStruct',
      'ArrayOfBlacklistresstruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ArrayOfBlacklistresstruct',
      'doRemoveFromBlackListResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doRemoveFromBlackListResponse',
      'DoRequestPayoutRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoRequestPayoutRequest',
      'RequestPayoutStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\RequestPayoutStruct',
      'doRequestPayoutResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doRequestPayoutResponse',
      'DoSellSomeAgainRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoSellSomeAgainRequest',
      'StructSellAgain' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\StructSellAgain',
      'ArrayOfStructsellagain' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ArrayOfStructsellagain',
      'StructSellFailed' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\StructSellFailed',
      'ArrayOfStructsellfailed' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ArrayOfStructsellfailed',
      'doSellSomeAgainResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doSellSomeAgainResponse',
      'DoSellSomeAgainInShopRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoSellSomeAgainInShopRequest',
      'doSellSomeAgainInShopResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doSellSomeAgainInShopResponse',
      'DoSendEmailToUserRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoSendEmailToUserRequest',
      'doSendEmailToUserResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doSendEmailToUserResponse',
      'DoSendRefundFormRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoSendRefundFormRequest',
      'doSendRefundFormResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doSendRefundFormResponse',
      'DoSetFreeDeliveryAmountRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoSetFreeDeliveryAmountRequest',
      'doSetFreeDeliveryAmountResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doSetFreeDeliveryAmountResponse',
      'DoSetShipmentPriceTypeRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoSetShipmentPriceTypeRequest',
      'doSetShipmentPriceTypeResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doSetShipmentPriceTypeResponse',
      'DoShowItemInfoExtRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoShowItemInfoExtRequest',
      'ItemInfoExt' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ItemInfoExt',
      'doShowItemInfoExtResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doShowItemInfoExtResponse',
      'DoShowUserRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoShowUserRequest',
      'ShowUserFeedbacks' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ShowUserFeedbacks',
      'SellRatingAverageStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\SellRatingAverageStruct',
      'ArrayOfSellratingaveragestruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ArrayOfSellratingaveragestruct',
      'doShowUserResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doShowUserResponse',
      'DoVerifyItemRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoVerifyItemRequest',
      'doVerifyItemResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doVerifyItemResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = 'https://webapi.allegro.pl/service.php?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param DoAddPackageInfoToPostBuyFormRequest $parameters
     * @return doAddPackageInfoToPostBuyFormResponse
     */
    public function doAddPackageInfoToPostBuyForm(DoAddPackageInfoToPostBuyFormRequest $parameters)
    {
      return $this->__soapCall('doAddPackageInfoToPostBuyForm', array($parameters));
    }

    /**
     * @param DoAddToBlackListRequest $parameters
     * @return doAddToBlackListResponse
     */
    public function doAddToBlackList(DoAddToBlackListRequest $parameters)
    {
      return $this->__soapCall('doAddToBlackList', array($parameters));
    }

    /**
     * @param DoBidItemRequest $parameters
     * @return doBidItemResponse
     */
    public function doBidItem(DoBidItemRequest $parameters)
    {
      return $this->__soapCall('doBidItem', array($parameters));
    }

    /**
     * @param DoChangeItemFieldsRequest $parameters
     * @return doChangeItemFieldsResponse
     */
    public function doChangeItemFields(DoChangeItemFieldsRequest $parameters)
    {
      return $this->__soapCall('doChangeItemFields', array($parameters));
    }

    /**
     * @param DoChangePriceItemRequest $parameters
     * @return doChangePriceItemResponse
     */
    public function doChangePriceItem(DoChangePriceItemRequest $parameters)
    {
      return $this->__soapCall('doChangePriceItem', array($parameters));
    }

    /**
     * @param DoChangeQuantityItemRequest $parameters
     * @return doChangeQuantityItemResponse
     */
    public function doChangeQuantityItem(DoChangeQuantityItemRequest $parameters)
    {
      return $this->__soapCall('doChangeQuantityItem', array($parameters));
    }

    /**
     * @param DoCheckItemDescriptionRequest $parameters
     * @return doCheckItemDescriptionResponse
     */
    public function doCheckItemDescription(DoCheckItemDescriptionRequest $parameters)
    {
      return $this->__soapCall('doCheckItemDescription', array($parameters));
    }

    /**
     * @param DoCheckNewAuctionExtRequest $parameters
     * @return doCheckNewAuctionExtResponse
     */
    public function doCheckNewAuctionExt(DoCheckNewAuctionExtRequest $parameters)
    {
      return $this->__soapCall('doCheckNewAuctionExt', array($parameters));
    }

    /**
     * @param DoFinishItemRequest $parameters
     * @return doFinishItemResponse
     */
    public function doFinishItem(DoFinishItemRequest $parameters)
    {
      return $this->__soapCall('doFinishItem', array($parameters));
    }

    /**
     * @param DoFinishItemsRequest $parameters
     * @return doFinishItemsResponse
     */
    public function doFinishItems(DoFinishItemsRequest $parameters)
    {
      return $this->__soapCall('doFinishItems', array($parameters));
    }

    /**
     * @param DoGetBidItem2Request $parameters
     * @return doGetBidItem2Response
     */
    public function doGetBidItem2(DoGetBidItem2Request $parameters)
    {
      return $this->__soapCall('doGetBidItem2', array($parameters));
    }

    /**
     * @param DoGetBlackListUsersRequest $parameters
     * @return doGetBlackListUsersResponse
     */
    public function doGetBlackListUsers(DoGetBlackListUsersRequest $parameters)
    {
      return $this->__soapCall('doGetBlackListUsers', array($parameters));
    }

    /**
     * @param DoGetCategoryPathRequest $parameters
     * @return doGetCategoryPathResponse
     */
    public function doGetCategoryPath(DoGetCategoryPathRequest $parameters)
    {
      return $this->__soapCall('doGetCategoryPath', array($parameters));
    }

    /**
     * @param DoGetCatsDataRequest $parameters
     * @return doGetCatsDataResponse
     */
    public function doGetCatsData(DoGetCatsDataRequest $parameters)
    {
      return $this->__soapCall('doGetCatsData', array($parameters));
    }

    /**
     * @param DoGetCatsDataCountRequest $parameters
     * @return doGetCatsDataCountResponse
     */
    public function doGetCatsDataCount(DoGetCatsDataCountRequest $parameters)
    {
      return $this->__soapCall('doGetCatsDataCount', array($parameters));
    }

    /**
     * @param DoGetCatsDataLimitRequest $parameters
     * @return doGetCatsDataLimitResponse
     */
    public function doGetCatsDataLimit(DoGetCatsDataLimitRequest $parameters)
    {
      return $this->__soapCall('doGetCatsDataLimit', array($parameters));
    }

    /**
     * @param DoGetCountriesRequest $parameters
     * @return doGetCountriesResponse
     */
    public function doGetCountries(DoGetCountriesRequest $parameters)
    {
      return $this->__soapCall('doGetCountries', array($parameters));
    }

    /**
     * @param DoGetDealsRequest $parameters
     * @return doGetDealsResponse
     */
    public function doGetDeals(DoGetDealsRequest $parameters)
    {
      return $this->__soapCall('doGetDeals', array($parameters));
    }

    /**
     * @param DoGetFilledPostBuyFormsRequest $parameters
     * @return doGetFilledPostBuyFormsResponse
     */
    public function doGetFilledPostBuyForms(DoGetFilledPostBuyFormsRequest $parameters)
    {
      return $this->__soapCall('doGetFilledPostBuyForms', array($parameters));
    }

    /**
     * @param DoGetFreeDeliveryAmountRequest $parameters
     * @return doGetFreeDeliveryAmountResponse
     */
    public function doGetFreeDeliveryAmount(DoGetFreeDeliveryAmountRequest $parameters)
    {
      return $this->__soapCall('doGetFreeDeliveryAmount', array($parameters));
    }

    /**
     * @param DoGetItemFieldsRequest $parameters
     * @return doGetItemFieldsResponse
     */
    public function doGetItemFields(DoGetItemFieldsRequest $parameters)
    {
      return $this->__soapCall('doGetItemFields', array($parameters));
    }

    /**
     * @param DoGetItemsInfoRequest $parameters
     * @return doGetItemsInfoResponse
     */
    public function doGetItemsInfo(DoGetItemsInfoRequest $parameters)
    {
      return $this->__soapCall('doGetItemsInfo', array($parameters));
    }

    /**
     * @param DoGetMyBidItemsRequest $parameters
     * @return doGetMyBidItemsResponse
     */
    public function doGetMyBidItems(DoGetMyBidItemsRequest $parameters)
    {
      return $this->__soapCall('doGetMyBidItems', array($parameters));
    }

    /**
     * @param DoGetMyCurrentShipmentPriceTypeRequest $parameters
     * @return doGetMyCurrentShipmentPriceTypeResponse
     */
    public function doGetMyCurrentShipmentPriceType(DoGetMyCurrentShipmentPriceTypeRequest $parameters)
    {
      return $this->__soapCall('doGetMyCurrentShipmentPriceType', array($parameters));
    }

    /**
     * @param DoGetMyDataRequest $parameters
     * @return doGetMyDataResponse
     */
    public function doGetMyData(DoGetMyDataRequest $parameters)
    {
      return $this->__soapCall('doGetMyData', array($parameters));
    }

    /**
     * @param DoGetMyFutureItemsRequest $parameters
     * @return doGetMyFutureItemsResponse
     */
    public function doGetMyFutureItems(DoGetMyFutureItemsRequest $parameters)
    {
      return $this->__soapCall('doGetMyFutureItems', array($parameters));
    }

    /**
     * @param DoGetMyIncomingPaymentsRequest $parameters
     * @return doGetMyIncomingPaymentsResponse
     */
    public function doGetMyIncomingPayments(DoGetMyIncomingPaymentsRequest $parameters)
    {
      return $this->__soapCall('doGetMyIncomingPayments', array($parameters));
    }

    /**
     * @param DoGetMyIncomingPaymentsRefundsRequest $parameters
     * @return doGetMyIncomingPaymentsRefundsResponse
     */
    public function doGetMyIncomingPaymentsRefunds(DoGetMyIncomingPaymentsRefundsRequest $parameters)
    {
      return $this->__soapCall('doGetMyIncomingPaymentsRefunds', array($parameters));
    }

    /**
     * @param DoGetMyNotSoldItemsRequest $parameters
     * @return doGetMyNotSoldItemsResponse
     */
    public function doGetMyNotSoldItems(DoGetMyNotSoldItemsRequest $parameters)
    {
      return $this->__soapCall('doGetMyNotSoldItems', array($parameters));
    }

    /**
     * @param DoGetMyNotWonItemsRequest $parameters
     * @return doGetMyNotWonItemsResponse
     */
    public function doGetMyNotWonItems(DoGetMyNotWonItemsRequest $parameters)
    {
      return $this->__soapCall('doGetMyNotWonItems', array($parameters));
    }

    /**
     * @param DoGetMyPaymentsInfoRequest $parameters
     * @return doGetMyPaymentsInfoResponse
     */
    public function doGetMyPaymentsInfo(DoGetMyPaymentsInfoRequest $parameters)
    {
      return $this->__soapCall('doGetMyPaymentsInfo', array($parameters));
    }

    /**
     * @param DoGetMyPayoutsRequest $parameters
     * @return doGetMyPayoutsResponse
     */
    public function doGetMyPayouts(DoGetMyPayoutsRequest $parameters)
    {
      return $this->__soapCall('doGetMyPayouts', array($parameters));
    }

    /**
     * @param DoGetMyPayoutsDetailsRequest $parameters
     * @return doGetMyPayoutsDetailsResponse
     */
    public function doGetMyPayoutsDetails(DoGetMyPayoutsDetailsRequest $parameters)
    {
      return $this->__soapCall('doGetMyPayoutsDetails', array($parameters));
    }

    /**
     * @param DoGetMySellItemsRequest $parameters
     * @return doGetMySellItemsResponse
     */
    public function doGetMySellItems(DoGetMySellItemsRequest $parameters)
    {
      return $this->__soapCall('doGetMySellItems', array($parameters));
    }

    /**
     * @param DoGetMySoldItemsRequest $parameters
     * @return doGetMySoldItemsResponse
     */
    public function doGetMySoldItems(DoGetMySoldItemsRequest $parameters)
    {
      return $this->__soapCall('doGetMySoldItems', array($parameters));
    }

    /**
     * @param DoGetMyWonItemsRequest $parameters
     * @return doGetMyWonItemsResponse
     */
    public function doGetMyWonItems(DoGetMyWonItemsRequest $parameters)
    {
      return $this->__soapCall('doGetMyWonItems', array($parameters));
    }

    /**
     * @param DoGetPaymentMethodsRequest $parameters
     * @return doGetPaymentMethodsResponse
     */
    public function doGetPaymentMethods(DoGetPaymentMethodsRequest $parameters)
    {
      return $this->__soapCall('doGetPaymentMethods', array($parameters));
    }

    /**
     * @param DoGetPostBuyDataRequest $parameters
     * @return doGetPostBuyDataResponse
     */
    public function doGetPostBuyData(DoGetPostBuyDataRequest $parameters)
    {
      return $this->__soapCall('doGetPostBuyData', array($parameters));
    }

    /**
     * @param DoGetPostBuyFormsDataForSellersRequest $parameters
     * @return doGetPostBuyFormsDataForSellersResponse
     */
    public function doGetPostBuyFormsDataForSellers(DoGetPostBuyFormsDataForSellersRequest $parameters)
    {
      return $this->__soapCall('doGetPostBuyFormsDataForSellers', array($parameters));
    }

    /**
     * @param DoGetPostBuyFormsIdsRequest $parameters
     * @return doGetPostBuyFormsIdsResponse
     */
    public function doGetPostBuyFormsIds(DoGetPostBuyFormsIdsRequest $parameters)
    {
      return $this->__soapCall('doGetPostBuyFormsIds', array($parameters));
    }

    /**
     * @param DoGetRefundsDealsRequest $parameters
     * @return doGetRefundsDealsResponse
     */
    public function doGetRefundsDeals(DoGetRefundsDealsRequest $parameters)
    {
      return $this->__soapCall('doGetRefundsDeals', array($parameters));
    }

    /**
     * @param DoGetRefundsListRequest $parameters
     * @return doGetRefundsListResponse
     */
    public function doGetRefundsList(DoGetRefundsListRequest $parameters)
    {
      return $this->__soapCall('doGetRefundsList', array($parameters));
    }

    /**
     * @param DoGetRefundsReasonsRequest $parameters
     * @return doGetRefundsReasonsResponse
     */
    public function doGetRefundsReasons(DoGetRefundsReasonsRequest $parameters)
    {
      return $this->__soapCall('doGetRefundsReasons', array($parameters));
    }

    /**
     * @param DoGetSellFormFieldsForCategoryRequest $parameters
     * @return doGetSellFormFieldsForCategoryResponse
     */
    public function doGetSellFormFieldsForCategory(DoGetSellFormFieldsForCategoryRequest $parameters)
    {
      return $this->__soapCall('doGetSellFormFieldsForCategory', array($parameters));
    }

    /**
     * @param DoGetShipmentDataRequest $parameters
     * @return doGetShipmentDataResponse
     */
    public function doGetShipmentData(DoGetShipmentDataRequest $parameters)
    {
      return $this->__soapCall('doGetShipmentData', array($parameters));
    }

    /**
     * @param DoGetShipmentPriceTypesRequest $parameters
     * @return doGetShipmentPriceTypesResponse
     */
    public function doGetShipmentPriceTypes(DoGetShipmentPriceTypesRequest $parameters)
    {
      return $this->__soapCall('doGetShipmentPriceTypes', array($parameters));
    }

    /**
     * @param DoGetSiteJournalRequest $parameters
     * @return doGetSiteJournalResponse
     */
    public function doGetSiteJournal(DoGetSiteJournalRequest $parameters)
    {
      return $this->__soapCall('doGetSiteJournal', array($parameters));
    }

    /**
     * @param DoGetSiteJournalDealsRequest $parameters
     * @return doGetSiteJournalDealsResponse
     */
    public function doGetSiteJournalDeals(DoGetSiteJournalDealsRequest $parameters)
    {
      return $this->__soapCall('doGetSiteJournalDeals', array($parameters));
    }

    /**
     * @param DoGetSiteJournalDealsInfoRequest $parameters
     * @return doGetSiteJournalDealsInfoResponse
     */
    public function doGetSiteJournalDealsInfo(DoGetSiteJournalDealsInfoRequest $parameters)
    {
      return $this->__soapCall('doGetSiteJournalDealsInfo', array($parameters));
    }

    /**
     * @param DoGetSiteJournalInfoRequest $parameters
     * @return doGetSiteJournalInfoResponse
     */
    public function doGetSiteJournalInfo(DoGetSiteJournalInfoRequest $parameters)
    {
      return $this->__soapCall('doGetSiteJournalInfo', array($parameters));
    }

    /**
     * @param DoGetStatesInfoRequest $parameters
     * @return doGetStatesInfoResponse
     */
    public function doGetStatesInfo(DoGetStatesInfoRequest $parameters)
    {
      return $this->__soapCall('doGetStatesInfo', array($parameters));
    }

    /**
     * @param DoGetSystemTimeRequest $parameters
     * @return doGetSystemTimeResponse
     */
    public function doGetSystemTime(DoGetSystemTimeRequest $parameters)
    {
      return $this->__soapCall('doGetSystemTime', array($parameters));
    }

    /**
     * @param DoGetTransactionsIDsRequest $parameters
     * @return doGetTransactionsIDsResponse
     */
    public function doGetTransactionsIDs(DoGetTransactionsIDsRequest $parameters)
    {
      return $this->__soapCall('doGetTransactionsIDs', array($parameters));
    }

    /**
     * @param DoGetUserIDRequest $parameters
     * @return doGetUserIDResponse
     */
    public function doGetUserID(DoGetUserIDRequest $parameters)
    {
      return $this->__soapCall('doGetUserID', array($parameters));
    }

    /**
     * @param DoGetUserLoginRequest $parameters
     * @return doGetUserLoginResponse
     */
    public function doGetUserLogin(DoGetUserLoginRequest $parameters)
    {
      return $this->__soapCall('doGetUserLogin', array($parameters));
    }

    /**
     * @param DoLoginRequest $parameters
     * @return doLoginResponse
     */
    public function doLogin(DoLoginRequest $parameters)
    {
      return $this->__soapCall('doLogin', array($parameters));
    }

    /**
     * @param DoLoginEncRequest $parameters
     * @return doLoginEncResponse
     */
    public function doLoginEnc(DoLoginEncRequest $parameters)
    {
      return $this->__soapCall('doLoginEnc', array($parameters));
    }

    /**
     * @param DoLoginWithAccessTokenRequest $parameters
     * @return doLoginWithAccessTokenResponse
     */
    public function doLoginWithAccessToken(DoLoginWithAccessTokenRequest $parameters)
    {
      return $this->__soapCall('doLoginWithAccessToken', array($parameters));
    }

    /**
     * @param DoMyAccount2Request $parameters
     * @return doMyAccount2Response
     */
    public function doMyAccount2(DoMyAccount2Request $parameters)
    {
      return $this->__soapCall('doMyAccount2', array($parameters));
    }

    /**
     * @param DoMyAccountItemsCountRequest $parameters
     * @return doMyAccountItemsCountResponse
     */
    public function doMyAccountItemsCount(DoMyAccountItemsCountRequest $parameters)
    {
      return $this->__soapCall('doMyAccountItemsCount', array($parameters));
    }

    /**
     * @param DoMyBillingRequest $parameters
     * @return doMyBillingResponse
     */
    public function doMyBilling(DoMyBillingRequest $parameters)
    {
      return $this->__soapCall('doMyBilling', array($parameters));
    }

    /**
     * @param DoMyBillingItemRequest $parameters
     * @return doMyBillingItemResponse
     */
    public function doMyBillingItem(DoMyBillingItemRequest $parameters)
    {
      return $this->__soapCall('doMyBillingItem', array($parameters));
    }

    /**
     * @param DoNewAuctionExtRequest $parameters
     * @return doNewAuctionExtResponse
     */
    public function doNewAuctionExt(DoNewAuctionExtRequest $parameters)
    {
      return $this->__soapCall('doNewAuctionExt', array($parameters));
    }

    /**
     * @param DoQueryAllSysStatusRequest $parameters
     * @return doQueryAllSysStatusResponse
     */
    public function doQueryAllSysStatus(DoQueryAllSysStatusRequest $parameters)
    {
      return $this->__soapCall('doQueryAllSysStatus', array($parameters));
    }

    /**
     * @param DoQuerySysStatusRequest $parameters
     * @return doQuerySysStatusResponse
     */
    public function doQuerySysStatus(DoQuerySysStatusRequest $parameters)
    {
      return $this->__soapCall('doQuerySysStatus', array($parameters));
    }

    /**
     * @param DoRemoveFromBlackListRequest $parameters
     * @return doRemoveFromBlackListResponse
     */
    public function doRemoveFromBlackList(DoRemoveFromBlackListRequest $parameters)
    {
      return $this->__soapCall('doRemoveFromBlackList', array($parameters));
    }

    /**
     * @param DoRequestPayoutRequest $parameters
     * @return doRequestPayoutResponse
     */
    public function doRequestPayout(DoRequestPayoutRequest $parameters)
    {
      return $this->__soapCall('doRequestPayout', array($parameters));
    }

    /**
     * @param DoSellSomeAgainRequest $parameters
     * @return doSellSomeAgainResponse
     */
    public function doSellSomeAgain(DoSellSomeAgainRequest $parameters)
    {
      return $this->__soapCall('doSellSomeAgain', array($parameters));
    }

    /**
     * @param DoSellSomeAgainInShopRequest $parameters
     * @return doSellSomeAgainInShopResponse
     */
    public function doSellSomeAgainInShop(DoSellSomeAgainInShopRequest $parameters)
    {
      return $this->__soapCall('doSellSomeAgainInShop', array($parameters));
    }

    /**
     * @param DoSendEmailToUserRequest $parameters
     * @return doSendEmailToUserResponse
     */
    public function doSendEmailToUser(DoSendEmailToUserRequest $parameters)
    {
      return $this->__soapCall('doSendEmailToUser', array($parameters));
    }

    /**
     * @param DoSendRefundFormRequest $parameters
     * @return doSendRefundFormResponse
     */
    public function doSendRefundForm(DoSendRefundFormRequest $parameters)
    {
      return $this->__soapCall('doSendRefundForm', array($parameters));
    }

    /**
     * @param DoSetFreeDeliveryAmountRequest $parameters
     * @return doSetFreeDeliveryAmountResponse
     */
    public function doSetFreeDeliveryAmount(DoSetFreeDeliveryAmountRequest $parameters)
    {
      return $this->__soapCall('doSetFreeDeliveryAmount', array($parameters));
    }

    /**
     * @param DoSetShipmentPriceTypeRequest $parameters
     * @return doSetShipmentPriceTypeResponse
     */
    public function doSetShipmentPriceType(DoSetShipmentPriceTypeRequest $parameters)
    {
      return $this->__soapCall('doSetShipmentPriceType', array($parameters));
    }

    /**
     * @param DoShowItemInfoExtRequest $parameters
     * @return doShowItemInfoExtResponse
     */
    public function doShowItemInfoExt(DoShowItemInfoExtRequest $parameters)
    {
      return $this->__soapCall('doShowItemInfoExt', array($parameters));
    }

    /**
     * @param DoShowUserRequest $parameters
     * @return doShowUserResponse
     */
    public function doShowUser(DoShowUserRequest $parameters)
    {
      return $this->__soapCall('doShowUser', array($parameters));
    }

    /**
     * @param DoVerifyItemRequest $parameters
     * @return doVerifyItemResponse
     */
    public function doVerifyItem(DoVerifyItemRequest $parameters)
    {
      return $this->__soapCall('doVerifyItem', array($parameters));
    }

}
