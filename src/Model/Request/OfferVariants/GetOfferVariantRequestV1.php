<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 16:23
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\OfferVariants;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Constants\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

class GetOfferVariantRequestV1 extends Request
{
     use RequestTrait;

     public function __construct($token, string $setId)
     {
         parent::__construct(
             'GET',
             $this->prepareApiUri("/sale/offer-variants/{$setId}"),
             $this->prepareHeaders($token, ContentType::BETA_V1)
         );
     }
}
