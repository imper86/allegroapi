<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 13.06.17
 * Time: 11:07
 */

namespace Imper86\AllegroApi\Rest\Exception;


use Imper86\Curl\CurlResponseInterface;
use Imper86\Curl\Model\ResponseInterface;

class IncorrectCurlResponseException extends \Exception
{
    /**
     * @var ResponseInterface
     */
    private $curlResponse;

    public function __construct(ResponseInterface $curlResponse, $message = "Nieprawidłowa struktura odpowiedzi api")
    {
        parent::__construct($message);
        $this->curlResponse = $curlResponse;
    }

    public function getCurlResponse(): ResponseInterface
    {
        return $this->curlResponse;
    }
}