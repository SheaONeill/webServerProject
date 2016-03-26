<?php
/**
 * Created by PhpStorm.
 * User: B00084432
 * Date: 25/03/2016
 * Time: 12:10
 */
namespace Itb;
use Mattsmithdev\PdoCrud\DatabaseTable;
use Mattsmithdev\PdoCrud\DatabaseManager;
class NewsFeed extends DatabaseTable{
    
    //create the variables to match database#
    private $id;
    private $author;
    private $date;
    private $newsFeedHeading;
    private $newsFeedSubHeading1;
    private $newsFeedSubHeading2;
    private $newsFeedParagraph1;
    private $newsFeedParagraph2;
    /**
     * @return mixed
     */
    public function getId() {
        return $this->id;
    }
    /**
     * @param mixed $id
     */
    public function setId($id) {
        $this->id = $id;
    }
    /**
     * @return mixed
     */
    public function getAuthor() {
        return $this->author;
    }
    /**
     * @param mixed $author
     */
    public function setAuthor($author) {
        $this->author = $author;
    }
    /**
     * @return mixed
     */
    public function getDate() {
        return $this->date;
    }
    /**
     * @param mixed $date
     */
    public function setDate($date) {
        $this->date = $date;
    }
    /**
     * @return mixed
     */
    public function getNewsFeedHeading() {
        return $this->newsFeedHeading;
    }
    /**
     * @param mixed $newsFeedHeading
     */
    public function setNewsFeedHeading($newsFeedHeading) {
        $this->newsFeedHeading = $newsFeedHeading;
    }
    /**
     * @return mixed
     */
    public function getNewsFeedSubHeading1() {
        return $this->newsFeedSubHeading1;
    }
    /**
     * @param mixed $newsFeedSubHeading1
     */
    public function setNewsFeedSubHeading1($newsFeedSubHeading1) {
        $this->newsFeedSubHeading1 = $newsFeedSubHeading1;
    }
    /**
     * @return mixed
     */
    public function getNewsFeedSubHeading2() {
        return $this->newsFeedSubHeading2;
    }
    /**
     * @param mixed $newsFeedSubHeading2
     */
    public function setNewsFeedSubHeading2($newsFeedSubHeading2) {
        $this->newsFeedSubHeading2 = $newsFeedSubHeading2;
    }
    /**
     * @return mixed
     */
    public function getNewsFeedParagraph1() {
        return $this->newsFeedParagraph1;
    }
    /**
     * @param mixed $newsFeedParagraph1
     */
    public function setNewsFeedParagraph1($newsFeedParagraph1) {
        $this->newsFeedParagraph1 = $newsFeedParagraph1;
    }
    /**
     * @return mixed
     */
    public function getNewsFeedParagraph2() {
        return $this->newsFeedParagraph2;
    }
    /**
     * @param mixed $newsFeedParagraph2
     */
    public function setNewsFeedParagraph2($newsFeedParagraph2) {
        $this->newsFeedParagraph2 = $newsFeedParagraph2;
    }
}//end class
