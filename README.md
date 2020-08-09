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

#### Translations API
1. List all Languages - Returns metadata for all languages.
```php
$client->translation()->getLanguages();
```
1. List of Available Translation Groups - Lists groups of phrases that are available for translation.
```php
$client->translation()->getTranslationGroups();
```
1. List of Translations for a Specific Group - Returns all translated phrases for a specific group, in the desired language.
```php
$client->translation()->getTranslationByGroup();
```
