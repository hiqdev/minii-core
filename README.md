minii Core
==========

**minii - mini Yii**

[![Latest Stable Version](https://poser.pugx.org/minii/core/v/stable)](https://packagist.org/packages/minii/core)
[![Total Downloads](https://poser.pugx.org/minii/core/downloads)](https://packagist.org/packages/minii/core)
[![Build Status](https://img.shields.io/travis/hiqdev/minii-core.svg)](https://travis-ci.org/hiqdev/minii-core)
[![Scrutinizer Code Coverage](https://img.shields.io/scrutinizer/coverage/g/hiqdev/minii-core.svg)](https://scrutinizer-ci.com/g/hiqdev/minii-core/)
[![Scrutinizer Code Quality](https://img.shields.io/scrutinizer/g/hiqdev/minii-core.svg)](https://scrutinizer-ci.com/g/hiqdev/minii-core/)

Minii is not another framework - it's a testing playground.

**General goals:**

- split framework into components
- less specific dependencies, remove:
    - fxp/composer-asset-plugin (used hiqdev/composer-asset-plugin instead)
    - require Yii.php
- more PSR compatibility: PSR-3 and so on
- easier creation of console only applications

**Done:**

- splitted to parts: core, console, caching, i18n, web, mail, ...
- no more `composer global require fxp/composer-asset-plugin`, used `hiqdev/composer-asset-plugin`
- no more `require __DIR__ . '/../../vendor/yiisoft/yii2/Yii.php'`, done with composer
- no more classes.php, done with composer
- working for console apps
- compatible with PHAR packaging

**Changes to PR to yii2:**

- PHAR compatibility

**Changes to think of:**

- move helpers into other components:
    - Console to yii2-console
    - Html, Url to yii2-web
    - ArrayHelper, StringHelper, Inflector to ???
    - Markdown to yii2-markdown
    - VarDumper to yii2-debug
    - ...
- drop yii\mail\BaseMailer dependency on yii\web\View for it could be used for console only apps
- PSR-3 logging, remove log from core

**To do:**

- try split tests into components
- much more...

## Installation

The preferred way to install this library is through [composer](http://getcomposer.org/download/).

Either run

```sh
php composer.phar require "minii/core"
```

or add

```json
"minii/core": "*"
```

to the require section of your composer.json.

## License

This project is released under the terms of the BSD-3-Clause [license](LICENSE).
Read more [here](http://choosealicense.com/licenses/bsd-3-clause).

Copyright © 2015-2016, HiQDev (http://hiqdev.com/minii)
