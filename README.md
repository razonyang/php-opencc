# OpenCC PHP 简繁体转换库
[![Build](https://github.com/razonyang/php-opencc/actions/workflows/build.yml/badge.svg)](https://github.com/razonyang/php-opencc/actions/workflows/build.yml)
[![codecov](https://codecov.io/gh/razonyang/php-opencc/branch/master/graph/badge.svg?token=VDFESCQ1TY)](https://codecov.io/gh/razonyang/php-opencc)
[![Packagist Version](https://img.shields.io/packagist/v/razonyang/php-opencc)](https://packagist.org/packages/razonyang/php-opencc)
[![Packagist Downloads](https://img.shields.io/packagist/dt/razonyang/php-opencc)](https://packagist.org/packages/razonyang/php-opencc)

该库提供基于 OpenCC 的简繁转换功能。

## 前置条件

- 安装 [OpenCC](https://github.com/BYVoid/OpenCC)
- 安装 [OpenCC4PHP 扩展](https://github.com/nauxliu/opencc4php)

## 安装

```shell
composer require razonyang/php-opencc
```

## 用法

```php
<?php
use RazonYang\OpenCC\Config;
use RazonYang\OpenCC\Converter;

try {
    $converter = new Converter(Config::S2T); // 简体转繁体
    echo $converter->convert('你干什么不干我事'); // 你幹什麼不干我事
    $converter->close();
} catch (\Throwable $e) {
    // handle exception.
}
```
