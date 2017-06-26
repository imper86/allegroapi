<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 23.06.17
 * Time: 11:33
 */

namespace Imper86\AllegroApi\Rest\Service\Exception;


use Imper86\AllegroApi\Rest\Model\Http\ResponseInterface;
use Throwable;

class RestServiceException extends \Exception
{
    /**
     * @var ResponseInterface
     */
    private $response;


    public function __construct(ResponseInterface $response)
    {
        if (empty($response->getRaw()->output->errors)) {
            throw new InvalidStructureException($response);
        }

        $error = $response->getRaw()->output->errors[0];

        parent::__construct($error->userMessage);

        $this->response = $response;
    }

    /**
     * @return ResponseInterface
     */
    public function getResponse(): ResponseInterface
    {
        return $this->response;
    }

    public function getRestCode(): string
    {
        return $this->response->getRaw()->output->errors[0]->code;
    }

    public function getRestMessage(): string
    {
        return $this->response->getRaw()->output->errors[0]->message;
    }

    public function getRestDetails(): string
    {
        return $this->response->getRaw()->output->errors[0]->details;
    }

    public function getRestPath(): string
    {
        return $this->response->getRaw()->output->errors[0]->path;
    }

    public function getRestUserMessage(): string
    {
        return $this->response->getRaw()->output->errors[0]->userMessage;
    }
}