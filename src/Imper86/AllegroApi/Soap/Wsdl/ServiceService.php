<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class ServiceService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'PackageInfoStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\PackageInfoStruct',
      'ArrayOfPackageinfostruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfPackageinfostruct',
      'DoAddPackageInfoToPostBuyFormRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoAddPackageInfoToPostBuyFormRequest',
      'ArrayOfString' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfString',
      'PostBuyFormPackageInfoStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\PostBuyFormPackageInfoStruct',
      'doAddPackageInfoToPostBuyFormResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doAddPackageInfoToPostBuyFormResponse',
      'UserBlackListStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\UserBlackListStruct',
      'ArrayOfUserblackliststruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfUserblackliststruct',
      'DoAddToBlackListRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoAddToBlackListRequest',
      'UserBlackListAddResultStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\UserBlackListAddResultStruct',
      'ArrayOfUserblacklistaddresultstruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfUserblacklistaddresultstruct',
      'doAddToBlackListResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doAddToBlackListResponse',
      'PharmacyRecipientDataStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\PharmacyRecipientDataStruct',
      'DoBidItemRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoBidItemRequest',
      'doBidItemResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doBidItemResponse',
      'DoCancelRefundFormRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoCancelRefundFormRequest',
      'doCancelRefundFormResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doCancelRefundFormResponse',
      'RangeIntValueStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\RangeIntValueStruct',
      'RangeFloatValueStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\RangeFloatValueStruct',
      'RangeDateValueStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\RangeDateValueStruct',
      'FieldsValue' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\FieldsValue',
      'ArrayOfFieldsvalue' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfFieldsvalue',
      'ArrayOfInt' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfInt',
      'VariantQuantityStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\VariantQuantityStruct',
      'ArrayOfVariantquantitystruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfVariantquantitystruct',
      'VariantStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\VariantStruct',
      'ArrayOfVariantstruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfVariantstruct',
      'TagNameStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\TagNameStruct',
      'ArrayOfTagnamestruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfTagnamestruct',
      'AfterSalesServiceConditionsStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\AfterSalesServiceConditionsStruct',
      'DoChangeItemFieldsRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoChangeItemFieldsRequest',
      'AmountStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\AmountStruct',
      'ItemSurchargeStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ItemSurchargeStruct',
      'ArrayOfItemsurchargestruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfItemsurchargestruct',
      'ChangedItemStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ChangedItemStruct',
      'doChangeItemFieldsResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doChangeItemFieldsResponse',
      'DoChangePriceItemRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoChangePriceItemRequest',
      'doChangePriceItemResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doChangePriceItemResponse',
      'DoChangeQuantityItemRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoChangeQuantityItemRequest',
      'doChangeQuantityItemResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doChangeQuantityItemResponse',
      'DoCheckItemDescriptionRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoCheckItemDescriptionRequest',
      'ItemDescriptionStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ItemDescriptionStruct',
      'doCheckItemDescriptionResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doCheckItemDescriptionResponse',
      'DoCheckNewAuctionExtRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoCheckNewAuctionExtRequest',
      'doCheckNewAuctionExtResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doCheckNewAuctionExtResponse',
      'DoFinishItemRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoFinishItemRequest',
      'doFinishItemResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doFinishItemResponse',
      'FinishItemsStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\FinishItemsStruct',
      'ArrayOfFinishitemsstruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfFinishitemsstruct',
      'DoFinishItemsRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoFinishItemsRequest',
      'ArrayOfLong' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfLong',
      'FinishFailureStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\FinishFailureStruct',
      'ArrayOfFinishfailurestruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfFinishfailurestruct',
      'doFinishItemsResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doFinishItemsResponse',
      'DoGetBidItem2Request' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoGetBidItem2Request',
      'BidListStruct2' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\BidListStruct2',
      'ArrayOfBidliststruct2' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfBidliststruct2',
      'doGetBidItem2Response' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doGetBidItem2Response',
      'DoGetBlackListUsersRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoGetBlackListUsersRequest',
      'BlackListStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\BlackListStruct',
      'ArrayOfBlackliststruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfBlackliststruct',
      'doGetBlackListUsersResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doGetBlackListUsersResponse',
      'DoGetCategoryPathRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoGetCategoryPathRequest',
      'CategoryData' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\CategoryData',
      'ArrayOfCategorydata' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfCategorydata',
      'doGetCategoryPathResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doGetCategoryPathResponse',
      'DoGetCatsDataRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoGetCatsDataRequest',
      'CatInfoType' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\CatInfoType',
      'ArrayOfCatinfotype' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfCatinfotype',
      'doGetCatsDataResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doGetCatsDataResponse',
      'DoGetCatsDataCountRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoGetCatsDataCountRequest',
      'doGetCatsDataCountResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doGetCatsDataCountResponse',
      'DoGetCatsDataLimitRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoGetCatsDataLimitRequest',
      'doGetCatsDataLimitResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doGetCatsDataLimitResponse',
      'DoGetCountriesRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoGetCountriesRequest',
      'CountryInfoType' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\CountryInfoType',
      'ArrayOfCountryinfotype' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfCountryinfotype',
      'doGetCountriesResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doGetCountriesResponse',
      'DoGetDealsRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoGetDealsRequest',
      'DealsStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DealsStruct',
      'ArrayOfDealsstruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfDealsstruct',
      'doGetDealsResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doGetDealsResponse',
      'DoGetFilledPostBuyFormsRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoGetFilledPostBuyFormsRequest',
      'FilledPostBuyFormsStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\FilledPostBuyFormsStruct',
      'doGetFilledPostBuyFormsResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doGetFilledPostBuyFormsResponse',
      'DoGetFreeDeliveryAmountRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoGetFreeDeliveryAmountRequest',
      'doGetFreeDeliveryAmountResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doGetFreeDeliveryAmountResponse',
      'DoGetItemFieldsRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoGetItemFieldsRequest',
      'doGetItemFieldsResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doGetItemFieldsResponse',
      'DoGetItemsInfoRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoGetItemsInfoRequest',
      'DurationInfoStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DurationInfoStruct',
      'ItemInfo' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ItemInfo',
      'ItemCatList' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ItemCatList',
      'ArrayOfItemcatlist' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfItemcatlist',
      'ItemImageList' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ItemImageList',
      'ArrayOfItemimagelist' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfItemimagelist',
      'AttribStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\AttribStruct',
      'ArrayOfAttribstruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfAttribstruct',
      'FulfillmentTimeStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\FulfillmentTimeStruct',
      'PostageStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\PostageStruct',
      'ArrayOfPostagestruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfPostagestruct',
      'ItemPaymentOptions' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ItemPaymentOptions',
      'CompanyInfoStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\CompanyInfoStruct',
      'ProductParametersStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ProductParametersStruct',
      'ArrayOfProductparametersstruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfProductparametersstruct',
      'ProductParametersGroupStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ProductParametersGroupStruct',
      'ArrayOfProductparametersgroupstruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfProductparametersgroupstruct',
      'ProductStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ProductStruct',
      'ItemInfoStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ItemInfoStruct',
      'ArrayOfIteminfostruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfIteminfostruct',
      'doGetItemsInfoResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doGetItemsInfoResponse',
      'RangeValueType' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\RangeValueType',
      'FilterOptionsType' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\FilterOptionsType',
      'ArrayOfFilteroptionstype' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfFilteroptionstype',
      'SortOptionsType' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\SortOptionsType',
      'DoGetItemsListRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoGetItemsListRequest',
      'UserInfoType' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\UserInfoType',
      'PriceInfoType' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\PriceInfoType',
      'ArrayOfPriceinfotype' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfPriceinfotype',
      'PhotoInfoType' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\PhotoInfoType',
      'ArrayOfPhotoinfotype' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfPhotoinfotype',
      'ParameterInfoType' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ParameterInfoType',
      'ArrayOfParameterinfotype' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfParameterinfotype',
      'AdvertInfoType' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\AdvertInfoType',
      'ItemsListType' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ItemsListType',
      'ArrayOfItemslisttype' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfItemslisttype',
      'CategoryTreeType' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\CategoryTreeType',
      'ArrayOfCategorytreetype' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfCategorytreetype',
      'CategoryPathType' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\CategoryPathType',
      'ArrayOfCategorypathtype' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfCategorypathtype',
      'CategoriesListType' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\CategoriesListType',
      'FilterValueType' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\FilterValueType',
      'ArrayOfFiltervaluetype' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfFiltervaluetype',
      'FilterRelationType' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\FilterRelationType',
      'FiltersListType' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\FiltersListType',
      'ArrayOfFilterslisttype' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfFilterslisttype',
      'doGetItemsListResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doGetItemsListResponse',
      'SortOptionsStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\SortOptionsStruct',
      'DoGetMyBidItemsRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoGetMyBidItemsRequest',
      'ItemPriceStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ItemPriceStruct',
      'ArrayOfItempricestruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfItempricestruct',
      'UserInfoStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\UserInfoStruct',
      'BidItemStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\BidItemStruct',
      'ArrayOfBiditemstruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfBiditemstruct',
      'doGetMyBidItemsResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doGetMyBidItemsResponse',
      'DoGetMyCurrentShipmentPriceTypeRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoGetMyCurrentShipmentPriceTypeRequest',
      'doGetMyCurrentShipmentPriceTypeResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doGetMyCurrentShipmentPriceTypeResponse',
      'DoGetMyDataRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoGetMyDataRequest',
      'UserDataStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\UserDataStruct',
      'InvoiceDataStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\InvoiceDataStruct',
      'CompanyExtraDataStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\CompanyExtraDataStruct',
      'CompanySecondAddressStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\CompanySecondAddressStruct',
      'PharmacyDataStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\PharmacyDataStruct',
      'AlcoholDataStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\AlcoholDataStruct',
      'RelatedPersonsStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\RelatedPersonsStruct',
      'doGetMyDataResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doGetMyDataResponse',
      'FutureFilterOptionsStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\FutureFilterOptionsStruct',
      'DoGetMyFutureItemsRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoGetMyFutureItemsRequest',
      'FutureItemStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\FutureItemStruct',
      'ArrayOfFutureitemstruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfFutureitemstruct',
      'doGetMyFutureItemsResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doGetMyFutureItemsResponse',
      'DoGetMyIncomingPaymentsRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoGetMyIncomingPaymentsRequest',
      'PaymentDetailsStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\PaymentDetailsStruct',
      'ArrayOfPaymentdetailsstruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfPaymentdetailsstruct',
      'UserIncomingPaymentStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\UserIncomingPaymentStruct',
      'ArrayOfUserincomingpaymentstruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfUserincomingpaymentstruct',
      'doGetMyIncomingPaymentsResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doGetMyIncomingPaymentsResponse',
      'DoGetMyIncomingPaymentsRefundsRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoGetMyIncomingPaymentsRefundsRequest',
      'UserIncomingPaymentRefundsStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\UserIncomingPaymentRefundsStruct',
      'ArrayOfUserincomingpaymentrefundsstruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfUserincomingpaymentrefundsstruct',
      'doGetMyIncomingPaymentsRefundsResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doGetMyIncomingPaymentsRefundsResponse',
      'FilterPriceStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\FilterPriceStruct',
      'NotSoldFilterOptionsStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\NotSoldFilterOptionsStruct',
      'DoGetMyNotSoldItemsRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoGetMyNotSoldItemsRequest',
      'NotSoldItemStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\NotSoldItemStruct',
      'ArrayOfNotsolditemstruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfNotsolditemstruct',
      'doGetMyNotSoldItemsResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doGetMyNotSoldItemsResponse',
      'DoGetMyNotWonItemsRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoGetMyNotWonItemsRequest',
      'NotWonItemStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\NotWonItemStruct',
      'ArrayOfNotwonitemstruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfNotwonitemstruct',
      'doGetMyNotWonItemsResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doGetMyNotWonItemsResponse',
      'DoGetMyPaymentsRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoGetMyPaymentsRequest',
      'PaymentItemsStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\PaymentItemsStruct',
      'ArrayOfPaymentitemsstruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfPaymentitemsstruct',
      'PaymentSellersStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\PaymentSellersStruct',
      'ArrayOfPaymentsellersstruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfPaymentsellersstruct',
      'UserPaymentStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\UserPaymentStruct',
      'ArrayOfUserpaymentstruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfUserpaymentstruct',
      'doGetMyPaymentsResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doGetMyPaymentsResponse',
      'DoGetMyPaymentsInfoRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoGetMyPaymentsInfoRequest',
      'PaymentsUserDataStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\PaymentsUserDataStruct',
      'PayoutAutoFrequencyStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\PayoutAutoFrequencyStruct',
      'PayoutAutoSettingsStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\PayoutAutoSettingsStruct',
      'PaymentsPayoutStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\PaymentsPayoutStruct',
      'PaymentsInfoStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\PaymentsInfoStruct',
      'doGetMyPaymentsInfoResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doGetMyPaymentsInfoResponse',
      'DoGetMyPayoutsRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoGetMyPayoutsRequest',
      'UserPayoutStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\UserPayoutStruct',
      'ArrayOfUserpayoutstruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfUserpayoutstruct',
      'doGetMyPayoutsResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doGetMyPayoutsResponse',
      'DoGetMyPayoutsDetailsRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoGetMyPayoutsDetailsRequest',
      'PayoutPaymentsStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\PayoutPaymentsStruct',
      'ArrayOfPayoutpaymentsstruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfPayoutpaymentsstruct',
      'PayoutRefundFromStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\PayoutRefundFromStruct',
      'ArrayOfPayoutrefundfromstruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfPayoutrefundfromstruct',
      'PayoutRefundToStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\PayoutRefundToStruct',
      'ArrayOfPayoutrefundtostruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfPayoutrefundtostruct',
      'doGetMyPayoutsDetailsResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doGetMyPayoutsDetailsResponse',
      'SellFilterOptionsStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\SellFilterOptionsStruct',
      'DoGetMySellItemsRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoGetMySellItemsRequest',
      'SellItemStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\SellItemStruct',
      'ArrayOfSellitemstruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfSellitemstruct',
      'doGetMySellItemsResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doGetMySellItemsResponse',
      'SoldFilterOptionsStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\SoldFilterOptionsStruct',
      'DoGetMySoldItemsRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoGetMySoldItemsRequest',
      'SoldItemStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\SoldItemStruct',
      'ArrayOfSolditemstruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfSolditemstruct',
      'doGetMySoldItemsResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doGetMySoldItemsResponse',
      'DoGetMyWonItemsRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoGetMyWonItemsRequest',
      'WonItemStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\WonItemStruct',
      'ArrayOfWonitemstruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfWonitemstruct',
      'doGetMyWonItemsResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doGetMyWonItemsResponse',
      'DoGetPaymentMethodsRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoGetPaymentMethodsRequest',
      'PaymentMethodStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\PaymentMethodStruct',
      'ArrayOfPaymentmethodstruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfPaymentmethodstruct',
      'doGetPaymentMethodsResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doGetPaymentMethodsResponse',
      'DoGetPostBuyDataRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoGetPostBuyDataRequest',
      'UserSentToDataStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\UserSentToDataStruct',
      'UserPostBuyDataStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\UserPostBuyDataStruct',
      'ArrayOfUserpostbuydatastruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfUserpostbuydatastruct',
      'ItemPostBuyDataStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ItemPostBuyDataStruct',
      'ArrayOfItempostbuydatastruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfItempostbuydatastruct',
      'doGetPostBuyDataResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doGetPostBuyDataResponse',
      'DoGetPostBuyFormsDataForBuyersRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoGetPostBuyFormsDataForBuyersRequest',
      'PostBuyFormItemDealsVariantStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\PostBuyFormItemDealsVariantStruct',
      'PostBuyFormItemDealsAdditionalServiceStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\PostBuyFormItemDealsAdditionalServiceStruct',
      'ArrayOfPostbuyformitemdealsadditionalservicestruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfPostbuyformitemdealsadditionalservicestruct',
      'PostBuyFormItemDealsStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\PostBuyFormItemDealsStruct',
      'ArrayOfPostbuyformitemdealsstruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfPostbuyformitemdealsstruct',
      'PostBuyFormItemStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\PostBuyFormItemStruct',
      'ArrayOfPostbuyformitemstruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfPostbuyformitemstruct',
      'PostBuyFormShipmentTrackingStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\PostBuyFormShipmentTrackingStruct',
      'ArrayOfPostbuyformshipmenttrackingstruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfPostbuyformshipmenttrackingstruct',
      'PostBuyFormAddressStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\PostBuyFormAddressStruct',
      'PostBuyFormSellersStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\PostBuyFormSellersStruct',
      'ArrayOfPostbuyformsellersstruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfPostbuyformsellersstruct',
      'PostBuyFormForBuyersDataStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\PostBuyFormForBuyersDataStruct',
      'ArrayOfPostbuyformforbuyersdatastruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfPostbuyformforbuyersdatastruct',
      'doGetPostBuyFormsDataForBuyersResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doGetPostBuyFormsDataForBuyersResponse',
      'DoGetPostBuyFormsDataForSellersRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoGetPostBuyFormsDataForSellersRequest',
      'PostBuyFormDataStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\PostBuyFormDataStruct',
      'ArrayOfPostbuyformdatastruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfPostbuyformdatastruct',
      'doGetPostBuyFormsDataForSellersResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doGetPostBuyFormsDataForSellersResponse',
      'DoGetPostBuyFormsIdsRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoGetPostBuyFormsIdsRequest',
      'doGetPostBuyFormsIdsResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doGetPostBuyFormsIdsResponse',
      'DoGetPostBuyItemInfoRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoGetPostBuyItemInfoRequest',
      'PostBuyItemInfoStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\PostBuyItemInfoStruct',
      'ArrayOfPostbuyiteminfostruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfPostbuyiteminfostruct',
      'doGetPostBuyItemInfoResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doGetPostBuyItemInfoResponse',
      'DoGetRefundsDealsRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoGetRefundsDealsRequest',
      'RefundsDealsListType' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\RefundsDealsListType',
      'ArrayOfRefundsdealslisttype' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfRefundsdealslisttype',
      'doGetRefundsDealsResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doGetRefundsDealsResponse',
      'DoGetRefundsListRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoGetRefundsListRequest',
      'RefundDetailsType' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\RefundDetailsType',
      'RefundListType' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\RefundListType',
      'ArrayOfRefundlisttype' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfRefundlisttype',
      'doGetRefundsListResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doGetRefundsListResponse',
      'DoGetRefundsReasonsRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoGetRefundsReasonsRequest',
      'ReasonInfoType' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ReasonInfoType',
      'ArrayOfReasoninfotype' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfReasoninfotype',
      'doGetRefundsReasonsResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doGetRefundsReasonsResponse',
      'DoGetSellFormFieldsForCategoryRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoGetSellFormFieldsForCategoryRequest',
      'SellFormType' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\SellFormType',
      'ArrayOfSellformtype' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfSellformtype',
      'SellFormFieldsForCategoryStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\SellFormFieldsForCategoryStruct',
      'doGetSellFormFieldsForCategoryResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doGetSellFormFieldsForCategoryResponse',
      'DoGetSessionHandleForWidgetRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoGetSessionHandleForWidgetRequest',
      'doGetSessionHandleForWidgetResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doGetSessionHandleForWidgetResponse',
      'DoGetShipmentDataRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoGetShipmentDataRequest',
      'ShipmentTimeStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ShipmentTimeStruct',
      'ShipmentDataStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ShipmentDataStruct',
      'ArrayOfShipmentdatastruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfShipmentdatastruct',
      'doGetShipmentDataResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doGetShipmentDataResponse',
      'DoGetShipmentPriceTypesRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoGetShipmentPriceTypesRequest',
      'ShipmentPriceTypeStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ShipmentPriceTypeStruct',
      'ArrayOfShipmentpricetypestruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfShipmentpricetypestruct',
      'doGetShipmentPriceTypesResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doGetShipmentPriceTypesResponse',
      'DoGetSiteJournalRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoGetSiteJournalRequest',
      'SiteJournal' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\SiteJournal',
      'ArrayOfSitejournal' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfSitejournal',
      'doGetSiteJournalResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doGetSiteJournalResponse',
      'DoGetSiteJournalDealsRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoGetSiteJournalDealsRequest',
      'SiteJournalDealsStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\SiteJournalDealsStruct',
      'ArrayOfSitejournaldealsstruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfSitejournaldealsstruct',
      'doGetSiteJournalDealsResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doGetSiteJournalDealsResponse',
      'DoGetSiteJournalDealsInfoRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoGetSiteJournalDealsInfoRequest',
      'SiteJournalDealsInfoStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\SiteJournalDealsInfoStruct',
      'doGetSiteJournalDealsInfoResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doGetSiteJournalDealsInfoResponse',
      'DoGetSiteJournalInfoRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoGetSiteJournalInfoRequest',
      'SiteJournalInfo' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\SiteJournalInfo',
      'doGetSiteJournalInfoResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doGetSiteJournalInfoResponse',
      'DoGetStatesInfoRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoGetStatesInfoRequest',
      'StateInfoStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\StateInfoStruct',
      'ArrayOfStateinfostruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfStateinfostruct',
      'doGetStatesInfoResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doGetStatesInfoResponse',
      'DoGetSystemTimeRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoGetSystemTimeRequest',
      'doGetSystemTimeResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doGetSystemTimeResponse',
      'DoGetTransactionsIDsRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoGetTransactionsIDsRequest',
      'doGetTransactionsIDsResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doGetTransactionsIDsResponse',
      'DoGetUserIDRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoGetUserIDRequest',
      'doGetUserIDResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doGetUserIDResponse',
      'DoGetUserLoginRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoGetUserLoginRequest',
      'doGetUserLoginResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doGetUserLoginResponse',
      'DoLoginRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoLoginRequest',
      'doLoginResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doLoginResponse',
      'DoLoginEncRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoLoginEncRequest',
      'doLoginEncResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doLoginEncResponse',
      'DoLoginWithAccessTokenRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoLoginWithAccessTokenRequest',
      'doLoginWithAccessTokenResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doLoginWithAccessTokenResponse',
      'DoMyAccount2Request' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoMyAccount2Request',
      'MyAccountStruct2' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\MyAccountStruct2',
      'ArrayOfMyaccountstruct2' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfMyaccountstruct2',
      'doMyAccount2Response' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doMyAccount2Response',
      'DoMyAccountItemsCountRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoMyAccountItemsCountRequest',
      'doMyAccountItemsCountResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doMyAccountItemsCountResponse',
      'DoMyBillingRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoMyBillingRequest',
      'doMyBillingResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doMyBillingResponse',
      'DoMyBillingItemRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoMyBillingItemRequest',
      'ItemBilling' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ItemBilling',
      'ArrayOfItembilling' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfItembilling',
      'doMyBillingItemResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doMyBillingItemResponse',
      'ItemTemplateCreateStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ItemTemplateCreateStruct',
      'DoNewAuctionExtRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoNewAuctionExtRequest',
      'doNewAuctionExtResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doNewAuctionExtResponse',
      'DoQueryAllSysStatusRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoQueryAllSysStatusRequest',
      'SysStatusType' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\SysStatusType',
      'ArrayOfSysstatustype' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfSysstatustype',
      'doQueryAllSysStatusResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doQueryAllSysStatusResponse',
      'DoQuerySysStatusRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoQuerySysStatusRequest',
      'doQuerySysStatusResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doQuerySysStatusResponse',
      'DoRemoveFromBlackListRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoRemoveFromBlackListRequest',
      'BlackListResStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\BlackListResStruct',
      'ArrayOfBlacklistresstruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfBlacklistresstruct',
      'doRemoveFromBlackListResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doRemoveFromBlackListResponse',
      'DoRequestPayoutRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoRequestPayoutRequest',
      'RequestPayoutStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\RequestPayoutStruct',
      'doRequestPayoutResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doRequestPayoutResponse',
      'DoSellSomeAgainRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoSellSomeAgainRequest',
      'StructSellAgain' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\StructSellAgain',
      'ArrayOfStructsellagain' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfStructsellagain',
      'StructSellFailed' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\StructSellFailed',
      'ArrayOfStructsellfailed' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfStructsellfailed',
      'doSellSomeAgainResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doSellSomeAgainResponse',
      'DoSellSomeAgainInShopRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoSellSomeAgainInShopRequest',
      'doSellSomeAgainInShopResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doSellSomeAgainInShopResponse',
      'DoSendEmailToUserRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoSendEmailToUserRequest',
      'doSendEmailToUserResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doSendEmailToUserResponse',
      'DoSendRefundFormRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoSendRefundFormRequest',
      'doSendRefundFormResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doSendRefundFormResponse',
      'DoSetFreeDeliveryAmountRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoSetFreeDeliveryAmountRequest',
      'doSetFreeDeliveryAmountResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doSetFreeDeliveryAmountResponse',
      'DoSetShipmentPriceTypeRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoSetShipmentPriceTypeRequest',
      'doSetShipmentPriceTypeResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doSetShipmentPriceTypeResponse',
      'DoShowItemInfoExtRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoShowItemInfoExtRequest',
      'ItemInfoExt' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ItemInfoExt',
      'doShowItemInfoExtResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doShowItemInfoExtResponse',
      'DoShowUserRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoShowUserRequest',
      'ShowUserFeedbacks' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ShowUserFeedbacks',
      'SellRatingAverageStruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\SellRatingAverageStruct',
      'ArrayOfSellratingaveragestruct' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\ArrayOfSellratingaveragestruct',
      'doShowUserResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doShowUserResponse',
      'DoVerifyItemRequest' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\DoVerifyItemRequest',
      'doVerifyItemResponse' => 'Imper86\\AllegroApi\\Soap\\Wsdl\\doVerifyItemResponse',
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
     * @param DoCancelRefundFormRequest $parameters
     * @return doCancelRefundFormResponse
     */
    public function doCancelRefundForm(DoCancelRefundFormRequest $parameters)
    {
      return $this->__soapCall('doCancelRefundForm', array($parameters));
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
     * @param DoGetItemsListRequest $parameters
     * @return doGetItemsListResponse
     */
    public function doGetItemsList(DoGetItemsListRequest $parameters)
    {
      return $this->__soapCall('doGetItemsList', array($parameters));
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
     * @param DoGetMyPaymentsRequest $parameters
     * @return doGetMyPaymentsResponse
     */
    public function doGetMyPayments(DoGetMyPaymentsRequest $parameters)
    {
      return $this->__soapCall('doGetMyPayments', array($parameters));
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
     * @param DoGetPostBuyFormsDataForBuyersRequest $parameters
     * @return doGetPostBuyFormsDataForBuyersResponse
     */
    public function doGetPostBuyFormsDataForBuyers(DoGetPostBuyFormsDataForBuyersRequest $parameters)
    {
      return $this->__soapCall('doGetPostBuyFormsDataForBuyers', array($parameters));
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
     * @param DoGetPostBuyItemInfoRequest $parameters
     * @return doGetPostBuyItemInfoResponse
     */
    public function doGetPostBuyItemInfo(DoGetPostBuyItemInfoRequest $parameters)
    {
      return $this->__soapCall('doGetPostBuyItemInfo', array($parameters));
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
     * @param DoGetSessionHandleForWidgetRequest $parameters
     * @return doGetSessionHandleForWidgetResponse
     */
    public function doGetSessionHandleForWidget(DoGetSessionHandleForWidgetRequest $parameters)
    {
      return $this->__soapCall('doGetSessionHandleForWidget', array($parameters));
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
