<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class WaitFeedbackStruct
{

    /**
     * @var int $feItemId
     */
    protected $feItemId = null;

    /**
     * @var string $feItemName
     */
    protected $feItemName = null;

    /**
     * @var int $feToUserId
     */
    protected $feToUserId = null;

    /**
     * @var int $feOp
     */
    protected $feOp = null;

    /**
     * @var string $feAnsCommentType
     */
    protected $feAnsCommentType = null;

    /**
     * @var int $fePossibilityToAdd
     */
    protected $fePossibilityToAdd = null;

    /**
     * @param int $feItemId
     * @param string $feItemName
     * @param int $feToUserId
     * @param int $feOp
     * @param string $feAnsCommentType
     * @param int $fePossibilityToAdd
     */
    public function __construct($feItemId = null, $feItemName = null, $feToUserId = null, $feOp = null, $feAnsCommentType = null, $fePossibilityToAdd = null)
    {
      $this->feItemId = $feItemId;
      $this->feItemName = $feItemName;
      $this->feToUserId = $feToUserId;
      $this->feOp = $feOp;
      $this->feAnsCommentType = $feAnsCommentType;
      $this->fePossibilityToAdd = $fePossibilityToAdd;
    }

    /**
     * @return int
     */
    public function getFeItemId()
    {
      return $this->feItemId;
    }

    /**
     * @param int $feItemId
     * @return \Imper86\AllegroApi\Soap\Wsdl\WaitFeedbackStruct
     */
    public function setFeItemId($feItemId)
    {
      $this->feItemId = $feItemId;
      return $this;
    }

    /**
     * @return string
     */
    public function getFeItemName()
    {
      return $this->feItemName;
    }

    /**
     * @param string $feItemName
     * @return \Imper86\AllegroApi\Soap\Wsdl\WaitFeedbackStruct
     */
    public function setFeItemName($feItemName)
    {
      $this->feItemName = $feItemName;
      return $this;
    }

    /**
     * @return int
     */
    public function getFeToUserId()
    {
      return $this->feToUserId;
    }

    /**
     * @param int $feToUserId
     * @return \Imper86\AllegroApi\Soap\Wsdl\WaitFeedbackStruct
     */
    public function setFeToUserId($feToUserId)
    {
      $this->feToUserId = $feToUserId;
      return $this;
    }

    /**
     * @return int
     */
    public function getFeOp()
    {
      return $this->feOp;
    }

    /**
     * @param int $feOp
     * @return \Imper86\AllegroApi\Soap\Wsdl\WaitFeedbackStruct
     */
    public function setFeOp($feOp)
    {
      $this->feOp = $feOp;
      return $this;
    }

    /**
     * @return string
     */
    public function getFeAnsCommentType()
    {
      return $this->feAnsCommentType;
    }

    /**
     * @param string $feAnsCommentType
     * @return \Imper86\AllegroApi\Soap\Wsdl\WaitFeedbackStruct
     */
    public function setFeAnsCommentType($feAnsCommentType)
    {
      $this->feAnsCommentType = $feAnsCommentType;
      return $this;
    }

    /**
     * @return int
     */
    public function getFePossibilityToAdd()
    {
      return $this->fePossibilityToAdd;
    }

    /**
     * @param int $fePossibilityToAdd
     * @return \Imper86\AllegroApi\Soap\Wsdl\WaitFeedbackStruct
     */
    public function setFePossibilityToAdd($fePossibilityToAdd)
    {
      $this->fePossibilityToAdd = $fePossibilityToAdd;
      return $this;
    }

}
