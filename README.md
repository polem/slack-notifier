# Slack php

## Usage

```
require __DIR__ . '/vendor/autoload.php';

$slack = new Slack\Slack('your_team', 'your_token');

$slack->send('test', array(
    'channel' => '#channel'
));
````
