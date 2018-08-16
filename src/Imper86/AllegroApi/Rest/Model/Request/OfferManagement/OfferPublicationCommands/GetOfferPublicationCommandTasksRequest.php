<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 14.08.18
 * Time: 17:23
 */

namespace Imper86\AllegroApi\Rest\Model\Request\OfferManagement\OfferPublicationCommands;


use Imper86\AllegroApi\Rest\Model\RequestInterface;
use Imper86\AllegroApi\RestClientInterface;

class GetOfferPublicationCommandTasksRequest implements RequestInterface
{
    /**
     * @var string
     */
    private $commandId;
    /**
     * @var int|null
     */
    private $limit;
    /**
     * @var int|null
     */
    private $offset;

    public function __construct(string $commandId, ?int $limit = null, ?int $offset = null)
    {
        $this->commandId = $commandId;
        $this->limit = $limit;
        $this->offset = $offset;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return "sale/offer-publication-commands/{$this->commandId}/tasks";
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
        return [
            'limit' => $this->limit,
            'offset' => $this->offset,
        ];
    }

    /**
     * @return string
     */
    public function getCommandId(): string
    {
        return $this->commandId;
    }

    /**
     * @param string $commandId
     */
    public function setCommandId(string $commandId): void
    {
        $this->commandId = $commandId;
    }

    /**
     * @return int|null
     */
    public function getLimit(): ?int
    {
        return $this->limit;
    }

    /**
     * @param int|null $limit
     */
    public function setLimit(?int $limit): void
    {
        $this->limit = $limit;
    }

    /**
     * @return int|null
     */
    public function getOffset(): ?int
    {
        return $this->offset;
    }

    /**
     * @param int|null $offset
     */
    public function setOffset(?int $offset): void
    {
        $this->offset = $offset;
    }


}
