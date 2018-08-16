<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 14.08.18
 * Time: 13:54
 */

namespace Imper86\AllegroApi\Rest\Model\Request\UserRatings;


use Imper86\AllegroApi\Rest\Model\Auth\TokenInterface;
use Imper86\AllegroApi\Rest\Model\RequestInterface;

class GetUserRatingsRequest implements RequestInterface
{
    /**
     * @var TokenInterface
     */
    private $token;
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

    public function __construct(TokenInterface $token, ?bool $recommended = null, ?int $offset = null, ?int $limit = null)
    {
        $this->token = $token;
        $this->recommended = $recommended;
        $this->offset = $offset;
        $this->limit = $limit;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return "sale/user-ratings";
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
            'user.id' => $this->token->getUserId(),
            'recommended' => $this->recommended,
            'offset' => $this->offset,
            'limit' => $this->limit,
        ];
    }

    /**
     * @return TokenInterface
     */
    public function getToken(): TokenInterface
    {
        return $this->token;
    }

    /**
     * @param TokenInterface $token
     */
    public function setToken(TokenInterface $token): void
    {
        $this->token = $token;
    }

    /**
     * @return bool|null
     */
    public function getRecommended(): ?bool
    {
        return $this->recommended;
    }

    /**
     * @param bool|null $recommended
     */
    public function setRecommended(?bool $recommended): void
    {
        $this->recommended = $recommended;
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

}
