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
     * Get title.
     *
     * @return title.
     */
    public function getTitle()
    {
        return $this->title;    
    }

    /**
     * Set title_link.
     *
     * @param title_link the value to set.
     */
    public function setTitleLink($title_link)
    {
        $this->title_link = $title_link;
        return $this;    
    }

    /**
     * Get title_link.
     *
     * @return title_link.
     */
    public function getTitleLink()
    {
        return $this->title_link;    
    }

    /**
     * Set author_name.
     *
     * @param author_name the value to set.
     */
    public function setAuthorName($author_name)
    {
        $this->author_name= $author_name;
        return $this;    
    }

    /**
     * Get author_name.
     *
     * @return author_name.
     */
    public function getAuthorName()
    {
        return $this->author_name;     
    }

    /**
     * Set author_link.
     *
     * @param author_link the value to set.
     */
    public function setAuthorLink($author_link)
    {
        $this->author_link = $author_link;
        return $this;    
    }

    /**
     * Get author_link.
     *
     * @return author_link.
     */
    public function getAuthorLink()
    {
        return $this->author_link;     
    }


    /**
     * Set author_icon.
     *
     * @param author_icon the value to set.
     */
    public function setAuthorIcon($author_icon)
    {
        $this->author_icon = $author_icon;
        return $this;    
    }

    /**
     * Get author_icon.
     *
     * @return author_icon.
     */
    public function getAuthorIcon()
    {
        return $this->author_icon;     
    }
    /**
     * Set image_url.
     *
     * @param image_url the value to set.
     */
    public function setImageUrl($image_url)
    {
        $this->image_url = $image_url;
        return $this;    
    }

    /**
     * Get image_url.
     *
     * @return image_url.
     */
    public function getImageUrl()
    {
        return $this->image_url;     
    }
}
