<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 17:10
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\Disputes;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Model\Request\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

class GetDisputeMessagesRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $disputeId)
    {
        parent::__construct(
            'GET',
            "/sale/disputes/{$disputeId}/messages",
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
