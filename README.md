artack/svg-inline-bundle
============

> Twig function to embed svg files as inline svg code into your html code.


[![Latest Release](https://img.shields.io/packagist/v/artack/svg-inline-bundle.svg)](https://packagist.org/packages/artack/color)
[![MIT License](https://img.shields.io/packagist/l/artack/color.svg)](http://opensource.org/licenses/MIT)
[![Total Downloads](https://img.shields.io/packagist/dt/artack/color.svg)](https://packagist.org/packages/artack/svg-inline-bundle)

Developed by [artack](https://www.artack.ch) in Zurich, Switzerland.


Features
--------

- Provides twig function to embed svg files as inline svg code into your html code
- Compatible with PHP >= 8.1.
- Compatible with Symfony >= 6.1 (including 7).

Installation
------------
You can install this bundle through [Composer](https://getcomposer.org):

```shell
$ composer require artack/svg-inline-bundle
```

Configuration
-----
Create the configuration file in your `config/packages/artack_svg_inline.yaml` to define the base path for the svg files.

```yaml
svg_inline:
    path: "%kernel.project_dir%/assets/ci/icon"
```

Usage
-----
Load a svg file as inline svg code into your html code:

```twig
# some/template.html.twig
{{ svg_inline('twitter.svg') }}
```
