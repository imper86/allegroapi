<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 13.06.17
 * Time: 15:51
 */

namespace Imper86\AllegroApi\Rest\Model\AfterSalesServiceConditions;


class ReturnPoliciesResponse extends AbstractAfterSalesServiceConditionsResponse
{
    public function getConditionsArray(): array
    {
        return $this->getRaw()->returnPolicies;
    }

}