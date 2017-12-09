<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.12.17
 * Time: 14:54
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

interface SaleLoyaltyPromotionsServiceInterface
{
    /**
     * Method returns all promotions for authorized user
     *
     * @param GetSaleLoyaltyPromotionsRequest $request
     * @return GetSaleLoyaltyPromotionsResponse
     */
    public function getPromotions(GetSaleLoyaltyPromotionsRequest $request): GetSaleLoyaltyPromotionsResponse;

    /**
     * Method return promotion from given uuid
     *
     * @param GetSaleLoyaltyPromotionRequest $request
     * @return GetSaleLoyaltyPromotionResponse
     */
    public function getPromotion(GetSaleLoyaltyPromotionRequest $request): GetSaleLoyaltyPromotionResponse;

    /**
     * Method which is used to create new promotion
     *
     * @param PostSaleLoyaltyPromotionRequest $request
     * @return PostSaleLoyaltyPromotionResponse
     */
    public function postPromotion(PostSaleLoyaltyPromotionRequest $request): PostSaleLoyaltyPromotionResponse;

    /**
     * Method to delete created promotion with given uuid
     *
     * @param DeleteSaleLoyaltyPromotionRequest $request
     * @return DeleteSaleLoyaltyPromotionResponse
     */
    public function deletePromotion(DeleteSaleLoyaltyPromotionRequest $request): DeleteSaleLoyaltyPromotionResponse;
}