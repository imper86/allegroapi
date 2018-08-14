<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 14.08.18
 * Time: 16:22
 */

namespace Imper86\AllegroApi\Rest\Model\Request\OrderManagement;


use Imper86\AllegroApi\Rest\Model\RequestInterface;
use Imper86\AllegroApi\RestClientInterface;

class GetOrderEventsRequest implements RequestInterface
{
    /**
     * @var null|string
     */
    private $fromId;
    /**
     * @var null|string
     */
    private $type;
    /**
     * @var int|null
     */
    private $limit;

    public function __construct(?string $fromId = null, ?string $type = null, ?int $limit = null)
    {
        $this->fromId = $fromId;
        $this->type = $type;
        $this->limit = $limit;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return "order/events";
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
            'from' => $this->fromId,
            'type' => $this->type,
            'limit' => $this->limit,
        ];
    }


}
