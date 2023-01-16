# Laravel Cookie Auth

[![Latest Version on Packagist](https://img.shields.io/packagist/v/the-3labs-team/laravel-cookie-auth.svg?style=flat-square)](https://packagist.org/packages/the-3labs-team/laravel-cookie-auth)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/the-3labs-team/laravel-cookie-auth/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/the-3labs-team/laravel-cookie-auth/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/the-3labs-team/laravel-cookie-auth/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/the-3labs-team/laravel-cookie-auth/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/the-3labs-team/laravel-cookie-auth.svg?style=flat-square)](https://packagist.org/packages/the-3labs-team/laravel-cookie-auth)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require the-3labs-team/laravel-cookie-auth
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="laravel-cookie-auth-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-cookie-auth-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-cookie-auth-views"
```

## Usage

```php
$laravelCookieAuth = new The3LabsTeam\LaravelCookieAuth();
echo $laravelCookieAuth->echoPhrase('Hello, The3LabsTeam!');
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

- [Stefano Novelli](https://github.com/The-3Labs-Team)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
