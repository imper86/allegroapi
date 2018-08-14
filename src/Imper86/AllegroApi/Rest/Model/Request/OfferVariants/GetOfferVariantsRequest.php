<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 14.08.18
 * Time: 15:03
 */

namespace Imper86\AllegroApi\Rest\Model\Request\OfferVariants;


use Imper86\AllegroApi\Rest\Model\Auth\TokenInterface;
use Imper86\AllegroApi\Rest\Model\RequestInterface;
use Imper86\AllegroApi\RestClientInterface;

class GetOfferVariantsRequest implements RequestInterface
{
    /**
     * @var TokenInterface
     */
    private $token;
    /**
     * @var null|string
     */
    private $query;
    /**
     * @var int|null
     */
    private $offset;
    /**
     * @var int|null
     */
    private $limit;

    public function __construct(TokenInterface $token, ?string $query = null, ?int $offset = null, ?int $limit = null)
    {
        $this->token = $token;
        $this->query = $query;
        $this->offset = $offset;
        $this->limit = $limit;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return "sale/offer-variants";
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
            'user.id' => $this->token->getUserId(),
            'offset' => $this->offset,
            'limit' => $this->limit,
            'query' => $this->query,
        ];
    }


}
