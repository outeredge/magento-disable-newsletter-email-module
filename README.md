[![Packagist](https://img.shields.io/packagist/v/outeredge/magento-newsletter-disable-email?style=for-the-badge)](https://packagist.org/packages/outeredge/magento-newsletter-disable-email)
[![Packagist](https://img.shields.io/packagist/dt/outeredge/magento-newsletter-disable-email?style=for-the-badge)](https://packagist.org/packages/outeredge/magento-newsletter-disable-email)
[![Packagist](https://img.shields.io/packagist/dm/outeredge/magento-newsletter-disable-email?style=for-the-badge)](https://packagist.org/packages/outeredge/magento-newsletter-disable-email)

# outer/edge Disable Magento 2 Newsletter Emails

With this module you can choose to disable the build in newsletter confirmation email notifications. For example, when a customer subscriber subscribed or unsubscribes from the newsletter. This is particularly useful if you are using an external newsletter platform which handles the confirmation emails.

## Installation

#### Install via Composer

```
composer require outeredge/magento-newsletter-disable-email
```

#### Review configuration for Newsletter Emails

Configuration is available in `Stores > Configuration > outer/edge > Newsletter Emails`. The following options are available:

#### Structured Data (Product)

![magento2-newsletter-email-disable](https://user-images.githubusercontent.com/2035088/153411583-2d95d6a2-2536-4217-a476-995f26083067.png)

* **Enable Confirmation Request Email:** Enable or disable the newsletter confirmation request email.
* **Enable Confirmation Success Email:** Enable or disable the newsletter confirmation success email.
* **Enable Unsubscribe Email:** Enable or disable the newsletter unsubscribe email.

Once the module is installed and configured only the emails which are still enabled will be sent to the customer they sign up, confirm or unsubscribe from the newsletter.
