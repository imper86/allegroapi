<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 15:03
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\Pricing;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Constants\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

/**
 * @deprecated
 */
class PostFeePreviewRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, array $body)
    {
        parent::__construct(
            'POST',
            $this->prepareApiUri("/pricing/fee-preview"),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1),
            json_encode($body)
        );
    }
}
