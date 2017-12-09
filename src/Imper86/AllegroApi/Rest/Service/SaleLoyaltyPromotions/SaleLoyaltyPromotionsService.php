<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.12.17
 * Time: 14:53
 */

namespace Imper86\AllegroApi\Rest\Service\SaleLoyaltyPromotions;


use Imper86\AllegroApi\Rest\Model\SaleLoyaltyPromotions\DeleteSaleLoyaltyPromotionRequest;
use Imper86\AllegroApi\Rest\Model\SaleLoyaltyPromotions\DeleteSaleLoyaltyPromotionResponse;
use Imper86\AllegroApi\Rest\Model\SaleLoyaltyPromotions\GetSaleLoyaltyPromotionRequest;
use Imper86\AllegroApi\Rest\Model\SaleLoyaltyPromotions\GetSaleLoyaltyPromotionResponse;
use Imper86\AllegroApi\Rest\Model\SaleLoyaltyPromotions\GetSaleLoyaltyPromotionsRequest;
use Imper86\AllegroApi\Rest\Model\SaleLoyaltyPromotions\GetSaleLoyaltyPromotionsResponse;
use Imper86\AllegroApi\Rest\Model\SaleLoyaltyPromotions\PostSaleLoyaltyPromotionRequest;
use Imper86\AllegroApi\Rest\Model\SaleLoyaltyPromotions\PostSaleLoyaltyPromotionResponse;
use Imper86\AllegroApi\Rest\Service\HttpClient\HttpClientServiceInterface;

class SaleLoyaltyPromotionsService implements SaleLoyaltyPromotionsServiceInterface
{
    /**
     * @var HttpClientServiceInterface
     */
    private $httpClient;

    public function __construct(HttpClientServiceInterface $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    public function getPromotions(GetSaleLoyaltyPromotionsRequest $request): GetSaleLoyaltyPromotionsResponse
    {
        $response = $this->httpClient->sendRequest($request);
        return new GetSaleLoyaltyPromotionsResponse($request, $response);
    }

    public function getPromotion(GetSaleLoyaltyPromotionRequest $request): GetSaleLoyaltyPromotionResponse
    {
        $response = $this->httpClient->sendRequest($request);
        return new GetSaleLoyaltyPromotionResponse($request, $response);
    }

    public function postPromotion(PostSaleLoyaltyPromotionRequest $request): PostSaleLoyaltyPromotionResponse
    {
        $response = $this->httpClient->sendRequest($request);
        return new PostSaleLoyaltyPromotionResponse($request, $response);
    }

    public function deletePromotion(DeleteSaleLoyaltyPromotionRequest $request): DeleteSaleLoyaltyPromotionResponse
    {
        $response = $this->httpClient->sendRequest($request);
        return new DeleteSaleLoyaltyPromotionResponse($request, $response);
    }
}