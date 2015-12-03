minii Core
==========

**minii - mini Yii**

[![Latest Stable Version](https://poser.pugx.org/minii/core/v/stable)](//packagist.org/packages/minii/core)
[![Total Downloads](https://poser.pugx.org/minii/core/downloads)](//packagist.org/packages/minii/core)
[![Build Status](https://img.shields.io/travis/hiqdev/minii-core.svg)](http://travis-ci.org/hiqdev/minii-core)

**General goals:**
- less yii specific dependencies
- more PSR compatibility: PSR-3 and so on
- easier creation of console only application
- compatibility with yii2 extensions
- passing yii2 tests

**Done:**
- splitted to parts: core, console, caching, ...
- no more `composer global require fxp/composer-asset-plugin`
- no need for `yii2-composer`, loading extensions done in other way, see `yii\base\Application::prepareExtensions`
- no more `require __DIR__ . '/../../vendor/yiisoft/yii2/Yii.php'`, done with composer autoload files
- working for console apps

**To do:**
- rm log from core, use psr-3 logging
- make it working for web apps
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
