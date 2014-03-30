<?php

namespace Slack;

use Guzzle\Http\Client as GuzzleClient;

class Client extends GuzzleClient
{
    public function __construct($team, $token)
    {
        $url = sprintf("https://%s.slack.com", $team);
        parent::__construct($url);
        $this->setDefaultOption('query', array('token' => $token));
    }
}
