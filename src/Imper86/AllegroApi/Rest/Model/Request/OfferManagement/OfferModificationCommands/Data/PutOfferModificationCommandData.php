<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 14.08.18
 * Time: 10:38
 */

namespace Imper86\AllegroApi\Rest\Model\Request\OfferManagement\OfferModificationCommands\Data;


class PutOfferModificationCommandData
{
    /**
     * @var string|null
     */
    private $additionalServicesGroupId;
    /**
     * @var string|null
     */
    private $deliveryShippingRatesId;
    /**
     * @var string|null
     */
    private $paymentsInvoice;
    /**
     * @var bool|null
     */
    private $promotionBold;
    /**
     * @var bool|null
     */
    private $promotionDepartmentPage;
    /**
     * @var bool|null
     */
    private $promotionEmphasized;
    /**
     * @var bool|null
     */
    private $promotionEmphasizedHighlightBoldPackage;
    /**
     * @var bool|null
     */
    private $promotionHighlight;
    /**
     * @var string|null
     */
    private $sizeTableId;

    /**
     * @return null|string
     */
    public function getAdditionalServicesGroupId(): ?string
    {
        return $this->additionalServicesGroupId;
    }

    /**
     * @param null|string $additionalServicesGroupId
     */
    public function setAdditionalServicesGroupId(?string $additionalServicesGroupId): void
    {
        $this->additionalServicesGroupId = $additionalServicesGroupId;
    }

    /**
     * @return null|string
     */
    public function getDeliveryShippingRatesId(): ?string
    {
        return $this->deliveryShippingRatesId;
    }

    /**
     * @param null|string $deliveryShippingRatesId
     */
    public function setDeliveryShippingRatesId(?string $deliveryShippingRatesId): void
    {
        $this->deliveryShippingRatesId = $deliveryShippingRatesId;
    }

    /**
     * @return null|string
     */
    public function getPaymentsInvoice(): ?string
    {
        return $this->paymentsInvoice;
    }

    /**
     * @param null|string $paymentsInvoice
     */
    public function setPaymentsInvoice(?string $paymentsInvoice): void
    {
        $this->paymentsInvoice = $paymentsInvoice;
    }

    /**
     * @return bool|null
     */
    public function getPromotionBold(): ?bool
    {
        return $this->promotionBold;
    }

    /**
     * @param bool|null $promotionBold
     */
    public function setPromotionBold(?bool $promotionBold): void
    {
        $this->promotionBold = $promotionBold;
    }

    /**
     * @return bool|null
     */
    public function getPromotionDepartmentPage(): ?bool
    {
        return $this->promotionDepartmentPage;
    }

    /**
     * @param bool|null $promotionDepartmentPage
     */
    public function setPromotionDepartmentPage(?bool $promotionDepartmentPage): void
    {
        $this->promotionDepartmentPage = $promotionDepartmentPage;
    }

    /**
     * @return bool|null
     */
    public function getPromotionEmphasized(): ?bool
    {
        return $this->promotionEmphasized;
    }

    /**
     * @param bool|null $promotionEmphasized
     */
    public function setPromotionEmphasized(?bool $promotionEmphasized): void
    {
        $this->promotionEmphasized = $promotionEmphasized;
    }

    /**
     * @return bool|null
     */
    public function getPromotionEmphasizedHighlightBoldPackage(): ?bool
    {
        return $this->promotionEmphasizedHighlightBoldPackage;
    }

    /**
     * @param bool|null $promotionEmphasizedHighlightBoldPackage
     */
    public function setPromotionEmphasizedHighlightBoldPackage(?bool $promotionEmphasizedHighlightBoldPackage): void
    {
        $this->promotionEmphasizedHighlightBoldPackage = $promotionEmphasizedHighlightBoldPackage;
    }

    /**
     * @return bool|null
     */
    public function getPromotionHighlight(): ?bool
    {
        return $this->promotionHighlight;
    }

    /**
     * @param bool|null $promotionHighlight
     */
    public function setPromotionHighlight(?bool $promotionHighlight): void
    {
        $this->promotionHighlight = $promotionHighlight;
    }

    /**
     * @return null|string
     */
    public function getSizeTableId(): ?string
    {
        return $this->sizeTableId;
    }

    /**
     * @param null|string $sizeTableId
     */
    public function setSizeTableId(?string $sizeTableId): void
    {
        $this->sizeTableId = $sizeTableId;
    }


}
