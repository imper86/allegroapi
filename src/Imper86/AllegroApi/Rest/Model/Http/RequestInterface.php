<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 13.06.17
 * Time: 14:00
 */

namespace Imper86\AllegroApi\Rest\Model\Http;


interface RequestInterface
{
    /**
     * Method should return on of standard HTTP methods: GET, POST, PUT, DELETE
     *
     * @return string
     */
    public function getMethod(): string;

    /**
     * Method should return URI of requested API resource
     *
     * @return string
     */
    public function getUri(): string;

    /**
     * Method should return request data array
     *
     * @return array
     */
    public function getData(): array;

    /**
     * Method should return proper content type from api docs
     *
     * @return string
     */
    public function getContentType(): ?string;
}