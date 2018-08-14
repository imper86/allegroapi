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


}
