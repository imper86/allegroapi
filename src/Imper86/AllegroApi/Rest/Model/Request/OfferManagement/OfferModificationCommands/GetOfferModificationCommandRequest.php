<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 14.08.18
 * Time: 11:15
 */

namespace Imper86\AllegroApi\Rest\Model\Request\OfferManagement\OfferModificationCommands;


use Imper86\AllegroApi\Rest\Model\RequestInterface;

class GetOfferModificationCommandRequest implements RequestInterface
{
    /**
     * @var string
     */
    private $commandUuid;

    public function __construct(string $commandUuid)
    {
        $this->commandUuid = $commandUuid;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return "sale/offer-modification-commands/{$this->commandUuid}";
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
        return null;
    }

}
