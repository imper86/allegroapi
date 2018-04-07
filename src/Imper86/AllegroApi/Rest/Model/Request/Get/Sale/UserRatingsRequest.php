<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 04.03.2018
 * Time: 16:57
 */

namespace Imper86\AllegroApi\Rest\Model\Request\Get\Sale;


use Imper86\AllegroApi\Rest\Model\Request\RequestToolsTrait;
use Imper86\AllegroApi\Rest\Model\RequestInterface;

class UserRatingsRequest implements RequestInterface
{
    use RequestToolsTrait;

    /**
     * @var string
     */
    private $userId;
    /**
     * @var bool|null
     */
    private $recommended;
    /**
     * @var int|null
     */
    private $offset;
    /**
     * @var int|null
     */
    private $limit;

    public function __construct(string $userId, ?bool $recommended = null, ?int $offset = null, ?int $limit = null)
    {
        $this->userId = $userId;
        $this->recommended = $recommended;
        $this->offset = $offset;
        $this->limit = $limit;
    }

    public function getRequestArray(): array
    {
        $recommended = $this->stringifyBoolean($this->recommended);

        return [
            'user.id' => $this->userId,
            'recommended' => $recommended,
            'offset' => $this->offset,
            'limit' => $this->limit,
        ];
    }

    public function getRequestUri(): string
    {
        return 'sale/user-ratings';
    }

    public function getContentType(): ?string
    {
        return null;
    }

    public function getRequestMethod(): string
    {
        return 'GET';
    }

}