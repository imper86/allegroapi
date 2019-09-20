<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 08.07.19
 * Time: 17:38
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\OfferManagement;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Constants\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;
use Ramsey\Uuid\Uuid;

class PutChangePriceCommandRequestV1 extends Request
{
    use RequestTrait;

    /**
     * @var string
     */
    private $commandId;

    public function __construct($token, string $offerId, string $buyNowPriceAmount, ?string $commandId = null)
    {
        $this->commandId = $commandId ?: Uuid::uuid4()->toString();

        parent::__construct(
            'PUT',
            $this->prepareApiUri("/offers/{$offerId}/change-price-commands/{$this->commandId}"),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1),
            json_encode([
                'id' => $this->commandId,
                'input' => [
                    'buyNowPrice' => [
                        'amount' => $buyNowPriceAmount,
                        'currency' => 'PLN',
                    ],
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
