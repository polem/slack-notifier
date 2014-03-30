<?php

namespace Slack\Message;

class MessageAttachment
{

    protected $fallback;
    protected $text;
    protected $pretext;
    protected $color;
    protected $fields;

    public function __construct()
    {
    }

    /**
     * addField
     *
     * @param MessageField $field
     */
    public function addField(MessageField $field)
    {
        $this->fields[] = $field;

        return $this;
    }

    /**
     * Get fields.
     *
     * @return fields.
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * Set fields.
     *
     * @param fields the value to set.
     */
    public function setFields($fields)
    {
        $this->fields = $fields;

        return $this;
    }

    /**
     * Get fallback.
     *
     * @return fallback.
     */
    public function getFallback()
    {
        return $this->fallback;
    }

    /**
     * Set fallback.
     *
     * @param fallback the value to set.
     */
    public function setFallback($fallback)
    {
        $this->fallback = $fallback;

        return $this;
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
     * @param text the value to set.
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get pretext.
     *
     * @return pretext.
     */
    public function getPretext()
    {
        return $this->pretext;
    }

    /**
     * Set pretext.
     *
     * @param pretext the value to set.
     */
    public function setPretext($pretext)
    {
        $this->pretext = $pretext;

        return $this;
    }

    /**
     * Get color.
     *
     * @return color.
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set color.
     *
     * @param color the value to set.
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }
}
