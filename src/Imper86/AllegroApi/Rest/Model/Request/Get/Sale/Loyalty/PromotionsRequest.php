<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 24.03.2018
 * Time: 16:57
 */

namespace Imper86\AllegroApi\Rest\Model\Request\Get\Sale\Loyalty;


use Imper86\AllegroApi\Rest\Model\Request\RequestToolsTrait;
use Imper86\AllegroApi\Rest\Model\RequestInterface;

class PromotionsRequest implements RequestInterface
{
    use RequestToolsTrait;

    /**
     * @var string
     */
    private $userId;
    /**
     * @var int|null
     */
    private $limit;
    /**
     * @var int|null
     */
    private $offset;
    /**
     * @var bool|null
     */
    private $authenticated;

    public function __construct(string $userId, ?int $limit = null, ?int $offset = null, ?bool $authenticated = null)
    {
        $this->userId = $userId;
        $this->limit = $limit;
        $this->offset = $offset;
        $this->authenticated = $authenticated;
    }

    public function getRequestMethod(): string
    {
        return 'GET';
    }

    public function getRequestArray(): array
    {
        return [
            'user.id' => $this->userId,
            'limit' => $this->limit,
            'offset' => $this->offset,
            'authenticated' => $this->stringifyBoolean($this->authenticated),
        ];
    }

    public function getRequestUri(): string
    {
        return 'sale/loyalty/promotions';
    }

    public function getContentType(): ?string
    {
        return null;
    }

}