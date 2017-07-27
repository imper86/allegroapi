<?php

namespace Imper69\AllegroApi\Soap\Wsdl;

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
     * @return \Imper69\AllegroApi\Soap\Wsdl\doGetSiteJournalDealsResponse
     */
    public function setSiteJournalDeals($siteJournalDeals)
    {
      $this->siteJournalDeals = $siteJournalDeals;
      return $this;
    }

}
