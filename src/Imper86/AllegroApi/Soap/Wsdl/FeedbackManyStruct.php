<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class FeedbackManyStruct
{

    /**
     * @var int $feItemId
     */
    protected $feItemId = null;

    /**
     * @var int $feUseCommentTemplate
     */
    protected $feUseCommentTemplate = null;

    /**
     * @var int $feToUserId
     */
    protected $feToUserId = null;

    /**
     * @var string $feComment
     */
    protected $feComment = null;

    /**
     * @var string $feCommentType
     */
    protected $feCommentType = null;

    /**
     * @var int $feOp
     */
    protected $feOp = null;

    /**
     * @var ArrayOfSellratingestimationstruct $feRating
     */
    protected $feRating = null;

    /**
     * @param int $feItemId
     * @param int $feToUserId
     * @param string $feCommentType
     * @param int $feOp
     */
    public function __construct($feItemId = null, $feToUserId = null, $feCommentType = null, $feOp = null)
    {
      $this->feItemId = $feItemId;
      $this->feToUserId = $feToUserId;
      $this->feCommentType = $feCommentType;
      $this->feOp = $feOp;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\FeedbackManyStruct
     */
    public function setFeItemId($feItemId)
    {
      $this->feItemId = $feItemId;
      return $this;
    }

    /**
     * @return int
     */
    public function getFeUseCommentTemplate()
    {
      return $this->feUseCommentTemplate;
    }

    /**
     * @param int $feUseCommentTemplate
     * @return \Imper86\AllegroApi\Soap\Wsdl\FeedbackManyStruct
     */
    public function setFeUseCommentTemplate($feUseCommentTemplate)
    {
      $this->feUseCommentTemplate = $feUseCommentTemplate;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\FeedbackManyStruct
     */
    public function setFeToUserId($feToUserId)
    {
      $this->feToUserId = $feToUserId;
      return $this;
    }

    /**
     * @return string
     */
    public function getFeComment()
    {
      return $this->feComment;
    }

    /**
     * @param string $feComment
     * @return \Imper86\AllegroApi\Soap\Wsdl\FeedbackManyStruct
     */
    public function setFeComment($feComment)
    {
      $this->feComment = $feComment;
      return $this;
    }

    /**
     * @return string
     */
    public function getFeCommentType()
    {
      return $this->feCommentType;
    }

    /**
     * @param string $feCommentType
     * @return \Imper86\AllegroApi\Soap\Wsdl\FeedbackManyStruct
     */
    public function setFeCommentType($feCommentType)
    {
      $this->feCommentType = $feCommentType;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\FeedbackManyStruct
     */
    public function setFeOp($feOp)
    {
      $this->feOp = $feOp;
      return $this;
    }

    /**
     * @return ArrayOfSellratingestimationstruct
     */
    public function getFeRating()
    {
      return $this->feRating;
    }

    /**
     * @param ArrayOfSellratingestimationstruct $feRating
     * @return \Imper86\AllegroApi\Soap\Wsdl\FeedbackManyStruct
     */
    public function setFeRating($feRating)
    {
      $this->feRating = $feRating;
      return $this;
    }

}
