<?php

namespace Imper86\AllegroRestApiSdk\Model\Request\ResponsibleProducers;

use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Constants\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

use function sprintf;

class GetResponsibleProducersRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, ?string $id = null, ?array $query = null)
    {
        parent::__construct(
            'GET',
            $id
                ? $this->prepareApiUri(sprintf('/sale/responsible-producers/%s', $id), $query)
                : $this->prepareApiUri('/sale/responsible-producers', $query),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}