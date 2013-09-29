# PagodaBox-Ready Laravel 4.x Skeleton version 0.4

[**Click here to Launch Now on PagodaBox**](https://pagodabox.com/q/15n/go)

[Screenshots](#markdown-header-screenshots) - [Change Log](#markdown-header-change-log) - [What's Included](#markdown-header-includes) - [License (MIT)](#markdown-header-license)

## Screenshots

### Bootstrap 3.0.0 - Default Template
![](https://bitbucket.org/codenamegary/l4-skeleton/raw/03d8c232b8d275c56532a1d4687e5d196585e733/screenshots/bootstrap-3.0.0.png?raw=true)

### Foundation 4.3.1 - Default Template
![](https://bitbucket.org/codenamegary/l4-skeleton/raw/03d8c232b8d275c56532a1d4687e5d196585e733/screenshots/foundation-4.3.1.png?raw=true)

## Twitter Bootstrap and Zurb Foundation Layouts

Just create a new view that extends 'l4layouts::bootstrap.blank' or 'l4layouts::foundation.blank'. See the default demo page for more details.

[Live Demo](http://l4-skeleton.gopagoda.com)

## Change Log
- **Version 0.4**
    - [juy/profiler](https://github.com/juy/profiler) has been abandoned, ditching in favour of [barryvdh/laravel-debugbar](https://github.com/barryvdh/laravel-debugbar)
- **Version 0.3**
    - Added new demo views to l4layouts package
    - Laravel 4.0.6
    - Upgraded PB boxfile to PHP version 5.4 and xcache instead of APC (known bugs with APC on PHP 5.4 on PagodaBox)
    - Added juy/profiler [drool](https://github.com/juy/profiler)
- **Version 0.2**
	- Moved to [Basset](http://jasonlewis.me/code/basset/4.0) for Asset Management
	- Added additional assets from l4layouts
	- Got rid of l4sacs requirements
	- Upgraded Bootstrap to 2.3.2
	- Got rid of laravel guard requirement
- **Version 0.1**
	- Initial release

## Includes

- [Laravel](https://github.com/laravel/laravel)
	- [Official Documentation](http://www.laravel.com/docs)
- [barryvdh/laravel-debugbar](https://github.com/barryvdh/laravel-debugbar)
    - A wicked sweet profiler that includes standard memory, request and environment detail as well as Laravel specific route, logging and other useful debugging data
- [centralapps/mail-postmarkapp](https://github.com/CentralApps/Mail-PostmarkApp)
    - Works with http://postmarkapp.com
    - Super cheap and easy transactional email API
    - Supports inbound and outbound
- [hybridauth/hybridauth](http://hybridauth.sourceforge.net/) 3.0.0.x-dev branch for social auth
    - Also supports APIs for various functions beyond authentication
- [codenamegary/l4layouts 0.1.1](https://bitbucket.org/codenamegary/l4layouts)
	- Zurb Foundation 4.1, 4.3.2
	- Twitter Bootstrap 2.3.2, 3.0.0
	- Font Awesome 3.2.1
	- Default layouts for each
- [jasonlewis/basset](http://jasonlewis.me/code/basset/4.0)
	- Asset collections and compilation, minification, etc.
- [ivanakimov/hashids.php](https://github.com/ivanakimov/hashids.php)
    - The easiest and most efficient little hash utility that I've encountered so far
    - Makes 2 way hashes from an integer or array of integers, great for things like short urls
    - [Moar Docs](http://www.hashids.org/php/)
- PagodaBox Boxfile
	- Configured for PHP 5.4.14 with mcrypt, xcache and several other extensions
	- Redis cache for session and cache storage
 	- L4 configuration to match database environment variables and leverage redis
- Composer
 	- Composer.json configured and ready with phpunit for dev environment
 	- deploy.sh script which automates wiping and re-composing (wipe vendor, reinstall / update composer)
 	- deploy.sh uses --prefer-source so NO MORE 403 limit exceeded!!

## License

Packages included are subject to their own license terms.

This package - [MIT license](http://opensource.org/licenses/MIT)