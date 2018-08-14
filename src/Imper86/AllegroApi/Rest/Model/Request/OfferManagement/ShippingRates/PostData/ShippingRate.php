<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 14.08.18
 * Time: 11:24
 */

namespace Imper86\AllegroApi\Rest\Model\Request\OfferManagement\ShippingRates\PostData;


class ShippingRate
{
    /**
     * @var string
     */
    private $deliveryMethodId;
    /**
     * @var int
     */
    private $maxQuantityPerPackage;
    /**
     * @var string
     */
    private $firstItemRateAmount;
    /**
     * @var string
     */
    private $firstItemRateCurrency = 'PLN';
    /**
     * @var string
     */
    private $nextItemRateAmount;
    /**
     * @var string
     */
    private $nextItemRateCurrency = 'PLN';
    /**
     * @var string|null
     */
    private $shippingTimeFrom;
    /**
     * @var string|null
     */
    private $shippingTimeTo;

    public function __construct(
        string $deliveryMethodId,
        int $maxQuantityPerPackage,
        string $firstItemRateAmount,
        string $nextItemRateAmount,
        ?string $shippingTimeFrom = null,
        ?string $shippingTimeTo = null
    ) {
        $this->deliveryMethodId = $deliveryMethodId;
        $this->maxQuantityPerPackage = $maxQuantityPerPackage;
        $this->firstItemRateAmount = $firstItemRateAmount;
        $this->nextItemRateAmount = $nextItemRateAmount;
        $this->shippingTimeFrom = $shippingTimeFrom;
        $this->shippingTimeTo = $shippingTimeTo;
    }

    /**
     * @return string
     */
    public function getDeliveryMethodId(): string
    {
        return $this->deliveryMethodId;
    }

    /**
     * @param string $deliveryMethodId
     */
    public function setDeliveryMethodId(string $deliveryMethodId): void
    {
        $this->deliveryMethodId = $deliveryMethodId;
    }

    /**
     * @return int
     */
    public function getMaxQuantityPerPackage(): int
    {
        return $this->maxQuantityPerPackage;
    }

    /**
     * @param int $maxQuantityPerPackage
     */
    public function setMaxQuantityPerPackage(int $maxQuantityPerPackage): void
    {
        $this->maxQuantityPerPackage = $maxQuantityPerPackage;
    }

    /**
     * @return string
     */
    public function getFirstItemRateAmount(): string
    {
        return $this->firstItemRateAmount;
    }

    /**
     * @param string $firstItemRateAmount
     */
    public function setFirstItemRateAmount(string $firstItemRateAmount): void
    {
        $this->firstItemRateAmount = $firstItemRateAmount;
    }

    /**
     * @return string
     */
    public function getFirstItemRateCurrency(): string
    {
        return $this->firstItemRateCurrency;
    }

    /**
     * @param string $firstItemRateCurrency
     */
    public function setFirstItemRateCurrency(string $firstItemRateCurrency): void
    {
        $this->firstItemRateCurrency = $firstItemRateCurrency;
    }

    /**
     * @return string
     */
    public function getNextItemRateAmount(): string
    {
        return $this->nextItemRateAmount;
    }

    /**
     * @param string $nextItemRateAmount
     */
    public function setNextItemRateAmount(string $nextItemRateAmount): void
    {
        $this->nextItemRateAmount = $nextItemRateAmount;
    }

    /**
     * @return string
     */
    public function getNextItemRateCurrency(): string
    {
        return $this->nextItemRateCurrency;
    }

    /**
     * @param string $nextItemRateCurrency
     */
    public function setNextItemRateCurrency(string $nextItemRateCurrency): void
    {
        $this->nextItemRateCurrency = $nextItemRateCurrency;
    }

    /**
     * @return null|string
     */
    public function getShippingTimeFrom(): ?string
    {
        return $this->shippingTimeFrom;
    }

    /**
     * @param null|string $shippingTimeFrom
     */
    public function setShippingTimeFrom(?string $shippingTimeFrom): void
    {
        $this->shippingTimeFrom = $shippingTimeFrom;
    }

    /**
     * @return null|string
     */
    public function getShippingTimeTo(): ?string
    {
        return $this->shippingTimeTo;
    }

    /**
     * @param null|string $shippingTimeTo
     */
    public function setShippingTimeTo(?string $shippingTimeTo): void
    {
        $this->shippingTimeTo = $shippingTimeTo;
    }


}
