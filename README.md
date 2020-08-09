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

#### Indices API

#### Weather Alarms API

#### Alerts API

#### Imagery API

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
