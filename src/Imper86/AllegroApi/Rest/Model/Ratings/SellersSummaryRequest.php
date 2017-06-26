<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 23.06.17
 * Time: 13:47
 */

namespace Imper86\AllegroApi\Rest\Model\Ratings;


use Imper86\AllegroApi\Rest\Model\Http\RequestInterface;

class SellersSummaryRequest implements RequestInterface
{
    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return '/ratings-api/sellers/summary';
    }

    public function getData(): array
    {
        return [];
    }

    public function getContentType(): ?string
    {
        return 'application/vnd.allegro.public.v2+json';
    }

}