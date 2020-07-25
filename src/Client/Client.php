<?php

declare(strict_types=1);

namespace ChurakovMike\Accuweather\Client;

use ChurakovMike\Accuweather\Actions\Alert;
use ChurakovMike\Accuweather\Actions\CurrentCondition;
use ChurakovMike\Accuweather\Actions\Forecast;
use ChurakovMike\Accuweather\Actions\Imagery;
use ChurakovMike\Accuweather\Actions\Indices;
use ChurakovMike\Accuweather\Actions\Location;
use ChurakovMike\Accuweather\Actions\Translation;
use ChurakovMike\Accuweather\Actions\Tropical;
use ChurakovMike\Accuweather\Actions\WeatherAlarm;

/**
 * Class Client.
 * @package ChurakovMike\Accuweather\Client
 *
 * @property RequestApi $request
 * @property Alert $alert
 * @property CurrentCondition $currentCondition
 * @property Forecast $forecast
 * @property Imagery $imagery
 * @property Indices $indices
 * @property Location $location
 * @property Translation $translation
 * @property Tropical $tropical
 * @property WeatherAlarm $weatherAlarm
 */
class Client
{
    /**
     * Api host.
     */
    protected CONST API_HOST = "http://dataservice.accuweather.com";

    /**
     * @var RequestApi
     */
    private $request;

    /**
     * @var Alert
     */
    private $alert;

    /**
     * @var CurrentCondition
     */
    private $currentCondition;

    /**
     * @var Forecast
     */
    private $forecast;

    /**
     * @var Imagery
     */
    private $imagery;

    /**
     * @var Indices
     */
    private $indices;

    /**
     * @var Location
     */
    private $location;

    /**
     * @var Translation
     */
    private $translation;

    /**
     * @var Tropical
     */
    private $tropical;

    /**
     * @var WeatherAlarm
     */
    private $weatherAlarm;

    /**
     * Client constructor.
     * @param array $config
     */
    public function __construct(array $config)
    {
        $this->loadConfig($config);
        $this->request = new RequestApi(self::API_HOST);
    }

    /**
     * @param array $config
     */
    public function loadConfig(array $config)
    {
        foreach ($config as $property => $value) {
            $this->$property = $value;
        }
    }

    /**
     * @return Alert
     */
    public function alert(): Alert
    {
        if (!$this->alert) {
            $this->alert = new Alert($this->request);
        }

        return $this->alert;
    }

    /**
     * @return CurrentCondition
     */
    public function currentCondition(): CurrentCondition
    {
        if (!$this->currentCondition) {
            $this->currentCondition = new CurrentCondition($this->request);
        }

        return $this->currentCondition;
    }

    /**
     * @return Forecast
     */
    public function forecast(): Forecast
    {
        if (!$this->forecast) {
            $this->forecast = new Forecast($this->request);
        }

        return $this->forecast;
    }

    /**
     * @return Imagery
     */
    public function imagery(): Imagery
    {
        if (!$this->imagery) {
            $this->imagery = new Imagery($this->request);
        }

        return $this->imagery;
    }

    /**
     * @return Indices
     */
    public function indices(): Indices
    {
        if (!$this->indices) {
            $this->indices = new Indices($this->request);
        }

        return $this->indices;
    }

    /**
     * @return Location
     */
    public function location(): Location
    {
        if (!$this->location) {
            $this->location = new Location($this->request);
        }

        return $this->location;
    }

    /**
     * @return Translation
     */
    public function translation(): Translation
    {
        if (!$this->translation) {
            $this->translation = new Translation($this->request);
        }

        return $this->translation;
    }

    /**
     * @return Tropical
     */
    public function tropical(): Tropical
    {
        if (!$this->tropical) {
            $this->tropical = new Tropical($this->request);
        }

        return $this->tropical;
    }

    /**
     * @return WeatherAlarm
     */
    public function weatherAlarm()
    {
        if (!$this->weatherAlarm) {
            $this->weatherAlarm = new WeatherAlarm($this->request);
        }

        return $this->weatherAlarm;
    }
}
