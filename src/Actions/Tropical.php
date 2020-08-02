<?php

declare(strict_types=1);

namespace ChurakovMike\Accuweather\Actions;

use ChurakovMike\Accuweather\Client\RequestApi;

/**
 * Class Tropical.
 * @package ChurakovMike\Accuweather\Alerts
 *
 * @property RequestApi $request
 */
final class Tropical extends BaseAction
{
    /****************************************************
     *                   Search                         *
     ***************************************************/

    /**
     * Returns basic information about tropical cyclones that are currently active in the specified basin.
     * @see https://developer.accuweather.com/accuweather-tropical-api/apis/get/tropical/v1/gov/storms/active/%7BbasinID%7D/%7BgovernmentID%7D
     *
     * @param int $basinID
     * @param int $governmentId
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getActiveStormSpecify(int $basinID, int $governmentId)
    {
        $this->request->send("tropical/v1/gov/storms/active/{$basinID}/{$governmentId}");
    }

    /**
     * Returns basic information about tropical cyclones  that are currrently active.
     * @see https://developer.accuweather.com/accuweather-tropical-api/apis/get/tropical/v1/gov/storms/active
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getActiveStorm()
    {
        $this->request->send("tropical/v1/gov/storms/active");
    }

    /**
     * Returns basic information about tropical cyclones for a specific year and basin.
     * @see https://developer.accuweather.com/accuweather-tropical-api/apis/get/tropical/v1/gov/storms/%7Byyyy%7D/%7BbasinID%7D
     *
     * @param string $year
     * @param int $basinId
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function search(string $year, int $basinId)
    {
        $this->request->send("tropical/v1/gov/storms/{$year}/{$basinId}");
    }

    /**
     * Returns basic information about a specific government issued tropical cyclone.
     * @see https://developer.accuweather.com/accuweather-tropical-api/apis/get/tropical/v1/gov/storms/%7Byyyy%7D/%7BbasinID%7D/%7BgovernmentID%7D
     *
     * @param string $year
     * @param int $basinId
     * @param int $governmentId
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function extendedSearch(string $year, int $basinId, int $governmentId)
    {
        $this->request->send("tropical/v1/gov/storms/{$year}/{$basinId}/{$governmentId}");
    }

    /**
     * Returns basic information about tropical cyclones that are currently active in the specified basin.
     * @see https://developer.accuweather.com/accuweather-tropical-api/apis/get/tropical/v1/gov/storms/active/%7BbasinId%7D
     *
     * @param int $basinId
     * @return \stdClass
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getStormByBasinId(int $basinId)
    {
        return $this->request->send("tropical/v1/gov/storms/active/{$basinId}");
    }

    /****************************************************
     *                   Position                       *
     ***************************************************/

    /**
     * Returns all position information for a specific tropical cyclone or list of tropical cyclones.
     * @see https://developer.accuweather.com/accuweather-tropical-api/apis/get/tropical/%7Bversion%7D/gov/storms/%7Byyyy%7D/%7BbasinID%7D/%7BgovernmentID%7D/positions
     *
     * @param string $year
     * @param int $basinId
     * @param int $governmentId
     * @param bool $details
     * @param bool $geometry
     * @param bool $includeLandmarks
     * @return \stdClass
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getStormPosition(
        string $year,
        int $basinId,
        int $governmentId,
        bool $details = false,
        bool $geometry = false,
        bool $includeLandmarks = false
    ) {
        return $this->request->send("tropical/v1/gov/storms/{$year}/{$basinId}/{$governmentId}/positions", [
            'details' => $details,
            'radiigeometry' => $geometry,
            'includeLandmarks' => $includeLandmarks,
        ]);
    }

    /**
     * Returns current (most recently recorded) position information for a specific tropical cyclone.
     * For historical storms, the last observed position is shown.
     * @see https://developer.accuweather.com/accuweather-tropical-api/apis/get/tropical/v1/gov/storms/%7Byyyy%7D/%7BbasinID%7D/%7BgovernmentID%7D/positions/current
     *
     * @param string $year
     * @param int $basinId
     * @param int $governmentId
     * @param bool $details
     * @param bool $geometry
     * @param bool $includeLandmarks
     * @return \stdClass
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getStormCurrentPosition(
        string $year,
        int $basinId,
        int $governmentId,
        bool $details = false,
        bool $geometry = false,
        bool $includeLandmarks = false
    ) {
        return $this->request->send("tropical/v1/gov/storms/{$year}/{$basinId}/{$governmentId}/positions/current", [
            'details' => $details,
            'radiigeometry' => $geometry,
            'includeLandmarks' => $includeLandmarks,
        ]);
    }

    /****************************************************
     *                   Forecast                       *
     ***************************************************/

    /**
     * Returns all recorded forecast information for a specific government-issued tropical cyclone.
     * @see https://developer.accuweather.com/accuweather-tropical-api/apis/get/tropical/v1/gov/storms/%7Byyyy%7D/%7BbasinID%7D/%7BgovernmentID%7D/forecasts
     *
     * @param string $year
     * @param int $basinId
     * @param int $governmentId
     * @param bool $details
     * @param bool $geometry
     * @param bool $windowGeometry
     * @return \stdClass
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getGovernmentForecast(
        string $year,
        int $basinId,
        int $governmentId,
        bool $details = false,
        bool $geometry = false,
        bool $windowGeometry = false
    ) {
        return $this->request->send("tropical/v1/gov/storms/{$year}/{$basinId}/{$governmentId}/forecasts", [
            'details' => $details,
            'radiigeometry' => $geometry,
            'windowgeometry' => $windowGeometry,
        ]);
    }

    /**
     * Returns all recorded forecast information for a specific tropical cyclone.
     * @see https://developer.accuweather.com/accuweather-tropical-api/apis/get/tropical/v1/storms/%7Byyyy%7D/%7BbasinId%7D/%7BdepressionId%7D/forecasts
     *
     * @param string $year
     * @param int $basinId
     * @param int $depressionId
     * @return \stdClass
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getCycloneForecast(string $year, int $basinId, int $depressionId)
    {
        return $this->request->send("tropical/v1/storms/{$year}/{$basinId}/{$depressionId}/forecasts");
    }
}
