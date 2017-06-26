<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 23.06.17
 * Time: 13:41
 */

namespace Imper86\AllegroApi\Rest\Service\Ratings;


use Imper86\AllegroApi\Rest\Model\Ratings\SellersRatingsRequest;
use Imper86\AllegroApi\Rest\Model\Ratings\SellersRatingsResponse;
use Imper86\AllegroApi\Rest\Model\Ratings\SellersSummaryRequest;
use Imper86\AllegroApi\Rest\Model\Ratings\SellersSummaryResponse;

interface SellersRatingsServiceInterface
{
    /**
     * Returns list of seller ratings
     *
     * @param SellersRatingsRequest $request
     * @return SellersRatingsResponse
     */
    public function getRatings(SellersRatingsRequest $request): SellersRatingsResponse;

    /**
     * Returns ratings summary
     *
     * @return SellersSummaryResponse
     */
    public function getSummary(SellersSummaryRequest $request): SellersSummaryResponse;
}