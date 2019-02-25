<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 25.02.19
 * Time: 16:48
 */

namespace Imper86\AllegroApi\Rest\Model\Request\Delivery;


use Imper86\AllegroApi\Rest\Model\RequestInterface;
use Imper86\AllegroApi\RestClientInterface;
use Ramsey\Uuid\Uuid;

class PostShippingRatesRequest implements RequestInterface
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var array
     */
    private $ratesStruct;
    /**
     * @var Uuid|null
     */
    private $id;

    public function __construct(string $name, array $ratesStruct, ?Uuid $id = null)
    {
        if (null === $id) {
            $id = Uuid::uuid4();
        }

        $this->name = $name;
        $this->ratesStruct = $ratesStruct;
        $this->id = $id;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return 'sale/shipping-rates';
    }

    public function getContentType(): ?string
    {
        return RestClientInterface::CONTENT_TYPE_PUBLIC;
    }

    public function getBody(): ?array
    {
        return [
            'id' => $this->id->toString(),
            'name' => $this->name,
            'rates' => $this->ratesStruct,
            'lastModified' => (new \DateTime())->format('c'),
        ];
    }

    public function getQuery(): ?array
    {
        return null;
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
     * @return array
     */
    public function getRatesStruct(): array
    {
        return $this->ratesStruct;
    }

    /**
     * @param array $ratesStruct
     */
    public function setRatesStruct(array $ratesStruct): void
    {
        $this->ratesStruct = $ratesStruct;
    }

    /**
     * @return Uuid|null
     */
    public function getId(): ?Uuid
    {
        return $this->id;
    }

    /**
     * @param Uuid|null $id
     */
    public function setId(?Uuid $id): void
    {
        $this->id = $id;
    }
}
