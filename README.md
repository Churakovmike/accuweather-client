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

Methods
----------------------------------------
<details>
<summary>Alert</summary>
<br>
Alert methods.
</details>
<details>
<summary>Current condition</summary>
<br>
Current condition methods.
</details>
<details>
<summary>Forecast</summary>
<br>
Forecast methods.
</details>
<details>
<summary>Imagery</summary>
<br>
Imagery methods.
</details>
<details>
<summary>Indices</summary>
<br>
Indices methods.
</details>
<details>
<summary>Location</summary>
<br>
Location methods.
</details>
<details>
<summary>Translation</summary>
<br>
Translation methods.
</details>
<details>
<summary>Tropical</summary>
<br>
Tropical methods.
</details>
<details>
<summary>Weather alarm</summary>
<br>
Weather alarm methods.
</details>

