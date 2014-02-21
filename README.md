# Slack notifier

## Installation

`composer require slack-notifier`

## Usage

```php
require __DIR__ . '/vendor/autoload.php';

$slack = new Slack\Notifier('your_team', 'your_token');

$slack->notify('test', array(
    'channel' => '#channel'
));
```
