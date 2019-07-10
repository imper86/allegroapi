<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 15:32
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\BatchOfferModification;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Model\Request\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;
use function GuzzleHttp\Psr7\build_query;

class GetOfferModificationCommandTasksRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $commandId, ?int $limit = null, ?int $offset = null)
    {
        parent::__construct(
            'GET',
            "/sale/offer-modification-commands/{$commandId}/tasks?" . build_query(['limit' => $limit, $offset => $offset]),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
