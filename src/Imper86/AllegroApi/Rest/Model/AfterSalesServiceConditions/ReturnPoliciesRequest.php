<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 13.06.17
 * Time: 15:38
 */

namespace Imper86\AllegroApi\Rest\Model\AfterSalesServiceConditions;


use Imper86\AllegroApi\Rest\Model\Http\RequestInterface;

class ReturnPoliciesRequest extends AbstractAfterSalesServiceConditonsRequest implements RequestInterface
{
    public function getUri(): string
    {
        return '/after-sales-service-conditions/return-policies';
    }
}