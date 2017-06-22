<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 13.06.17
 * Time: 14:00
 */

namespace Imper69\AllegroApi\Rest\Model\Http;


interface RequestInterface
{
    /**
     * Metoda powinna zwrócić jedną z czterech możliwości: GET, POST, PUT, DELETE
     *
     * @return string
     */
    public function getMethod(): string;

    /**
     * Metoda powinna zwrócić adres URI wywoływanego zasobu
     *
     * @return string
     */
    public function getUri(): string;

    /**
     * Metoda powinna zwrócić tablicę z requestem do API
     *
     * @return array
     */
    public function getData(): array;
}