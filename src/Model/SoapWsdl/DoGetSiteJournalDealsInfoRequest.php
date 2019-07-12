<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class DoGetSiteJournalDealsInfoRequest
{

    /**
     * @var string $sessionId
     */
    protected $sessionId = null;

    /**
     * @var int $journalStart
     */
    protected $journalStart = null;

    /**
     * @param string $sessionId
     * @param int $journalStart
     */
    public function __construct($sessionId = null, $journalStart = null)
    {
      $this->sessionId = $sessionId;
      $this->journalStart = $journalStart;
    }

    /**
     * @return string
     */
    public function getSessionId()
    {
      return $this->sessionId;
    }

    /**
     * @param string $sessionId
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoGetSiteJournalDealsInfoRequest
     */
    public function setSessionId($sessionId)
    {
      $this->sessionId = $sessionId;
      return $this;
    }

    /**
     * @return int
     */
    public function getJournalStart()
    {
      return $this->journalStart;
    }

    /**
     * @param int $journalStart
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoGetSiteJournalDealsInfoRequest
     */
    public function setJournalStart($journalStart)
    {
      $this->journalStart = $journalStart;
      return $this;
    }

}
