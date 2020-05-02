<?php


namespace Imper86\AllegroRestApiSdk\Model\Request\AfterSaleServices;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Constants\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

class GetReturnPoliciesRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, array $query)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri('/after-sales-service-conditions/return-policies', $query),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
