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
     *                   City Search                    *
     ***************************************************/

    /**
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

    public function geoPositionSearch() {}

    /****************************************************
     *                   IP Address                     *
     ***************************************************/

    public function ipAddressSearch() {}
}
