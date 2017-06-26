<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 13.06.17
 * Time: 11:48
 */

namespace Imper86\AllegroApi\Rest\Service\Auth;


use Imper86\AllegroApi\Rest\Model\Auth\TokenInterface;

interface AuthServiceInterface
{
    /**
     * Zwraca adres URL do Allegro, pod którym należy się zalogować docelowym kontem
     * aby uzyskać authCode. Następnie taki authCode należy przekazać do metody
     * getNewToken() w tym serwisie.
     *
     * @return string
     */
    public function getAuthUrl(): string;

    /**
     * Zwraca obiekt typu Token zawierający niezbędne dane do wykonywania innych operacji
     * w API
     *
     * @param string $authCode
     * @return TokenInterface
     */
    public function getNewToken(string $authCode): TokenInterface;

    /**
     * Po wygaśnięciu tokenu należy przekazać go do tej metody w celu uzyskania nowego,
     * z aktualnym accessTokenem.
     *
     * @param TokenInterface $token
     * @return TokenInterface
     */
    public function refreshToken(TokenInterface $token): TokenInterface;
}