<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 08.07.19
 * Time: 17:35
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\UserOffersInformation;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Model\Request\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;
use function GuzzleHttp\Psr7\build_query;

class GetOffersRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, array $queryParameters = [])
    {
        parent::__construct(
            'GET',
            "/sale/offers?" . build_query($queryParameters),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
