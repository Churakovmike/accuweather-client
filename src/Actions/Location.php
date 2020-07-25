<?php

declare(strict_types=1);

namespace ChurakovMike\Accuweather\Actions;

use ChurakovMike\Accuweather\Client\RequestApi;

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

    public function getAdminAreaList()
    {
        return $this->request->send('locations/v1/adminareas/{countryCode}', [
            'apikey' => '',
            'language' => '',
            'offset' => '',
        ]);
    }

    public function getCountryList() {}

    public function getRegionList() {}

    public function getTopCitiesList() {}

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
