<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 14.08.18
 * Time: 14:00
 */

namespace Imper86\AllegroApi\Rest\Model\Request\AfterSalesServiceConditions;


use Imper86\AllegroApi\Rest\Model\Auth\TokenInterface;
use Imper86\AllegroApi\Rest\Model\RequestInterface;

class GetAfterSalesServiceConditionsRequest implements RequestInterface
{
    /**
     * @var TokenInterface
     */
    private $token;
    /**
     * @var string
     */
    private $type;
    /**
     * @var int|null
     */
    private $limit;
    /**
     * @var int|null
     */
    private $offset;

    public function __construct(
        TokenInterface $token,
        string $type = 'return-policies',
        ?int $limit = null,
        ?int $offset = null
    ) {
        $this->token = $token;
        $this->type = $type;
        $this->limit = $limit;
        $this->offset = $offset;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return "after-sales-service-conditions/{$this->type}";
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
            'sellerId' => $this->token->getUserId(),
            'limit' => $this->limit,
            'offset' => $this->offset,
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
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
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


}
