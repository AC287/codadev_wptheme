<!DOCTYPE html>
<html <?php language_attributes();?>>
  <head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title><?php bloginfo('name');?></title> -->
    <?php wp_head(); ?>
    <title>CODA DEVELOPMENT</title>
  </head>

  <body>
    <!-- <div id="css-test">
      <span>HELLO</span>
    </div> -->
    <div id="all-container">
      <div class="top-nav">
        <div class="container">
          <div class="row">
            <div class="col-sm-3 cambridge-white-logo">
              <a href="<?php echo home_url();?>"><img src="<?php bloginfo('template_directory')?>/images/codadevlogo_white.png" height="50px"></a>
            </div>  <!-- end cambridge-logo-white -->
            <div class="col-sm-9">
              <div class="tn-inner-table">
                <div class="row">
                  <div class="col-sm-12">
                    <!-- <span class="glyphicon glyphicon-earphone ph-icon" aria-hidden="true"></span>
                    <span class="navi-ph">718.649.1666</span> -->
                    <a class="s-icon" target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/cambridgeresources/">
                      <span class="fa fa-facebook-official"></span>
                    </a>
                    <a class="s-icon" target="_blank" rel="noopener noreferrer" href="https://twitter.com/CambridgeRes">
                      <span class="fa fa-twitter-square"></span>
                    </a>
                    <a class="s-icon" target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/cambridgeresources/">
                      <span class="fa fa-linkedin-square"></span>
                    </a>
                  </div>
                </div>
                <div class="row navi1-btn">
                  <div class="col-sm-12 header-nav-container">
                    <div id="header-rnav" class="header-mnav">
                      <a class="header-navicon">&#9776;</a>
                      <a class="home" href="<?php echo home_url();?>">
                        <div class="header-navi-title">HOME</div>
                        <div class="header-navi-selector"></div>
                      </a>
                      <a class="team" href="<?php echo home_url();?>/team/">
                        <div class="header-navi-title">OUR TEAM</div>
                        <div class="header-navi-selector"></div>
                      </a>
                      <a class="brands" href="<?php echo home_url();?>/brands/">
                        <div class="header-navi-title">BRANDS</div>
                        <div class="header-navi-selector"></div>
                      </a>
                      <a class="career" href="<?php echo home_url();?>/career/">
                        <div class="header-navi-title">CAREER</div>
                        <div class="header-navi-selector"></div>
                      </a>
                      <a class="contact" href="<?php echo home_url();?>/contact/">
                        <div class="header-navi-title">CONTACT</div>
                        <div class="header-navi-selector"></div>
                      </a>
                    </div>
                  </div>  <!-- end col-sm-12  -->
                </div>
              </div>
            </div>  <!--  end col-sm-9  -->
          </div> <!--  end row  -->
        </div>
        <!-- end top-nav container -->
      </div>  <!-- end top-nav -->
      <div class="top-nav2">
        <div class="container">
          <div class="tn2-overall-table">
            <div class="nav2">
              <span>OUR BRANDS</span>
            </div>
            <div class="nav2-logo nav2-cambridge">
              <a href="http://www.cambridgeresources.com/" target="_blank" rel="noopener noreferrer">
                <img src="<?php bloginfo('template_directory')?>/images/cambridgelogo_blue.png" height="25px" >
              </a>
            </div>
            <div class="nav2-logo nav2-amram">
              <a href="" target="_blank" rel="noopener noreferrer">
                <img src="<?php bloginfo('template_directory')?>/images/AMRAM_Logo_001.png" height="15px">
              </a>
            </div>
            <div class="nav2-logo nav2-ldr">
              <a href="http://www.ldrind.com/" target="_blank" rel="noopener noreferrer">
                <img src="<?php bloginfo('template_directory')?>/images/LDR_LOGO.png" height="20px">
              </a>
            </div>
            <div class="nav2-logo nav2-pipedecor">
              <a href="" target="_blank" rel="noopener noreferrer">
                <img src="<?php bloginfo('template_directory')?>/images/pipedecor_logo.png" height="9px">
              </a>
            </div>
            <!-- <div class="nav2-search">
              <span class="glyphicon glyphicon-search nav2-search-icon"></span>
              <span class="nav2-search-txt">PRODUCT SEARCH</span>
              <input type="text" class="search-field" placeholder="KEYWORD / PHRASE / PART#"></input>
            </div> -->
          </div>  <!-- end tn2-overall-table class  -->
        </div>  <!--  end top-nav2 container  -->
      </div> <!-- end top-nav2 -->
    </div> <!-- end all-container -->
