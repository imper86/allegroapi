<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 14.08.18
 * Time: 14:42
 */

namespace Imper86\AllegroApi\Rest\Model\Request\SizeTables;


use Imper86\AllegroApi\Rest\Model\RequestInterface;
use Imper86\AllegroApi\RestClientInterface;

class GetSizeTableRequest implements RequestInterface
{
    /**
     * @var string
     */
    private $tableId;

    public function __construct(string $tableId)
    {
        $this->tableId = $tableId;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return "sale/size-tables/{$this->tableId}";
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
    public function getTableId(): string
    {
        return $this->tableId;
    }

    /**
     * @param string $tableId
     */
    public function setTableId(string $tableId): void
    {
        $this->tableId = $tableId;
    }


}
