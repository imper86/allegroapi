<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 03.07.19
 * Time: 14:41
 */

namespace Imper86\AllegroApi\Rest\Model\Request\Payments;


use Imper86\AllegroApi\Rest\Model\RequestInterface;
use Imper86\AllegroApi\RestClientInterface;

class GetPaymentOperationsRequest implements RequestInterface
{
    /**
     * @var array|null
     */
    private $queryParameters;

    public function __construct(?array $queryParameters = null)
    {
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return 'payments/payment-operations';
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
        return $this->queryParameters;
    }

    /**
     * @return array|null
     */
    public function getQueryParameters(): ?array
    {
        return $this->queryParameters;
    }

    /**
     * @param array|null $queryParameters
     */
    public function setQueryParameters(?array $queryParameters): void
    {
        $this->queryParameters = $queryParameters;
    }
}
