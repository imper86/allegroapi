<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 14.08.18
 * Time: 13:49
 */

namespace Imper86\AllegroApi\Rest\Model\Request\OfferContacts;


use Imper86\AllegroApi\Rest\Model\Collection\StringCollection;
use Imper86\AllegroApi\Rest\Model\RequestInterface;

class PutOfferContactRequest implements RequestInterface
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
     * @var StringCollection
     */
    private $emails;
    /**
     * @var StringCollection
     */
    private $phones;

    public function __construct(string $id, string $name, StringCollection $emails, StringCollection $phones)
    {
        $this->id = $id;
        $this->name = $name;
        $this->emails = $emails;
        $this->phones = $phones;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return "sale/offer-contacts/{$this->id}";
    }

    public function getContentType(): ?string
    {
        return null;
    }

    public function getBody(): ?array
    {
        $body = [
            'name' => $this->name,
            'emails' => [],
            'phones' => [],
        ];

        foreach ($this->emails as $email) {
            $body['emails'][] = ['address' => $email];
        }

        foreach ($this->phones as $phone) {
            $body['phones'][] = ['number' => $phone];
        }

        return $body;
    }

    public function getQuery(): ?array
    {
        return null;
    }


}
