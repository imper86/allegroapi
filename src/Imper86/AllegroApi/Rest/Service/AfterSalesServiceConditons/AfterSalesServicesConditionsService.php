<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 13.06.17
 * Time: 16:32
 */

namespace Imper86\AllegroApi\Rest\Service\AfterSalesServiceConditons;


use Imper86\AllegroApi\Rest\Model\AfterSalesServiceConditions\ImpliedWarrantiesRequest;
use Imper86\AllegroApi\Rest\Model\AfterSalesServiceConditions\ImpliedWarrantiesResponse;
use Imper86\AllegroApi\Rest\Model\AfterSalesServiceConditions\ReturnPoliciesRequest;
use Imper86\AllegroApi\Rest\Model\AfterSalesServiceConditions\ReturnPoliciesResponse;
use Imper86\AllegroApi\Rest\Model\AfterSalesServiceConditions\WarrantiesRequest;
use Imper86\AllegroApi\Rest\Model\AfterSalesServiceConditions\WarrantiesResponse;
use Imper86\AllegroApi\Rest\Service\HttpClient\HttpClientServiceInterface;

class AfterSalesServicesConditionsService implements AfterSalesServicesConditionsServiceInterface
{
    /**
     * @var HttpClientServiceInterface
     */
    private $httpClient;

    public function __construct(HttpClientServiceInterface $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    public function getImpliedWarranties(ImpliedWarrantiesRequest $request): ImpliedWarrantiesResponse
    {
        $response = $this->httpClient->sendRequest($request);
        return new ImpliedWarrantiesResponse($request, $response);
    }

    public function getReturnPolicies(ReturnPoliciesRequest $request): ReturnPoliciesResponse
    {
        $response = $this->httpClient->sendRequest($request);
        return new ReturnPoliciesResponse($request, $response);
    }

    public function getWarranties(WarrantiesRequest $request): WarrantiesResponse
    {
        $response = $this->httpClient->sendRequest($request);
        return new WarrantiesResponse($request, $response);
    }

}