## Magento 2 SameIDAlreadyExists (with the same ID "X" already exists)
Sometime you can get error with in log var/log/debug.log or var/log/system.log as below:
```
Item (Magento\Catalog\Model\Product\Interceptor) with the same ID "X" already exists.

or

Item (Magento\Catalog\Model\Category\Interceptor) with the same ID "X" already exists.

or

Item (Magento\Customer\Model\Customer\Interceptor) with the same ID "X" already exists
```
The error can cause when you migration database from Magento 1 to Magento 2 or something else. The error cause exist duplicate entity_id in database. You can find and fix it with command or install SameIDAlreadyExists to ignore it. if you want to fix the issue duplicate in your database you can use extension here to detect it [Url data integrity checker module for Magento 2](https://github.com/baldwin-agency/magento2-module-url-data-integrity-checker)

## Install Magento 2 SameIDAlreadyExists
[![Latest Stable Version](https://poser.pugx.org/magepow/sameidalreadyexists/v/stable)](https://packagist.org/packages/magepow/sameidalreadyexists)
[![Total Downloads](https://poser.pugx.org/magepow/sameidalreadyexists/downloads)](https://packagist.org/packages/magepow/sameidalreadyexists)
[![Daily Downloads](https://poser.pugx.org/magepow/sameidalreadyexists/d/daily)](https://packagist.org/packages/magepow/sameidalreadyexists)
### Install via composer (recommend)
Run the following commands in Magento 2 root folder:
```
composer require magepow/sameidalreadyexists
php bin/magento module:enable Magepow_SameIDAlreadyExists
php bin/magento cache:flush
```
