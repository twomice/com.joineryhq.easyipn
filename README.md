# CiviCRM: Easy IPN URL

[Screenshot](/images/screenshot.png)

This extension provides a link labeled "Notification URL" in the actions menu of each Payment Processor listed at `civicrm/admin/paymentProcessor`. Clicking this link reveals an aeasy-to-copy representation of the correct [IPN Notify URL](https://docs.civicrm.org/sysadmin/en/latest/setup/payment-processors/recurring/#IPN%20notify%20URL) for that payment processor.

The extension is licensed under [GPL-3.0](LICENSE.txt).

## Installation

### Web UI

This extension has not yet been published for installation via the web UI.

### CLI, Zip

Sysadmins and developers may download the `.zip` file for this extension and
install it with the command-line tool [cv](https://github.com/civicrm/cv).

```bash
cd <extension-dir>
cv dl clonecontrib@https://github.com/twomice/clonecontrib/archive/master.zip
```

## CLI, Git

Sysadmins and developers may clone the [Git](https://en.wikipedia.org/wiki/Git) repo for this extension and
install it with the command-line tool [cv](https://github.com/civicrm/cv).

```bash
git clone https://github.com/twomice/clonecontrib.git
cv en clonecontrib
```

## Usage

This extension provides a link labeled "Notification URL" in the actions menu of each Payment Processor listed at `civicrm/admin/paymentProcessor`. Clicking this link reveals an aeasy-to-copy representation of the correct [IPN Notify URL](https://docs.civicrm.org/sysadmin/en/latest/setup/payment-processors/recurring/#IPN%20notify%20URL) for that payment processor.

## Known Issues / Improvements

The IPN Notify URL, as presented, is known to be in the correct format for use in [PayPal IPN Notifications](https://developer.paypal.com/docs/api-basics/notifications/ipn/IPNSetup/#setting-up-ipn-notifications-on-paypal), [Authorize.net Silent Post URL](https://support.authorize.net/s/article/Silent-Post-URL), and [Stripe Webhooks](https://docs.civicrm.org/stripe/en/latest/webhook/) (though the Stripe extension already does a good job of [auto-updating webhooks as needed](https://docs.civicrm.org/stripe/en/latest/webhook/)). It's believed to be appropriate for other payment processors; if you find it's not correct in any case, please submit an issue on the extension's github repo.

## Support
Joinery provides services for CiviCRM including custom extension development, training, data migrations, and more. We aim to keep this extension in good working order, and will do our best to respond appropriately to issues reported on its [github issue queue](https://github.com/twomice/com.joineryhq.easyipn/issues). In addition, if you require urgent or highly customized improvements to this extension, we may suggest conducting a fee-based project under our standard commercial terms.  In any case, the place to start is the [github issue queue](https://github.com/twomice/com.joineryhq.easyipn/issues) -- let us hear what you need and we'll be glad to help however we can.



