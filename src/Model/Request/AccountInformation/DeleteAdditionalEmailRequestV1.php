<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 17:24
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\AccountInformation;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Constants\ContentType;
use Imper86\AllegroRestApiSdk\Helper\UriFactory;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

/**
 * Class DeleteAdditionalEmailRequestV1
 * @package Imper86\AllegroRestApiSdk\Model\Request\AccountInformation
 * @see https://developer.allegro.pl/documentation/#operation/deleteAdditionalEmailUsingDELETE
 */
class DeleteAdditionalEmailRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $emailId)
    {
        parent::__construct(
            'DELETE',
            $this->prepareApiUri("/account/additional-emails/{$emailId}"),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
