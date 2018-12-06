<?php get_header();?>



<div class="index-secnav-container">
	<div class="index-banner">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- <ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
				<li data-target="#myCarousel" data-slide-to="3"></li>
				<li data-target="#myCarousel" data-slide-to="4"></li>
				<li data-target="#myCarousel" data-slide-to="5"></li>
			</ol> -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<div class="ib-img">
						<img src="<?php bloginfo('template_directory')?>/images/banners/coda-rdv1.jpg">
					</div>
					<div class="ib-wrapper">
						<div class="ib-txt">
							<span>Research &amp; Development</span>
							<div class="index-title1-underline">
							</div>
						</div>
					</div>
				</div> <!--  end RD  -->
				<div class="item">
					<div class="ib-img">
						<img src="<?php bloginfo('template_directory')?>/images/banners/coda-manufacturingv1.jpg">
					</div>
					<div class="ib-wrapper">
						<div class="ib-txt">
							<span>Manufacturing</span>
							<div class="index-title1-underline">
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="ib-img">
						<img src="<?php bloginfo('template_directory')?>/images/banners/coda-qav1.jpg">
					</div>
					<div class="ib-wrapper">
						<div class="ib-txt">
							<span>Quality Assurance</span>
							<div class="index-title1-underline">
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="ib-img">
						<img src="<?php bloginfo('template_directory')?>/images/banners/coda-sourcingv1.jpg" height="100%" width="100%">
					</div>
					<div class="ib-wrapper">
						<div class="ib-txt">
							<span>Sourcing</span>
							<div class="index-title1-underline">
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="ib-img">
						<img src="<?php bloginfo('template_directory')?>/images/banners/coda-scmv1.jpg">
					</div>
					<div class="ib-wrapper">
						<div class="ib-txt">
							<span>Supply Chain Management</span>
							<div class="index-title1-underline">
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="ib-img">
						<img src="<?php bloginfo('template_directory')?>/images/banners/coda-partnershipv1.jpg">
					</div>
					<div class="ib-wrapper">
						<div class="ib-txt">
							<span>Partnership</span>
							<div class="index-title1-underline">
							</div>
						</div>
					</div>
				</div>
			</div> <!-- end carousel-inner -->
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div> <!-- end myCarousel -->
	</div> <!--  end index-banner  -->

	<div class="index-secnav-overallcontainer">
		<div class="index-secnav-box coda-rd">
			<!-- <?php //include("images/codanavi/rd.svg"); ?> -->
			<img class="index-secnav-defaultimg" src="<?php bloginfo('template_directory')?>/images/codanavi/rd_0.png">
			<img class="index-secnav-hoverimg" src="<?php bloginfo('template_directory')?>/images/codanavi/h_rd4x.png">
			<div class="index-secnav-text">
				<p>R &amp; D</p>
			</div>
		</div>
		<div class="index-secnav-box coda-manufacturing">
			<img class="index-secnav-defaultimg" src="<?php bloginfo('template_directory')?>/images/codanavi/manufacturing_0.png">
			<img class="index-secnav-hoverimg" src="<?php bloginfo('template_directory')?>/images/codanavi/h_manufacturing4x.png">
			<!-- <?php //include("images/codanavi/manufacturing.svg"); ?> -->
			<div class="index-secnav-text">
				<p>Manufacturing</p>
			</div>
		</div>
		<div class="index-secnav-box coda-qa">
			<img class="index-secnav-defaultimg" src="<?php bloginfo('template_directory')?>/images/codanavi/qa_0.png">
			<img class="index-secnav-hoverimg" src="<?php bloginfo('template_directory')?>/images/codanavi/h_qa4x.png">
			<!-- <?php //include("images/codanavi/qa.svg"); ?> -->
			<div class="index-secnav-text">
				<p>Quality Assurance</p>
			</div>
		</div>
		<div class="index-secnav-box coda-sourcing">
			<img class="index-secnav-defaultimg" src="<?php bloginfo('template_directory')?>/images/codanavi/sourcing_0.png">
			<img class="index-secnav-hoverimg" src="<?php bloginfo('template_directory')?>/images/codanavi/h_sourcing4x.png">
			<!-- <?php //include("images/codanavi/sourcing.svg"); ?> -->
			<div class="index-secnav-text">
				<p>Sourcing</p>
			</div>
		</div>
		<div class="index-secnav-box coda-scm">
			<img class="index-secnav-defaultimg" src="<?php bloginfo('template_directory')?>/images/codanavi/scm_0.png">
			<img class="index-secnav-hoverimg" src="<?php bloginfo('template_directory')?>/images/codanavi/h_scm4x.png">
			<!-- <?php //include("images/codanavi/scm.svg"); ?> -->
			<div class="index-secnav-text">
				<p>Supply Chain Management</p>
			</div>
		</div>
		<div class="index-secnav-box coda-partnership">
			<img class="index-secnav-defaultimg" src="<?php bloginfo('template_directory')?>/images/codanavi/partnership_0.png">
			<img class="index-secnav-hoverimg" src="<?php bloginfo('template_directory')?>/images/codanavi/h_partnership4x.png">
			<!-- <?php //include("images/codanavi/partnership.svg"); ?> -->
			<div class="index-secnav-text">
				<p>Partnership</p>
			</div>
		</div>
	</div> <!--  end index-secnav-overallcontainer  -->
</div>  <!--  end index-secnav-container  -->

<!-- - - - Individual SECTION - - - -->
<div class="iac-outer">
	<div class="index-allsection-container">

		<section class="index-is-container" id="index-rd">
			<div class="index-is-title">
				<div class="iist-imgcontainer">
					<img src="<?php bloginfo('template_directory')?>/images/banners/coda-rdvt.jpg">
				</div>
				<!-- <div class="iist-text">
				<span>RESEARCH &amp; DEVELOPMENT</span>
			</div> -->
			<div class="ivt2-container">
				<div class="ivt2-title">
					RESEARCH &AMP; DEVELOPMENT
				</div>
				<div class="ivt2-underline">
				</div>
				<div class="ivt2-text">
					<p class="ivt2t-lg">Coda Resources has a proud tradition of innovation.</p>
					<p class="ivt2t-lg">With 2 R&amp;D teams, one in the US and one in China, we work with our customers to come up with new products on the cutting edge of their industries.</p>
				</div>
				<div class="ivt2-videolink" id="watch-rd">
					<div class="ivt2-playicon-container"><i class="ivt2-playicon fa fa-play-circle fa-2x"></i></div>
					<div class="index-watch-button-container"><span class="index-watch-button">Watch Video</span></div>
				</div>
			</div>
			<!-- <div class="iist-underline"> -->
			<!-- </div> -->
		</div>
	</section>

	<section class="index-is-container" id="index-manufacturing">
		<div class="index-is-title">
			<div class="iist-imgcontainer">
				<img src="<?php bloginfo('template_directory')?>/images/banners/coda-manufacturingvt.jpg">
			</div>
			<!-- <div class="iist-text">
			<span>MANUFACTURING</span>
		</div> -->
		<div class="ivt2-container">
			<div class="ivt2-title">
				MANUFACTURING
			</div>
			<div class="ivt2-underline">
			</div>
			<div class="ivt2-text">
				<p class="ivt2t-lg">Coda Resources' <span class="ivt2t-smb">core manufacturing competencies</span> include injection molded plastics small metal parts stamping.</p>
				<p class="ivt2t-lg">Coda's wholly-owned, 20-acre manufacturing complex in Heze, China allows for the highest quality and most efficient manufacturing possible.</p>
				<p class="ivt2t-lg">In addition to its own factories, Coda's offices have developed an extensive network of partner factories ensuring Coda's ability to manufacture high quality products outside of its core competencies while monitoring the process with their own QC team and guaranteeing quality assurance.</p>
			</div>
			<div class="ivt2-videolink" id="watch-manufacturing">
				<div class="ivt2-playicon-container"><i class="ivt2-playicon fa fa-play-circle fa-2x"></i></div>
				<div class="index-watch-button-container"><span class="index-watch-button">Watch Video</span></div>
			</div>
		</div>
		<!-- <div class="iist-underline"> -->
		<!-- </div> -->
	</div>
</section>

<section class="index-is-container" id="index-qa">
	<div class="index-is-title">
		<div class="iist-imgcontainer">
			<img src="<?php bloginfo('template_directory')?>/images/banners/coda-qavt.jpg">
		</div>
		<!-- <div class="iist-text">
		<span>QUALITY ASSURANCE</span>
	</div> -->
	<div class="ivt2-container">
		<div class="ivt2-title">
			QUALITY ASSURANCE
		</div>
		<div class="ivt2-underline">
		</div>
		<div class="ivt2-text">
			<p class="ivt2t-lg">Coda Resources has an extensive network of engineers, product testers, auditors, and quality assurance representatives across all of their US and Asia locations.</p>
			<p class="ivt2t-lg">QA personnel conduct intensive audits to make sure all products, process &amp; equipment are of the highest quality.</p>
			<p class="ivt2t-lg">Coda ensures that all product leaving their wholly-owned factories, or any of their partner factories are met with the same tests, audits, and standards.</p>
		</div>
		<div class="ivt2-videolink" id="watch-qa">
			<div class="ivt2-playicon-container"><i class="ivt2-playicon fa fa-play-circle fa-2x"></i></div>
			<div class="index-watch-button-container"><span class="index-watch-button">Watch Video</span></div>
		</div>
	</div>
	<!-- <div class="iist-underline"> -->
	<!-- </div> -->
</div>
</section>

<section class="index-is-container" id="index-sourcing">
	<div class="index-is-title">
		<div class="iist-imgcontainer">
			<img src="<?php bloginfo('template_directory')?>/images/banners/coda-sourcingvt.jpg">
		</div>
		<!-- <div class="iist-text">
		<span>SOURCING</span>
	</div> -->
	<div class="ivt2-container">
		<div class="ivt2-title">
			SOURCING
		</div>
		<div class="ivt2-underline">
		</div>
		<div class="ivt2-text">
			<p class="ivt2t-lg">Coda's China offices and U.S. offices work together to transform a typical sourcing operation into an efficient powerhouse.</p>
			<p class="ivt2t-lg">Coda is able to produce exact product reproduction by throughly vetting potential vendors and having their own boots on the ground.</p>
			<p class="ivt2t-lg">Coda's employees can visit vendors on a moment's notice, inspect product before it ships out and solve any problems right at the source.</p>
		</div>
		<div class="ivt2-videolink" id="watch-sourcing">
			<div class="ivt2-playicon-container"><i class="ivt2-playicon fa fa-play-circle fa-2x"></i></div>
			<div class="index-watch-button-container"><span class="index-watch-button">Watch Video</span></div>
		</div>
	</div>
	<!-- <div class="iist-underline"> -->
	<!-- </div> -->
</div>
</section>

<section class="index-is-container" id="index-scm">
	<div class="index-is-title">
		<div class="iist-imgcontainer">
			<img src="<?php bloginfo('template_directory')?>/images/banners/coda-scmvt.jpg">
		</div>
		<!-- <div class="iist-text">
		<span>SUPPLY CHAIN MANAGEMENT</span>
	</div> -->
	<div class="ivt2-container">
		<div class="ivt2-title">
			SUPPLY CHAIN MANAGEMENT
		</div>
		<div class="ivt2-underline">
		</div>
		<div class="ivt2-text">
			<p class="ivt2t-lg">A vertically integrated company, Coda Resources owns or controls a network of factories in China, 2 sourcing offices in China, and 3 distribution centers in the U.S.</p>
			<p class="ivt2t-lg">All of these networks are in constant contact with its New York headquarters, ensuring smooth operations from beginning to end.</p>
			<p class="ivt2t-lg">Coda oversees production, quality control, shipping &amp; logistics, warehousing, distribution, and delivery.</p>
		</div>
		<div class="ivt2-videolink" id="watch-scm">
			<div class="ivt2-playicon-container"><i class="ivt2-playicon fa fa-play-circle fa-2x"></i></div>
			<div class="index-watch-button-container"><span class="index-watch-button">Watch Video</span></div>
		</div>
	</div>
	<!-- <div class="iist-underline"> -->
	<!-- </div> -->
</div>
</section>

<section class="index-is-container" id="index-partnership">
	<div class="index-is-title">
		<div class="iist-imgcontainer">
			<img src="<?php bloginfo('template_directory')?>/images/banners/coda-partnershipvt.jpg">
		</div>
		<!-- <div class="iist-text">
		<span>PARTNERSHIP</span>
	</div> -->
	<div class="ivt2-container">
		<div class="ivt2-title">
			PARTNERSHIP
		</div>
		<div class="ivt2-underline">
		</div>
		<div class="ivt2-text">
			<p class="ivt2t-lg">Employees, vendors, and customers are all partners treated with loyalty, commitment, and honor.</p>
			<p class="ivt2t-lg">In 1947 after Abraham Tropper founded Coda Resources, he got his customers because of what he offered beyond the product; commitment and service. </p>
			<p class="ivt2t-lg">When your partner succeeds, the whole team succeeds.</p>
			<p class="ivt2t-lg">Whether you are looking to become a vendor or a customer, Coda Resources invites you to partner with us.</p>
		</div>
		<div class="ivt2-videolink" id="watch-partnership">
			<div class="ivt2-playicon-container"><i class="ivt2-playicon fa fa-play-circle fa-2x"></i></div>
			<div class="index-watch-button-container"><span class="index-watch-button">Watch Video</span></div>
		</div>
	</div>
	<!-- <div class="iist-underline"> -->
	<!-- </div> -->
</div>
</section>

<div class="video-modal">
	<span class='video-close glyphicon glyphicon-remove'></span>
	<div class="vm-container">
		<div class="vm-content" id="iv-rd">
			<iframe width="640" height="360" src="https://www.youtube.com/embed/dnOKgwbU7lg?controls=1&amp;rel=0&amp;enablejsapi=1&amp;showinfo=0&amp;loop=1&amp;playlist=dnOKgwbU7lg" frameborder="0" allowfullscreen id="playerrd" class="ytplayer"></iframe>
		</div>
		<div class="vm-content" id="iv-manufacturing">
			<iframe width="640" height="360" src="https://www.youtube.com/embed/9qc296X7778?controls=1&amp;rel=0&amp;enablejsapi=1&amp;showinfo=0&amp;loop=1&amp;playlist=9qc296X7778" frameborder="0" allowfullscreen id="playermanufacturing" class="ytplayer"></iframe>
		</div>
		<div class="vm-content" id="iv-qa">
			<iframe width="640" height="360" src="https://www.youtube.com/embed/H5Iw617dwZc?controls=1&amp;rel=0&amp;enablejsapi=1&amp;showinfo=0&amp;loop=1&amp;playlist=H5Iw617dwZc" frameborder="0" allowfullscreen id="playerqa" class="ytplayer"></iframe>
		</div>
		<div class="vm-content" id="iv-sourcing">
			<iframe width="640" height="360" src="https://www.youtube.com/embed/94HO1ByRswM?controls=1&amp;rel=0&amp;enablejsapi=1&amp;showinfo=0&amp;loop=1&amp;playlist=94HO1ByRswM" frameborder="0" allowfullscreen id="playersourcing" class="ytplayer"></iframe>
		</div>
		<div class="vm-content" id="iv-scm">
			<iframe width="640" height="360" src="https://www.youtube.com/embed/N3tmypB2YlY?controls=1&amp;rel=0&amp;enablejsapi=1&amp;showinfo=0&amp;loop=1&amp;playlist=N3tmypB2YlY" frameborder="0" allowfullscreen id="playerscm" class="ytplayer"></iframe>
		</div>
		<div class="vm-content" id="iv-partnership">
			<iframe width="640" height="360" src="https://www.youtube.com/embed/cO048hRcbC4?controls=1&amp;rel=0&amp;enablejsapi=1&amp;showinfo=0&amp;loop=1&amp;playlist=cO048hRcbC4" frameborder="0" allowfullscreen id="playerpartnership" class="ytplayer"></iframe>
		</div>
	</div>
</div>


</div>	<!-- end index-allis-container  -->
</div>


<?php get_footer();?>
