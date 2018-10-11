<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 11.10.18
 * Time: 10:08
 */

namespace Imper86\AllegroApi\Rest\Model\Request\OfferManagement\Offers;


use Imper86\AllegroApi\Rest\Model\RequestInterface;
use Imper86\AllegroApi\RestClientInterface;

class PostOfferRequest implements RequestInterface
{
    /**
     * @var array
     */
    private $requestBody;

    public function __construct(array $requestBody)
    {
        $this->requestBody = $requestBody;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return 'sale/offers';
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
