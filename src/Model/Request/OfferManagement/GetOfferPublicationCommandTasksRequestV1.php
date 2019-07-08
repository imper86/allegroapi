<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 08.07.19
 * Time: 17:56
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\OfferManagement;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Model\Request\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

class GetOfferPublicationCommandTasksRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $commandId)
    {
        parent::__construct(
            'GET',
            "/sale/offer-publication-commands/{$commandId}/tasks",
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
