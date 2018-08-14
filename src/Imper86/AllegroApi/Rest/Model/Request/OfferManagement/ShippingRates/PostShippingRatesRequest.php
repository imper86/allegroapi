<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 14.08.18
 * Time: 11:22
 */

namespace Imper86\AllegroApi\Rest\Model\Request\OfferManagement\ShippingRates;


use Imper86\AllegroApi\Rest\Model\Request\OfferManagement\ShippingRates\PostData\ShippingRateCollection;
use Imper86\AllegroApi\Rest\Model\RequestInterface;

class PostShippingRatesRequest implements RequestInterface
{
    use CollectionToArrayTrait;

    /**
     * @var string
     */
    private $name;
    /**
     * @var ShippingRateCollection
     */
    private $rates;

    public function __construct(string $name, ShippingRateCollection $rates)
    {
        $this->name = $name;
        $this->rates = $rates;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return "sale/shipping-rates";
    }

    public function getContentType(): ?string
    {
        return null;
    }

    public function getBody(): ?array
    {
        return [
            'name' => $this->name,
            'rates' => $this->ratesCollectionToRequestArray($this->rates),
        ];
    }

    public function getQuery(): ?array
    {
        return null;
    }
}
