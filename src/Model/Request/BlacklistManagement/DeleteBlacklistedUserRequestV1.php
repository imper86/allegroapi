<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 17:30
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\BlacklistManagement;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Model\Request\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

class DeleteBlacklistedUserRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $excludedUserId)
    {
        parent::__construct(
            'DELETE',
            "/sale/blacklisted-users/{$excludedUserId}",
            $this->prepareHeaders($token, ContentType::BETA_V1)
        );
    }
}
