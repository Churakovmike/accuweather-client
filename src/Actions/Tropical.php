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

    /****************************************************
     *                   Position                       *
     ***************************************************/

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
