<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 13.06.17
 * Time: 14:20
 */

namespace Imper69\AllegroApi;


use Imper69\AllegroApi\Rest\Model\Auth\TokenInterface;
use Imper69\AllegroApi\Rest\Service\AfterSalesServiceConditons\AfterSalesServicesConditionsServiceInterface;
use Imper69\AllegroApi\Rest\Service\Auth\AuthServiceInterface;
use Imper69\AllegroApi\Rest\Service\ChangePrice\ChangePriceServiceInterface;

interface AllegroApiRestClientInterface
{
    public function getToken(): TokenInterface;

    public function setToken(TokenInterface $token);

    public function refreshToken();

    public function getAuthService(): AuthServiceInterface;

    public function getChangePriceService(): ChangePriceServiceInterface;

    public function getAfterSalesServiceConditionsService(): AfterSalesServicesConditionsServiceInterface;
}