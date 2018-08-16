<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 14.08.18
 * Time: 17:12
 */

namespace Imper86\AllegroApi\Rest\Model\Request\OfferManagement\OfferPublicationCommands;


use Imper86\AllegroApi\Rest\Model\Collection\StringCollection;
use Imper86\AllegroApi\Rest\Model\Request\RequestToolsTrait;
use Imper86\AllegroApi\Rest\Model\RequestInterface;
use Imper86\AllegroApi\RestClientInterface;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

class PutOfferPublicationCommandRequest implements RequestInterface
{
    use RequestToolsTrait;

    /**
     * @var StringCollection
     */
    private $offerIds;
    /**
     * @var string
     */
    private $action;
    /**
     * @var \DateTime|null
     */
    private $scheduledFor;
    /**
     * @var null|UuidInterface
     */
    private $uuid;

    public function __construct(
        StringCollection $offerIds,
        string $action,
        ?\DateTime $scheduledFor = null,
        ?UuidInterface $uuid = null
    ) {
        if (null === $uuid) {
            $uuid = Uuid::uuid4();
        }

        $this->offerIds = $offerIds;
        $this->action = $action;
        $this->scheduledFor = $scheduledFor;
        $this->uuid = $uuid;

        $this->changeDateTimeZone($this->scheduledFor);
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return "sale/offer-publication-commands/{$this->uuid->toString()}";
    }

    public function getContentType(): ?string
    {
        return RestClientInterface::CONTENT_TYPE_BETA;
    }

    public function getBody(): ?array
    {
        $body = [
            'publication' => [
                'action' => $this->action,
            ],
            'offerCriteria' => [
                [
                    'offers' => $this->offerIdsCollectionToArray($this->offerIds),
                    'type' => 'CONTAINS_OFFERS',
                ],
            ]
        ];

        if (null !== $this->scheduledFor) {
            $body['publication']['scheduledFor'] = $this->scheduledFor->format(RestClientInterface::DATE_TIME_FORMAT);
        }

        return $body;
    }

    public function getQuery(): ?array
    {
        return null;
    }

    private function offerIdsCollectionToArray(StringCollection $offerIds): array
    {
        $offers = [];

        foreach ($offerIds as $offerId) {
            $offers[] = ['id' => $offerId];
        }

        return $offers;
    }
}
