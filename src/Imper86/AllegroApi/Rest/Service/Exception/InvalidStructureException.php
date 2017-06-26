<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 23.06.17
 * Time: 11:37
 */

namespace Imper86\AllegroApi\Rest\Service\Exception;


use Imper86\AllegroApi\Rest\Model\Http\ResponseInterface;
use Throwable;

class InvalidStructureException extends \Exception
{
    /**
     * @var ResponseInterface
     */
    private $response;


    public function __construct(ResponseInterface $response, string $message = "Odpowiedź od API ma niewłaściwą strukturę")
    {
        parent::__construct($message);
        $this->response = $response;
    }

    /**
     * @return ResponseInterface
     */
    public function getResponse(): ResponseInterface
    {
        return $this->response;
    }
}