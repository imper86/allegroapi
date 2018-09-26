<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 16.08.18
 * Time: 11:36
 */

namespace Imper86\AllegroApi\Rest\Model\Request\OfferManagement\Offers;


use Imper86\AllegroApi\Rest\Model\RequestInterface;
use Imper86\AllegroApi\RestClientInterface;

class PutOfferRequest implements RequestInterface
{
    /**
     * @var string
     */
    private $offerId;
    /**
     * @var array
     */
    private $requestBody;

    public function __construct(string $offerId, array $requestBody)
    {
        $this->offerId = $offerId;
        $this->requestBody = $requestBody;
    }

    public function getMethod(): string
    {
        return 'PUT';
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
        return $this->requestBody;
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

    /**
     * @return array
     */
    public function getRequestBody(): array
    {
        return $this->requestBody;
    }

    /**
     * @param array $requestBody
     */
    public function setRequestBody(array $requestBody): void
    {
        $this->requestBody = $requestBody;
    }


}
