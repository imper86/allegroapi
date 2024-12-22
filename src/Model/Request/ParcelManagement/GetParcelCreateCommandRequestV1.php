<?php


namespace Imper86\AllegroRestApiSdk\Model\Request\ParcelManagement;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Constants\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

/**
 * @deprecated
 */
class GetParcelCreateCommandRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $commandId)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri(sprintf('/parcel-management/parcel-create-commands/%s', $commandId)),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
