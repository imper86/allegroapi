<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 14:27
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\Classifieds;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Model\Request\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

class GetClassifiedsPackageRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $packageId)
    {
        parent::__construct(
            'GET',
            "/sale/classifieds-packages/{$packageId}",
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
