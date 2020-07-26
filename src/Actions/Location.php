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
    public function getAdminAreaList(string $countryCode, string $language, $offset = 0)
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

    public function autocompleteSearch() {}

    /****************************************************
     *                   Location Key                   *
     ***************************************************/

    public function getCityNeighborsByLocationKey() {}

    public function searchByLocationKey() {}

    /****************************************************
     *                   City Search                    *
     ***************************************************/

    public function citySearch() {}

    public function citySearchNarrow() {}

    public function citySearchNarrowByCountryCode() {}

    public function poiSearch() {}

    public function postalCodeSearch() {}

    public function postalCodeSearchNarrowByCountryCode() {}

    public function textSearch() {}

    public function textSearchNarrow() {}

    public function textSearchNarrowByCountryCode() {}

    /****************************************************
     *                   Geoposition                    *
     ***************************************************/

    public function geoPositionSearch() {}

    /****************************************************
     *                   IP Address                     *
     ***************************************************/

    public function ipAddressSearch() {}
}
