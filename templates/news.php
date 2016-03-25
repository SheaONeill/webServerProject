<?php
/*//include the doctype from header_doctype.php
require_once __DIR__ . '/../templates/header_doctype.php';

//include the meta tags from header_meta.php
require_once __DIR__ . '/../templates/header_meta.php';

//include imports and favicon from header_imports.php
require_once __DIR__ . '/../templates/header_imports.php';*/

//include the full header header_full.php
require_once __DIR__ . '/../templates/includes/header_full.php';

use Itb\Verse;


?>

<body xmlns="http://www.w3.org/1999/html"><!-- begin body opening tag -->
<div id="main_container"><!-- div to wrap everything-->
	<!-- ***** header ***** -->
	<header><!-- begin header opening tag -->
		<?php
		//include the social media links from body_header_media_logos.php
		require_once __DIR__ . '/../templates/includes/body_header_media_logos.php';
		?>
	</header><!-- close header tag -->
	<div id="nav_container"><!-- div to wrap the nav-->
		<?php
		//include the navbar from body_header_nav.php
		require_once __DIR__ . '/../templates/includes/body_header_nav.php';
		?>
	</div><!-- close nav_container -->


<div id="section_container"><!-- div to wrap the sections -->
    <!-- ****************** section - block 1 ******************** -->
    <section class="flex_welcome_left"><!-- begin section tag-->
		<article><!-- begin article -->
			<h2>A Journey through East Wall Parish.</h2><!-- heading type three-->
			<p>Video of parish to go here!</p>
			<video id="video_size" controls><!-- begin video -->
			  <source src="" type="video/mp4"><!-- video source -->
			   Your browser does not support the video tag.<!-- if video element is unsupported display this -->
			</video><!-- close video tag -->
		</article><!-- close article tag -->
		
		<article class="random_verse"><!-- begin article -->
			<h2>Random Bible Verse <?php echo rand(1, 5); ?></h2><!-- testing php random function stage 1-->
			<img alt="open_book.png" src="/images/background/open_book.png" ><!-- image of open_book -->
			<div id="bibleVerse">

				<!--define some variables for random bible verse -->
<?php
//create the variables with text first test
$bibleVerseMainHeading = 'Romans 8:35,38-39';
$bibleVerseSubHeading1 = 'Who shall separate us from the love of Christ?';
$bibleVerseSubHeading2 = 'Shall trouble or hardship or persecution or famine or nakedness or danger or sword? ...';
$bibleVerseParagraph = 'I am convinced that neither death nor life, neither angels nor demons, neither the present nor the future, nor any powers, neither height nor depth, nor anything else in all creation, will be able to separate us from the love of God that is in Christ Jesus our Lord.';

$bibleVerseMainHeading = 'Matthew 28:5-7';
$bibleVerseSubHeading1 = 'The angel said to the women, Do not be afraid, for I know that you are looking for Jesus, who was crucified';
$bibleVerseSubHeading2 = 'He is not here; he has risen, just as he said.';
$bibleVerseParagraph = 'Come and see the place where he lay. Then go quickly and tell his disciples: &#039;He has risen from the dead and is going ahead of you into Galilee. There you will see him.&#039; Now I have told you.';

$bibleVerseMainHeading = 'Isaiah 61:1-3';
$bibleVerseSubHeading1 = 'The Spirit of the Sovereign LORD is on me, because the LORD has anointed me to preach good news to the poor.';
$bibleVerseSubHeading2 = 'He has sent me to bind up the brokenhearted,';
$bibleVerseParagraph = 'to proclaim freedom for the captives and release from darkness for the prisoners, to proclaim the year of the LORD&#039;s favor and the day of vengeance of our God, to comfort all who mourn, and provide for those who grieve in Zion -- to bestow on them a crown of beauty instead of ashes, the oil of gladness instead of mourning, and a garment of praise instead of a spirit of despair. They will be called oaks of righteousness, a planting of the LORD for the display of his splendor';

$bibleVerseMainHeading = 'Luke 6:43-45';
$bibleVerseSubHeading1 = 'No good tree bears bad fruit, nor does a bad tree bear good fruit.';
$bibleVerseSubHeading2 = 'Each tree is recognized by its own fruit.';
$bibleVerseParagraph = 'People do not pick figs from thornbushes, or grapes from briers. The good man brings good things out of the good stored up in his heart, and the evil man brings evil things out of the evil stored up in his heart. For out of the overflow of his heart his mouth speaks';


?>

				<!-- need to load this dynamically-->
                <?php
                // outputs something like:
                //  [1] hammer
                //  [5] nail
                //  [7] nuts
				$verses = Verse::getAll();
                foreach ((array) $verses as $verse){
                    print '<p>';
                    print 'id [' . $verse->getId() . '] ';
                    print $verse->getHeading();
                    print $verse->getSubheading1();
                    print $verse->getSubheading2();
                    print $verse->getParagraph();

                }
                
                ?>
                

			</div><!-- div to hold random verse -->
			<br><!-- line break -->

			<!--php refresh page-->
			<a href="<?php echo $_SERVER["REQUEST_URI"]; ?>"><p id="refresh">Click here to refresh this page to see a new verse.</p></a><!-- paragraph -->

			<!-- paragraph -->
		</article><!-- close article tag -->
    </section><!-- close section tag -->

    <!-- ****************** section - block 2 ******************** -->
    <section class="flex_welcome_main"><!-- begin section tag-->
		<article class="outline_main"><!-- begin article -->

            <!-- define some variables for news feed  -->
<?php
//create the variables with text first test
$newsFeedMainHeading = 'Decoding the Church:';
$author = 'Author: ';
$date = 'Date: ';
$newsFeedDateAdded = '24/03/17';
$newsFeedAuthor = 'Howard A. Snyder, Daniel V. Runyon (Contributor)';
$newsFeedSubHeading1 = 'Mapping the DNA of Christ\'s Body.';
$newsFeedSubHeading2 = '';
$newsFeedParagraph1 = 'Decoding the Church takes this organic metaphor and examines its DNA to find the key to church structure and mission.';
$newsFeedParagraph2 = 'While many models have been proposed for understanding the nature of the church, the primary biblical image is that of the body of Christ.';
$newsFeedParagraph3 = 'The authors suggest that the classical understanding of the church as defined by the Nicene Creed-one, holy, catholic, apostolic church-comprises only one strand of the church\'s  DNA.';
$newsFeedParagraph4 ='They propose a more complex, living model for structuring the church and understanding its mission, and then explore how a biblically structured church can transform the world.';
$newsFeedParagraph5 = 'Decoding the Church evaluates models based in hierarchy, psychology, and ecology, and stresses the biblical and contemporary reality of globalization. Includes discussion questions.';
?>
            <!-- need to load this dynamically-->
           	<h2><?= $newsFeedMainHeading ?></h2><!-- news feed heading-->
			<p><?php echo $author, $newsFeedAuthor?></p><!-- author -->
            <p><?php echo $date, $newsFeedDateAdded?></p><!-- date -->
            <p><?php echo $newsFeedSubHeading1?></p><!-- subheading 1 -->
            <p><?php echo $newsFeedSubHeading2?></p><!-- subheading 2 -->
			<p><?php echo $newsFeedParagraph1?></p><!-- paragraph one -->
            <p><?php echo $newsFeedParagraph2?></p></p><!-- paragraph two -->
            <p><?php echo $newsFeedParagraph3?></p></p><!-- paragraph three -->
            <p><?php echo $newsFeedParagraph4?></p></p><!-- paragraph four -->
            <p><?php echo $newsFeedParagraph5?></p></p><!-- paragraph five -->
        </article><!-- close article tag -->
    </section><!-- close section tag -->
	<!-- ****************** section - block 3 ******************** -->
    <section class="flex_welcome_right"><!-- begin section tag-->
		<article class="stitched"><!-- begin article -->
			<h2>Prayer For The Church In Ireland</h2><!-- heading type two -->
			<p>God of our fathers, renew us in the faith which is our life and salvation, the hope which promises forgiveness and interior renewal, the charity which purifies and opens our hearts to love you, and in you, each of our brothers and sisters.</p><!-- paragraph one --> 
			<img alt="code.png" src="/images/background/code.png" ><!-- image of code -->
			<p>Lord Jesus Christ, may the Church in Ireland renew her age-old commitment to the education of our young people in the way of truth and goodness, holiness and generous service to society.</p><!-- paragraph two -->
			<p>Holy Spirit, comforter, advocate and guide, inspire a new springtime of holiness and apostolic zeal for the Church in Ireland. 	May our sorrow and our tears, our sincere effort to redress past wrongs, and our firm purpose of amendment bear an abundant harvest of grace for the deepening of the faith in our families, parishes, schools and communities, for the spiritual progress of Irish society, and the growth of charity, justice, joy and peace within the whole human family. To you, Triune God, confident in the loving protection of Mary, Queen of Ireland, our Mother, and of Saint Patrick, Saint Brigid and all the saints, do we entrust ourselves, our children, and the needs of the Church in Ireland.</p><!-- paragraph three -->
			<p>Amen.</p><!-- paragraph four -->
        </article><!-- close article tag -->
    </section><!-- close section tag -->
	</div><!-- close section_container tag -->
<div id="the_footer_wrapper"><!-- div to wrap the footer -->


	<?php
	//include the footer from footer.php
	require_once __DIR__ . '/../templates/includes/footer.php';

	?>
		<p id="copyright">&copy; 2016&nbsp;&nbsp;James O&#39;Neill&nbsp;&nbsp;<a href="mailto:B00084432@student.itb.ie">Email</a></li></p><!-- footer copyright-->
	</div><!-- close the_footer_wrapper tag -->
</div><!-- close main_container div tag -->
</body><!-- close body tag -->
</html><!-- close html tag -->