Accuweather php client
========================================

Requirement
----------------------------------------
* PHP >=7.0

Installation
----------------------------------------
```php
composer require churakovmike/accuweather-client
```
or with composer.phar

```php
php composer.phar require churakovmike/accuweather-client
```

Usage
----------------------------------------
Initialize api client in your code.
```php
use ChurakovMike\Accuweather\Client\Client;

$client = new Client([
    'apiKey' => 'your-api-key',
]);
```
You can set your api key later:
```php
use ChurakovMike\Accuweather\Client\Client;

$client = new Client();
$client->setApikey('your-api-key');
```

API Reference
----------------------------------------
#### Locations API

#### Forecast API

#### Current Conditions API

- Current Conditions

```php
$client->currentCondition()->get($countryCode, $language, $details);
```

- Current Conditions for Top Cities

```php
$client->getTopCitiesCondition()->get($group, $language);
```

- Historical Current Conditions (past 24 hours)

```php
$client->getHistorical()->get($countryCode, $language, $details);
```

- GETHistorical Current Conditions (past 6 hours)

```php
$client->getHistoricalPast()->get($countryCode, $language, $details);
```

#### Indices API

#### Weather Alarms API

- 1 Day of Weather Alarms

```php
$client->weatherAlarm()->get1day($countryCode, $language);
```

- 10 Days of Weather Alarms

```php
$client->weatherAlarm()->get10day($countryCode, $language);
```

- GET15 Days of Weather Alarms

```php
$client->weatherAlarm()->get15day($countryCode, $language);
```

- GET5 Days of Weather Alarms

```php
$client->weatherAlarm()->get5day($countryCode, $language);
```

#### Alerts API

- Alerts by LocationKey

```php
$client->alert()->get($countryCode, $language, $details);
```

#### Imagery API

- GETRadar and Satellite Imagery

```php
$client->imagery()->get($resolution, $countryCode, $language);
```

#### Tropical API

- Active government-issued storms by basin ID and government ID

```php
$client->tropical()->getActiveStormSpecify($basinID, $governmentId);
```

- Active government-issued storms

```php
$client->tropical()->getActiveStorm();
```

- Search government-issued storms by year and basin ID

```php
$client->tropical()->search($year, $basinId);
```

- Search government-issued storms by year, basin ID, and government ID

```php
$client->tropical()->extendedSearch($year, $basinId, $governmentId);
```

- Active government-issued storms by basin ID

```php
$client->tropical()->getStormByBasinId($basinId);
```

- Positions for an individual government-issued storm

```php
$client->tropical()->getStormPosition($year, $basinId, $governmentId, $details, $geometry, $includeLandmarks);
```

- Current position for an individual government-issued storm

```php
$client->tropical()->getStormCurrentPosition($year, $basinId, $governmentId, $details, $geometry, $includeLandmarks);
```

- Government-issued forecasts

```php
$client->tropical()->getGovernmentForecast($year, $basinId, $governmentId, $details, $geometry, $windowGeometry);
```

- Tropical cyclone forecasts (deprecated)

```php
$client->tropical()->getCycloneForecast($year, $basinId, $depressionId);
```

#### Translations API

- List all Languages - Returns metadata for all languages.

```php
$client->translation()->getLanguages();
```

- List of Available Translation Groups - Lists groups of phrases that are available for translation.

```php
$client->translation()->getTranslationGroups();
```

- List of Translations for a Specific Group - Returns all translated phrases for a specific group, in the desired language.

```php
$client->translation()->getTranslationByGroup();
```
