<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class doGetSiteJournalDealsResponse
{

    /**
     * @var ArrayOfSitejournaldealsstruct $siteJournalDeals
     */
    protected $siteJournalDeals = null;

    /**
     * @param ArrayOfSitejournaldealsstruct $siteJournalDeals
     */
    public function __construct($siteJournalDeals = null)
    {
      $this->siteJournalDeals = $siteJournalDeals;
    }

    /**
     * @return ArrayOfSitejournaldealsstruct
     */
    public function getSiteJournalDeals()
    {
      return $this->siteJournalDeals;
    }

    /**
     * @param ArrayOfSitejournaldealsstruct $siteJournalDeals
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doGetSiteJournalDealsResponse
     */
    public function setSiteJournalDeals($siteJournalDeals)
    {
      $this->siteJournalDeals = $siteJournalDeals;
      return $this;
    }

}
