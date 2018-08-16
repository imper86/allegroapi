<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 14.08.18
 * Time: 15:01
 */

namespace Imper86\AllegroApi\Rest\Model\Request\OfferVariants;


use Imper86\AllegroApi\Rest\Model\RequestInterface;
use Imper86\AllegroApi\RestClientInterface;

class GetOfferVariantRequest implements RequestInterface
{
    /**
     * @var string
     */
    private $setId;

    public function __construct(string $setId)
    {
        $this->setId = $setId;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return "sale/offer-variants/{$this->setId}";
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
    public function getSetId(): string
    {
        return $this->setId;
    }

    /**
     * @param string $setId
     */
    public function setSetId(string $setId): void
    {
        $this->setId = $setId;
    }


}
