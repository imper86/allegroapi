<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 19.10.18
 * Time: 11:38
 */

namespace Imper86\AllegroApi\Rest\Model\Request\OfferManagement\Offers;


use Imper86\AllegroApi\Rest\Model\Auth\TokenInterface;
use Imper86\AllegroApi\Rest\Model\RequestInterface;
use Imper86\AllegroApi\RestClientInterface;

class GetOffersRequest implements RequestInterface
{
    /**
     * @var TokenInterface
     */
    private $token;
    /**
     * @var array|null
     */
    private $searchParameters;

    public function __construct(TokenInterface $token, ?array $searchParameters = null)
    {
        $this->token = $token;
        $this->searchParameters = $searchParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return 'sale/offers';
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
        $parameters = $this->searchParameters ?? [];

        return array_merge(
            [
                'seller.id' => $this->token->getUserId(),
            ],
            $parameters
        );
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
     * @return array|null
     */
    public function getSearchParameters(): ?array
    {
        return $this->searchParameters;
    }

    /**
     * @param array|null $searchParameters
     */
    public function setSearchParameters(?array $searchParameters): void
    {
        $this->searchParameters = $searchParameters;
    }


}
