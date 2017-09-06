<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 13.06.17
 * Time: 15:52
 */

namespace Imper86\AllegroApi\Rest\Model\AfterSalesServiceConditions;


class WarrantiesResponse extends AbstractAfterSalesServiceConditionsResponse
{
    public function getConditionsArray(): array
    {
        return $this->getRaw()->warranties;
    }

}