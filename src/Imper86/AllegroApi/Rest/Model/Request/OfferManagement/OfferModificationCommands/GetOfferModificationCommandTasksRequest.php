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

    /**
     * @return string
     */
    public function getCommandUuid(): string
    {
        return $this->commandUuid;
    }

    /**
     * @param string $commandUuid
     */
    public function setCommandUuid(string $commandUuid): void
    {
        $this->commandUuid = $commandUuid;
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
