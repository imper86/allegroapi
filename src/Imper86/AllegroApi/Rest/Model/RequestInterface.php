<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 28.02.2018
 * Time: 09:55
 */

namespace Imper86\AllegroApi\Rest\Model;


interface RequestInterface
{
    const ALLOWED_METHODS = ['GET', 'POST', 'PUT', 'DELETE'];

    /**
     * Must return one of HTTP methods: GET, POST, PUT, DELETE
     * @return string
     */
    public function getMethod(): string;

    /**
     * Must return properly formatted URI, eg. "/sale/offers"
     * @return string
     */
    public function getUri(): string;

    /**
     * Return content-type of the resource. If null given, it'll apply "application/vnd.allegro.public.v1+json"
     * @return null|string
     */
    public function getContentType(): ?string;

    /**
     * Return request body, should be used only for POST and PUT methods
     * @return array
     */
    public function getBody(): ?array;

    /**
     * Return request query
     * @return array|null
     */
    public function getQuery(): ?array;
}
