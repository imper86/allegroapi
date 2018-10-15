<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 15.10.18
 * Time: 09:44
 */

namespace Imper86\AllegroApi\Rest\Model\Request\OfferManagement\Offers;


use Imper86\AllegroApi\Rest\Model\RequestInterface;
use Imper86\AllegroApi\RestClientInterface;

class DeleteOfferRequest implements RequestInterface
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
        return 'DELETE';
    }

    public function getUri(): string
    {
        return "sale/offers/{$this->offerId}";
    }

    public function getContentType(): ?string
    {
        return RestClientInterface::CONTENT_TYPE_PUBLIC;
    }

    public function getBody(): ?array
    {
        return null;
    }

    public function getQuery(): ?array
    {
        return null;
    }

}
