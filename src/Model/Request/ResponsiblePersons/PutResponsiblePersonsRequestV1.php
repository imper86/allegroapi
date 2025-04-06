<?php

namespace Imper86\AllegroRestApiSdk\Model\Request\ResponsiblePersons;

use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Constants\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

use function sprintf;

class PutResponsiblePersonsRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $id, array $body)
    {
        parent::__construct(
            'PUT',
            $this->prepareApiUri(sprintf('/sale/responsible-persons/%s', $id)),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1),
            json_encode($body)
        );
    }
}