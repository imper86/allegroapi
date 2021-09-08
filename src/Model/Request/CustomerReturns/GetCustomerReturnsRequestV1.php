<?php

namespace Imper86\AllegroRestApiSdk\Model\Request\CustomerReturns;

use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Constants\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

class GetCustomerReturnsRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, ?array $query = null)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri('/order/customer-returns', $query),
            $this->prepareHeaders($token, ContentType::BETA_V1)
        );
    }
}
