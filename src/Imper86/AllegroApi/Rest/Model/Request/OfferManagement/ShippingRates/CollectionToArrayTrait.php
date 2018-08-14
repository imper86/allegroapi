<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 14.08.18
 * Time: 11:57
 */

namespace Imper86\AllegroApi\Rest\Model\Request\OfferManagement\ShippingRates;


use Imper86\AllegroApi\Rest\Model\Request\OfferManagement\ShippingRates\PostData\ShippingRate;
use Imper86\AllegroApi\Rest\Model\Request\OfferManagement\ShippingRates\PostData\ShippingRateCollection;

trait CollectionToArrayTrait
{
    private function ratesCollectionToRequestArray(ShippingRateCollection $collection): array
    {
        /** @var ShippingRate[]|ShippingRateCollection $collection */

        $rates = [];

        foreach ($collection as $rate) {
            $rates[] = [
                'deliveryMethod' => [
                    'id' => $rate->getDeliveryMethodId(),
                ],
                'maxQuantityPerPackage' => $rate->getMaxQuantityPerPackage(),
                'firstItemRate' => [
                    'amount' => $rate->getFirstItemRateAmount(),
                    'currency' => $rate->getFirstItemRateCurrency(),
                ],
                'nextItemRate' => [
                    'amount' => $rate->getNextItemRateAmount(),
                    'currency' => $rate->getNextItemRateCurrency(),
                ],
                'shippingTime' => [
                    'from' => $rate->getShippingTimeFrom(),
                    'to' => $rate->getShippingTimeTo(),
                ],
            ];
        }

        return $rates;
    }
}
