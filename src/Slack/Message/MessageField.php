<?php

namespace Slack\Message;

class MessageField
{
    protected $title;
    protected $value;
    protected $short;

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set title
     *
     * @param string $title the value to set
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set value
     *
     * @param string $value the value to set
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get short
     *
     * @return string
     */
    public function getShort()
    {
        return $this->short;
    }

    /**
     * Set short
     *
     * @param string $short the value to set
     */
    public function setShort($short)
    {
        $this->short = $short;

        return $this;
    }
}
