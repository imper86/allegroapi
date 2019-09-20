<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 08.07.19
 * Time: 16:55
 */

namespace Imper86\AllegroRestApiSdk\Model\Request;


use DateTime;
use DateTimeZone;
use GuzzleHttp\Psr7\Uri;
use Imper86\AllegroRestApiSdk\Constants\EndpointHost;
use Psr\Http\Message\UriInterface;
use function GuzzleHttp\Psr7\build_query;

trait RequestTrait
{
    private function prepareHeaders($token, string $contentType): array
    {
        return [
            'Authorization' => "Bearer {$token}",
            'Accept' => $contentType,
            'Content-Type' => $contentType,
        ];
    }

    private function prepareUri(string $host, string $path, ?array $query = null): UriInterface
    {
        $uri = new Uri("https://{$host}");
        $uri = $uri->withPath($path);

        return !empty($query) ? $uri->withQuery(build_query($query)) : $uri;
    }

    private function prepareApiUri(string $path, ?array $query = null): UriInterface
    {
        return $this->prepareUri(EndpointHost::API, $path, $query);
    }

    private function prepareUploadUri(string $path, ?array $query = null): UriInterface
    {
        return $this->prepareUri(EndpointHost::UPLOAD, $path, $query);
    }

    private function dateTimeFormat(?DateTime $dateTime): ?string
    {
        if (!$dateTime) {
            return null;
        }

        $dateTime->setTimezone(new DateTimeZone('UTC'));

        return $dateTime->format('Y-m-d\TH:i:s.v\Z');
    }
}
