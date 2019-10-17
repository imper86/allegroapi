<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 01.10.2019
 * Time: 09:09
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\UserInformation;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Constants\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

class GetMeV1 extends Request
{
    use RequestTrait;

    public function __construct($token)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri('/me'),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
