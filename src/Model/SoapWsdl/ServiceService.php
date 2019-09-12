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
      'DoGetBidItem2Request' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoGetBidItem2Request',
      'BidListStruct2' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\BidListStruct2',
      'ArrayOfBidliststruct2' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ArrayOfBidliststruct2',
      'doGetBidItem2Response' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doGetBidItem2Response',
      'DoGetBlackListUsersRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoGetBlackListUsersRequest',
      'BlackListStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\BlackListStruct',
      'ArrayOfBlackliststruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ArrayOfBlackliststruct',
      'doGetBlackListUsersResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doGetBlackListUsersResponse',
      'DoGetCountriesRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoGetCountriesRequest',
      'CountryInfoType' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\CountryInfoType',
      'ArrayOfCountryinfotype' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ArrayOfCountryinfotype',
      'doGetCountriesResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doGetCountriesResponse',
      'DoGetDealsRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoGetDealsRequest',
      'DealsStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DealsStruct',
      'ArrayOfDealsstruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ArrayOfDealsstruct',
      'doGetDealsResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doGetDealsResponse',
      'DoGetFilledPostBuyFormsRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoGetFilledPostBuyFormsRequest',
      'ArrayOfLong' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ArrayOfLong',
      'FilledPostBuyFormsStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\FilledPostBuyFormsStruct',
      'doGetFilledPostBuyFormsResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doGetFilledPostBuyFormsResponse',
      'DoGetFreeDeliveryAmountRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoGetFreeDeliveryAmountRequest',
      'doGetFreeDeliveryAmountResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doGetFreeDeliveryAmountResponse',
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
      'AfterSalesServiceConditionsStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\AfterSalesServiceConditionsStruct',
      'ItemInfoStruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ItemInfoStruct',
      'ArrayOfIteminfostruct' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ArrayOfIteminfostruct',
      'doGetItemsInfoResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doGetItemsInfoResponse',
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
      'DoMyBillingRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoMyBillingRequest',
      'doMyBillingResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doMyBillingResponse',
      'DoMyBillingItemRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoMyBillingItemRequest',
      'ItemBilling' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ItemBilling',
      'ArrayOfItembilling' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ArrayOfItembilling',
      'doMyBillingItemResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doMyBillingItemResponse',
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
      'ArrayOfInt' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ArrayOfInt',
      'DoSellSomeAgainRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoSellSomeAgainRequest',
      'StructSellAgain' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\StructSellAgain',
      'ArrayOfStructsellagain' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ArrayOfStructsellagain',
      'StructSellFailed' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\StructSellFailed',
      'ArrayOfStructsellfailed' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\ArrayOfStructsellfailed',
      'doSellSomeAgainResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doSellSomeAgainResponse',
      'DoSellSomeAgainInShopRequest' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\DoSellSomeAgainInShopRequest',
      'doSellSomeAgainInShopResponse' => 'Imper86\\AllegroRestApiSdk\\Model\\SoapWsdl\\doSellSomeAgainInShopResponse',
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
     * @param DoGetItemsInfoRequest $parameters
     * @return doGetItemsInfoResponse
     */
    public function doGetItemsInfo(DoGetItemsInfoRequest $parameters)
    {
      return $this->__soapCall('doGetItemsInfo', array($parameters));
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
