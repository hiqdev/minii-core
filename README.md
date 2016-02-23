minii Core
==========

**minii - mini Yii**

[![Latest Stable Version](https://poser.pugx.org/minii/core/v/stable)](https://packagist.org/packages/minii/core)
[![Total Downloads](https://poser.pugx.org/minii/core/downloads)](https://packagist.org/packages/minii/core)
[![Build Status](https://img.shields.io/travis/hiqdev/minii-core.svg)](https://travis-ci.org/hiqdev/minii-core)
[![Code Coverage](https://scrutinizer-ci.com/g/hiqdev/minii-core/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/hiqdev/minii-core/?branch=master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/hiqdev/minii-core/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/hiqdev/minii-core/?branch=master)

Minii is not another framework - it's a testing playground.

**General goals:**

- full compatibility with yii2 including tests
- less specific dependencies, remove:
    - fxp/composer-asset-plugin and bower-asset/jquery...
    - require Yii.php
- more PSR compatibility: PSR-3 and so on
- easier creation of console only applications

**Done:**

- splitted to parts: core, console, caching, i18n, web, mail, ...
- no more `composer global require fxp/composer-asset-plugin`
- no more `yii2-composer`, loading extensions done in other way, see `yii\base\Application::prepareExtensions`
- no more `require __DIR__ . '/../../vendor/yiisoft/yii2/Yii.php'`
- no more classes.php
- working for console apps
- compatible with phar packaging

**Changes made:**

- use of hiqdev/composer-asset-plugin
- changed @bower to @vendor/bower_components in yii\base\Application
- changed @npm to @vendor/node_modules in yii\base\Application
- PHAR compatibility

**Suggested changes to Yii:**

- think of breaking up helpers:
    - Console to yii2-console
    - Html, Url to yii2-web
    - HtmlPurifier why not put it inside of Html ?
    - ArrayHelper, StringHelper, Inflector to ???
    - Markdown to yii2-markdown
    - VarDumper to yii2-debug
    - FormatConverter - ???
- drop yii\mail\BaseMailer dependency on yii\web\View for it could be used for console only apps
- think of yii\views
- PSR-3 logging, remove log from core

**To do:**

- split tests
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
