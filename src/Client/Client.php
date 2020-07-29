<?php

declare(strict_types=1);

namespace ChurakovMike\Accuweather\Client;

use ChurakovMike\Accuweather\Actions\Alert;
use ChurakovMike\Accuweather\Actions\BaseAction;
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
 * @property string $apikey
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
    protected const API_HOST = "http://dataservice.accuweather.com";

    /**
     * @var RequestApi
     */
    private $request;

    /**
     * @var string
     */
    private $apikey;

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
        $this->request = new RequestApi(self::API_HOST, $this->getApiKey());
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return "{$this->apikey}";
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
     * @return string
     */
    public function getApiKey(): string
    {
        if (!$this->apikey) {
            return '';
        }

        return $this->apikey;
    }

    /**
     * @param string $key
     */
    public function setApikey(string $key): void
    {
        $this->apikey = $key;
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
     * @param BaseAction $action
     */
    public function setAlertApiHandler(BaseAction $action): void
    {
        $this->alert = $action;
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
     * @param BaseAction $action
     */
    public function setCurrentConditionApiHandler(BaseAction $action): void
    {
        $this->currentCondition = $action;
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
     * @param BaseAction $action
     */
    public function setForecastApiHandler(BaseAction $action): void
    {
        $this->forecast = $action;
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
     * @param BaseAction $action
     */
    public function setImageryApiHandler(BaseAction $action): void
    {
        $this->imagery = $action;
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
     * @param BaseAction $action
     */
    public function setIndicesApiHandler(BaseAction $action): void
    {
        $this->indices = $action;
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
     * @param BaseAction $action
     */
    public function setLocationApiHandler(BaseAction $action): void
    {
        $this->location = $action;
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
     * @param BaseAction $action
     */
    public function setTranslationApiHandler(BaseAction $action): void
    {
        $this->translation = $action;
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
     * @param BaseAction $action
     */
    public function setTropicalApiHandler(BaseAction $action): void
    {
        $this->tropical = $action;
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

    /**
     * @param BaseAction $action
     */
    public function setWeatherAlarmApiHandler(BaseAction $action): void
    {
        $this->weatherAlarm = $action;
    }
}
