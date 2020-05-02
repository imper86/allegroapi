<?php


namespace Imper86\AllegroRestApiSdk\Model\Request\AfterSaleServices;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Constants\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

class PutWarrantyRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $warrantyId, array $body)
    {
        parent::__construct(
            'PUT',
            $this->prepareApiUri("/after-sales-service-conditions/warranties/{$warrantyId}"),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1),
            json_encode($body)
        );
    }
}
