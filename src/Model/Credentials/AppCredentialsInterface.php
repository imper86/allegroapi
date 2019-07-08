<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 06.07.19
 * Time: 13:03
 */

namespace Imper86\AllegroRestApiSdk\Model\Credentials;


interface AppCredentialsInterface
{
    public function getClientId(): string;

    public function getClientSecret(): string;

    public function getRedirectUri(): string;

    public function isSandbox(): bool;
}
