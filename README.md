# SyliusNotificationPlugin
Ovh Cloud Notification Channel Adapter

### Table of Content
- [Overview](#overview)
- [Installation](#installation)
- [Usage](#usage)

### Overview
This package is an adapter for the [SyliusNotificationPlugin](https://github.com/8lines/SyliusNotificationsPlugin) that allows you to send notifications to [Ovh Cloud](https://www.ovhcloud.com).

### Installation
To install the adapter you need to run the following command:
```bash
composer require 8lines/slack-notification-plugin-ovh-cloud-adapter
```
Then configure [Ovh Cloud Notifier](https://github.com/symfony/ovh-cloud-notifier) and add the following variable to your `.env` file:
```dotenv
OVHCLOUD_DSN=ovhcloud://APPLICATION_KEY:APPLICATION_SECRET@default?consumer_key=CONSUMER_KEY&service_name=SERVICE_NAME&sender=SENDER&no_stop_clause=NO_STOP_CLAUSE
```
And finally, add the following configuration to your `config/packages/notifier.yaml` file:
```yaml
framework:
  notifier:
    texter_transports:
        ovhcloud: '%env(OVHCLOUD_DSN)%'
```

### Usage
After the installation, you can use the **Ovh Cloud Notification Channel** in your application.
There are one additional option that you can specify during the notification creation:
- `phone number from` - the phone number from which the notification will be sent.
