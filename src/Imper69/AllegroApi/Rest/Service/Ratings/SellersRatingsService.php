<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 23.06.17
 * Time: 13:41
 */

namespace Imper69\AllegroApi\Rest\Service\Ratings;


use Imper69\AllegroApi\Rest\Model\Ratings\SellersRatingsRequest;
use Imper69\AllegroApi\Rest\Model\Ratings\SellersRatingsResponse;
use Imper69\AllegroApi\Rest\Model\Ratings\SellersSummaryRequest;
use Imper69\AllegroApi\Rest\Model\Ratings\SellersSummaryResponse;
use Imper69\AllegroApi\Rest\Service\HttpClient\HttpClientServiceInterface;

class SellersRatingsService implements SellersRatingsServiceInterface
{
    /**
     * @var HttpClientServiceInterface
     */
    private $httpClient;

    public function __construct(HttpClientServiceInterface $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    public function getRatings(SellersRatingsRequest $request): SellersRatingsResponse
    {
        $response = $this->httpClient->sendRequest($request);
        return new SellersRatingsResponse($request, $response);
    }

    public function getSummary(SellersSummaryRequest $request): SellersSummaryResponse
    {
        $response = $this->httpClient->sendRequest($request);
        return new SellersSummaryResponse($request, $response);
    }


}