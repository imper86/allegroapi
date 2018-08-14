<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 14.08.18
 * Time: 11:54
 */

namespace Imper86\AllegroApi\Rest\Model\Request\OfferManagement\ShippingRates;


use Imper86\AllegroApi\Rest\Model\Request\OfferManagement\ShippingRates\PostData\ShippingRateCollection;
use Imper86\AllegroApi\Rest\Model\RequestInterface;

class PutShippingRatesRequest implements RequestInterface
{
    use CollectionToArrayTrait;

    /**
     * @var string
     */
    private $id;
    /**
     * @var ShippingRateCollection
     */
    private $rates;
    /**
     * @var string
     */
    private $name;

    public function __construct(string $id, string $name, ShippingRateCollection $rates)
    {
        $this->id = $id;
        $this->rates = $rates;
        $this->name = $name;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return "sale/shipping-rates/{$this->id}";
    }

    public function getContentType(): ?string
    {
        return null;
    }

    public function getBody(): ?array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'rates' => $this->ratesCollectionToRequestArray($this->rates),
        ];
    }

    public function getQuery(): ?array
    {
        return null;
    }


}
