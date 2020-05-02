<?php


namespace Imper86\AllegroRestApiSdk\Model\Request\AfterSaleServices;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Constants\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

class GetImpliedWarrantyRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, $impliedWarrantyId)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri("/after-sales-service-conditions/implied-warranties/{$impliedWarrantyId}"),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
