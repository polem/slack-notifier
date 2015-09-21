<?php

namespace Slack\Message;

class MessageAttachment
{

    protected $fallback;
    protected $text;
    protected $title;
    protected $title_link;
    protected $author_name;
    protected $author_link;
    protected $author_icon;
    protected $image_url;
    protected $pretext;
    protected $color;
    protected $fields;
    protected $mrkdwn_in;

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
     * Get fields
     *
     * @return MessageField[] fields
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * Set fields
     *
     * @param MessageField[] $fields the value to set
     */
    public function setFields($fields)
    {
        $this->fields = $fields;

        return $this;
    }

    /**
     * Get fallback
     *
     * @return string
     */
    public function getFallback()
    {
        return $this->fallback;
    }

    /**
     * Set fallback
     *
     * @param string $fallback the value to set
     */
    public function setFallback($fallback)
    {
        $this->fallback = $fallback;

        return $this;
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
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get pretext
     *
     * @return string
     */
    public function getPretext()
    {
        return $this->pretext;
    }

    /**
     * Set pretext
     *
     * @param string $pretext the value to set
     */
    public function setPretext($pretext)
    {
        $this->pretext = $pretext;

        return $this;
    }

    /**
     * Get color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set color
     *
     * @param string $color the value to set
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
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
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set title_link
     *
     * @param string $title_link the value to set
     */
    public function setTitleLink($title_link)
    {
        $this->title_link = $title_link;
        return $this;
    }

    /**
     * Get title_link
     *
     * @return string
     */
    public function getTitleLink()
    {
        return $this->title_link;
    }

    /**
     * Set author_name
     *
     * @param string $author_name the value to set
     */
    public function setAuthorName($author_name)
    {
        $this->author_name = $author_name;
        return $this;
    }

    /**
     * Get author_name
     *
     * @return $string author_name
     */
    public function getAuthorName()
    {
        return $this->author_name;
    }

    /**
     * Set author_link
     *
     * @param string $author_link the value to set
     */
    public function setAuthorLink($author_link)
    {
        $this->author_link = $author_link;
        return $this;
    }

    /**
     * Get author_link
     *
     * @return string
     */
    public function getAuthorLink()
    {
        return $this->author_link;
    }


    /**
     * Set author_icon
     *
     * @param string $author_icon the value to set
     */
    public function setAuthorIcon($author_icon)
    {
        $this->author_icon = $author_icon;
        return $this;
    }

    /**
     * Get author_icon
     *
     * @return string
     */
    public function getAuthorIcon()
    {
        return $this->author_icon;
    }

    /**
     * Set image_url
     *
     * @param string $image_url the value to set
     */
    public function setImageUrl($image_url)
    {
        $this->image_url = $image_url;
        return $this;
    }

    /**
     * Get image_url
     *
     * @return string
     */
    public function getImageUrl()
    {
        return $this->image_url;
    }

    /**
     * Set mrkdwn_in property
     *
     * @param string[] $$mrkdwn_in array of fields to set markdown in
     */
    public function setMrkdwnIn($mrkdwn_in)
    {
        $this->mrkdwn_in = $mrkdwn_in;

        return $this;
    }

    /**
     * Get mrkdwn_in property
     *
     * @return string[] mrkdwn_in
     */
    public function getMrkdwnIn()
    {
        return $this->mrkdwn_in;
    }
}
