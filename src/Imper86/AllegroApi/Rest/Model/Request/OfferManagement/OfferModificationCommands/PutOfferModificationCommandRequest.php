<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 14.08.18
 * Time: 10:23
 */

namespace Imper86\AllegroApi\Rest\Model\Request\OfferManagement\OfferModificationCommands;


use Imper86\AllegroApi\Rest\Model\Collection\StringCollection;
use Imper86\AllegroApi\Rest\Model\Request\OfferManagement\OfferModificationCommands\Data\PutOfferModificationCommandData;
use Imper86\AllegroApi\Rest\Model\RequestInterface;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

class PutOfferModificationCommandRequest implements RequestInterface
{
    /**
     * @var PutOfferModificationCommandData
     */
    private $data;
    /**
     * @var StringCollection
     */
    private $offerIds;
    /**
     * @var null|UuidInterface
     */
    private $uuid;

    public function __construct(
        PutOfferModificationCommandData $data,
        StringCollection $offerIds,
        ?UuidInterface $uuid = null
    ) {
        if (null === $uuid) {
            $uuid = Uuid::uuid4();
        }

        $this->data = $data;
        $this->offerIds = $offerIds;
        $this->uuid = $uuid;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return "sale/offer-modification-commands/{$this->uuid->toString()}";
    }

    public function getContentType(): ?string
    {
        return null;
    }

    public function getBody(): ?array
    {
        return [
            'modification' => [
                'additionalServicesGroup' => [
                    'id' => $this->data->getAdditionalServicesGroupId(),
                ],
                'delivery' => [
                    'shippingRates' => [
                        'id' => $this->data->getDeliveryShippingRatesId(),
                    ],
                ],
                'payments' => [
                    'invoice' => $this->data->getPaymentsInvoice(),
                ],
                'promotion' => [
                    'bold' => $this->data->getPromotionBold(),
                    'departmentPage' => $this->data->getPromotionDepartmentPage(),
                    'emphasized' => $this->data->getPromotionEmphasized(),
                    'emphasizedHighlightBoldPackage' => $this->data->getPromotionEmphasizedHighlightBoldPackage(),
                    'highlight' => $this->data->getPromotionHighlight(),
                ],
                'sizeTable' => [
                    'id' => $this->data->getSizeTableId(),
                ],
            ],
            'offerCriteria' => $this->stringCollectionToOfferCriteriaArray($this->offerIds),
        ];
    }

    public function getQuery(): ?array
    {
        return null;
    }

    private function stringCollectionToOfferCriteriaArray(StringCollection $offerIds): array
    {
        $criteria = [
            [
                'type' => 'CONTAINS_OFFERS',
                'offers' => [],
            ],
        ];

        foreach ($offerIds as $offerId) {
            $criteria[0]['offers'] = [
                'id' => $offerId,
            ];
        }

        return $criteria;
    }

    /**
     * @return PutOfferModificationCommandData
     */
    public function getData(): PutOfferModificationCommandData
    {
        return $this->data;
    }

    /**
     * @param PutOfferModificationCommandData $data
     */
    public function setData(PutOfferModificationCommandData $data): void
    {
        $this->data = $data;
    }

    /**
     * @return StringCollection
     */
    public function getOfferIds(): StringCollection
    {
        return $this->offerIds;
    }

    /**
     * @param StringCollection $offerIds
     */
    public function setOfferIds(StringCollection $offerIds): void
    {
        $this->offerIds = $offerIds;
    }

    /**
     * @return null|UuidInterface
     */
    public function getUuid(): ?UuidInterface
    {
        return $this->uuid;
    }

    /**
     * @param null|UuidInterface $uuid
     */
    public function setUuid(?UuidInterface $uuid): void
    {
        $this->uuid = $uuid;
    }


}
