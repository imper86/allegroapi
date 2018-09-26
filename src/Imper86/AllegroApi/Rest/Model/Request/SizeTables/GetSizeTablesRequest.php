<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 14.08.18
 * Time: 14:44
 */

namespace Imper86\AllegroApi\Rest\Model\Request\SizeTables;


use Imper86\AllegroApi\Rest\Model\Auth\TokenInterface;
use Imper86\AllegroApi\Rest\Model\RequestInterface;
use Imper86\AllegroApi\RestClientInterface;

class GetSizeTablesRequest implements RequestInterface
{
    /**
     * @var TokenInterface
     */
    private $token;

    public function __construct(TokenInterface $token)
    {
        $this->token = $token;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return "sale/size-tables";
    }

    public function getContentType(): ?string
    {
        return RestClientInterface::CONTENT_TYPE_PUBLIC;
    }

    public function getBody(): ?array
    {
        return null;
    }

    public function getQuery(): ?array
    {
        return ['user.id' => $this->token->getUserId()];
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


}
