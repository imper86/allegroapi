<?php


namespace Imper86\AllegroRestApiSdk\Model\Request\Charity;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Constants\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

class GetFundraisingCampaignsRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, array $query)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri('/charity/fundraising-campaigns', $query),
            $this->prepareHeaders($token, ContentType::BETA_V1)
        );
    }
}
