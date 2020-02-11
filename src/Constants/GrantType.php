<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 23.09.2019
 * Time: 17:09
 */

namespace Imper86\AllegroRestApiSdk\Constants;


/**
 * Interface GrantType
 * @package Imper86\AllegroRestApiSdk\Constants
 */
interface GrantType
{
    const AUTHORIZATION_CODE = 'authorization_code';

    const REFRESH_TOKEN = 'refresh_token';

    const CLIENT_CREDENTIALS = 'client_credentials';

    const DEVICE_CODE = 'urn:ietf:params:oauth:grant-type:device_code';
}
