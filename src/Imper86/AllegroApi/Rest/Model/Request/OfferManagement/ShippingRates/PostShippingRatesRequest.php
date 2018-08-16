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

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return ShippingRateCollection
     */
    public function getRates(): ShippingRateCollection
    {
        return $this->rates;
    }

    /**
     * @param ShippingRateCollection $rates
     */
    public function setRates(ShippingRateCollection $rates): void
    {
        $this->rates = $rates;
    }


}
