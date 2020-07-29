<?php

declare(strict_types=1);

namespace ChurakovMike\Accuweather\Actions;

use ChurakovMike\Accuweather\Client\RequestApi;

/**
 * Class Forecast.
 * @package ChurakovMike\Accuweather\Alerts
 *
 * @property RequestApi $request
 * @todo:объединить вызов daily методов в 1 метод через параметр на количество дней
 */
final class Forecast extends BaseAction
{
    /****************************************************
     *                   Daily                          *
     ***************************************************/

    /**
     * Returns daily forecast data for a specific location. Forecast searches require a location key.
     * Please use the Locations API to obtain the location key for your desired location.
     * By default, a truncated version of the hourly forecast data is returned.
     * The full object can be obtained by passing "details=true" into the url string.
     * @see https://developer.accuweather.com/accuweather-forecast-api/apis/get/forecasts/v1/daily/1day/%7BlocationKey%7D
     *
     * @param string $countryCode
     * @param string $language
     * @param bool $details
     * @param bool $metric
     * @return \stdClass
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get1DayForecast(string $countryCode, string $language, bool $details, bool $metric)
    {
        return $this->request->send("forecasts/v1/daily/1day/{$countryCode}", [
            'language' => $language,
            'details' => $details,
            'metric' => $metric,
        ]);
    }

    /**
     * Returns an array of daily forecasts for the next 10 days for a specific location.
     * Forecast searches require a location key.
     * Please use the Locations API to obtain the location key for your desired location.
     * By default, a truncated version of the hourly forecast data is returned.
     * The full object can be obtained by passing "details=true" into the url string.
     * @see https://developer.accuweather.com/accuweather-forecast-api/apis/get/forecasts/v1/daily/10day/%7BlocationKey%7D
     *
     * @param string $countryCode
     * @param string $language
     * @param bool $details
     * @param bool $metric
     * @return \stdClass
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get10DaysForecast(string $countryCode, string $language, bool $details, bool $metric)
    {
        return $this->request->send("forecasts/v1/daily/10day/{$countryCode}", [
            'language' => $language,
            'details' => $details,
            'metric' => $metric,
        ]);
    }

    /**
     * Returns an array of daily forecasts for the next 15 days for a specific location.
     * Forecast searches require a location key.
     * Please use the Locations API to obtain the location key for your desired location.
     * By default, a truncated version of the hourly forecast data is returned.
     * The full object can be obtained by passing "details=true" into the url string.
     * @see https://developer.accuweather.com/accuweather-forecast-api/apis/get/forecasts/v1/daily/15day/%7BlocationKey%7D
     *
     * @param string $countryCode
     * @param string $language
     * @param bool $details
     * @param bool $metric
     * @return \stdClass
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get15DaysForecast(string $countryCode, string $language, bool $details, bool $metric)
    {
        return $this->request->send("forecasts/v1/daily/15day/{$countryCode}", [
            'language' => $language,
            'details' => $details,
            'metric' => $metric,
        ]);
    }

    /**
     * Returns an array of daily forecasts for the next 5 days for a specific location.
     * Forecast searches require a location key.
     * Please use the Locations API to obtain the location key for your desired location.
     * By default, a truncated version of the hourly forecast data is returned.
     * The full object can be obtained by passing "details=true" into the url string.
     * @see https://developer.accuweather.com/accuweather-forecast-api/apis/get/forecasts/v1/daily/5day/%7BlocationKey%7D
     *
     * @param string $countryCode
     * @param string $language
     * @param bool $details
     * @param bool $metric
     * @return \stdClass
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get5DaysForecast(string $countryCode, string $language, bool $details, bool $metric)
    {
        return $this->request->send("forecasts/v1/daily/5day/{$countryCode}", [
            'language' => $language,
            'details' => $details,
            'metric' => $metric,
        ]);
    }

    /**
     * @param int $daysCount
     * @param string $countryCode
     * @param string $language
     * @param bool $details
     * @param bool $metric
     * @return \stdClass
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getDaily(int $daysCount, string $countryCode, string $language, bool $details, bool $metric)
    {
        return $this->request->send("forecasts/v1/daily/{$daysCount}day/{$countryCode}", [
            'language' => $language,
            'details' => $details,
            'metric' => $metric,
        ]);
    }

    /****************************************************
     *                   Hourly                         *
     ***************************************************/

    /**
     * Returns forecast data for the next hour for a specific location.
     * Forecast searches require a location key.
     * Please use the Locations API to obtain the location key for your desired location.
     * By default, a truncated version of the hourly forecast data is returned.
     * The full object can be obtained by passing "details=true" into the url string.
     * @see https://developer.accuweather.com/accuweather-forecast-api/apis/get/forecasts/v1/hourly/1hour/%7BlocationKey%7D
     *
     * @param string $countryCode
     * @param string $language
     * @param bool $details
     * @param bool $metric
     * @return \stdClass
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get1HourForecast(string $countryCode, string $language, bool $details, bool $metric)
    {
        return $this->request->send("forecasts/v1/hourly/1hour/{$countryCode}", [
            'language' => $language,
            'details' => $details,
            'metric' => $metric,
        ]);
    }

    /**
     * Returns an array of hourly forecasts for the next 12 hours for a specific location.
     * Forecast searches require a location key.
     * Please use the Locations API to obtain the location key for your desired location.
     * By default, a truncated version of the hourly forecast data is returned.
     * The full object can be obtained by passing "details=true" into the url string.
     * @see https://developer.accuweather.com/accuweather-forecast-api/apis/get/forecasts/v1/hourly/12hour/%7BlocationKey%7D
     *
     * @param string $countryCode
     * @param string $language
     * @param bool $details
     * @param bool $metric
     * @return \stdClass
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get12HoursForecast(string $countryCode, string $language, bool $details, bool $metric)
    {
        return $this->request->send("forecasts/v1/hourly/12hour/{$countryCode}", [
            'language' => $language,
            'details' => $details,
            'metric' => $metric,
        ]);
    }

    /**
     * Returns an array of hourly forecasts for the next 120 hours for a specific location.
     * Forecast searches require a location key.
     * Please use the Locations API to obtain the location key for your desired location.
     * By default, a truncated version of the hourly forecast data is returned.
     * The full object can be obtained by passing "details=true" into the url string.
     * @see https://developer.accuweather.com/accuweather-forecast-api/apis/get/forecasts/v1/hourly/120hour/%7BlocationKey%7D
     *
     * @param string $countryCode
     * @param string $language
     * @param bool $details
     * @param bool $metric
     * @return \stdClass
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get120HoursForecast(string $countryCode, string $language, bool $details, bool $metric)
    {
        return $this->request->send("forecasts/v1/hourly/120hour/{$countryCode}", [
            'language' => $language,
            'details' => $details,
            'metric' => $metric,
        ]);
    }

    /**
     *  Returns an array of hourly forecasts for the next 24 hours for a specific location.
     * Forecast searches require a location key.
     * Please use the Locations API to obtain the location key for your desired location.
     * By default, a truncated version of the hourly forecast data is returned.
     * The full object can be obtained by passing "details=true" into the url string.
     * @see https://developer.accuweather.com/accuweather-forecast-api/apis/get/forecasts/v1/hourly/24hour/%7BlocationKey%7D
     *
     * @param string $countryCode
     * @param string $language
     * @param bool $details
     * @param bool $metric
     * @return \stdClass
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get24HoursForecast(string $countryCode, string $language, bool $details, bool $metric)
    {
        return $this->request->send("forecasts/v1/hourly/24hour/{$countryCode}", [
            'language' => $language,
            'details' => $details,
            'metric' => $metric,
        ]);
    }

    /**
     * Returns an array of hourly forecasts for the next 72 hours for a specific location.
     * Forecast searches require a location key.
     * Please use the Locations API to obtain the location key for your desired location.
     * By default, a truncated version of the hourly forecast data is returned.
     * The full object can be obtained by passing "details=true" into the url string.
     * @see https://developer.accuweather.com/accuweather-forecast-api/apis/get/forecasts/v1/hourly/72hour/%7BlocationKey%7D
     *
     * @param string $countryCode
     * @param string $language
     * @param bool $details
     * @param bool $metric
     * @return \stdClass
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get72HoursForecast(string $countryCode, string $language, bool $details, bool $metric)
    {
        return $this->request->send("forecasts/v1/hourly/72hour/{$countryCode}", [
            'language' => $language,
            'details' => $details,
            'metric' => $metric,
        ]);
    }

    /**
     * @param int $hoursCount
     * @param string $countryCode
     * @param string $language
     * @param bool $details
     * @param bool $metric
     * @return \stdClass
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getHoursForecast(int $hoursCount, string $countryCode, string $language, bool $details, bool $metric)
    {
        return $this->request->send("forecasts/v1/hourly/{$hoursCount}hour/{$countryCode}", [
            'language' => $language,
            'details' => $details,
            'metric' => $metric,
        ]);
    }
}
