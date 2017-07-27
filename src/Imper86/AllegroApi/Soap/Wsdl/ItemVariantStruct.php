<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class ItemVariantStruct
{

    /**
     * @var string $id
     */
    protected $id = null;

    /**
     * @var int $quantity
     */
    protected $quantity = null;

    /**
     * @var ArrayOfItemvariantattributestruct $attributes
     */
    protected $attributes = null;

    /**
     * @param string $id
     * @param int $quantity
     */
    public function __construct($id = null, $quantity = null)
    {
      $this->id = $id;
      $this->quantity = $quantity;
    }

    /**
     * @return string
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param string $id
     * @return \Imper86\AllegroApi\Soap\Wsdl\ItemVariantStruct
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
      return $this->quantity;
    }

    /**
     * @param int $quantity
     * @return \Imper86\AllegroApi\Soap\Wsdl\ItemVariantStruct
     */
    public function setQuantity($quantity)
    {
      $this->quantity = $quantity;
      return $this;
    }

    /**
     * @return ArrayOfItemvariantattributestruct
     */
    public function getAttributes()
    {
      return $this->attributes;
    }

    /**
     * @param ArrayOfItemvariantattributestruct $attributes
     * @return \Imper86\AllegroApi\Soap\Wsdl\ItemVariantStruct
     */
    public function setAttributes($attributes)
    {
      $this->attributes = $attributes;
      return $this;
    }

}
