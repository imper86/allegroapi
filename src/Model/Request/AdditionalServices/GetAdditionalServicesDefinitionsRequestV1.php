<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 16:05
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\AdditionalServices;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Constants\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

class GetAdditionalServicesDefinitionsRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $userId, ?int $offset = null, ?int $limit = null)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri('/sale/offer-additional-services/definitions', [
                'user.id' => $userId,
                'offset' => $offset,
                'limit' => $limit,
            ]),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
