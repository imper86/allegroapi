<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 25.02.19
 * Time: 16:55
 */

namespace Imper86\AllegroApi\Rest\Model\Request\Delivery;


use Imper86\AllegroApi\Rest\Model\RequestInterface;
use Imper86\AllegroApi\RestClientInterface;

class PutShippingRatesRequest implements RequestInterface
{
    /**
     * @var string
     */
    private $id;
    /**
     * @var string
     */
    private $name;
    /**
     * @var array
     */
    private $ratesStruct;

    public function __construct(string $id, string $name, array $ratesStruct)
    {
        $this->id = $id;
        $this->name = $name;
        $this->ratesStruct = $ratesStruct;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return "sale/shipping-rates/{$this->id}";
    }

    public function getContentType(): ?string
    {
        return RestClientInterface::CONTENT_TYPE_PUBLIC;
    }

    public function getBody(): ?array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'rates' => $this->ratesStruct,
            'lastModified' => (new \DateTime())->format('c'),
        ];
    }

    public function getQuery(): ?array
    {
        return null;
    }


}
