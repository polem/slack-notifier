<?php

namespace Slack;

use Slack\Message\MessageInterface;

use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Slack\Serializer\Normalizer\GetSetMethodNormalizer;

class Notifier
{
    /**
     * client
     *
     * @var mixed
     */
    private $client;

    /**
     * __construct
     *
     * @param mixed $client
     */
    public function __construct($client)
    {
        $this->client = $client;

        $normalizer = new GetSetMethodNormalizer();
        $normalizer->setCamelizedAttributes(array('icon_emoji', 'icon_url'));

        $this->serializer = new Serializer(
            array($normalizer),
            array(new JsonEncoder())
        );
    }

    /**
     * notify
     *
     * @param MessageInterface $message
     * @param boolean          $debug
     */
    public function notify(MessageInterface $message, $debug = false)
    {
        $payload = $this->serializer->serialize($message, 'json');

        $request = $this->client->post(
            '/services/hooks/incoming-webhook',
            array(),
            $payload,
            array('debug' => $debug)
        );

        $response = $request->send();
    }
}
