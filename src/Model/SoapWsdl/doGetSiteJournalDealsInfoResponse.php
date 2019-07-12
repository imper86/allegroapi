<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class doGetSiteJournalDealsInfoResponse
{

    /**
     * @var SiteJournalDealsInfoStruct $siteJournalDealsInfo
     */
    protected $siteJournalDealsInfo = null;

    /**
     * @param SiteJournalDealsInfoStruct $siteJournalDealsInfo
     */
    public function __construct($siteJournalDealsInfo = null)
    {
      $this->siteJournalDealsInfo = $siteJournalDealsInfo;
    }

    /**
     * @return SiteJournalDealsInfoStruct
     */
    public function getSiteJournalDealsInfo()
    {
      return $this->siteJournalDealsInfo;
    }

    /**
     * @param SiteJournalDealsInfoStruct $siteJournalDealsInfo
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doGetSiteJournalDealsInfoResponse
     */
    public function setSiteJournalDealsInfo($siteJournalDealsInfo)
    {
      $this->siteJournalDealsInfo = $siteJournalDealsInfo;
      return $this;
    }

}
