<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 25.02.19
 * Time: 15:48
 */

namespace Imper86\AllegroApi\Rest\Model\Request\OfferManagement\OfferQuantityChangeCommands;


use Imper86\AllegroApi\Rest\Model\RequestInterface;
use Imper86\AllegroApi\RestClientInterface;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

class PutOfferQuantityChangeCommand implements RequestInterface
{
    /**
     * @var string
     */
    private $changeType;
    /**
     * @var int
     */
    private $value;
    /**
     * @var array
     */
    private $offerIds;
    /**
     * @var UuidInterface|null
     */
    private $uuid;

    public function __construct(string $changeType, int $value, array $offerIds, ?UuidInterface $uuid)
    {
        if (null === $uuid) {
            $uuid = Uuid::uuid4();
        }

        $this->changeType = $changeType;
        $this->value = $value;
        $this->offerIds = $offerIds;
        $this->uuid = $uuid;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return "sale/offer-quantity-change-commands/{$this->uuid->toString()}";
    }

    public function getContentType(): ?string
    {
        return RestClientInterface::CONTENT_TYPE_PUBLIC;
    }

    public function getBody(): ?array
    {
        $offersStruct = array_map(function ($offerId) {
            return [
                'id' => (string)$offerId,
            ];
        }, $this->offerIds);

        return [
            'modification' => [
                'changeType' => $this->changeType,
                'value' => $this->value,
            ],
            'offerCriteria' => [
                'offers' => $offersStruct,
                'type' => 'CONTAINS_OFFERS',
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
    public function getChangeType(): string
    {
        return $this->changeType;
    }

    /**
     * @param string $changeType
     */
    public function setChangeType(string $changeType): void
    {
        $this->changeType = $changeType;
    }

    /**
     * @return int
     */
    public function getValue(): int
    {
        return $this->value;
    }

    /**
     * @param int $value
     */
    public function setValue(int $value): void
    {
        $this->value = $value;
    }

    /**
     * @return array
     */
    public function getOfferIds(): array
    {
        return $this->offerIds;
    }

    /**
     * @param array $offerIds
     */
    public function setOfferIds(array $offerIds): void
    {
        $this->offerIds = $offerIds;
    }

    /**
     * @return UuidInterface|null
     */
    public function getUuid(): ?UuidInterface
    {
        return $this->uuid;
    }

    /**
     * @param UuidInterface|null $uuid
     */
    public function setUuid(?UuidInterface $uuid): void
    {
        $this->uuid = $uuid;
    }
}
