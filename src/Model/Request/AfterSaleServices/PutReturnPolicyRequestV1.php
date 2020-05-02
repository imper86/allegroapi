<?php


namespace Imper86\AllegroRestApiSdk\Model\Request\AfterSaleServices;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Constants\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

class PutReturnPolicyRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $returnPolicyId, array $body)
    {
        parent::__construct(
            'PUT',
            $this->prepareApiUri("/after-sales-service-conditions/return-policies/{$returnPolicyId}"),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1),
            json_encode($body)
        );
    }
}
