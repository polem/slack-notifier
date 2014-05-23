<?php

namespace Slack\Message;

/**
 * Class: Message
 *
 * @see MessageInterface
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
     * Get text.
     *
     * @return text.
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set text.
     *
     * @param  string           $text the value to set.
     * @return MessageInterface
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get channel.
     *
     * @return channel.
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * Set channel.
     *
     * @param channel the value to set.
     */
    public function setChannel($channel)
    {
        $this->channel = $channel;

        return $this;
    }

    /**
     * Get username.
     *
     * @return username.
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set username.
     *
     * @param username the value to set.
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get icon_emoji.
     *
     * @return icon_emoji.
     */
    public function getIconEmoji()
    {
        return $this->icon_emoji;
    }

    /**
     * Set icon_emoji.
     *
     * @param icon_emoji the value to set.
     */
    public function setIconEmoji($icon_emoji)
    {
        $this->icon_emoji = $icon_emoji;

        return $this;
    }

    /**
     * Get icon_url.
     *
     * @return icon_url.
     */
    public function getIconUrl()
    {
        return $this->icon_url;
    }

    /**
     * Set icon_url.
     *
     * @param icon_url the value to set.
     */
    public function setIconUrl($icon_url)
    {
        $this->icon_url = $icon_url;

        return $this;
    }

    /**
     * Get link_names.
     *
     * @return link_names.
     */
    public function getLinkNames()
    {
        return $this->link_names;
    }

    /**
     * Set link_names.
     *
     * @param link_names the value to set.
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
     * Get attachments.
     *
     * @return attachments.
     */
    public function getAttachments()
    {
        return $this->attachments;
    }

    /**
     * Set attachments.
     *
     * @param attachments the value to set.
     */
    public function setAttachments($attachments)
    {
        $this->attachments = $attachments;

        return $this;
    }
}
