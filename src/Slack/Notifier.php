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
    protected $client;

    /**
     * serializer
     *
     * @var mixed
     */
    protected $serializer;

    /**
     * __construct
     *
     * @param mixed $client
     * @param mixed $serializer
     */
    public function __construct($client, $serializer = null)
    {
        if (!$serializer) {
            $normalizer = new GetSetMethodNormalizer();
            $normalizer->setCamelizedAttributes(array('icon_emoji', 'icon_url'));

            $serializer = new Serializer(
                array($normalizer),
                array(new JsonEncoder())
            );
        }

        $this->client = $client;
        $this->serializer = $serializer;
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

        $request->send();
    }
}
