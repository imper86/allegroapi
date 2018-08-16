<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 14.08.18
 * Time: 14:46
 */

namespace Imper86\AllegroApi\Rest\Model\Request\OfferVariants;


use Imper86\AllegroApi\Rest\Model\Collection\StringCollection;
use Imper86\AllegroApi\Rest\Model\Request\OfferVariants\ParameterModel\Offer;
use Imper86\AllegroApi\Rest\Model\Request\OfferVariants\ParameterModel\OfferCollection;
use Imper86\AllegroApi\Rest\Model\RequestInterface;
use Imper86\AllegroApi\RestClientInterface;
use Ramsey\Uuid\Uuid;

class PutOfferVariantRequest implements RequestInterface
{
    /**
     * @var OfferCollection|Offer[]
     */
    private $offers;
    /**
     * @var string
     */
    private $name;
    /**
     * @var bool
     */
    private $useColorPattern;
    /**
     * @var string
     */
    private $setId;
    /**
     * @var StringCollection|null
     */
    private $parameterIds;

    public function __construct(
        ?string $setId = null,
        OfferCollection $offers,
        string $name,
        bool $useColorPattern = false,
        ?StringCollection $parameterIds = null
    ) {
        if (null === $setId) {
            $uuid = Uuid::uuid4();
            $setId = $uuid->toString();
        }

        $this->offers = $offers;
        $this->name = $name;
        $this->useColorPattern = $useColorPattern;
        $this->setId = $setId;
        $this->parameterIds = $parameterIds ?? new StringCollection();
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return "sale/offer-variants/{$this->setId}";
    }

    public function getContentType(): ?string
    {
        return RestClientInterface::CONTENT_TYPE_BETA;
    }

    public function getBody(): ?array
    {
        $body = [
            'offers' => [],
            'name' => $this->name,
            'parameters' => [],
        ];

        foreach ($this->offers as $offer) {
            $offerArray = ['id' => $offer->getId()];

            if ($this->useColorPattern) {
                $offerArray['colorPattern'] = $offer->getColorPattern();
            }

            $body['offers'][] = $offerArray;
        }

        foreach ($this->parameterIds as $id) {
            $body['parameters'][] = ['id' => $id];
        }

        if ($this->useColorPattern) {
            $body['parameters'][] = ['id' => 'color/pattern'];
        }

        return $body;
    }

    public function getQuery(): ?array
    {
        return null;
    }

    /**
     * @return Offer[]|OfferCollection
     */
    public function getOffers()
    {
        return $this->offers;
    }

    /**
     * @param Offer[]|OfferCollection $offers
     */
    public function setOffers($offers): void
    {
        $this->offers = $offers;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return bool
     */
    public function isUseColorPattern(): bool
    {
        return $this->useColorPattern;
    }

    /**
     * @param bool $useColorPattern
     */
    public function setUseColorPattern(bool $useColorPattern): void
    {
        $this->useColorPattern = $useColorPattern;
    }

    /**
     * @return string
     */
    public function getSetId(): string
    {
        return $this->setId;
    }

    /**
     * @param string $setId
     */
    public function setSetId(string $setId): void
    {
        $this->setId = $setId;
    }

    /**
     * @return StringCollection|null
     */
    public function getParameterIds(): ?StringCollection
    {
        return $this->parameterIds;
    }

    /**
     * @param StringCollection|null $parameterIds
     */
    public function setParameterIds(?StringCollection $parameterIds): void
    {
        $this->parameterIds = $parameterIds;
    }


}
