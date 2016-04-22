<?php
/**
 * Created by PhpStorm.
 * User: sheaoneill
 * Date: 22/04/16
 * Time: 14:16
 */

namespace StJosephsChurchEastWall;


class Obituary
{
    /**
     * the obituary unique ID
     * @var int
     */
    private $id;

    /**
     * month of death
     * @var string $title
     */
    private $month;


    /**
     * year of death
     * @var string $year
     */
    private $year;

    /**
     * deceased name
     * @var string $name
     */
    private $name;

    /**
     * deceased road name
     * @var string $road
     */
    private $road;

    /**
     * Obituary constructor.
     * @param int $id
     * @param string $month
     * @param string $year
     * @param string $name
     * @param string $road
     */
    public function __construct($id, $month, $year, $name, $road)
    {
        $this->id = $id;
        $this->month = $month;
        $this->year = $year;
        $this->name = $name;
        $this->road = $road;
    }

    /**
     * get the id
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * set the id
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * get the month of death
     * @return string
     */
    public function getMonth()
    {
        return $this->month;
    }

    /**
     * set the month of death
     * @param string $month
     */
    public function setMonth($month)
    {
        $this->month = $month;
    }

    /**
     * get the year of death
     * @return string
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * set the year of death
     * @param string $year
     */
    public function setYear($year)
    {
        $this->year = $year;
    }

    /**
     * get the deceased persons name
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * set the deceased persons name
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * get the road name
     * @return string
     */
    public function getRoad()
    {
        return $this->road;
    }

    /**
     * set the road name
     * @param string $road
     */
    public function setRoad($road)
    {
        $this->road = $road;
    }

}