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
<summary>Test dropdown</summary>
<br>
Dropdown content.
</details>
