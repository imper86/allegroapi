<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 13.06.17
 * Time: 15:51
 */

namespace Imper86\AllegroApi\Rest\Model\AfterSalesServiceConditions;


use Imper86\AllegroApi\Rest\Model\Http\ResponseInterface;

class ReturnPoliciesResponse
    extends AbstractAfterSalesServiceConditionsResponse
    implements ResponseInterface, AfterSalesServiceConditionsResponseInterface
{
    public function getConditionsArray(): array
    {
        return $this->getRaw()->returnPolicies;
    }

    public function getCount(): int
    {
        return (int)$this->getRaw()->count;
    }

}