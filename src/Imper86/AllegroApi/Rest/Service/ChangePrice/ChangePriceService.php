<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 13.06.17
 * Time: 13:50
 */

namespace Imper86\AllegroApi\Rest\Service\ChangePrice;


use Imper86\AllegroApi\Rest\Model\ChangePrice\ChangePriceRequest;
use Imper86\AllegroApi\Rest\Model\ChangePrice\ChangePriceResponse;
use Imper86\AllegroApi\Rest\Service\HttpClient\HttpClientServiceInterface;

class ChangePriceService implements ChangePriceServiceInterface
{
    /**
     * @var HttpClientServiceInterface
     */
    private $httpClient;


    public function __construct(HttpClientServiceInterface $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    public function changePrice(ChangePriceRequest $request): ChangePriceResponse
    {
        $curlResponse = $this->httpClient->sendRequest($request);

        return new ChangePriceResponse($request, $curlResponse);
    }

}