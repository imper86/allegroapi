<?php

namespace Imper86\AllegroRestApiSdk\Model\Request\OrderManagement;

use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Constants\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

class GetCheckoutFormInvoicesRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $checkoutFormId)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri(
                sprintf('/order/checkout-forms/%s/invoices', $checkoutFormId)
            ),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
