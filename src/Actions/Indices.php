<?php

declare(strict_types=1);

namespace ChurakovMike\Accuweather\Actions;

use ChurakovMike\Accuweather\Client\RequestApi;

/**
 * Class Indices.
 * @package ChurakovMike\Accuweather\Alerts
 *
 * @property RequestApi $request
 */
final class Indices extends BaseAction
{
    /****************************************************
     *                     1 day                        *
     ***************************************************/

    /**
     * Returns daily index data for a specific group of indices, by location key.
     * @see https://developer.accuweather.com/accuweather-indices-api/apis/get/indices/v1/daily/1day/%7BlocationKey%7D/groups/%7BID%7D
     *
     * @param int $countryCode
     * @param int $group
     * @param string $language
     * @param bool $details
     * @return \stdClass
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get1Day(int $countryCode, int $group, string $language, bool $details = true)
    {
        return $this->request->send("indices/v1/daily/1day/{$countryCode}/groups/{$group}", [
            'language' => $language,
            'details' => $details,
        ]);
    }

    /**
     * Returns daily index data for a specific index, by location key.
     * @see https://developer.accuweather.com/accuweather-indices-api/apis/get/indices/v1/daily/1day/%7BlocationKey%7D/%7BID%7D
     *
     * @param int $countryCode
     * @param int $index
     * @param string $language
     * @param bool $details
     * @return \stdClass
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get1DayForIndex(int $countryCode, int $index, string $language, bool $details = true)
    {
        return $this->request->send("indices/v1/daily/1day/{$countryCode}/{$index}", [
            'language' => $language,
            'details' => $details,
        ]);
    }

    /**
     * Returns daily index data for all indices, by location key.
     * @see https://developer.accuweather.com/accuweather-indices-api/apis/get/indices/v1/daily/1day/%7BlocationKey%7D
     *
     * @param int $countryCode
     * @param string $language
     * @param bool $details
     * @return \stdClass
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get1DayAllIndies(int $countryCode, string $language, bool $details = true)
    {
        return $this->request->send("indices/v1/daily/1day/{$countryCode}", [
            'language' => $language,
            'details' => $details,
        ]);
    }

    /****************************************************
     *                     10 day                       *
     ***************************************************/

    /**
     * Returns daily index data for a specific group of indices, by location key.
     * @see https://developer.accuweather.com/accuweather-indices-api/apis/get/indices/v1/daily/10day/%7BlocationKey%7D/groups/%7BID%7D
     *
     * @param int $countryCode
     * @param int $group
     * @param string $language
     * @param bool $details
     * @return \stdClass
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get10Day(int $countryCode, int $group, string $language, bool $details = true)
    {
        return $this->request->send("indices/v1/daily/10day/{$countryCode}/groups/{$group}", [
            'language' => $language,
            'details' => $details,
        ]);
    }

    /**
     * Returns daily index data for a specific index, by location key.
     * @see https://developer.accuweather.com/accuweather-indices-api/apis/get/indices/v1/daily/10day/%7BlocationKey%7D/%7BID%7D
     *
     * @param int $countryCode
     * @param int $index
     * @param string $language
     * @param bool $details
     * @return \stdClass
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get10DayForIndex(int $countryCode, int $index, string $language, bool $details = true)
    {
        return $this->request->send("indices/v1/daily/10day/{$countryCode}/{$index}", [
            'language' => $language,
            'details' => $details,
        ]);
    }

    /**
     * Returns daily index data for all indices, by location key.
     * @see https://developer.accuweather.com/accuweather-indices-api/apis/get/indices/v1/daily/10day/%7BlocationKey%7D
     *
     * @param int $countryCode
     * @param string $language
     * @param bool $details
     * @return \stdClass
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get10DayAllIndies(int $countryCode, string $language, bool $details = true)
    {
        return $this->request->send("indices/v1/daily/10day/{$countryCode}", [
            'language' => $language,
            'details' => $details,
        ]);
    }

    /****************************************************
     *                     15 day                       *
     ***************************************************/

    /**
     * Returns daily index data for a specific group of indices, by location key.
     * @see https://developer.accuweather.com/accuweather-indices-api/apis/get/indices/v1/daily/15day/%7BlocationKey%7D/groups/%7BID%7D
     *
     * @param int $countryCode
     * @param int $group
     * @param string $language
     * @param bool $details
     * @return \stdClass
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get15Day(int $countryCode, int $group, string $language, bool $details = true)
    {
        return $this->request->send("indices/v1/daily/15day/{$countryCode}/groups/{$group}", [
            'language' => $language,
            'details' => $details,
        ]);
    }

    /**
     * Returns daily index data for a specific index, by location key.
     * @see https://developer.accuweather.com/accuweather-indices-api/apis/get/indices/v1/daily/15day/%7BlocationKey%7D/%7BID%7D
     *
     * @param int $countryCode
     * @param int $index
     * @param string $language
     * @param bool $details
     * @return \stdClass
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get15DayForIndex(int $countryCode, int $index, string $language, bool $details = true)
    {
        return $this->request->send("indices/v1/daily/15day/{$countryCode}/{$index}", [
            'language' => $language,
            'details' => $details,
        ]);
    }

    /**
     * Returns daily index data for all indices, by location key.
     * @see https://developer.accuweather.com/accuweather-indices-api/apis/get/indices/v1/daily/15day/%7BlocationKey%7D
     *
     * @param int $countryCode
     * @param string $language
     * @param bool $details
     * @return \stdClass
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get15DayAllIndies(int $countryCode, string $language, bool $details = true)
    {
        return $this->request->send("indices/v1/daily/15day/{$countryCode}", [
            'language' => $language,
            'details' => $details,
        ]);
    }

    /****************************************************
     *                     5 day                        *
     ***************************************************/

    /**
     * Returns daily index data for a specific group of indices, by location key.
     * @see https://developer.accuweather.com/accuweather-indices-api/apis/get/indices/v1/daily/5day/%7BlocationKey%7D/groups/%7BID%7D
     *
     * @param int $countryCode
     * @param int $group
     * @param string $language
     * @param bool $details
     * @return \stdClass
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get5Day(int $countryCode, int $group, string $language, bool $details = true)
    {
        return $this->request->send("indices/v1/daily/5day/{$countryCode}/groups/{$group}", [
            'language' => $language,
            'details' => $details,
        ]);
    }

    /**
     * Returns daily index data for a specific index, by location key.
     * @see https://developer.accuweather.com/accuweather-indices-api/apis/get/indices/v1/daily/5day/%7BlocationKey%7D/%7BID%7D
     *
     * @param int $countryCode
     * @param int $index
     * @param string $language
     * @param bool $details
     * @return \stdClass
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get5DayForIndex(int $countryCode, int $index, string $language, bool $details = true)
    {
        return $this->request->send("indices/v1/daily/5day/{$countryCode}/{$index}", [
            'language' => $language,
            'details' => $details,
        ]);
    }

    /**
     * Returns daily index data for all indices, by location key.
     * @see https://developer.accuweather.com/accuweather-indices-api/apis/get/indices/v1/daily/5day/%7BlocationKey%7D
     *
     * @param int $countryCode
     * @param string $language
     * @param bool $details
     * @return \stdClass
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get5DayAllIndies(int $countryCode, string $language, bool $details = true)
    {
        return $this->request->send("indices/v1/daily/5day/{$countryCode}", [
            'language' => $language,
            'details' => $details,
        ]);
    }

    /****************************************************
     *                   Metadata                       *
     ***************************************************/

    /**
     * Returns metadata for all daily indices.
     * @see https://developer.accuweather.com/accuweather-indices-api/apis/get/indices/v1/daily
     *
     * @param string $language
     * @return \stdClass
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getDailyIndices(string $language)
    {
        return $this->request->send("indices/v1/daily", [
            'language' => $language,
        ]);
    }

    /**
     * Returns metadata for all index groups.
     * @see https://developer.accuweather.com/accuweather-indices-api/apis/get/indices/v1/daily/groups
     *
     * @param string $language
     * @return \stdClass
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getIndexGroup(string $language)
    {
        return $this->request->send("indices/v1/daily/groups", [
            'language' => $language,
        ]);
    }

    /**
     * Returns metadata for all indices in a specified group.
     * @see https://developer.accuweather.com/accuweather-indices-api/apis/get/indices/v1/daily/groups/%7BID%7D
     *
     * @param string $language
     * @param int $group
     * @return \stdClass
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getDailyIndicesByGroup(string $language, int $group)
    {
        return $this->request->send("indices/v1/daily/groups/{$group}", [
            'language' => $language,
        ]);
    }

    /**
     * Returns metadata for a specific index type.
     * @see https://developer.accuweather.com/accuweather-indices-api/apis/get/indices/v1/daily/%7BID%7D
     *
     * @param int $index
     * @param string $language
     * @return \stdClass
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getMeta(int $index, string $language)
    {
        return $this->request->send("indices/v1/daily/{$index}", [
            'language' => $language,
        ]);
    }
}
