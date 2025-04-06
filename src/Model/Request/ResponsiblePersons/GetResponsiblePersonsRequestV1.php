<?php

namespace Imper86\AllegroRestApiSdk\Model\Request\ResponsiblePersons;

use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Constants\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

use function array_merge;

class GetResponsiblePersonsRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, ?array $query = null)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri('/sale/responsible-persons', $query),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}