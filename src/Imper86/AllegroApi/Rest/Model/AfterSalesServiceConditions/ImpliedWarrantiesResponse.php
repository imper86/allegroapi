<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 13.06.17
 * Time: 15:47
 */

namespace Imper86\AllegroApi\Rest\Model\AfterSalesServiceConditions;


use Imper86\AllegroApi\Rest\Model\Http\ResponseInterface;

class ImpliedWarrantiesResponse
    extends AbstractAfterSalesServiceConditionsResponse
    implements ResponseInterface, AfterSalesServiceConditionsResponseInterface
{
    public function getConditionsArray(): array
    {
        return $this->getRaw()->impliedWarranties;
    }

    public function getCount(): int
    {
        return (int)$this->getRaw()->count;
    }
}