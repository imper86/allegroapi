<?php

namespace Imper86\AllegroRestApiSdk\Model\Request\CustomerReturns;

use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Constants\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

class GetCustomerReturnRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $customerReturnId)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri(sprintf('/order/customer-returns/%s', $customerReturnId)),
            $this->prepareHeaders($token, ContentType::BETA_V1)
        );
    }
}
