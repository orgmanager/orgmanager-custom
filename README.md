# Custom Scripts created for Orgmanager

[![Latest Version on Packagist](https://img.shields.io/packagist/v/orgmanager/orgmanager-custom.svg?style=flat-square)](https://packagist.org/packages/orgmanager/orgmanager-custom)
[![Software License](https://img.shields.io/badge/license-AGPLv3-blue.svg?style=flat-square)](LICENSE.md)
[![Total Downloads](https://img.shields.io/packagist/dt/orgmanager/orgmanager-custom.svg?style=flat-square)](https://packagist.org/packages/orgmanager/orgmanager-custom)

Here you can find custom scripts created for the Orgmanager Hosted version needs.

## Installation

You can pull in the package via composer:

``` bash
composer require orgmanager/orgmanager-custom
```

Next up, the service provider must be registered:

```php
// config/app.php
'providers' => [
    ...
    OrgManager\OrgmanagerCustom\OrgmanagerCustomServiceProvider::class,

];
```
## Commands

- Invite To Org command

```sh
php artisan orgmanager-custom:inviteusers
```
Used to periodically invite all the OrgManager users to the OrgManager organization.

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email soy@miguelpiedrafita.com instead of using the issue tracker.

## Credits

- [Miguel Piedrafita](https://github.com/m1guelpf)
- [All Contributors](../../contributors)

## License

This package is licensed under the Mozilla Public license. Please see [License File](LICENSE.md) for more information.
