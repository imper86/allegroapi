<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class doGetSiteJournalResponse
{

    /**
     * @var ArrayOfSitejournal $siteJournalArray
     */
    protected $siteJournalArray = null;

    /**
     * @param ArrayOfSitejournal $siteJournalArray
     */
    public function __construct($siteJournalArray = null)
    {
      $this->siteJournalArray = $siteJournalArray;
    }

    /**
     * @return ArrayOfSitejournal
     */
    public function getSiteJournalArray()
    {
      return $this->siteJournalArray;
    }

    /**
     * @param ArrayOfSitejournal $siteJournalArray
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doGetSiteJournalResponse
     */
    public function setSiteJournalArray($siteJournalArray)
    {
      $this->siteJournalArray = $siteJournalArray;
      return $this;
    }

}
