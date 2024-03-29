<?php
/**
 * Created by PhpStorm.
 * User: B00084432
 * Date: 25/03/2016
 * Time: 12:10
 */
namespace StJosephsChurchEastWall;

use Mattsmithdev\PdoCrud\DatabaseTable;
use Mattsmithdev\PdoCrud\DatabaseManager;

/**
 * Class NewsFeed
 *
 * This class is responsible for getting and setting the
 * variables for the news feed to and from the data base
 *
 * @package StJosephsChurchEastWall
 */
class NewsFeed extends DatabaseTable
{

    //create the variables to match newsfeed table in database 

    /**
     * this is the variable to store
     * the id of the news article
     * @var int $id
     */
    private $id;

    /**
     * this is the variable to store
     * the author of the news article
     * @var string $author
     */
    private $author;

    /**
     * this is the variable to store
     * the date of the news article
     * @var string $date
     */
    private $date;

    /**
     * this is the variable to store
     * the heading of the news article
     * @var string $newsFeedHeading
     */
    private $newsFeedHeading;

    /**
     * this is the variable to store
     * the first subheading of the news article
     * @var string $newsFeedSubHeading1
     */
    private $newsFeedSubHeading1;

    /**
     * this is the variable to store
     * the second subheading of the news article
     * @var string $newsFeedSubHeading2
     */
    private $newsFeedSubHeading2;

    /**
     * this is the variable to store
     * the first paragraph of the news article
     * @var string $newsFeedParagraph1
     */
    private $newsFeedParagraph1;

    /**
     * this is the variable to store
     * the second paragraph of the news article
     * @var string $newsFeedParagraph2
     */
    private $newsFeedParagraph2;

    /**
     * this function gets the id
     * of the news article
     * 
     * @return int $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * this function sets the id
     * of the news article
     * 
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * this function gets the author
     * of the news article
     * 
     * @return string $author
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * this function sets the author
     * of the news article
     * 
     * @param string $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * this function gets the date
     * of the news article
     * 
     * @return string $date
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * this function sets the date
     * of the news article
     * 
     * @param string $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * this function gets the heading
     * of the news article
     * 
     * @return string $newsFeedHeading
     */
    public function getNewsFeedHeading()
    {
        return $this->newsFeedHeading;
    }

    /**
     * this function sets the heading
     * of the news article
     * 
     * @param string $newsFeedHeading
     */
    public function setNewsFeedHeading($newsFeedHeading)
    {
        $this->newsFeedHeading = $newsFeedHeading;
    }

    /**
     * this function gets the first subheading
     * of the news article
     * 
     * @return string $newsFeedSubHeading1
     */
    public function getNewsFeedSubHeading1()
    {
        return $this->newsFeedSubHeading1;
    }

    /**
     * this function sets the first subheading
     * of the news article
     * 
     * @param string $newsFeedSubHeading1
     */
    public function setNewsFeedSubHeading1($newsFeedSubHeading1)
    {
        $this->newsFeedSubHeading1 = $newsFeedSubHeading1;
    }

    /**
     * this function sets the second subheading
     * of the news article
     * 
     * @return string $newsFeedSubHeading2
     */
    public function getNewsFeedSubHeading2()
    {
        return $this->newsFeedSubHeading2;
    }

    /**
     * this function sets the second subheading
     * of the news article
     * 
     * @param string $newsFeedSubHeading2     
     */
    public function setNewsFeedSubHeading2($newsFeedSubHeading2)
    {
        $this->newsFeedSubHeading2 = $newsFeedSubHeading2;
    }

    /**
     * this function gets the first paragraph
     * of the news article
     * 
     * @return string $newsFeedParagraph1
     */
    public function getNewsFeedParagraph1()
    {
        return $this->newsFeedParagraph1;
    }

    /**
     * this function sets the first paragraph
     * of the news article
     * 
     * @param string $newsFeedParagraph1
     */
    public function setNewsFeedParagraph1($newsFeedParagraph1)
    {
        $this->newsFeedParagraph1 = $newsFeedParagraph1;
    }

    /**
     * this function gets the second paragraph
     * of the news article
     * 
     * @return string $newsFeedParagraph2
     */
    public function getNewsFeedParagraph2()
    {
        return $this->newsFeedParagraph2;
    }

    /**
     * this function sets the second paragraph
     * of the news article
     * 
     * @param string $newsFeedParagraph2
     */
    public function setNewsFeedParagraph2($newsFeedParagraph2)
    {
        $this->newsFeedParagraph2 = $newsFeedParagraph2;
    }
}//end class newsfeed

