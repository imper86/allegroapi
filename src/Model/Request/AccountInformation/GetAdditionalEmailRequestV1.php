<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 17:23
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\AccountInformation;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Model\Request\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

class GetAdditionalEmailRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $emailId)
    {
        parent::__construct(
            'GET',
            "/account/additional-emails/{$emailId}",
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
