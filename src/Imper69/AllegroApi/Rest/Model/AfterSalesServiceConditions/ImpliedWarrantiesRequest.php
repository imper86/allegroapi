<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 13.06.17
 * Time: 15:37
 */

namespace Imper69\AllegroApi\Rest\Model\AfterSalesServiceConditions;


use Imper69\AllegroApi\Rest\Model\Http\RequestInterface;

class ImpliedWarrantiesRequest extends AbstractAfterSalesServiceConditonsRequest implements RequestInterface
{
    public function getUri(): string
    {
        return "/after-sales-service-conditions/implied-warranties";
    }

}