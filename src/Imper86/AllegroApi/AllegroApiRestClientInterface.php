<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 13.06.17
 * Time: 14:20
 */

namespace Imper86\AllegroApi;


use Imper86\AllegroApi\Rest\Model\Auth\TokenInterface;
use Imper86\AllegroApi\Rest\Service\AfterSalesServiceConditons\AfterSalesServicesConditionsServiceInterface;
use Imper86\AllegroApi\Rest\Service\Auth\AuthServiceInterface;
use Imper86\AllegroApi\Rest\Service\ChangePrice\ChangePriceServiceInterface;
use Imper86\AllegroApi\Rest\Service\Ratings\SellersRatingsServiceInterface;
use Imper86\AllegroApi\Rest\Service\SaleLoyaltyPromotions\SaleLoyaltyPromotionsServiceInterface;

interface AllegroApiRestClientInterface
{
    public function getToken(): ?TokenInterface;

    public function setToken(TokenInterface $token);

    public function refreshToken();

    public function getAuthService(): AuthServiceInterface;

    public function getChangePriceService(): ChangePriceServiceInterface;

    public function getAfterSalesServiceConditionsService(): AfterSalesServicesConditionsServiceInterface;

    public function getSellersRatingsService(): SellersRatingsServiceInterface;

    public function getSaleLoyaltyPromotionsService(): SaleLoyaltyPromotionsServiceInterface;
}