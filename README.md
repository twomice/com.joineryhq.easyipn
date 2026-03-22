# CiviCRM: Easy IPN URL

![Screenshot](/images/screenshot.png)

This extension provides a link labeled "Notification URL" in the actions menu of
each Payment Processor listed at `civicrm/admin/paymentProcessor`. Clicking this
link reveals an aeasy-to-copy representation of the correct 
[IPN Notify URL](https://docs.civicrm.org/sysadmin/en/latest/setup/payment-processors/recurring/#IPN%20notify%20URL) 
for that payment processor.

The extension is licensed under [GPL-3.0](LICENSE.txt).

## Usage

This extension provides a link labeled "Notification URL" in the actions menu of
each Payment Processor listed at `civicrm/admin/paymentProcessor`. Clicking this
link reveals an aeasy-to-copy representation of the correct 
[IPN Notify URL](https://docs.civicrm.org/sysadmin/en/latest/setup/payment-processors/recurring/#IPN%20notify%20URL)
for that payment processor.

## Known Issues / Improvements

The IPN Notify URL, as presented, is known to be in the correct format for use in
[PayPal IPN Notifications](https://developer.paypal.com/docs/api-basics/notifications/ipn/IPNSetup/#setting-up-ipn-notifications-on-paypal),
[Authorize.net Silent Post URL](https://support.authorize.net/s/article/Silent-Post-URL),
and [Stripe Webhooks](https://docs.civicrm.org/stripe/en/latest/webhook/)
(though the Stripe extension already does a good job of
[auto-updating webhooks as needed](https://docs.civicrm.org/stripe/en/latest/webhook/)).
It's believed to be appropriate for other payment processors; if you find it's
not correct in any case, please submit an issue on the extension's github repo.

## Support

Support for this package is handled under Joinery's ["As-Is Support" policy](https://joineryhq.com/software-support-levels#as-is-support).

Public issue queue for this package: https://github.com/twomice/com.joineryhq.easyipn/issues
