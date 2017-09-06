<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 25.07.17
 * Time: 14:05
 */

namespace Imper86\AllegroApi\Rest\Model\AfterSalesServiceConditions;


use Imper86\AllegroApi\Rest\Exception\MissingResponseDataException;

class AfterSalesServiceCondition
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    public function __construct(\stdClass $rawData)
    {
        if (empty($rawData->id) || empty($rawData->name)) {
            throw new MissingResponseDataException();
        }

        $this->id = $rawData->id;
        $this->name = $rawData->name;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}