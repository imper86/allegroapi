<?php

namespace Imper86\AllegroRestApiSdk\Model\Request\OrderManagement;

use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Constants\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

class PostCheckoutFormInvoiceRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $checkoutFormId, array $body)
    {
        parent::__construct(
            'POST',
            $this->prepareApiUri(
                sprintf('/order/checkout-forms/%s/invoices', $checkoutFormId)
            ),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1),
            json_encode($body)
        );
    }
}
