<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 17:21
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\AccountInformation;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Model\Request\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

class GetAdditionalEmailsRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token)
    {
        parent::__construct(
            'GET',
            "/account/additional-emails",
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
