<?php

declare(strict_types=1);

namespace ChurakovMike\Accuweather\Actions;

use ChurakovMike\Accuweather\Client\RequestApi;

/**
 * Class WeatherAlarm.
 * @package ChurakovMike\Accuweather\Alerts
 *
 * @property RequestApi $request
 */
final class WeatherAlarm extends BaseAction
{
    /**
     * Returns 1 day of weather alarms for a specific location.
     * @see https://developer.accuweather.com/accuweather-weather-alarms-api/apis/get/alarms/v1/1day/%7BlocationKey%7D
     *
     * @param int $countryCode
     * @param string $language
     * @return \stdClass
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get1day(int $countryCode, string $language)
    {
        return $this->request->send("alarms/v1/1day/{$countryCode}", [
            'language' => $language,
        ]);
    }

    /**
     * Returns 10 day of weather alarms for a specific location.
     * @see https://developer.accuweather.com/accuweather-weather-alarms-api/apis/get/alarms/v1/10day/%7BlocationKey%7D
     *
     * @param int $countryCode
     * @param string $language
     * @return \stdClass
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get10day(int $countryCode, string $language)
    {
        return $this->request->send("alarms/v1/10day/{$countryCode}", [
            'language' => $language,
        ]);
    }

    /**
     * Returns 15 day of weather alarms for a specific location.
     * @see https://developer.accuweather.com/accuweather-weather-alarms-api/apis/get/alarms/v1/15day/%7BlocationKey%7D
     *
     * @param int $countryCode
     * @param string $language
     * @return \stdClass
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get15day(int $countryCode, string $language)
    {
        return $this->request->send("alarms/v1/15day/{$countryCode}", [
            'language' => $language,
        ]);
    }

    /**
     * Returns 5 day of weather alarms for a specific location.
     * @see https://developer.accuweather.com/accuweather-weather-alarms-api/apis/get/alarms/v1/5day/%7BlocationKey%7D
     *
     * @param int $countryCode
     * @param string $language
     * @return \stdClass
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get5day(int $countryCode, string $language)
    {
        return $this->request->send("alarms/v1/5day/{$countryCode}", [
            'language' => $language,
        ]);
    }
}
