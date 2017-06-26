<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 13.06.17
 * Time: 14:04
 */

namespace Imper86\AllegroApi\Rest\Model\Http;


interface ResponseInterface
{
    /**
     * Metoda zwraca request, który wywołał daną odpowiedź
     *
     * @return RequestInterface
     */
    public function getRequest(): RequestInterface;

    /**
     * Zwraca surową odpowiedź z API
     *
     * @return mixed
     */
    public function getRaw();
}