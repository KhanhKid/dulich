<?php

class Tour extends \Phalcon\Mvc\Model
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
    public $name;

    /**
     *
     * @var string
     */
    public $texthot;

    /**
     *
     * @var integer
     */
    public $price;

    /**
     *
     * @var integer
     */
    public $timeday;

    /**
     *
     * @var integer
     */
    public $timenight;

    /**
     *
     * @var string
     */
    public $how;

    /**
     *
     * @var string
     */
    public $startdate;

    /**
     *
     * @var integer
     */
    public $type;

    /**
     *
     * @var string
     */
    public $img;

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
            'name' => 'name', 
            'texthot' => 'texthot', 
            'price' => 'price', 
            'timeday' => 'timeday', 
            'timenight' => 'timenight', 
            'how' => 'how', 
            'startdate' => 'startdate', 
            'type' => 'type', 
            'img' => 'img', 
            'timestamp' => 'timestamp'
        );
    }

}
