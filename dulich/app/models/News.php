<?php

class News extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $ID;

    /**
     *
     * @var string
     */
    public $title;

    /**
     *
     * @var string
     */
    public $content;

    /**
     *
     * @var string
     */
    public $img;

    /**
     *
     * @var integer
     */
    public $view;

    /**
     *
     * @var string
     */
    public $timestamp;

    /**
     * Independent Column Mapping.
     */
    public function columnMap()
    {
        return array(
            'ID' => 'ID', 
            'title' => 'title', 
            'content' => 'content', 
            'img' => 'img', 
            'view' => 'view', 
            'timestamp' => 'timestamp'
        );
    }

}
