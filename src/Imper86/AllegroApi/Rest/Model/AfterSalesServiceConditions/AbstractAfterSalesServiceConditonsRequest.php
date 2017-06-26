<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 13.06.17
 * Time: 15:33
 */

namespace Imper86\AllegroApi\Rest\Model\AfterSalesServiceConditions;


use Imper86\AllegroApi\CredentialsInterface;
use Imper86\AllegroApi\Rest\Model\Http\RequestInterface;

abstract class AbstractAfterSalesServiceConditonsRequest implements RequestInterface
{
    /**
     * @var CredentialsInterface
     */
    private $credentials;

    /**
     * @var int
     */
    private $limit;

    /**
     * @var int
     */
    private $offset;


    public function __construct(CredentialsInterface $credentials, int $limit = null, int $offset = null)
    {
        $this->credentials = $credentials;
        $this->limit = $limit;
        $this->offset = $offset;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    abstract public function getUri(): string;

    public function getData(): array
    {
        return [
            'sellerId' => $this->credentials->getAllegroSellerId(),
            'limit' => $this->limit,
            'offset' => $this->offset,
        ];
    }

    public function getContentType(): ?string
    {
        return 'application/vnd.allegro.public.v1+json';
    }

}