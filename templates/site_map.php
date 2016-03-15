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
					<li class="circle"><a href="index.php">Welcome</a><!-- site_map link list item -->
						<ul><!-- begin nested unordered site_map link list opening tag -->
							<li class="square"><a href="index.php">Saint Joseph - Patron of our Parish</a></li><!-- site_map link list item -->
							<li class="square"><a href="index.php">Mission statement</a></li><!-- site_map link list item -->
							<li class="square"><a href="index.php">What is a parish in the 21st Century</a></li><!-- site_map link list item -->
							<li class="square"><a href="index.php">Mass Times</a></li><!-- site_map link list item -->
							<li class="square"><a href="index.php">Confessions</a></li><!-- site_map link list item -->
							<li class="square"><a href="index.php">Baptisms</a></li><!-- site_map link list item -->
							<li class="square"><a href="index.php">Marriages</a></li><!-- site_map link list item -->
							<li class="square"><a href="obituary.php" target="_blank">Obituary</a></li><!-- site_map link list item -->
						</ul><!-- close nested unordered link list tag -->
					</li><!-- close link list tag -->
					<li class="circle"><a href="history.php">History</a><!-- site_map link list item -->
						<ul><!-- begin nested unordered site_map link list opening tag -->
							<li class="square"><a href="index.php">Our Church</a></li><!-- site_map link list item -->
							<li class="square"><a href="index.php">The Tin Church</a></li><!-- site_map link list item -->
							<li class="square"><a href="index.php">The Sanctuary</a></li><!-- site_map link list item -->
							<li class="square"><a href="index.php">Baptismal Font</a></li><!-- site_map link list item -->
						</ul><!-- close nested unordered link list tag -->
					</li><!-- close link list tag -->
					<li class="circle"><a href="news.php">News</a><!-- site_map link list item -->
						<ul><!-- begin nested unordered site_map link list opening tag -->
							<li class="square"><a href="index.php">A Video Journey through East Wall Parish</a></li><!-- site_map link list item -->
							<li class="square"><a href="index.php">Random Bible Verse</a></li><!-- site_map link list item -->
							<li class="square"><a href="index.php">Decoding the Church</a></li><!-- site_map link list item -->
							<li class="square"><a href="index.php">Prayer For The Church In Ireland</a></li><!-- site_map link list item -->
						</ul><!-- close nested unordered link list tag -->
					</li><!-- close link list tag -->
					<li class="circle"><a href="donate.php">Donate</a><!-- site_map link list item -->
						<ul><!-- begin nested unordered site_map link list opening tag -->
							<li class="square"><a href="index.php">Parish Ministry Groups</a></li><!-- site_map link list item -->
							<li class="square"><a href="index.php">Pastoral Council</a></li><!-- site_map link list item -->
							<li class="square"><a href="index.php">Baptismal Ministry</a></li><!-- site_map link list item -->
							<li class="square"><a href="index.php">Bethany Bereavement Support</a></li><!-- site_map link list item -->
							<li class="square"><a href="index.php">Scripture Exploration Group</a></li><!-- site_map link list item -->
							<li class="square"><a href="index.php">Ministers of the Eucharist</a></li><!-- site_map link list item -->
							<li class="square"><a href="index.php">The Ministers of the Word</a></li><!-- site_map link list item -->
							<li class="square"><a href="index.php">The Choir</a></li><!-- site_map link list item -->
							<li class="square"><a href="index.php">RCIA</a></li><!-- site_map link list item -->
							<li class="square"><a href="index.php">Church Decoration Group</a></li><!-- site_map link list item -->
							<li class="square"><a href="index.php">Liturgy Group</a></li><!-- site_map link list item -->
							<li class="square"><a href="index.php">St. Vincent de Paul Society</a></li><!-- site_map link list item -->
							<li class="square"><a href="index.php">Church Collections</a></li><!-- site_map link list item -->
							<li class="square"><a href="index.php">Finance Committee</a></li><!-- site_map link list item -->
							<li class="square"><a href="index.php">Donation Totals</a></li><!-- site_map link list item -->
						</ul><!-- close nested unordered link list tag -->
					</li><!-- close link list tag -->
					<li class="circle"><a href="contact.php">Contact</a><!-- site_map link list item -->
						<ul><!-- begin nested unordered site_map link list opening tag -->
							<li class="square"><a href="index.php">Contact Us</a></li><!-- site_map link list item -->
							<li class="square"><a href="index.php">How to find us</a></li><!-- site_map link list item -->
						</ul><!-- close nested unordered link list tag -->
					</li><!-- close link list tag -->
					<li class="circle"><a href="obituary.php" target="_blank">Obituary</a></li><!-- site_map link list item -->
					<li class="circle"><a href="site_map.php">Site Map</a></li><!-- site_map link list item -->
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