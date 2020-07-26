<?php

declare(strict_types=1);

namespace ChurakovMike\Accuweather\Actions;

use ChurakovMike\Accuweather\Client\RequestApi;
use stdClass;
use GuzzleHttp\Exception\GuzzleException;

/**
 * Class Location.
 * @package ChurakovMike\Accuweather\Alerts
 *
 * @property RequestApi $request
 */
final class Location extends BaseAction
{
    /****************************************************
     *                   List methods                   *
     ***************************************************/

    /**
     * Returns basic information about administrative areas in the specified country.
     * @see https://developer.accuweather.com/accuweather-locations-api/apis/get/locations/v1/adminareas/%7BcountryCode%7D
     *
     * @param string $countryCode
     * @param string $language
     * @param int $offset
     * @return stdClass
     * @throws GuzzleException
     */
    public function getAdminAreaList(string $countryCode, string $language, int $offset = 0)
    {
        return $this->request->send("locations/v1/adminareas/{$countryCode}", [
            'language' => $language,
            'offset' => $offset,
        ]);
    }

    /**
     * Returns basic information about all countries within a specified region.
     * @see https://developer.accuweather.com/accuweather-locations-api/apis/get/locations/v1/countries/%7BregionCode%7D
     *
     * @param string $countryCode
     * @param string $language
     * @return stdClass
     * @throws GuzzleException
     */
    public function getCountryList(string $countryCode, string $language)
    {
        return $this->request->send("locations/v1/countries/{$countryCode}", [
            'language' => $language,
        ]);
    }

    /**
     * Returns basic information about all regions.
     * @see https://developer.accuweather.com/accuweather-locations-api/apis/get/locations/v1/regions
     *
     * @param string $language
     * @return stdClass
     * @throws GuzzleException
     */
    public function getRegionList(string $language)
    {
        return $this->request->send('locations/v1/regions', [
            'language' => $language,
        ]);
    }

    /**
     * Returns information for the top 50, 100, or 150 cities, worldwide.
     * @see https://developer.accuweather.com/accuweather-locations-api/apis/get/locations/v1/topcities/%7Bgroup%7D
     *
     * @param string $group
     * @param string $language
     * @param bool $detail
     * @return stdClass
     * @throws GuzzleException
     */
    public function getTopCitiesList(string $group, string $language, bool $detail = true)
    {
        return $this->request->send("locations/v1/topcities/{$group}", [
            'language' => $language,
            'details' => $detail,
        ]);
    }

    /****************************************************
     *                   Autocomplete                   *
     ***************************************************/

    /**
     * Returns basic information about locations matching an autocomplete of the search text.
     * @see https://developer.accuweather.com/accuweather-locations-api/apis/get/locations/v1/cities/autocomplete
     *
     * @param string $q
     * @param string $language
     * @return stdClass
     * @throws GuzzleException
     */
    public function autocompleteSearch(string $q, string $language)
    {
        return $this->request->send('locations/v1/cities/autocomplete', [
            'q' => $q,
            'language' => $language,
        ]);
    }

    /****************************************************
     *                   Location Key                   *
     ***************************************************/

    /**
     * Returns information about neighboring cities, by location key. You must know the location key to perform this query.
     * @see https://developer.accuweather.com/accuweather-locations-api/apis/get/locations/v1/cities/neighbors/%7BlocationKey%7D
     *
     * @param string $locationKey
     * @param string $language
     * @param bool $details
     * @return stdClass
     * @throws GuzzleException
     */
    public function getCityNeighborsByLocationKey(string $locationKey, string $language, bool $details)
    {
        return $this->request->send("locations/v1/cities/neighbors/{$locationKey}", [
            'language' => $language,
            'details' => $details,
        ]);
    }

    /**
     * Returns information about a specific location, by location key. You must know the location key to perform this query.
     * @see https://developer.accuweather.com/accuweather-locations-api/apis/get/locations/v1/%7BlocationKey%7D
     *
     * @param string $locationKey
     * @param string $language
     * @param bool $details
     * @return stdClass
     * @throws GuzzleException
     */
    public function searchByLocationKey(string $locationKey, string $language, bool $details)
    {
        return $this->request->send("locations/v1/{$locationKey}" , [
            'language' => $language,
            'details' => $details,
        ]);
    }

    /****************************************************
     *                   Text Search                    *
     ***************************************************/

    /**
     * Returns information for an array of cities that match the search text.
     * @see https://developer.accuweather.com/accuweather-locations-api/apis/get/locations/v1/cities/search
     *
     * @param string $q
     * @param string $language
     * @param bool $details
     * @param int $offset
     * @param string $alias
     * @return stdClass
     * @throws GuzzleException
     */
    public function citySearch(string $q, string $language, bool $details, int $offset, string $alias)
    {
        return $this->request->send("locations/v1/cities/search", [
            'q' => $q,
            'language' => $language,
            'details' => $details,
            'offset' => $offset,
            'alias' => $alias,
        ]);
    }

    /**
     * Returns information for an array of cities that match the search text.
     * @see https://developer.accuweather.com/accuweather-locations-api/apis/get/locations/v1/cities/%7BcountryCode%7D/%7BadminCode%7D/search
     *
     * @param string $countryCode
     * @param string $adminCode
     * @param string $q
     * @param string $language
     * @param bool $details
     * @param int $offset
     * @param string $alias
     * @return stdClass
     * @throws GuzzleException
     */
    public function citySearchNarrow(
        string $countryCode,
        string $adminCode,
        string $q,
        string $language,
        bool $details,
        int $offset,
        string $alias
    ) {
        return $this->request->send("locations/v1/cities/{$countryCode}/{$adminCode}/search", [
            'q' => $q,
            'language' => $language,
            'details' => $details,
            'offset' => $offset,
            'alias' => $alias,
        ]);
    }

    /**
     * Returns information for an array of cities that match the search text.
     * @see https://developer.accuweather.com/accuweather-locations-api/apis/get/locations/v1/cities/%7BcountryCode%7D/search
     *
     * @param string $countryCode
     * @param string $q
     * @param string $language
     * @param bool $details
     * @param int $offset
     * @param string $alias
     * @return stdClass
     * @throws GuzzleException
     */
    public function citySearchNarrowByCountryCode(
        string $countryCode,
        string $q,
        string $language,
        bool $details,
        int $offset,
        string $alias
    ) {
        return $this->request->send("locations/v1/cities/{$countryCode}/search", [
            'q' => $q,
            'language' => $language,
            'details' => $details,
            'offset' => $offset,
            'alias' => $alias,
        ]);
    }

    /**
     * Returns information for an array of Points of Interest that match the search text.
     * @see https://developer.accuweather.com/accuweather-locations-api/apis/get/locations/v1/poi/search
     *
     * @param string $q
     * @param int $type
     * @param string $language
     * @param bool $details
     * @return stdClass
     * @throws GuzzleException
     */
    public function poiSearch(string $q, int $type, string $language, bool $details)
    {
        return $this->request->send("locations/v1/poi/search", [
            'q' => $q,
            'type' => $type,
            'language' => $language,
            'details' => $details,
        ]);
    }

    /**
     * Returns information for an array of Points of Interest that match the search text.
     * @see https://developer.accuweather.com/accuweather-locations-api/apis/get/locations/v1/poi/%7BcountryCode%7D/search
     *
     * @param string $countryCode
     * @param string $q
     * @param int $type
     * @param string $language
     * @param bool $details
     * @return stdClass
     * @throws GuzzleException
     */
    public function poiSearchNarrowByCountryCode(string $countryCode, string $q, int $type, string $language, bool $details)
    {
        return $this->request->send("locations/v1/poi/{$countryCode}/search", [
            'q' => $q,
            'type' => $type,
            'language' => $language,
            'details' => $details,
        ]);
    }

    /**
     * Returns information for an array of Postal Codes that match the search text.
     * @see https://developer.accuweather.com/accuweather-locations-api/apis/get/locations/v1/postalcodes/search
     *
     * @param string $q
     * @param string $language
     * @param bool $details
     * @return stdClass
     * @throws GuzzleException
     */
    public function postalCodeSearch(string $q, string $language, bool $details)
    {
        return $this->request->send("locations/v1/postalcodes/search", [
            'q' => $q,
            'language' => $language,
            'details' => $details,
        ]);
    }

    /**
     * Returns information for an array of Postal Codes that match the search text.
     * @see https://developer.accuweather.com/accuweather-locations-api/apis/get/locations/v1/postalcodes/%7BcountryCode%7D/search
     *
     * @param string $countryCode
     * @param string $q
     * @param string $language
     * @param bool $details
     * @return stdClass
     * @throws GuzzleException
     */
    public function postalCodeSearchNarrowByCountryCode(string $countryCode, string $q, string $language, bool $details)
    {
        return $this->request->send("locations/v1/postalcodes/{$countryCode}/search", [
            'q' => $q,
            'language' => $language,
            'details' => $details,
        ]);
    }

    /**
     * Returns information for an array of locations that match the search text.
     * @see https://developer.accuweather.com/accuweather-locations-api/apis/get/locations/v1/search
     *
     * @param string $q
     * @param string $language
     * @param bool $details
     * @param int $offset
     * @param string $alias
     * @return stdClass
     * @throws GuzzleException
     */
    public function textSearch(string $q, string $language, bool $details, int $offset, string $alias)
    {
        return $this->request->send("locations/v1/search", [
            'q' => $q,
            'language' => $language,
            'details' => $details,
            'offset' => $offset,
            'alias' => $alias,
        ]);
    }

    /**
     * Returns information for an array of locations that match the search text.
     * Results are narrowed by entering a countryCode and adminCode in the path.
     * @see https://developer.accuweather.com/accuweather-locations-api/apis/get/locations/v1/%7BcountryCode%7D/%7BadminCode%7D/search
     *
     * @param string $countryCode
     * @param string $adminCode
     * @param string $q
     * @param string $language
     * @param bool $details
     * @param int $offset
     * @param string $alias
     * @return stdClass
     * @throws GuzzleException
     */
    public function textSearchNarrow(
        string $countryCode,
        string $adminCode,
        string $q,
        string $language,
        bool $details,
        int $offset,
        string $alias
    ) {
        return $this->request->send("locations/v1/{$countryCode}/{$adminCode}/search", [
            'q' => $q,
            'language' => $language,
            'details' => $details,
            'offset' => $offset,
            'alias' => $alias,
        ]);
    }

    /**
     * Returns information for an array of locations that match the search text.
     * Results are narrowed by entering a countryCode in the path.
     * @see https://developer.accuweather.com/accuweather-locations-api/apis/get/locations/v1/%7BcountryCode%7D/search
     *
     * @param string $countryCode
     * @param string $q
     * @param string $language
     * @param bool $details
     * @param int $offset
     * @param string $alias
     * @return stdClass
     * @throws GuzzleException
     */
    public function textSearchNarrowByCountryCode(
        string $countryCode,
        string $q,
        string $language,
        bool $details,
        int $offset,
        string $alias
    ) {
        return $this->request->send("locations/v1/{$countryCode}/search", [
            'q' => $q,
            'language' => $language,
            'details' => $details,
            'offset' => $offset,
            'alias' => $alias,
        ]);
    }

    /****************************************************
     *                   Geoposition                    *
     ***************************************************/

    /**
     * Returns information about a specific location, by GeoPosition (Latitude and Longitude).
     * @see https://developer.accuweather.com/accuweather-locations-api/apis/get/locations/v1/cities/geoposition/search
     *
     * @param string $q
     * @param string $language
     * @param bool $details
     * @param bool $topLevel
     * @return stdClass
     * @throws GuzzleException
     */
    public function geoPositionSearch(string $q, string $language, bool $details = true, bool $topLevel = true)
    {
        return $this->request->send("locations/v1/cities/geoposition/search", [
            'q' => $q,
            'language' => $language,
            'details' => $details,
            'toplevel' => $topLevel,
        ]);
    }

    /****************************************************
     *                   IP Address                     *
     ***************************************************/

    /**
     * Returns information about a specific location, by IP Address.
     * @see https://developer.accuweather.com/accuweather-locations-api/apis/get/locations/v1/cities/ipaddress
     *
     * @param string $q
     * @param string $language
     * @param bool $details
     * @return stdClass
     * @throws GuzzleException
     */
    public function ipAddressSearch(string $q, string $language, bool $details = true)
    {
        return $this->request->send("locations/v1/cities/ipaddress", [
            'q' => $q,
            'language' => $language,
            'details' => $details,
        ]);
    }
}
