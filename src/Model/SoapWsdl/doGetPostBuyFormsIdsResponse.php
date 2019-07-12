<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class doGetPostBuyFormsIdsResponse
{

    /**
     * @var int $formsCount
     */
    protected $formsCount = null;

    /**
     * @var ArrayOfLong $formsIds
     */
    protected $formsIds = null;

    /**
     * @var ArrayOfFilterslisttype $filtersList
     */
    protected $filtersList = null;

    /**
     * @param int $formsCount
     * @param ArrayOfLong $formsIds
     * @param ArrayOfFilterslisttype $filtersList
     */
    public function __construct($formsCount = null, $formsIds = null, $filtersList = null)
    {
      $this->formsCount = $formsCount;
      $this->formsIds = $formsIds;
      $this->filtersList = $filtersList;
    }

    /**
     * @return int
     */
    public function getFormsCount()
    {
      return $this->formsCount;
    }

    /**
     * @param int $formsCount
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doGetPostBuyFormsIdsResponse
     */
    public function setFormsCount($formsCount)
    {
      $this->formsCount = $formsCount;
      return $this;
    }

    /**
     * @return ArrayOfLong
     */
    public function getFormsIds()
    {
      return $this->formsIds;
    }

    /**
     * @param ArrayOfLong $formsIds
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doGetPostBuyFormsIdsResponse
     */
    public function setFormsIds($formsIds)
    {
      $this->formsIds = $formsIds;
      return $this;
    }

    /**
     * @return ArrayOfFilterslisttype
     */
    public function getFiltersList()
    {
      return $this->filtersList;
    }

    /**
     * @param ArrayOfFilterslisttype $filtersList
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doGetPostBuyFormsIdsResponse
     */
    public function setFiltersList($filtersList)
    {
      $this->filtersList = $filtersList;
      return $this;
    }

}
