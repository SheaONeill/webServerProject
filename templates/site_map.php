<?php
/*//include the doctype from header_doctype.php
require_once __DIR__ . '/../templates/header_doctype.php';

//include the meta tags from header_meta.php
require_once __DIR__ . '/../templates/header_meta.php';

//include imports and favicon from header_imports.php
require_once __DIR__ . '/../templates/header_imports.php';*/

//include the full header header_full.php
require_once __DIR__ . '/../templates/header_full.php';
?>
<body><!-- begin body opening tag -->
<div id="main_container"><!-- div to wrap everything-->
	<!-- ***** header ***** -->
	<header><!-- begin header opening tag -->
		<?php
		//include the social media links from body_header_media_logos.php
		require_once __DIR__ . '/../templates/body_header_media_logos.php';
		?>
	</header><!-- close header tag -->
	<div id="nav_container"><!-- div to wrap the nav-->
		<?php
		//include the navbar from body_header_nav.php
		require_once __DIR__ . '/../templates/body_header_nav.php';
		?>
	</div><!-- close nav_container -->

<div id="section_container"><!-- div to wrap the sections -->
    <!-- ****************** section - block 1 ******************** -->
    <section class="flex_site_map"><!-- begin section tag-->
		<article><!-- begin article -->
			<h2>Site Map</h2><!-- heading type two-->
			<p><ul><!-- begin unordered site_map link list opening tag -->
					<li class="circle"><a href="index.php?action=index">Welcome</a><!-- site_map link list item -->
						<ul><!-- begin nested unordered site_map link list opening tag -->
							<li class="square"><a href="?action=index">Saint Joseph - Patron of our Parish</a></li><!-- site_map link list item -->
							<li class="square"><a href="?action=index">Mission statement</a></li><!-- site_map link list item -->
							<li class="square"><a href="?action=index">What is a parish in the 21st Century</a></li><!-- site_map link list item -->
							<li class="square"><a href="?action=index">Mass Times</a></li><!-- site_map link list item -->
							<li class="square"><a href="?action=index">Confessions</a></li><!-- site_map link list item -->
							<li class="square"><a href="?action=index">Baptisms</a></li><!-- site_map link list item -->
							<li class="square"><a href="?action=index">Marriages</a></li><!-- site_map link list item -->
							<li class="square"><a href="obituary.php?action=obituary" target="_blank">Obituary</a></li><!-- site_map link list item -->
						</ul><!-- close nested unordered link list tag -->
					</li><!-- close link list tag -->
					<li class="circle"><a href="history.php?action=history">History</a><!-- site_map link list item -->
						<ul><!-- begin nested unordered site_map link list opening tag -->
							<li class="square"><a href="history.php?action=history">Our Church</a></li><!-- site_map link list item -->
							<li class="square"><a href="history.php?action=history">The Tin Church</a></li><!-- site_map link list item -->
							<li class="square"><a href="history.php?action=history">The Sanctuary</a></li><!-- site_map link list item -->
							<li class="square"><a href="history.php?action=history">Baptismal Font</a></li><!-- site_map link list item -->
						</ul><!-- close nested unordered link list tag -->
					</li><!-- close link list tag -->
					<li class="circle"><a href="news.php?action=news">News</a><!-- site_map link list item -->
						<ul><!-- begin nested unordered site_map link list opening tag -->
							<li class="square"><a href="news.php?action=news">A Video Journey through East Wall Parish</a></li><!-- site_map link list item -->
							<li class="square"><a href="news.php?action=news">Random Bible Verse</a></li><!-- site_map link list item -->
							<li class="square"><a href="news.php?action=news">Decoding the Church</a></li><!-- site_map link list item -->
							<li class="square"><a href="news.php?action=news">Prayer For The Church In Ireland</a></li><!-- site_map link list item -->
						</ul><!-- close nested unordered link list tag -->
					</li><!-- close link list tag -->
					<li class="circle"><a href="donate.php?action=donate">Donate</a><!-- site_map link list item -->
						<ul><!-- begin nested unordered site_map link list opening tag -->
							<li class="square"><a href="donate.php?action=donate">Parish Ministry Groups</a></li><!-- site_map link list item -->
							<li class="square"><a href="donate.php?action=donate">Pastoral Council</a></li><!-- site_map link list item -->
							<li class="square"><a href="donate.php?action=donate">Baptismal Ministry</a></li><!-- site_map link list item -->
							<li class="square"><a href="donate.php?action=donate">Bethany Bereavement Support</a></li><!-- site_map link list item -->
							<li class="square"><a href="donate.php?action=donate">Scripture Exploration Group</a></li><!-- site_map link list item -->
							<li class="square"><a href="donate.php?action=donate">Ministers of the Eucharist</a></li><!-- site_map link list item -->
							<li class="square"><a href="donate.php?action=donate">The Ministers of the Word</a></li><!-- site_map link list item -->
							<li class="square"><a href="donate.php?action=donate">The Choir</a></li><!-- site_map link list item -->
							<li class="square"><a href="donate.php?action=donate">RCIA</a></li><!-- site_map link list item -->
							<li class="square"><a href="donate.php?action=donate">Church Decoration Group</a></li><!-- site_map link list item -->
							<li class="square"><a href="donate.php?action=donate">Liturgy Group</a></li><!-- site_map link list item -->
							<li class="square"><a href="donate.php?action=donate">St. Vincent de Paul Society</a></li><!-- site_map link list item -->
							<li class="square"><a href="donate.php?action=donate">Church Collections</a></li><!-- site_map link list item -->
							<li class="square"><a href="donate.php?action=donate">Finance Committee</a></li><!-- site_map link list item -->
							<li class="square"><a href="donate.php?action=donate">Donation Totals</a></li><!-- site_map link list item -->
						</ul><!-- close nested unordered link list tag -->
					</li><!-- close link list tag -->
					<li class="circle"><a href="contact.php?action=contact">Contact</a><!-- site_map link list item -->
						<ul><!-- begin nested unordered site_map link list opening tag -->
							<li class="square"><a href="contact.php?action=contact">Contact Us</a></li><!-- site_map link list item -->
							<li class="square"><a href="contact.php?action=contact">How to find us</a></li><!-- site_map link list item -->
						</ul><!-- close nested unordered link list tag -->
					</li><!-- close link list tag -->
					<li class="circle"><a href="obituary.php?action=obituary" target="_blank">Obituary</a></li><!-- site_map link list item -->
					<li class="circle"><a href="site_map.php?action=site_map">Site Map</a></li><!-- site_map link list item -->
				</ul><!-- close unordered link list tag -->
		</article>
    </section><!-- close section tag -->

    
	</div><!-- close section_container tag -->
<div id="the_footer_wrapper"><!-- div to wrap the footer -->


	<?php
	//include the footer from footer.php
	require_once __DIR__ . '/../templates/footer.php';

	?>

		<p id="copyright">&copy; 2016&nbsp;&nbsp;James O&#39;Neill&nbsp;&nbsp;<a href="mailto:B00084432@student.itb.ie">Email</a></li></p><!-- footer copyright-->
	</div><!-- close the_footer_wrapper tag -->
</div><!-- close main_container div tag -->
</body><!-- close body tag -->
</html><!-- close html tag -->