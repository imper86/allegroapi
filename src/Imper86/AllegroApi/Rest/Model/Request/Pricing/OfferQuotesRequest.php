<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 28.02.2018
 * Time: 11:17
 */

namespace Imper86\AllegroApi\Rest\Model\Request\Pricing;


use Imper86\AllegroApi\Rest\Model\RequestInterface;

class OfferQuotesRequest implements RequestInterface
{
    /**
     * @var string
     */
    private $offerId;

    public function __construct(string $offerId)
    {
        $this->offerId = $offerId;
    }

    public function getRequestArray(): array
    {
        return [
            'offer.id' => $this->offerId
        ];
    }

    public function getRequestUri(): string
    {
        return 'pricing/offer-quotes';
    }

    public function getContentType(): ?string
    {
        return null;
    }

}