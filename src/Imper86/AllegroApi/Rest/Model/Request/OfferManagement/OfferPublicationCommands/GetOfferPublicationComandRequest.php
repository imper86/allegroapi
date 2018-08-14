<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 14.08.18
 * Time: 17:22
 */

namespace Imper86\AllegroApi\Rest\Model\Request\OfferManagement\OfferPublicationCommands;


use Imper86\AllegroApi\Rest\Model\RequestInterface;
use Imper86\AllegroApi\RestClientInterface;

class GetOfferPublicationComandRequest implements RequestInterface
{
    /**
     * @var string
     */
    private $commandId;

    public function __construct(string $commandId)
    {
        $this->commandId = $commandId;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return "sale/offer-publication-commands/{$this->commandId}";
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


}
