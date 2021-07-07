<?php

namespace Imper86\AllegroRestApiSdk\Model\Request\OrderManagement;

use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Constants\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;
use Psr\Http\Message\StreamInterface;

class PutCheckoutFormInvoiceFileRequestV1 extends Request
{
    use RequestTrait;

    /**
     * PutCheckoutFormInvoiceFileRequestV1 constructor.
     * @param $token
     * @param string $checkoutFormId
     * @param string $invoiceId
     * @param StreamInterface|resource|string $body
     */
    public function __construct(
        $token,
        string $checkoutFormId,
        string $invoiceId,
        $body
    ) {
        parent::__construct(
            'PUT',
            $this->prepareApiUri(
                sprintf(
                    '/order/checkout-forms/%s/invoices/%s/file',
                    $checkoutFormId,
                    $invoiceId
                )
            ),
            $this->prepareHeaders($token, 'application/pdf', ContentType::PUBLIC_V1),
            $body
        );
    }
}
