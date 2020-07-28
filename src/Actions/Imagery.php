<?php

declare(strict_types=1);

namespace ChurakovMike\Accuweather\Actions;

use ChurakovMike\Accuweather\Client\RequestApi;

/**
 * Class Imagery.
 * @package ChurakovMike\Accuweather\Alerts
 *
 * @property RequestApi $request
 */
final class Imagery extends BaseAction
{
    /**
     * Returns links to radar and satellite images by location key.
     * Imagery searches require a location key.
     * Please use the Locations API to obtain a location key for your desired location.
     * Radar images are not available for all locations worldwide at this time.
     * If radar is not available for your desired location, satellite images are still provided.
     * @see https://developer.accuweather.com/accuweather-imagery-api/apis/get/imagery/v1/maps/radsat/%7Bresolution%7D/%7BlocationKey%7D
     *
     * @param string $resolution
     * @param int $countryCode
     * @param string $language
     * @return \stdClass
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get(string $resolution, int $countryCode, string $language)
    {
        return $this->request->send("imagery/v1/maps/radsat/{$resolution}/{$countryCode}", [
            'language' => $language,
        ]);
    }
}
