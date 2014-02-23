# Slack notifier

[![Build Status](https://secure.travis-ci.org/polem/slack-notifier.png)](http://travis-ci.org/polem/slack-notifier)

## Installation

`composer require slack-notifier`

## Usage

```php
require __DIR__ . '/vendor/autoload.php';

$slack = new Slack\Client('your_team', 'your_token');
$slack = new Slack\Notifier($client);

$slack->notify('test', array(
    'channel' => '#channel'
));
```
