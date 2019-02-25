<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 25.02.19
 * Time: 16:57
 */

namespace Imper86\AllegroApi\Rest\Model\Request\Delivery;


use Imper86\AllegroApi\Rest\Model\RequestInterface;
use Imper86\AllegroApi\RestClientInterface;

class GetDeliveryMethodsRequest implements RequestInterface
{
    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return 'sale/delivery-methods';
    }

    public function getContentType(): ?string
    {
        return RestClientInterface::CONTENT_TYPE_PUBLIC;
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
