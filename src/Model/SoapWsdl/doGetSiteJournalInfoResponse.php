<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class doGetSiteJournalInfoResponse
{

    /**
     * @var SiteJournalInfo $siteJournalInfo
     */
    protected $siteJournalInfo = null;

    /**
     * @param SiteJournalInfo $siteJournalInfo
     */
    public function __construct($siteJournalInfo = null)
    {
      $this->siteJournalInfo = $siteJournalInfo;
    }

    /**
     * @return SiteJournalInfo
     */
    public function getSiteJournalInfo()
    {
      return $this->siteJournalInfo;
    }

    /**
     * @param SiteJournalInfo $siteJournalInfo
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doGetSiteJournalInfoResponse
     */
    public function setSiteJournalInfo($siteJournalInfo)
    {
      $this->siteJournalInfo = $siteJournalInfo;
      return $this;
    }

}
