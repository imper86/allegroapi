<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 17:07
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\Payments;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Model\Request\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;
use function GuzzleHttp\Psr7\build_query;

class GetPaymentIdMappingRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, ?string $paymentId, ?string $transactionId)
    {
        parent::__construct(
            'GET',
            "/payments/payment-id-mappings?" . build_query([
                'paymentId' => $paymentId,
                'transactionId' => $transactionId,
            ]),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
