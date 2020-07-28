<?php

declare(strict_types=1);

namespace ChurakovMike\Accuweather\Actions;

use ChurakovMike\Accuweather\Client\RequestApi;

/**
 * Class CurrentCondition.
 * @package ChurakovMike\Accuweather\Alerts
 *
 * @property RequestApi $request
 */
final class CurrentCondition extends BaseAction
{
    /****************************************************
     *              Current Conditions                  *
     ***************************************************/

    /**
     * Returns current conditions data for a specific location.
     * Current conditions searches require a location key.
     * Please use the Locations API to obtain the location key for your desired location.
     * By default, a truncated version of the current conditions data is returned.
     * The full object can be obtained by passing "details=true" into the url string.
     * @see https://developer.accuweather.com/accuweather-current-conditions-api/apis/get/currentconditions/v1/%7BlocationKey%7D
     *
     * @param int $countryCode
     * @param string $language
     * @param bool $details
     * @return \stdClass
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get(int $countryCode, string $language, bool $details = true)
    {
        return $this->request->send("currentconditions/v1/{$countryCode}", [
            'language' => $language,
            'details' => $details,
        ]);
    }

    /****************************************************
     *                   Top Cities                     *
     ***************************************************/

    /**
     * Returns current conditions data for the top 50, 100, or 150 cities worldwide, based on rank.
     * @see https://developer.accuweather.com/accuweather-current-conditions-api/apis/get/currentconditions/v1/topcities/%7Bgroup%7D
     *
     * @param int $group
     * @param string $language
     * @return \stdClass
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getTopCitiesCondition(int $group, string $language)
    {
        return $this->request->send("currentconditions/v1/topcities/{$group}", [
            'language' => $language,
        ]);
    }

    /****************************************************
     *         Historical Current Conditions            *
     ***************************************************/

    /**
     * Returns historical current conditions data for a specific location.
     * Current conditions searches require a location key.
     * Please use the Locations API to obtain the location key for your desired location.
     * By default, a truncated version of the current conditions data is returned.
     * The full object can be obtained by passing "details=true" into the url string.
     * @see https://developer.accuweather.com/accuweather-current-conditions-api/apis/get/currentconditions/v1/%7BlocationKey%7D/historical/24
     *
     * @param int $countryCode
     * @param string $language
     * @param bool $details
     * @return \stdClass
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getHistorical(int $countryCode, string $language, bool $details = true)
    {
        return $this->request->send("currentconditions/v1/{$countryCode}/historical/24", [
            'language' => $language,
            'details' => $details,
        ]);
    }

    /**
     * Returns historical current conditions data for a specific location.
     * Current conditions searches require a location key.
     * Please use the Locations API to obtain the location key for your desired location.
     * By default, a truncated version of the current conditions data is returned.
     * The full object can be obtained by passing "details=true" into the url string.
     * @see https://developer.accuweather.com/accuweather-current-conditions-api/apis/get/currentconditions/v1/%7BlocationKey%7D/historical
     *
     * @param int $countryCode
     * @param string $language
     * @param bool $details
     * @return \stdClass
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getHistoricalPast(int $countryCode, string $language, bool $details = true)
    {
        return $this->request->send("currentconditions/v1/{$countryCode}/historical", [
            'language' => $language,
            'details' => $details,
        ]);
    }
}
