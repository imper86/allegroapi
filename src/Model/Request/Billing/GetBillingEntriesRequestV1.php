<?php
/**
 * Author: Adrian Szuszkiewicz <me@imper.info>
 * Github: https://github.com/imper86
 * Date: 23.10.2019
 * Time: 12:25
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\Billing;

use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Constants\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

class GetBillingEntriesRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, ?array $params)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri('/billing/billing-entries', $params),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
