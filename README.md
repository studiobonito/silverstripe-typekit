# TypeKit Module

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

## Overview

Provide TypeKit integration for SilverStripe CMS. Configure TypeKit ID via SiteConfig.
Allow TypeKit fonts inside HTMLEditorField and provide $TypeKit template variable to inject javascript.

## Requirements

- SilverStripe CMS 3.1.2 and newer or 3.2 and newer.

## Install

### Via Composer

Run the following to add this module as a requirement and install it via composer.

``` bash
$ composer require studiobonito/silverstripe-typekit
```

### Manual

Copy the 'typekit' folder to the root of your SilverStripe installation.

## Usage

The module provides a global template variable `$TypeKit` that can be used to insert the kit code into any
page template. This global variable uses the type kit ID specified in the CMS in the `Setings > Services > Type Kit` tab.

TypeKit suggests placing kit code in your document `<head>` as in the example below. However this module leaves that
choice to the developer.

``` html
<head>
    <title>Example.com</title>
    $TypeKit
</head>
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email support@studiobonito.co.uk instead of using the issue tracker.

## Credits

- [Tom Densham][link-author]
- [All Contributors][link-contributors]

## License

The BSD-2-Clause License. Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/studiobonito/silverstripe-typekit.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-BSD-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/studiobonito/silverstripe-typekit/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/studiobonito/silverstripe-typekit.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/studiobonito/silverstripe-typekit.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/studiobonito/silverstripe-typekit.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/studiobonito/silverstripe-typekit
[link-travis]: https://travis-ci.org/studiobonito/silverstripe-typekit
[link-scrutinizer]: https://scrutinizer-ci.com/g/studiobonito/silverstripe-typekit/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/studiobonito/silverstripe-typekit
[link-downloads]: https://packagist.org/packages/studiobonito/silverstripe-typekit
[link-author]: https://github.com/nedmas
[link-contributors]: ../../contributors