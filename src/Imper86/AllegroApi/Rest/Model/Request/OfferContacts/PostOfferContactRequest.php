<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 14.08.18
 * Time: 13:43
 */

namespace Imper86\AllegroApi\Rest\Model\Request\OfferContacts;


use Imper86\AllegroApi\Rest\Model\Collection\StringCollection;
use Imper86\AllegroApi\Rest\Model\RequestInterface;

class PostOfferContactRequest implements RequestInterface
{
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

    public function __construct(string $name, StringCollection $emails, StringCollection $phones)
    {
        $this->name = $name;
        $this->emails = $emails;
        $this->phones = $phones;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return "sale/offer-contacts";
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
     * @return StringCollection
     */
    public function getEmails(): StringCollection
    {
        return $this->emails;
    }

    /**
     * @param StringCollection $emails
     */
    public function setEmails(StringCollection $emails): void
    {
        $this->emails = $emails;
    }

    /**
     * @return StringCollection
     */
    public function getPhones(): StringCollection
    {
        return $this->phones;
    }

    /**
     * @param StringCollection $phones
     */
    public function setPhones(StringCollection $phones): void
    {
        $this->phones = $phones;
    }


}
