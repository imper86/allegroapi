<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 25.07.17
 * Time: 14:08
 */

namespace Imper86\AllegroApi\Rest\Model\AfterSalesServiceConditions;


use Imper86\AllegroApi\Rest\Exception\IncorrectCurlResponseException;
use Traversable;

class AfterSalesServiceConditionCollection implements \ArrayAccess, \IteratorAggregate
{
    /**
     * @var AfterSalesServiceCondition[]
     */
    private $conditions = [];

    public function __construct(AbstractAfterSalesServiceConditionsResponse $response)
    {
        foreach ($response->getConditionsArray() as $data) {
            if (!$data instanceof \stdClass) {
                throw new IncorrectCurlResponseException($response);
            }
            $this->conditions[] = new AfterSalesServiceCondition($data);
        }
    }

    public function offsetExists($offset)
    {
        return isset($this->conditions[$offset]);
    }

    public function offsetGet($offset)
    {
        return $this->conditions[$offset];
    }

    public function offsetSet($offset, $value)
    {
        if (!$value instanceof AfterSalesServiceCondition) {
            throw new \InvalidArgumentException("Only AfterSalesServiceConditon object can be set to this object");
        }

        $this->conditions[$offset] = $value;
    }

    public function offsetUnset($offset)
    {
        unset($this->conditions[$offset]);
    }

    public function getIterator()
    {
        return new \ArrayIterator($this->conditions);
    }

}