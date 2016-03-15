<?php
//include the doctype from header_doctype.php
require_once __DIR__ . '/../templates/header_doctype.php';

//insert the title of the page
print '<title>St. Joseph\'s Parish, East Wall</title><!-- title of webpage -->';

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
    <section class="flex_donations"><!-- begin section tag-->
		<article class="flex"><!-- begin article -->
			<table class ="donations" ><!-- begin table -->
				<tr><!-- begin table row -->
					<td rowspan = "3"><img src="../public/images/icons/groups.png" alt="" title=""></a></td><!-- table cell -->
					<th colspan = "5">Parish Ministry Groups</th><!-- table header -->
				</tr><!-- close table row -->
				<tr><!-- begin table row -->
					<td></td><!-- table cell --><!-- table cell -->
					<td></td><!-- table cell --><!-- table cell -->
					<td></td><!-- table cell --><!-- table cell -->
					<td>Donation Amount:</td><!-- table cell --><!-- table cell -->
					<td><select name="" id ="" size = "1" required><!-- table select cell -->
							<option value="0" selected>Choose</option><!-- option value -->
							<option value="5">5.00</option><!-- option value -->
							<option value="10">10.00</option><!-- option value -->
							<option value="20">20.00</option><!-- option value -->
							<option value="50">50.00</option><!-- option value -->
						</select>
					`</td><!-- table cell --><!-- table cell -->
				</tr><!-- close table row -->
				<tr><!-- begin table row -->
					<td></td><!-- table cell --><!-- table cell -->
					<td></td><!-- table cell --><!-- table cell -->
					<td></td><!-- table cell --><!-- table cell -->
					<td>Chosen Donation:</td><!-- table cell --><!-- table cell -->
					<td><input type="text" id="total" size="6"></td><!-- amount chosen -->
			</table><!-- close table -->
			<table class ="donations" ><!-- begin table -->
			
				<tr><!-- begin table row -->
				<td rowspan = "3"><img src="../public/images/icons/pastoral_council.png" alt="" title=""></a></td><!-- table cell -->
					<th colspan = "5">Pastoral Council</th><!-- table header -->
				</tr><!-- close table row -->
				<tr><!-- begin table row -->
					<td></td><!-- table cell -->
					<td></td><!-- table cell -->
					<td></td><!-- table cell -->
					<td>Donation Amount:</td><!-- table cell -->
					<td><select name="" id ="" size = "1" required><!-- table select cell -->
							<option value="0" selected>Choose</option><!-- option value -->
							<option value="5">5.00</option><!-- option value -->
							<option value="10">10.00</option><!-- option value -->
							<option value="20">20.00</option><!-- option value -->
							<option value="50">50.00</option><!-- option value -->
						</select>
					`</td><!-- table cell -->
				</tr><!-- close table row -->
				<tr><!-- begin table row -->
					<td></td><!-- table cell -->
					<td></td><!-- table cell -->
					<td></td><!-- table cell -->
					<td>Chosen Donation:</td><!-- table cell -->
					<td>total</td><!-- table cell -->
			</table><!-- close table -->
			<table class ="donations" ><!-- begin table -->
				<tr><!-- begin table row -->
					<td rowspan = "3"><img src="../public/images/icons/baptismal_ministry.png" alt="" title=""></a></td><!-- table cell -->
					<th colspan = "5">Baptismal Ministry</th><!-- table header -->
				</tr><!-- close table row -->
				<tr><!-- begin table row -->
					<td></td><!-- table cell -->
					<td></td><!-- table cell -->
					<td></td><!-- table cell -->
					<td>Donation Amount:</td><!-- table cell -->
					<td><select name="" id ="" size = "1" required><!-- table select cell -->
							<option value="0" selected>Choose</option><!-- option value -->
							<option value="5">5.00</option><!-- option value -->
							<option value="10">10.00</option><!-- option value -->
							<option value="20">20.00</option><!-- option value -->
							<option value="50">50.00</option><!-- option value -->
						</select>
					</td><!-- table cell -->
				</tr><!-- close table row -->
				<tr><!-- begin table row -->
					<td></td><!-- table cell -->
					<td></td><!-- table cell -->
					<td></td><!-- table cell -->
					<td>Chosen Donation:</td><!-- table cell -->
					<td><input type="text" id="total" size="6"></td><!-- amount chosen -->
			</table><!-- close table -->
			<table class ="donations" ><!-- begin table -->
				<tr><!-- begin table row -->
					<td rowspan = "3">><img src="../public/images/icons/bereavement_support.png" alt="" title=""></a></td><!-- table cell -->
					<th colspan = "5">Bethany Bereavement Support</th><!-- table header -->
				</tr><!-- close table row -->
				<tr><!-- begin table row -->
					<td></td><!-- table cell -->
					<td></td><!-- table cell -->
					<td></td><!-- table cell -->
					<td>Donation Amount:</td><!-- table cell -->
					<td><select name="" id ="" size = "1" required><!-- table select cell -->
							<option value="0" selected>Choose</option><!-- option value -->
							<option value="5">5.00</option><!-- option value -->
							<option value="10">10.00</option><!-- option value -->
							<option value="20">20.00</option><!-- option value -->
							<option value="50">50.00</option><!-- option value -->
						</select>
					</td><!-- table cell -->
				</tr><!-- close table row -->
				<tr><!-- begin table row -->
					<td></td><!-- table cell -->
					<td></td><!-- table cell -->
					<td></td><!-- table cell -->
					<td>Chosen Donation:</td><!-- table cell -->
					<td><input type="text" id="total" size="6"></td><!-- amount chosen -->
				</tr><!-- close table row -->
			</table><!-- close table -->
			<table class ="donations" ><!-- begin table -->
				<tr><!-- begin table row -->
					<td rowspan = "3"><img src="../public/images/icons/scripture_exploration_group.png" alt="" title=""></a></td><!-- table cell -->
					<th colspan = "5">Scripture Exploration Group</th><!-- table header -->
				</tr><!-- close table row -->
				<tr><!-- begin table row -->
					<td></td><!-- table cell -->
					<td></td><!-- table cell -->
					<td></td><!-- table cell -->
					<td>Donation Amount:</td><!-- table cell -->
					<td><select name="" id ="" size = "1" required><!-- table select cell -->
							<option value="0" selected>Choose</option><!-- option value -->
							<option value="5">5.00</option><!-- option value -->
							<option value="10">10.00</option><!-- option value -->
							<option value="20">20.00</option><!-- option value -->
							<option value="50">50.00</option><!-- option value -->
						</select>
					</td><!-- table cell -->
				</tr><!-- close table row -->
				<tr><!-- begin table row -->
					<td></td><!-- table cell -->
					<td></td><!-- table cell -->
					<td></td><!-- table cell -->
					<td>Chosen Donation:</td><!-- table cell -->
                    <td><input type="text" id="total" size="6"></td><!-- amount chosen -->
				</tr><!-- close table row -->
			</table><!-- close table -->
			<table class ="donations" ><!-- begin table -->
				<tr><!-- begin table row -->
					<td rowspan = "3"><img src="../public/images/icons/ministers_of_the_eucharist.png" alt="" title=""></a></td><!-- table cell -->
					<th colspan = "5">Ministers of the Eucharist</th><!-- table header -->
				</tr><!-- close table row -->
				<tr><!-- begin table row -->
					<td></td><!-- table cell -->
					<td></td><!-- table cell -->
					<td></td><!-- table cell -->
					<td>Donation Amount:</td><!-- table cell -->
					<td><select name="" id ="" size = "1" required><!-- table select cell -->
							<option value="0" selected>Choose</option><!-- option value -->
							<option value="5">5.00</option><!-- option value -->
							<option value="10">10.00</option><!-- option value -->
							<option value="20">20.00</option><!-- option value -->
							<option value="50">50.00</option><!-- option value -->
						</select>
					</td><!-- table cell -->
				</tr><!-- close table row -->
				<tr><!-- begin table row -->
					<td></td><!-- table cell -->
					<td></td><!-- table cell -->
					<td></td><!-- table cell -->
					<td>Chosen Donation:</td><!-- table cell -->
                    <td><input type="text" id="total" size="6"></td><!-- amount chosen -->
				</tr><!-- close table row -->
			</table><!-- close table -->
			<table class ="donations" ><!-- begin table -->
				<tr><!-- begin table row -->
					<td rowspan = "3"><img src="../public/images/icons/ministers_of_the_word.png" alt="" title=""></a></td><!-- table cell -->
					<th colspan = "5">The Ministers of the Word</th><!-- table header -->
				</tr><!-- close table row -->
				<tr><!-- begin table row -->
					<td></td><!-- table cell -->
					<td></td><!-- table cell -->
					<td></td><!-- table cell -->
					<td>Donation Amount:</td><!-- table cell -->
					<td><select name="" id ="" size = "1" required><!-- table select cell -->
							<option value="0" selected>Choose</option><!-- option value -->
							<option value="5">5.00</option><!-- option value -->
							<option value="10">10.00</option><!-- option value -->
							<option value="20">20.00</option><!-- option value -->
							<option value="50">50.00</option><!-- option value -->
						</select>
					</td><!-- table cell -->
				</tr><!-- close table row -->
				<tr><!-- begin table row -->
					<td></td><!-- table cell -->
					<td></td><!-- table cell -->
					<td></td><!-- table cell -->
					<td>Chosen Donation:</td><!-- table cell -->
                    <td><input type="text" id="total" size="6"></td><!-- amount chosen -->
				</tr><!-- close table row -->
			</table><!-- close table -->
		</article><!-- close article -->	
    
		<article class="flex"><!-- begin article -->
			<table class ="donations" ><!-- begin table -->
				<tr><!-- begin table row -->
					<td rowspan = "3"><img src="../public/images/icons/choir.png" alt="" title=""></a></td><!-- table cell -->
					<th colspan = "5">The Choir</th><!-- table header -->
				</tr><!-- close table row -->
				<tr><!-- begin table row -->
					<td></td><!-- table cell -->
					<td></td><!-- table cell -->
					<td></td><!-- table cell -->
					<td>Donation Amount:</td><!-- table cell -->
					<td><select name="" id ="" size = "1" required><!-- table select cell -->
							<option value="0" selected>Choose</option><!-- option value -->
							<option value="5">5.00</option><!-- option value -->
							<option value="10">10.00</option><!-- option value -->
							<option value="20">20.00</option><!-- option value -->
							<option value="50">50.00</option><!-- option value -->
						</select>
					</td><!-- table cell -->
				</tr><!-- close table row -->
				<tr><!-- begin table row -->
					<td></td><!-- table cell -->
					<td></td><!-- table cell -->
					<td></td><!-- table cell -->
					<td>Chosen Donation:</td><!-- table cell -->
                    <td><input type="text" id="total" size="6"></td><!-- amount chosen -->
				</tr><!-- close table row -->
			</table><!-- close table -->
			<table class ="donations" ><!-- begin table -->
				<tr><!-- begin table row -->
					<td rowspan = "3"><img src="../public/images/icons/rcia.png" alt="" title=""></a></td><!-- table cell -->
					<th colspan = "5">RCIA</th><!-- table header -->
				</tr><!-- close table row -->
				<tr><!-- begin table row -->
					<td></td><!-- table cell -->
					<td></td><!-- table cell -->
					<td></td><!-- table cell -->
					<td>Donation Amount:</td><!-- table cell -->
					<td><select name="" id ="" size = "1" required><!-- table select cell -->
							<option value="0" selected>Choose</option><!-- option value -->
							<option value="5">5.00</option><!-- option value -->
							<option value="10">10.00</option><!-- option value -->
							<option value="20">20.00</option><!-- option value -->
							<option value="50">50.00</option><!-- option value -->
						</select>
					</td><!-- table cell -->
				</tr><!-- close table row -->
				<tr><!-- begin table row -->
					<td></td><!-- table cell -->
					<td></td><!-- table cell -->
					<td></td><!-- table cell -->
					<td>Chosen Donation:</td><!-- table cell -->
                    <td><input type="text" id="total" size="6"></td><!-- amount chosen -->
				</tr><!-- close table row -->
			</table><!-- close table -->
			<table class ="donations" ><!-- begin table -->
				<tr><!-- begin table row -->
					<td rowspan = "3"><img src="../public/images/icons/church_decoration_group.png" alt="" title=""></a></td><!-- table cell -->
					<th colspan = "5">Church Decoration Group</th><!-- table header -->
				</tr><!-- close table row -->
				<tr><!-- begin table row -->
					<td></td><!-- table cell -->
					<td></td><!-- table cell -->
					<td></td><!-- table cell -->
					<td>Donation Amount:</td><!-- table cell -->
					<td><select name="" id ="" size = "1" required><!-- table select cell -->
							<option value="0" selected>Choose</option><!-- option value -->
							<option value="5">5.00</option><!-- option value -->
							<option value="10">10.00</option><!-- option value -->
							<option value="20">20.00</option><!-- option value -->
							<option value="50">50.00</option><!-- option value -->
						</select>
					</td><!-- table cell -->
				</tr><!-- close table row -->
				<tr><!-- begin table row -->
					<td></td><!-- table cell -->
					<td></td><!-- table cell -->
					<td></td><!-- table cell -->
					<td>Chosen Donation:</td><!-- table cell -->
                    <td><input type="text" id="total" size="6"></td><!-- amount chosen -->
				</tr><!-- close table row -->
			</table><!-- close table -->
			<table class ="donations" ><!-- begin table -->
				<tr><!-- begin table row -->
					<td rowspan = "3"><img src="../public/images/icons/liturgy_group.png" alt="" title=""></a></td><!-- table cell -->
					<th colspan = "5">Liturgy Group</th><!-- table header -->
				</tr><!-- close table row -->
				<tr><!-- begin table row -->
					<td></td><!-- table cell -->
					<td></td><!-- table cell -->
					<td></td><!-- table cell -->
					<td>Donation Amount:</td><!-- table cell -->
					<td><select name="" id ="" size = "1" required><!-- table select cell -->
							<option value="0" selected>Choose</option><!-- option value -->
							<option value="5">5.00</option><!-- option value -->
							<option value="10">10.00</option><!-- option value -->
							<option value="20">20.00</option><!-- option value -->
							<option value="50">50.00</option><!-- option value -->
						</select>
					</td><!-- table cell -->
				</tr><!-- close table row -->
				<tr><!-- begin table row -->
					<td></td><!-- table cell -->
					<td></td><!-- table cell -->
					<td></td><!-- table cell -->
					<td>Chosen Donation:</td><!-- table cell -->
                    <td><input type="text" id="total" size="6"></td><!-- amount chosen -->
				</tr><!-- close table row -->
				
			</table><!-- close table -->
			
			<table class ="donations" ><!-- begin table -->
				<tr><!-- begin table row -->
					<td rowspan = "3">><img src="../public/images/icons/svdp.png" alt="" title=""></a></td><!-- table cell -->
					<th colspan = "5">St. Vincent de Paul Society</th><!-- table header -->
				</tr><!-- close table row -->
				<tr><!-- begin table row -->
					<td></td><!-- table cell -->
					<td></td><!-- table cell -->
					<td></td><!-- table cell -->
					<td>Donation Amount:</td><!-- table cell -->
					<td><select name="" id ="" size = "1" required><!-- table select cell -->
							<option value="0" selected>Choose</option><!-- option value -->
							<option value="5">5.00</option><!-- option value -->
							<option value="10">10.00</option><!-- option value -->
							<option value="20">20.00</option><!-- option value -->
							<option value="50">50.00</option><!-- option value -->
						</select>
					</td><!-- table cell -->
				</tr><!-- close table row -->
				<tr><!-- begin table row -->
					<td></td><!-- table cell -->
					<td></td><!-- table cell -->
					<td></td><!-- table cell -->
					<td>Chosen Donation:</td><!-- table cell -->
                    <td><input type="text" id="total" size="6"></td><!-- amount chosen -->
				</tr><!-- close table row -->
				
			</table><!-- close table -->
			
			<table class ="donations" ><!-- begin table -->
				<tr><!-- begin table row -->
					<td rowspan = "3">><img src="../public/images/icons/church_collections.png" alt="" title=""></a></td><!-- table cell -->
					<th colspan = "5">Church Collections</th><!-- table header -->
				</tr><!-- close table row -->
				<tr><!-- begin table row -->
					<td></td><!-- table cell -->
					<td></td><!-- table cell -->
					<td></td><!-- table cell -->
					<td>Donation Amount:</td><!-- table cell -->
					<td><select name="" id ="" size = "1" required><!-- table select cell -->
							<option value="0" selected>Choose</option><!-- option value -->
							<option value="5">5.00</option><!-- option value -->
							<option value="10">10.00</option><!-- option value -->
							<option value="20">20.00</option><!-- option value -->
							<option value="50">50.00</option><!-- option value -->
						</select>
					</td><!-- table cell -->
				</tr><!-- close table row -->
				<tr><!-- begin table row -->
					<td></td><!-- table cell -->
					<td></td><!-- table cell -->
					<td></td><!-- table cell -->
					<td>Chosen Donation:</td><!-- table cell -->
                    <td><input type="text" id="total" size="6"></td><!-- amount chosen -->
				</tr><!-- close table row -->
			</table><!-- close table -->
			<table class ="donations" ><!-- begin table -->
				<tr><!-- begin table row -->
					<td rowspan = "3"><img src="../public/images/icons/council.png" alt="" title=""></a></td><!-- table cell -->
					<th colspan = "5">Finance Committee</th><!-- table header -->
				</tr><!-- close table row -->
				<tr><!-- begin table row -->
					<td></td><!-- table cell -->
					<td></td><!-- table cell -->
					<td></td><!-- table cell -->
					<td>Donation Amount:</td><!-- table cell -->
					<td><select name="" id ="" size = "1" required><!-- table select cell -->
							<option value="0" selected>Choose</option><!-- option value -->
							<option value="5">5.00</option><!-- option value -->
							<option value="10">10.00</option><!-- option value -->
							<option value="20">20.00</option><!-- option value -->
							<option value="50">50.00</option><!-- option value -->
						</select>
					</td><!-- table cell -->
				</tr><!-- close table row -->
				<tr><!-- begin table row -->
					<td></td><!-- table cell -->
					<td></td><!-- table cell -->
					<td></td><!-- table cell -->
					<td>Chosen Donation:</td><!-- table cell -->
                    <td><input type="text" id="total" size="6"></td><!-- amount chosen -->
				</tr><!-- close table row -->
			</table><!-- close table -->
		</article><!-- close article -->	
    </section><!-- close section tag -->
	<!-- ****************** section - block 3 ******************** -->
    
    <section class="flex_donations_totals"><!-- begin section tag-->
		<article class="outline_main"><!-- begin article -->
			<form action= "javascript:HideAllShowOne('idtotal')" method="post" ><!-- begin form-->
			<table id ="totals">
				<caption><em>Donation Totals</em></caption>
				<tr><!-- begin table row -->
					<th colspan="2">Description</th><!-- table header --> 
					<th>TOTALS:</th><!-- table header -->
				</tr><!-- close table row -->
				<tr class="odd"><!-- begin odd table row -->
					<td>Donation Amount</td><!-- table cell -->
					<td></td>
					<td><input type="text" id ="GrandTotal" size="8"  onchange="calculate()" required></td><!-- table cell -->
				</tr><!-- close table row -->
				<tr class="even"><!-- begin even table row -->
					<td colspan="3">God bless you for your Donation!</td><!-- table cell -->
				</tr><!-- close table row -->
				<tr  class="odd"><!-- begin odd table row -->
					<td colspan="2">Click button to donate</td><!-- table cell -->
					<td><input type="submit" value="Donate Now" onclick="alert('Are you sure you want to donate?')"/></td><!-- table cell -->
				</tr><!-- close table row -->
			</table><!-- close table -->
			</form><!-- close form -->

		</article><!-- close article -->
		<article><!-- begin article -->
			<br><br>
		</article><!-- close article -->
		<article class="stitched"><!-- begin article -->
		
			<p<!-- Parish Ministry Groups -->
					Parish Ministry Groups
					An active parish is one that has many groups in
					different ministries, including, Ministers of the Eucharist, Ministers
					of the Word, Baptism Team, Altar and Church Decoration Group, Altar
					Servers, Collectors, Bereavement Group, the Choir &amp; those who help
					in the Sacristy, as well as the Local Conference of St Vincent de Paul
					Society, Legion of Mary and the Divine Mercy Prayer Group. As well as
					the groups directly involved in the Church, there is also a great
					community outreach to those who are housebound, and also the Day Care
					Centre, which provide real expressions of response to the Lord. <br>
					<br>
					<i>"Extract from the opening address given by Diarmuid Martin
					Archbishop of Dublin in the '2006 Souvenir Booklet' on the occasion of
					the 50 Anniversary of the opening of the Church"</i></p>
		</article><!-- close article -->
		
	</section><!-- close section tag -->
</div><!-- close section_container tag -->
<div id="the_footer_wrapper"><!-- div to wrap the footer -->


    <?php
    //include the footer from footer.php
    require_once __DIR__ . '/../templates/footer.php';

    ?>

		<p id="copyright">&copy; 2015&nbsp;&nbsp;James O&#39;Neill&nbsp;&nbsp;<a href="mailto:B00084432@student.itb.ie">Email</a></li></p><!-- footer copyright-->
	</div><!-- close the_footer_wrapper tag -->
</div><!-- close main_container div tag -->
</body><!-- close body tag -->
</html><!-- close html tag -->