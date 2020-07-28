<?php

declare(strict_types=1);

namespace ChurakovMike\Accuweather\Actions;

use ChurakovMike\Accuweather\Client\RequestApi;

/**
 * Class Alert.
 * @package ChurakovMike\Accuweather\Alerts
 *
 * @property RequestApi $request
 */
final class Alert extends BaseAction
{
    /**
     * Returns alert data for a specific location.
     * Alert searches require a location key.
     * Please use the Locations API to obtain the location key for your desired location.
     * By default, a truncated version of the alert data is returned.
     * The full object can be obtained by passing "details=true" into the url string.
     * @see https://developer.accuweather.com/accuweather-alerts-api/apis/get/alerts/v1/%7BlocationKey%7D
     *
     * @param int $countryCode
     * @param string $language
     * @param bool $details
     * @return \stdClass
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get(int $countryCode, string $language, bool $details = true)
    {
        return $this->request->send("alerts/v1/{$countryCode}", [
            'language' => $language,
            'details' => $details,
        ]);
    }
}
