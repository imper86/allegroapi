<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.12.17
 * Time: 14:46
 */

namespace Imper86\AllegroApi\Rest\Model\SaleLoyaltyPromotions;


use Imper86\AllegroApi\CredentialsInterface;
use Imper86\AllegroApi\Rest\Model\Http\RequestInterface;

class GetSaleLoyaltyPromotionsRequest implements RequestInterface
{
    /**
     * @var CredentialsInterface
     */
    private $credentials;
    /**
     * @var int|null
     */
    private $limit;
    /**
     * @var int|null
     */
    private $offset;

    public function __construct(CredentialsInterface $credentials, ?int $limit = null, ?int $offset = null)
    {
        $this->credentials = $credentials;
        $this->limit = $limit;
        $this->offset = $offset;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return '/sale/loyalty/promotions';
    }

    public function getData(): array
    {
        return [
            'user.id' => $this->credentials->getAllegroSellerId(),
            'limit' => $this->limit,
            'offset' => $this->offset,
            'details' => null,
            'authenticated' => true,
        ];
    }

    public function getContentType(): ?string
    {
        return 'application/vnd.allegro.public.v1+json';
    }
}