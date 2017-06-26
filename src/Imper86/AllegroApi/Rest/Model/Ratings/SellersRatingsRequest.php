<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 23.06.17
 * Time: 12:15
 */

namespace Imper86\AllegroApi\Rest\Model\Ratings;


use Imper86\AllegroApi\Rest\Model\Http\RequestInterface;

class SellersRatingsRequest implements RequestInterface
{
    /**
     * @var bool
     */
    private $recommend;

    /**
     * @var int
     */
    private $page;


    public function __construct(bool $recommend = null, int $page = null)
    {
        $this->recommend = $recommend;
        $this->page = $page;
    }


    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return '/ratings-api/sellers/ratings';
    }

    public function getData(): array
    {
        return [
            'recommend' => $this->recommend,
            'page' => $this->page,
        ];
    }

    public function getContentType(): ?string
    {
        return 'application/vnd.allegro.public.v2+json';
    }

}