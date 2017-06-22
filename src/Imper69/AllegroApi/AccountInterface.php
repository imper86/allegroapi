<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.06.17
 * Time: 16:50
 */

namespace Imper69\AllegroApi;


interface AccountInterface
{
    public function getAllegroApiRestClientId(): string;

    public function getAllegroApiRestClientSecret(): string;

    public function getAllegroApiRestApiKey(): string;

    public function getAllegroApiRestRedirectUri(): string;

    public function getAllegroSellerId(): int;

    public function getAllegroSoapApiKey(): string;
}