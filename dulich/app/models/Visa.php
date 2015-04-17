<?php

class Visa extends \Phalcon\Mvc\Model
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
     * @var integer
     */
    public $view;

    /**
     *
     * @var string
     */
    public $file;

    /**
     *
     * @var string
     */
    public $img;

    /**
     *
     * @var string
     */
    public $timeupdate;

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
            'view' => 'view', 
            'file' => 'file', 
            'img' => 'img', 
            'timeupdate' => 'timeupdate', 
            'timestamp' => 'timestamp'
        );
    }

}
