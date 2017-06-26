<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.06.17
 * Time: 17:08
 */

namespace Imper86\AllegroApi\Rest\Exception;


use Imper86\Curl\CurlClientInterface;

class EmptyCurlResponseException extends \Exception
{
    private $curl;

    public function __construct(
        CurlClientInterface $curlClient,
        $message = 'Otrzymano pustą odpowiedź CURL, lub nie wywołano requesta'
    )
    {
        parent::__construct($message);
        $this->curl = $curlClient;
    }

    public function getCurl(): CurlClientInterface
    {
        return $this->curl;
    }
}