<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 16.08.18
 * Time: 17:22
 */

namespace Imper86\AllegroApi\Rest\Model\Request\OrderManagement;


use Imper86\AllegroApi\Rest\Model\RequestInterface;
use Imper86\AllegroApi\RestClientInterface;

class GetOrderEventStatsRequest implements RequestInterface
{
    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return "order/event-stats";
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
