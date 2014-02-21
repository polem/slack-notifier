<?php

namespace Slack;

use Guzzle\Http\Client;

class Notifier
{
    private $team;
    private $token;

    public function __construct($team, $token)
    {
        $this->team  = $team;
        $this->token = $token;

        $this->client = new Client(sprintf("https://%s.slack.com", $this->team));
        $this->client->setDefaultOption('query', array('token' => $this->token));
    }

    public function notify($message, $parameters) {
        $payload = array();
        $payload['text'] = $message;

        $default_parameters = array(
            'username'   => 'slack-php',
            'icon_emoji' => ':ghost:'
        );

        $payload = json_encode(array_merge($payload, $parameters, $default_parameters));

        $request = $this->client->post(
            '/services/hooks/incoming-webhook',
            array(),
            $payload,
            array('debug' => true)
        );

        $response = $request->send();
    }
}

