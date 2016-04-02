<?php
/**
 * Created by PhpStorm.
 * User: sheaoneill
 * Date: 01/04/16
 * Time: 11:22
 */
namespace Itb;

class NewsFeedController
{

    private $loginController;

    public function __construct()
    {
        $this->loginController = new LoginController();
    }//end constructor

    public function adminNewsAction($valuePassed)
    {
        $isLoggedIn = $this->loginController->isLoggedInFromSession();
        if ($isLoggedIn) {

            if ($valuePassed == "showSingleNewsItem") {
                $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
                $newsFeeds = NewsFeed::getOneById($id);
                $path = "/../templates/admin/adminShowNewsByID.php";
            } elseif ($valuePassed == "showAllNewsItems") {

                $newsFeedArray = new NewsFeed();
                $newsFeeds = $newsFeedArray->getAll();
                $path = "/../templates/admin/adminNews.php";
            }//end else if

            $username = $this->loginController->usernameFromSession();
            $pageTitle = ' News';
            $adminNewsLinkStyle = 'current_page';

            require_once __DIR__ . $path;

        } // end if logged in

        else {

            $message_heading = "************************************************************";
            $mainMessage = 'UNAUTHORIZED ACCESS AREA 1';
            require_once __DIR__ . '/../templates/includes/src/message.php';

        }//end else

    }//end function show details

    // create new Article functions

    function showCreateNewsArticleAction()
    {

        //added this from seperate controllers example
        $isLoggedIn = $this->loginController->isLoggedInFromSession();
        $username = $this->loginController->usernameFromSession();

        $pageTitle = 'Create News Article';;

        require_once __DIR__ . '/../templates/admin/newNewsArticle.php';

    }//end show

    function showEditNewsArticleAction()
    {

        //added this from seperate controllers example
        $isLoggedIn = $this->loginController->isLoggedInFromSession();
        $username = $this->loginController->usernameFromSession();

        $pageTitle = 'Edit News Article';

        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
        $newsFeed = NewsFeed::getOneById($id);

        if (null != $newsFeed) {

            require_once __DIR__ . '/../templates/admin/editNewsArticle.php';

        }//end if not null

        else {

            $message_heading = "Error reading item id = $id";
            $mainMessage = print_r($newsFeed, true);
            require_once __DIR__ . '/../templates/includes/src/message.php';

        }//end else error


    }//end show edit

    function createNewsArticleAction()
    {

        $author = filter_input(INPUT_POST, 'author', FILTER_SANITIZE_STRING);
        $date = filter_input(INPUT_POST, 'date', FILTER_SANITIZE_STRING);
        $newsFeedHeading = filter_input(INPUT_POST, 'newsFeedHeading', FILTER_SANITIZE_STRING);
        $newsFeedSubHeading1 = filter_input(INPUT_POST, 'newsFeedSubHeading1', FILTER_SANITIZE_STRING);
        $newsFeedSubHeading2 = filter_input(INPUT_POST, 'newsFeedSubHeading2', FILTER_SANITIZE_STRING);
        $newsFeedParagraph1 = filter_input(INPUT_POST, 'newsFeedParagraph1', FILTER_SANITIZE_STRING);
        $newsFeedParagraph2 = filter_input(INPUT_POST, 'newsFeedParagraph2', FILTER_SANITIZE_STRING);


        $newsFeed = new NewsFeed();
        $newsFeed->setAuthor($author);
        $newsFeed->setDate($date);
        $newsFeed->setNewsFeedHeading($newsFeedHeading);
        $newsFeed->setNewsFeedSubHeading1($newsFeedSubHeading1);
        $newsFeed->setNewsFeedSubHeading2($newsFeedSubHeading2);
        $newsFeed->setNewsFeedParagraph1($newsFeedParagraph1);
        $newsFeed->setNewsFeedParagraph2($newsFeedParagraph2);

        $insertSuccess = NewsFeed::insert($newsFeed);


        if ($insertSuccess) {

            $this->adminNewsAction("showAllNewsItems");

        }//end if success

        else {

            $message_heading = 'Database News Item Creation Error ';
            $mainMessage = print_r($newsFeed, true);
            require_once __DIR__ . '/../templates/includes/src/message.php';

        }//end else error


    }//end function create new items

    function editNewsArticleAction()
    {

        $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
        $author = filter_input(INPUT_POST, 'author', FILTER_SANITIZE_STRING);
        $date = filter_input(INPUT_POST, 'date', FILTER_SANITIZE_STRING);
        $newsFeedHeading = filter_input(INPUT_POST, 'newsFeedHeading', FILTER_SANITIZE_STRING);
        $newsFeedSubHeading1 = filter_input(INPUT_POST, 'newsFeedSubHeading1', FILTER_SANITIZE_STRING);
        $newsFeedSubHeading2 = filter_input(INPUT_POST, 'newsFeedSubHeading2', FILTER_SANITIZE_STRING);
        $newsFeedParagraph1 = filter_input(INPUT_POST, 'newsFeedParagraph1', FILTER_SANITIZE_STRING);
        $newsFeedParagraph2 = filter_input(INPUT_POST, 'newsFeedParagraph2', FILTER_SANITIZE_STRING);


        $newsFeed = new NewsFeed();
        echo $id;
        $newsFeed->setId($id);
        echo $author;
        $newsFeed->setAuthor($author);
        echo $date;
        $newsFeed->setDate($date);
        echo $newsFeedHeading;
        $newsFeed->setNewsFeedHeading($newsFeedHeading);
        echo $newsFeedSubHeading1;
        $newsFeed->setNewsFeedSubHeading1($newsFeedSubHeading1);
        echo $newsFeedSubHeading2;
        $newsFeed->setNewsFeedSubHeading2($newsFeedSubHeading2);
        echo $newsFeedParagraph1;
        $newsFeed->setNewsFeedParagraph1($newsFeedParagraph1);
        echo $newsFeedParagraph2;
        $newsFeed->setNewsFeedParagraph2($newsFeedParagraph2);

        $insertSuccess = NewsFeed::insert($newsFeed);


        if ($insertSuccess) {

            $this->adminNewsAction("showAllNewsItems");

        }//end if success

        else {

            $message_heading = 'Database News Item Creation Error ';
            $mainMessage = print_r($newsFeed, true);
            require_once __DIR__ . '/../templates/includes/src/message.php';

        }//end else error
    }//end edit  news article

    function deleteNewsArticleAction()
    {
        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
        echo "I Got here my id = $id";

        $deleteSuccess = NewsFeed::delete($id);


        if ($deleteSuccess) {

            $this->adminNewsAction("showAllNewsItems");

        }//end if success

        else {

            $message_heading = 'Database News Item Deletion Error ';

            require_once __DIR__ . '/../templates/includes/src/message.php';

        }//end else error

    }//end edit  news article

}//end class NewsFeedController 