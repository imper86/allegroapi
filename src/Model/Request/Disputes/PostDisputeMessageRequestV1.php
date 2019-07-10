<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 17:11
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\Disputes;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Model\Request\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

class PostDisputeMessageRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $disputeId, array $body)
    {
        parent::__construct(
            'POST',
            "/sale/disputes/{$disputeId}/messages",
            $this->prepareHeaders($token, ContentType::PUBLIC_V1),
            json_encode($body)
        );
    }
}
