<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.06.17
 * Time: 16:50
 */

namespace Imper86\AllegroApi;


interface CredentialsInterface
{
    public function getRestClientId(): string;

    public function getRestClientSecret(): string;

    public function getRestApiKey(): string;

    public function getRestRedirectUri(): string;

    public function getSoapApiKey(): string;
}
