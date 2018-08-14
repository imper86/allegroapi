<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 14.08.18
 * Time: 11:18
 */

namespace Imper86\AllegroApi\Rest\Model\Request\OfferManagement\OfferModificationCommands;


use Imper86\AllegroApi\Rest\Model\RequestInterface;

class GetOfferModificationCommandTasksRequest implements RequestInterface
{
    /**
     * @var string
     */
    private $commandUuid;
    /**
     * @var int|null
     */
    private $limit;
    /**
     * @var int|null
     */
    private $offset;

    public function __construct(string $commandUuid, ?int $limit = null, ?int $offset = null)
    {
        $this->commandUuid = $commandUuid;
        $this->limit = $limit;
        $this->offset = $offset;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return "sale/offer-modification-commands/{$this->commandUuid}/tasks";
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
        return [
            'limit' => $this->limit,
            'offset' => $this->offset,
        ];
    }


}
