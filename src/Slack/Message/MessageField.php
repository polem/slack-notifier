<?php

namespace Slack\Message;

class MessageField
{
    protected $title;
    protected $value;
    protected $short;

    /**
     * Get title.
     *
     * @return title.
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set title.
     *
     * @param title the value to set.
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get value.
     *
     * @return value.
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set value.
     *
     * @param value the value to set.
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get short.
     *
     * @return short.
     */
    public function getShort()
    {
        return $this->short;
    }

    /**
     * Set short.
     *
     * @param short the value to set.
     */
    public function setShort($short)
    {
        $this->short = $short;

        return $this;
    }
}
