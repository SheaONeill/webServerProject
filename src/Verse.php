<?php
/**
 * Created by PhpStorm.
 * User: sheaoneill
 * Date: 23/03/16
 * Time: 22:46
 
 
 This class is responsible for gettting the verses in the data base*/

namespace Itb;



use Mattsmithdev\PdoCrud\DatabaseTable;
use Mattsmithdev\PdoCrud\DatabaseManager;

class Verse extends DatabaseTable

{
    
    private $id;
    private $heading;
    private $subheading1;
    private $subheading2;
    private $paragraph;


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getHeading()
    {
        return $this->heading;
    }

    /**
     * @return mixed
     */
    public function getSubheading1()
    {
        return $this->subheading1;
    }

    /**
     * @return mixed
     */
    public function getSubheading2()
    {
        return $this->subheading2;
    }

    /**
     * @return mixed
     */
    public function getParagraph()
    {
        return $this->paragraph;
    }
  
}//end class