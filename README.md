# Slack notifier

[![Build Status](https://secure.travis-ci.org/polem/slack-notifier.png)](http://travis-ci.org/polem/slack-notifier)
[![Code Coverage](https://scrutinizer-ci.com/g/polem/slack-notifier/badges/coverage.png?s=1f705b3b215e91d3b81d5e8ed62ac9af46d4838c)](https://scrutinizer-ci.com/g/polem/slack-notifier/)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/polem/slack-notifier/badges/quality-score.png?s=dc06da770a1c36242e416fb6eca5ce307660e6f5)](https://scrutinizer-ci.com/g/polem/slack-notifier/)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/47bc675d-945a-4467-a3f2-d679b000e145/mini.png)](https://insight.sensiolabs.com/projects/47bc675d-945a-4467-a3f2-d679b000e145)

## Installation

`composer require slack-notifier`

## Usage

### Simple

```php
require __DIR__ . '/vendor/autoload.php';

$client = new Slack\Client('your_team', 'your_token');
$slack = new Slack\Notifier($client);

$message = new Slack\Message\Message('Hello world');

$message->setChannel('#test')
    ->setIconEmoji(':ghost:')
    ->setUsername('slack-php');

$slack->notify($message);
```

### With attachments

```php
require __DIR__ . '/vendor/autoload.php';

$client = new Slack\Client('your_team', 'your_token');
$slack = new Slack\Notifier($client);

$message = new Slack\Message\Message('Hello world');
$attachment = new Slack\Message\MessageAttachment();
$field = new Slack\Message\MessageField();
$field
    ->setTitle('foo')
    ->setValue('bar');

$attachment->addField($field);
$message->addAttachment($attachment);

$message->setChannel('#test')
    ->setIconEmoji(':ghost:')
    ->setUsername('slack-php');

$slack->notify($message);
```

### Message

If your message contain @username and you want him to be notified, add `$message->enableLinkNames(true)`
