<?php

namespace Slack\Message;

/**
 * Class: Message
 *
 * @see Slack\Message\MessageInterface
 */
class Message implements MessageInterface
{
    protected $text;
    protected $channel;
    protected $username;
    protected $icon_emoji;
    protected $icon_url;
    protected $link_names;
    protected $attachments = array();
    protected $mrkdwn;

    /**
     * __construct
     *
     * @param string $text message text
     */
    public function __construct($text = '')
    {
        $this->text = $text;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set text
     *
     * @param string $text the value to set
     *
     * @return MessageInterface
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get channel
     *
     * @return string
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * Set channel
     *
     * @param string $channel the value to set
     */
    public function setChannel($channel)
    {
        $this->channel = $channel;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set username
     *
     * @param string $username the value to set
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get icon_emoji
     *
     * @return string
     */
    public function getIconEmoji()
    {
        return $this->icon_emoji;
    }

    /**
     * Set icon_emoji
     *
     * @param string $icon_emoji the value to set
     */
    public function setIconEmoji($icon_emoji)
    {
        $this->icon_emoji = $icon_emoji;

        return $this;
    }

    /**
     * Get icon_url
     *
     * @return string
     */
    public function getIconUrl()
    {
        return $this->icon_url;
    }

    /**
     * Set icon_url
     *
     * @param string $icon_url the value to set
     */
    public function setIconUrl($icon_url)
    {
        $this->icon_url = $icon_url;

        return $this;
    }

    /**
     * Get link_names
     *
     * @return string
     */
    public function getLinkNames()
    {
        return $this->link_names;
    }

    /**
     * Set link_names
     *
     * @param string $link_names the value to set
     */
    public function enableLinkNames($link_names)
    {
        $this->link_names = $link_names;

        return $this;
    }

    /**
     * addAttachment
     *
     * @param MessageAttachment $attachment
     */
    public function addAttachment(MessageAttachment $attachment)
    {
        $this->attachments[] = $attachment;
    }

    /**
     * Get attachments
     *
     * @return MessageAttachment[] attachments
     */
    public function getAttachments()
    {
        return $this->attachments;
    }

    /**
     * Set attachments
     *
     * @param MessageAttachment[] attachments the value to set
     */
    public function setAttachments($attachments)
    {
        $this->attachments = $attachments;

        return $this;
    }

    /**
     * Set markdown
     *
     * @param boolean $mrkdwn
     */
    public function setMrkdwn($mrkdwn)
    {
        $this->mrkdwn = $mrkdwn;

        return $this;
    }

    /**
     * Get markdown property
     *
     * @return boolean
     */
    public function getMrkdwn()
    {
        return $this->mrkdwn;
    }
}
