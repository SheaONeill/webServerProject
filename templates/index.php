<?php
//include the doctype from header_doctype.php
require_once __DIR__ . '/../templates/header_doctype.php';

//include the meta tags from header_meta.php
require_once __DIR__ . '/../templates/header_meta.php';

//include imports and favicon from header_imports.php
require_once __DIR__ . '/../templates/header_imports.php';

//-------------------------------------------
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
    <section class="flex_welcome_left"><!-- begin section tag-->
		<article class="stitched"><!-- begin article -->
				<h2>Saint Joseph - Patron of our Parish</h2><!-- article heading -->
				<img alt="St Joseph Statue (45K)" src="../public/images/background/st_joseph_statue.png" height="250" width="100" >
				<p>Our modern understanding of Saint Joseph depends primarily on the gospels of Matthew (1-2 and 13:55) and Luke (1-2 and 4:22). It is sometimes said that the account of the birth of Jesus in Matthew's gospel is from Joseph's perspective, while the account in Luke's gospel is from Mary's perspective.</p><!-- paragraph one -->
				<p>Only a few facts about Joseph can be gleaned from the gospel accounts, and from those facts certain other things can reasonably be concluded. Joseph was probably a native of Bethlehem. If he was not from Bethlehem, he may have owned property there, because it was for the purpose of property taxation that he was obliged to be registered at Bethlehem in the Roman census. Joseph was a craft-worker of some kind, most likely a wood worker - either a cabinetmaker or carpenter.</p><!-- paragraph two -->
				<p>The gospel accounts make clear that Joseph is not to be regarded as the biological father of Jesus. Nonetheless, Joseph becomes Jesus' father in every other respect. As a result of a divine revelation, Joseph marries Mary in spite of his initial misgivings concerning the conception of her child; and when Joseph, together with Mary, presents the child at the Temple and names him, he acts as his legal father. We are told that Joseph protects Jesus from harm, by fleeing to Egypt with him and his mother in order to avoid a massacre of children by King Herod. On their return, following the death of Herod, they settle in Nazareth, which is in Galilee, rather than returning to Judea. A suggested reason for Joseph settling in Nazareth is that since he was involved in the building trade, he would have found plenty of work in the neighbouring city of Sepphoris, which at that time was being rebuilt by Herod Antipas - Herod's son and ruler of Galilee after Herod's death - as his capital city.</p><!-- paragraph three -->
		</article><!-- close article tag -->
	</section><!-- close section tag -->

    <!-- ****************** section - block 2 ******************** -->
    <section class="flex_welcome_main"><!-- begin section tag-->
		<article class="outline_main"><!-- begin article -->
			<h2>Mission statement</h2><!-- article heading -->
			<p>Mission statement of the Parish Pastoral Council</p><!-- paragraph one -->
			<p><img alt="stained_glass_window.png" src="../public/images/background/stained_glass_window.png" >We, the Parishioners of St. Joseph's Parish, East Wall, believing in and inspired by Jesus Christ, are a caring community who together strive to commit ourselves to worship, mission and evangelisation. For the coming years we are committed to making our Parish a place where each person feels welcome, accepted and valued.</p><!-- paragraph two -->
        </article><!-- close article tag --><br>
		<article class="outline_main" id="bottom"><!-- begin article -->
			<h2>What is a parish in the 21st Century?</h2><!-- article heading -->
					<p>The concept of parish in the twenty-first century is firmly rooted in the empowering vision of the Second Vatican Council: "Though they differ from one another in essence and not only in degree, the common priesthood of the faithful and the ministerial or hierarchical priesthood are nonetheless interrelated: each of them in its own special way is a participation in the one priesthood of Christ." </p><!-- paragraph one -->
					<img alt="disciples.png" src="../public/images/background/disciples.png" ><!-- image of disciples -->
					<p>A recent response to this Vatican II ideal has been the establishment of Parish Pastoral Councils throughout the Dublin Diocese during 2005. A Parish Pastoral Council is a structure which facilitates the sharing of responsibility between priests and people for the building of vibrant parish communities. St Joseph's Parish in the 21st Century</p><!-- paragraph two -->
					<p>In common with parishes throughout the country, the size of the worshipping community at St Joseph's has fallen dramatically since 1956. Nevertheless, the spirit of Vatican II is alive and well in our parish. Many from among the worshipping community are actively involved in different ministry groups, parish working groups, or other groups directly associated with the parish. Each of these groups plays an important role in the ongoing life of our parish.</p><!-- paragraph three -->
		</article><!-- close article tag -->
		
    </section><!-- close section tag -->
	<!-- ****************** section - block 3 ******************** -->
    <section class="flex_welcome_right"><!-- begin section tag-->
		<article class="stitched">
			<h2>Mass Times</h2><!-- article heading -->
			<p>Sunday: <span>(Vigil Sat)&nbsp;&nbsp;6.30 p.m.;&nbsp;&nbsp;10&nbsp;&nbsp; and &nbsp;&nbsp;11.30 a.m.</span></p><!-- paragraph-->
			<p>Holydays:<span>(Vigil)&nbsp;&nbsp;6.30 p.m.;&nbsp;&nbsp;10 a.m.&nbsp;&nbsp;and&nbsp;&nbsp; 1.00 p.m.</span></p><!-- paragraph-->
			<p>Weekdays: <span>10 a.m.</span></p><!-- paragraph-->
			<p>First Fridays:<span>as announced.</span></p><!-- paragraph-->
			<p><i>Baptism, Confirmation and Marriage Certs are available before and after Mass in the Sacristy</i>.</p><!-- paragraph--><br>
			<h2>Confessions</h2><!-- article heading -->
			<p>Saturdays: <span>after 10 a.m.&nbsp;&nbsp;and&nbsp;&nbsp; 6.30 p.m. Masses.</span></p><!-- paragraph-->
			<p>Eves of First Fridays and Holydays after the Mass</p><!-- paragraph--><br>
			<h2>Baptisms</h2><!-- article heading -->
			<p>Normally 2nd Sunday of the month at 12.30 p.m. and one month's notice needs to be given. Application Forms for Baptism are available in the Sacristy before or after any Mass. A Baptism Preparation Meeting takes place on the Wednesday before the Baptism Sunday in the Meeting Room in the Church Sacristy (Back of Church) at 7.30 p.m. when final confirmation of the Baptism will be given. It is desirable for both the parents and godparents to attend this meeting.If you wish to have your child Baptised outside the Parish, attendance at a Baptism Preparation Meeting is required before the Parish will issue the required Letter of Permission to have your child Baptised outside the Parish. Please let us know beforehand which Baptism Preparation Meeting you will wish to attend.</p><!-- paragraph--><br>
			<h2>Marriages</h2><!-- heading -->
			<p>At least 3 months notice needs to be given to the priests of the parishes of the bride and groom. At least 3 months notice must also to given by the couple to the state.</p><!-- paragraph--><br>
			<h4><span><a href="obituary.php" target="_blank">Obituary</a></span></h4>
		
		</article><!-- close article tag -->	
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