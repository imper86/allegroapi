<?php

namespace Imper69\AllegroApi\Soap\Wsdl;

class SiteJournalDealsInfoStruct
{

    /**
     * @var int $dealEventsCount
     */
    protected $dealEventsCount = null;

    /**
     * @var int $dealLastEventTime
     */
    protected $dealLastEventTime = null;

    /**
     * @param int $dealEventsCount
     * @param int $dealLastEventTime
     */
    public function __construct($dealEventsCount = null, $dealLastEventTime = null)
    {
      $this->dealEventsCount = $dealEventsCount;
      $this->dealLastEventTime = $dealLastEventTime;
    }

    /**
     * @return int
     */
    public function getDealEventsCount()
    {
      return $this->dealEventsCount;
    }

    /**
     * @param int $dealEventsCount
     * @return \Imper69\AllegroApi\Soap\Wsdl\SiteJournalDealsInfoStruct
     */
    public function setDealEventsCount($dealEventsCount)
    {
      $this->dealEventsCount = $dealEventsCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getDealLastEventTime()
    {
      return $this->dealLastEventTime;
    }

    /**
     * @param int $dealLastEventTime
     * @return \Imper69\AllegroApi\Soap\Wsdl\SiteJournalDealsInfoStruct
     */
    public function setDealLastEventTime($dealLastEventTime)
    {
      $this->dealLastEventTime = $dealLastEventTime;
      return $this;
    }

}
