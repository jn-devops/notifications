# Homeful Notifications Package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/homeful/notifications.svg?style=flat-square)](https://packagist.org/packages/homeful/notifications)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/homeful/notifications/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/homeful/notifications/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/homeful/notifications/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/homeful/notifications/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/homeful/notifications.svg?style=flat-square)](https://packagist.org/packages/homeful/notifications)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require homeful/notifications
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="notifications-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="notifications-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="notifications-views"
```

## Usage

```php
$notifications = new Homeful\Notifications();
echo $notifications->echoPhrase('Hello, Homeful!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Anais Santos](https://github.com/anais-enclavewrx)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
