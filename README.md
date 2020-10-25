# Faspay-Omnipay
#### Unofficial package [Faspay Business Payment Gateway](https://faspay.co.id/docs/index-business.html)
[Omnipay](https://https://github.com/thephpleague/omnipay) is a framework agnostic, multi-gateway payment processing library for PHP 5.3+.

## Installation
Install via [Composer](https://getcomposer.org/) :
```
composer require kurniajigunawan/faspay-omnipay
```

## Feature
On this package is full supported for debit transaction of Faspay Payment :
- Faspay Channel
- Faspay Purchase
- Faspay Complete Purchase (Notification)
- Faspay Cancel
- Faspay Inquiry

We have a plan to support a credit card soon on next release.

## Example Code
An example code for Faspay Channel :
```php
$gateway = new DebitGateway();
$gateway->setMerchantId('YOUR_MERCHANT_ID');
$gateway->setMerchant('YOUR_MERCHANT');        
$gateway->setProductionMode(true);
$gateway->setPassword('YOUR_PASSWORD');
$gateway->setUserId('YOUR_USER_ID');

$channel = $gateway->channel();
$channel->setRequest('Daftar Payment Channel');
$channel->setSignature();
$channel->send();
```
For general usage instructions, please see the main [Omnipay](https://https://github.com/thephpleague/omnipay) repository.

## Support
If you are having general issues with Omnipay, we suggest posting on [Stack Overflow](https://stackoverflow.com). Be sure to add the [omnipay tag](https://stackoverflow.com/questions/tagged/omnipay) so it can be easily found.

If you believe you have found a bug, please report it using the [GitHub issue tracker](https://github.com/kurniajigunawan/faspay-omnipay/issues), or better yet, fork the library and submit a pull request.
