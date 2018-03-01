<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 01.03.2018
 * Time: 13:54
 */

namespace Imper86\AllegroApi\Rest\Model\Request\Sale;


use Imper86\AllegroApi\Rest\Model\RequestInterface;

class UserRatingsRequest implements RequestInterface
{
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
        switch ($this->recommended) {
            case null: $recommended = null; break;
            case true: $recommended = 'true'; break;
            case false: $recommended = 'false'; break;
            default: $recommended = null; break;
        }

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

}