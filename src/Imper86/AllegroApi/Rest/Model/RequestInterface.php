<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 28.02.2018
 * Time: 09:55
 */

namespace Imper86\AllegroApi\Rest\Model;


interface RequestInterface
{
    public function getRequestMethod(): string;

    public function getRequestArray(): array;

    public function getRequestUri(): string;

    public function getContentType(): ?string;
}