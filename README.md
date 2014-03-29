# Slack notifier

[![Build Status](https://secure.travis-ci.org/polem/slack-notifier.png)](http://travis-ci.org/polem/slack-notifier)
[![Code Coverage](https://scrutinizer-ci.com/g/polem/slack-notifier/badges/coverage.png?s=1f705b3b215e91d3b81d5e8ed62ac9af46d4838c)](https://scrutinizer-ci.com/g/polem/slack-notifier/)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/polem/slack-notifier/badges/quality-score.png?s=dc06da770a1c36242e416fb6eca5ce307660e6f5)](https://scrutinizer-ci.com/g/polem/slack-notifier/)

## Installation

`composer require slack-notifier`

## Usage

```php
require __DIR__ . '/vendor/autoload.php';

$client = new Slack\Client('your_team', 'your_token');
$slack = new Slack\Notifier($client);

$slack->notify('test', array(
    'channel' => '#channel'
));
```
