minii Core
==========

**minii - mini Yii**

[![Latest Stable Version](https://poser.pugx.org/minii/core/v/stable)](https://packagist.org/packages/minii/core)
[![Total Downloads](https://poser.pugx.org/minii/core/downloads)](https://packagist.org/packages/minii/core)
[![Build Status](https://img.shields.io/travis/hiqdev/minii-core.svg)](https://travis-ci.org/hiqdev/minii-core)

**General goals:**
- less specific dependencies:
    - fxp/composer-asset-plugin and bower-asset/jquery...
    - yii2-composer
    - require Yii.php
- more PSR compatibility: PSR-3 and so on
- easier creation of console only application
- compatibility with yii2 extensions
- passing yii2 tests

**Done:**
- splitted to parts: core, console, caching, ...
- no more `composer global require fxp/composer-asset-plugin`
- no need for `yii2-composer`, loading extensions done in other way, see `yii\base\Application::prepareExtensions`
- working for console apps

**To do:**
- rm log from core, use psr-3 logging
- make it working for web apps
- think of getting rid of `require __DIR__ . '/../../vendor/yiisoft/yii2/Yii.php'`
- much more...

## Installation

The preferred way to install this library is through [composer](http://getcomposer.org/download/).

Either run

```sh
php composer.phar require "hiqdev/minii-core"
```

or add

```json
"hiqdev/minii-core": "*"
```

to the require section of your composer.json.

## License

This project is released under the terms of the BSD-3-Clause [license](LICENSE).
Read more [here](http://choosealicense.com/licenses/bsd-3-clause).

Copyright © 2015, HiQDev (http://hiqdev.com/)
