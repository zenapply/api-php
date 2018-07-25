# Define Licenses and Limitations
[![Latest Version](https://img.shields.io/github/release/zenapply/api-php.svg?style=flat-square)](https://github.com/zenapply/api-php/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://travis-ci.org/zenapply/api-php.svg?branch=master)](https://travis-ci.org/zenapply/api-php)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/zenapply/api-php/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/zenapply/api-php/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/zenapply/api-php/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/zenapply/api-php/?branch=master)
[![Total Downloads](https://img.shields.io/packagist/dt/zenapply/api-php.svg?style=flat-square)](https://packagist.org/packages/zenapply/api-php)

## Resources
[API v2 Documentation](https://zenapply.docs.apiary.io/)

## Installation

Install via [composer](https://getcomposer.org/) - In the terminal:
```bash
composer require zenapply/api-php
```

## Usage
```php
use Zenapply\Api\Zenapply;

$client = new Zenapply($API_TOKEN, "your_company_domain");

$positions = $client->positions->all();
```
