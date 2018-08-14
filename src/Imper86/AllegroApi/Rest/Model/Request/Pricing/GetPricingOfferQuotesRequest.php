<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 14.08.18
 * Time: 14:27
 */

namespace Imper86\AllegroApi\Rest\Model\Request\Pricing;


use Imper86\AllegroApi\Rest\Model\RequestInterface;

class GetPricingOfferQuotesRequest implements RequestInterface
{
    /**
     * @var string
     */
    private $offerId;

    public function __construct(string $offerId)
    {
        $this->offerId = $offerId;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return "pricing/offer-quotes";
    }

    public function getContentType(): ?string
    {
        return null;
    }

    public function getBody(): ?array
    {
        return null;
    }

    public function getQuery(): ?array
    {
        return ['offer.id' => $this->offerId];
    }


}
