<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 13.06.17
 * Time: 15:48
 */

namespace Imper86\AllegroApi\Rest\Model\AfterSalesServiceConditions;


interface AfterSalesServiceConditionsResponseInterface
{
    public function getConditionsArray(): array;

    public function getCount(): int;
}