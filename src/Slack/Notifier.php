<?php

namespace Slack;

class Notifier
{
    private $client;

    public function __construct($client)
    {
        $this->client = $client;
    }

    public function notify($message, $parameters, $debug = false) {
        $payload = array();
        $payload['text'] = $message;

        $default_parameters = array(
            'username'   => 'slack-php',
            'icon_emoji' => ':ghost:'
        );

        $payload = json_encode(array_merge($payload, $default_parameters, $parameters));

        $request = $this->client->post(
            '/services/hooks/incoming-webhook',
            array(),
            $payload,
            array('debug' => $debug)
        );

        $response = $request->send();
    }
}

