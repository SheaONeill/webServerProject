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

    //create the variables to match database
    private $heading;
    private $newsFeedSub1;
    private $newsFeedSub2;
    private $newsText1;
    private $newsText2;
    private $author ;
    private $date;

    /**
     * @return mixed
     */
    public function getHeading() {
        return $this->heading;
    }

    /**
     * @param mixed $heading
     */
    public function setHeading($heading) {
        $this->heading = $heading;
    }

    /**
     * @return mixed
     */
    public function getNewsFeedSub1() {
        return $this->newsFeedSub1;
    }

    /**
     * @param mixed $newsFeedSub1
     */
    public function setNewsFeedSub1($newsFeedSub1) {
        $this->newsFeedSub1 = $newsFeedSub1;
    }

    /**
     * @return mixed
     */
    public function getNewsFeedSub2() {
        return $this->newsFeedSub2;
    }

    /**
     * @param mixed $newsFeedSub2
     */
    public function setNewsFeedSub2($newsFeedSub2) {
        $this->newsFeedSub2 = $newsFeedSub2;
    }

    /**
     * @return mixed
     */
    public function getNewsText1() {
        return $this->newsText1;
    }

    /**
     * @param mixed $newsText1
     */
    public function setNewsText1($newsText1) {
        $this->newsText1 = $newsText1;
    }

    /**
     * @return mixed
     */
    public function getNewsText2() {
        return $this->newsText2;
    }

    /**
     * @param mixed $newsText2
     */
    public function setNewsText2($newsText2) {
        $this->newsText2 = $newsText2;
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





}//end class