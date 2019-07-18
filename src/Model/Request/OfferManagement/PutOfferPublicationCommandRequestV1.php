<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 08.07.19
 * Time: 17:46
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\OfferManagement;


use DateTime;
use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Model\Request\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;
use Ramsey\Uuid\Uuid;

class PutOfferPublicationCommandRequestV1 extends Request
{
    use RequestTrait;

    /**
     * @var string
     */
    private $commandId;

    public function __construct(
        $token,
        array $offerIds,
        string $action,
        ?DateTime $scheduledFor = null,
        ?string $commandId = null
    )
    {
        $this->commandId = $commandId ?: Uuid::uuid4()->toString();

        $offersStruct = array_map(function ($offerId) {
            return ['id' => (string)$offerId];
        }, array_values(array_unique($offerIds)));

        parent::__construct(
            'PUT',
            "/sale/offer-publication-commands/{$this->commandId}",
            $this->prepareHeaders($token, ContentType::PUBLIC_V1),
            json_encode([
                'offerCriteria' => [
                    [
                        'offers' => array_values($offersStruct),
                        'type' => 'CONTAINS_OFFERS',
                    ],
                ],
                'publication' => [
                    'action' => $action,
                    'scheduledFor' => $this->dateTimeFormat($scheduledFor),
                ],
            ])
        );
    }

    /**
     * @return string
     */
    public function getCommandId(): string
    {
        return $this->commandId;
    }
}
