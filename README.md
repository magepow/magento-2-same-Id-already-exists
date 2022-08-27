## Magento 2 SameIDAlreadyExists (with the same ID "X" already exists)
Sometime you can get error with in log var/log/debug.log or var/log/system.log as below:
```
Item (Magento\Catalog\Model\Product\Interceptor) with the same ID "X" already exists.

or

Item (Magento\Catalog\Model\Category\Interceptor) with the same ID "X" already exists.

or

Item (Magento\Customer\Model\Customer\Interceptor) with the same ID "X" already exists
```
The error can cause when you migration database from Magento 1 to Magento 2 or something else. The error cause exist duplicate entity_id in database. You can find and fix it with command or install SameIDAlreadyExists to ignore it.

## Install Magento 2 SameIDAlreadyExists
### Install via composer (recommend)
Run the following commands in Magento 2 root folder:
```
composer require magepow/sameidalreadyexists
php bin/magento module:enable Magepow_SameIDAlreadyExists
php bin/magento cache:flush
```
