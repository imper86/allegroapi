<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 13.06.17
 * Time: 16:03
 */

namespace Imper86\AllegroApi\Rest\Service\AfterSalesServiceConditons;


use Imper86\AllegroApi\Rest\Model\AfterSalesServiceConditions\ImpliedWarrantiesRequest;
use Imper86\AllegroApi\Rest\Model\AfterSalesServiceConditions\ImpliedWarrantiesResponse;
use Imper86\AllegroApi\Rest\Model\AfterSalesServiceConditions\ReturnPoliciesRequest;
use Imper86\AllegroApi\Rest\Model\AfterSalesServiceConditions\ReturnPoliciesResponse;
use Imper86\AllegroApi\Rest\Model\AfterSalesServiceConditions\WarrantiesRequest;
use Imper86\AllegroApi\Rest\Model\AfterSalesServiceConditions\WarrantiesResponse;

interface AfterSalesServicesConditionsServiceInterface
{
    public function getImpliedWarranties(ImpliedWarrantiesRequest $request): ImpliedWarrantiesResponse;

    public function getReturnPolicies(ReturnPoliciesRequest $request): ReturnPoliciesResponse;

    public function getWarranties(WarrantiesRequest $request): WarrantiesResponse;
}