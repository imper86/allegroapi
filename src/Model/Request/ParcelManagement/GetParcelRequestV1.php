<?php


namespace Imper86\AllegroRestApiSdk\Model\Request\ParcelManagement;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Constants\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

class GetParcelRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $parcelId)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri(sprintf('/parcel-management/parcels/%s', $parcelId)),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
