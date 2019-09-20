<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 17:25
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\BlacklistManagement;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Constants\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

class GetBlacklistedUsersRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri("/sale/blacklisted-users"),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
