<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 16.08.18
 * Time: 11:26
 */

namespace Imper86\AllegroApi\Rest\Model\Request\OfferManagement\Offers;


use Imper86\AllegroApi\Rest\Model\RequestInterface;
use Imper86\AllegroApi\RestClientInterface;

class GetOfferRequest implements RequestInterface
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
        return "sale/offers/{$this->offerId}";
    }

    public function getContentType(): ?string
    {
        return RestClientInterface::CONTENT_TYPE_BETA;
    }

    public function getBody(): ?array
    {
        return null;
    }

    public function getQuery(): ?array
    {
        return null;
    }

    /**
     * @return string
     */
    public function getOfferId(): string
    {
        return $this->offerId;
    }

    /**
     * @param string $offerId
     */
    public function setOfferId(string $offerId): void
    {
        $this->offerId = $offerId;
    }


}
