<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 14.08.18
 * Time: 14:15
 */

namespace Imper86\AllegroApi\Rest\Model\Request\Pricing;


use Imper86\AllegroApi\Rest\Model\RequestInterface;

/**
 * Class PostPricingFeePreviewRequest
 * @package Imper86\AllegroApi\Rest\Model\Request\Pricing
 *
 * Need help? Visit: https://developer.allegro.pl/news/2017-10-30-Kalkulator_ogloszenia/
 */
class PostPricingFeePreviewRequest implements RequestInterface
{
    /**
     * @var string
     */
    private $categoryId;
    /**
     * @var string
     */
    private $duration;
    /**
     * @var string
     */
    private $type;
    /**
     * @var bool|null
     */
    private $includeQuotingBundles;
    /**
     * @var int|null
     */
    private $numberOfBigPhotos;
    /**
     * @var int|null
     */
    private $numberOfPhotos;
    /**
     * @var int|null
     */
    private $quantity;
    /**
     * @var int|null
     */
    private $soldQuantity;
    /**
     * @var float
     */
    private $unitPrice;
    /**
     * @var bool|null
     */
    private $bold;
    /**
     * @var bool|null
     */
    private $highlight;
    /**
     * @var bool|null
     */
    private $departmentPage;
    /**
     * @var bool|null
     */
    private $emphasized;
    /**
     * @var bool|null
     */
    private $emphasizedHighlightBoldPackage;

    public function __construct(
        string $categoryId,
        string $duration,
        string $type,
        ?bool $includeQuotingBundles,
        ?int $numberOfBigPhotos,
        ?int $numberOfPhotos,
        ?int $quantity,
        ?int $soldQuantity,
        float $unitPrice,
        ?bool $bold,
        ?bool $highlight,
        ?bool $departmentPage,
        ?bool $emphasized,
        ?bool $emphasizedHighlightBoldPackage
    ) {
        $this->categoryId = $categoryId;
        $this->duration = $duration;
        $this->type = $type;
        $this->includeQuotingBundles = $includeQuotingBundles;
        $this->numberOfBigPhotos = $numberOfBigPhotos;
        $this->numberOfPhotos = $numberOfPhotos;
        $this->quantity = $quantity;
        $this->soldQuantity = $soldQuantity;
        $this->unitPrice = $unitPrice;
        $this->bold = $bold;
        $this->highlight = $highlight;
        $this->departmentPage = $departmentPage;
        $this->emphasized = $emphasized;
        $this->emphasizedHighlightBoldPackage = $emphasizedHighlightBoldPackage;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return "pricing/fee-preview";
    }

    public function getContentType(): ?string
    {
        return null;
    }

    public function getBody(): ?array
    {
        return [
            'includeQuotingBundles' => $this->includeQuotingBundles,
            'offer' => [
                'category' => [
                    'id' => $this->categoryId,
                ],
                'duration' => $this->duration,
                'numberOfBigPhotos' => $this->numberOfBigPhotos,
                'numberOfPhotos' => $this->numberOfPhotos,
                'quantity' => $this->quantity,
                'type' => $this->type,
                'soldQuantity' => $this->soldQuantity,
                'unitPrice' => $this->unitPrice,
                'bold' => $this->bold,
                'highlight' => $this->highlight,
                'departmentPage' => $this->departmentPage,
                'emphasized' => $this->emphasized,
                'emphasizedHighlightBoldPackage' => $this->emphasizedHighlightBoldPackage,
            ],
        ];
    }

    public function getQuery(): ?array
    {
        return null;
    }

    /**
     * @return string
     */
    public function getCategoryId(): string
    {
        return $this->categoryId;
    }

    /**
     * @param string $categoryId
     */
    public function setCategoryId(string $categoryId): void
    {
        $this->categoryId = $categoryId;
    }

    /**
     * @return string
     */
    public function getDuration(): string
    {
        return $this->duration;
    }

    /**
     * @param string $duration
     */
    public function setDuration(string $duration): void
    {
        $this->duration = $duration;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return bool|null
     */
    public function getIncludeQuotingBundles(): ?bool
    {
        return $this->includeQuotingBundles;
    }

    /**
     * @param bool|null $includeQuotingBundles
     */
    public function setIncludeQuotingBundles(?bool $includeQuotingBundles): void
    {
        $this->includeQuotingBundles = $includeQuotingBundles;
    }

    /**
     * @return int|null
     */
    public function getNumberOfBigPhotos(): ?int
    {
        return $this->numberOfBigPhotos;
    }

    /**
     * @param int|null $numberOfBigPhotos
     */
    public function setNumberOfBigPhotos(?int $numberOfBigPhotos): void
    {
        $this->numberOfBigPhotos = $numberOfBigPhotos;
    }

    /**
     * @return int|null
     */
    public function getNumberOfPhotos(): ?int
    {
        return $this->numberOfPhotos;
    }

    /**
     * @param int|null $numberOfPhotos
     */
    public function setNumberOfPhotos(?int $numberOfPhotos): void
    {
        $this->numberOfPhotos = $numberOfPhotos;
    }

    /**
     * @return int|null
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    /**
     * @param int|null $quantity
     */
    public function setQuantity(?int $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * @return int|null
     */
    public function getSoldQuantity(): ?int
    {
        return $this->soldQuantity;
    }

    /**
     * @param int|null $soldQuantity
     */
    public function setSoldQuantity(?int $soldQuantity): void
    {
        $this->soldQuantity = $soldQuantity;
    }

    /**
     * @return float
     */
    public function getUnitPrice(): float
    {
        return $this->unitPrice;
    }

    /**
     * @param float $unitPrice
     */
    public function setUnitPrice(float $unitPrice): void
    {
        $this->unitPrice = $unitPrice;
    }

    /**
     * @return bool|null
     */
    public function getBold(): ?bool
    {
        return $this->bold;
    }

    /**
     * @param bool|null $bold
     */
    public function setBold(?bool $bold): void
    {
        $this->bold = $bold;
    }

    /**
     * @return bool|null
     */
    public function getHighlight(): ?bool
    {
        return $this->highlight;
    }

    /**
     * @param bool|null $highlight
     */
    public function setHighlight(?bool $highlight): void
    {
        $this->highlight = $highlight;
    }

    /**
     * @return bool|null
     */
    public function getDepartmentPage(): ?bool
    {
        return $this->departmentPage;
    }

    /**
     * @param bool|null $departmentPage
     */
    public function setDepartmentPage(?bool $departmentPage): void
    {
        $this->departmentPage = $departmentPage;
    }

    /**
     * @return bool|null
     */
    public function getEmphasized(): ?bool
    {
        return $this->emphasized;
    }

    /**
     * @param bool|null $emphasized
     */
    public function setEmphasized(?bool $emphasized): void
    {
        $this->emphasized = $emphasized;
    }

    /**
     * @return bool|null
     */
    public function getEmphasizedHighlightBoldPackage(): ?bool
    {
        return $this->emphasizedHighlightBoldPackage;
    }

    /**
     * @param bool|null $emphasizedHighlightBoldPackage
     */
    public function setEmphasizedHighlightBoldPackage(?bool $emphasizedHighlightBoldPackage): void
    {
        $this->emphasizedHighlightBoldPackage = $emphasizedHighlightBoldPackage;
    }


}
