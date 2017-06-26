<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 13.06.17
 * Time: 13:48
 */

namespace Imper86\AllegroApi\Rest\Service\ChangePrice;


use Imper86\AllegroApi\Rest\Model\ChangePrice\ChangePriceRequest;
use Imper86\AllegroApi\Rest\Model\ChangePrice\ChangePriceResponse;

interface ChangePriceServiceInterface
{
    public function changePrice(ChangePriceRequest $request): ChangePriceResponse;
}