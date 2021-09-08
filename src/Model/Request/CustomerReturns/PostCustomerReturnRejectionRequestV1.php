<?php

namespace Imper86\AllegroRestApiSdk\Model\Request\CustomerReturns;

use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Constants\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

class PostCustomerReturnRejectionRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $customerReturnId, array $body)
    {
        parent::__construct(
            'POST',
            $this->prepareApiUri(sprintf('/order/customer-returns/%s/rejection', $customerReturnId)),
            $this->prepareHeaders($token, ContentType::BETA_V1),
            json_encode($body)
        );
    }
}
