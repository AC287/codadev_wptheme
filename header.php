<!DOCTYPE html>
<html <?php language_attributes();?>>
  <head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title><?php bloginfo('name');?></title> -->
    <?php wp_head(); ?>
    <!-- <title>CODA DEVELOPMENT</title> -->
    <?php include 'phpsnippet/serverlocation.php';?>
    <?php include 'phpsnippet/titletag.php';?>

  </head>

  <body>
    <div id="all-container">
      <div class="top-nav">
        <div class="container">
          <div class="tnc-inner">
            <div class="coda-white-logo">
              <a href="<?php echo home_url();?>"><img src="<?php bloginfo('template_directory')?>/images/codadevlogo_white.png" height="50px"></a>
            </div>  <!-- end cambridge-logo-white -->
            <div class="header-socialmedia">
              <a class="s-icon" target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/company/coda-resources-ltd./">
                <span class="fa fa-linkedin-square"></span>
              </a>
            </div>
            <div class="header-nav-container">
              <div id="header-rnav" class="header-mnav">
                <div class="hmn-container hmnc-mobilemenu">
                  <a class="header-navicon">&#9776;</a>
                </div>
                <div class="hmn-container">
                  <a class="home" href="<?php echo home_url();?>">
                    <div class="header-navi-title">HOME</div>
                    <div class="hnt-selector-container">
                      <?php
                      if(empty($curLocationArr)){
                        // echo"THIS IS TRUE";
                        $display = "block";
                      } else {
                        // echo"FALSE";
                        $display = "none";
                      }
                      echo "<div class='header-navi-selector' style='display:".$display."'></div>";
                      ?>
                    </div>
                  </a>
                </div>
                <div class="hmn-container">
                  <a class="about" href="<?php echo home_url();?>/about/">
                    <div class="header-navi-title">ABOUT</div>
                    <div class="hnt-selector-container">
                      <?php
                      if(in_array('about',$curLocationArr)){
                        $display = "block";
                      } else {
                        $display = "none";
                      }
                      echo "<div class='header-navi-selector' style='display:".$display."'></div>";
                      ?>
                    </div>
                  </a>
                </div>  <!--  end hmn-container  -->
                <div class="hmn-container">
                  <a class="team" href="<?php echo home_url();?>/team/">
                    <div class="header-navi-title">OUR TEAM</div>
                    <div class="hnt-selector-container">
                      <?php
                      if(in_array('team',$curLocationArr)){
                        $display = "block";
                      } else {
                        $display = "none";
                      }
                      echo "<div class='header-navi-selector' style='display:".$display."'></div>";
                      ?>
                    </div>
                  </a>
                </div>  <!--  end hmn-container  -->
                <div class="hmn-container">
                  <a class="brands" href="<?php echo home_url();?>/brands/">
                    <div class="header-navi-title">BRANDS</div>
                    <div class="hnt-selector-container">
                      <?php
                      if(in_array('brands',$curLocationArr)){
                        $display = "block";
                      } else {
                        $display = "none";
                      }
                      echo "<div class='header-navi-selector' style='display:".$display."'></div>";
                      ?>
                    </div>
                  </a>
                </div>  <!--  end hmn-container  -->
                <div class="hmn-container">
                  <a class="career" href="<?php echo home_url();?>/career/">
                    <div class="header-navi-title">CAREER</div>
                    <div class="hnt-selector-container">
                      <?php
                      if(in_array('career',$curLocationArr)){
                        $display = "block";
                      } else {
                        $display = "none";
                      }
                      echo "<div class='header-navi-selector' style='display:".$display."'></div>";
                      ?>
                    </div>
                  </a>
                </div>  <!--  end hmn-container  -->
                <div class="hmn-container">
                  <a class="contact" href="<?php echo home_url();?>/contact/">
                    <div class="header-navi-title">CONTACT</div>
                    <div class="hnt-selector-container">
                      <?php
                      if(in_array('contact',$curLocationArr)){
                        $display = "block";
                      } else {
                        $display = "none";
                      }
                      echo "<div class='header-navi-selector' style='display:".$display."'></div>";
                      ?>
                    </div>
                  </a>
                </div>  <!--  end hmn-container  -->
              </div>
            </div>
          </div>
        </div>
        <!-- end top-nav container -->
      </div>  <!-- end top-nav -->
      <div class="top-nav2">
        <div class="container">
          <div class="tn2-overall-table">
            <div class="nav2">
              <a href="<?php echo home_url();?>/brands/"><span>OUR BRANDS</span></a>
            </div>
            <div class="nav2-logo nav2-cambridge">
              <a href="<?php echo $cambridgeSite ?>" target="_blank" rel="noopener noreferrer">
                <img src="<?php bloginfo('template_directory')?>/images/brands/cambridge_pms293.png">
              </a>
            </div>
            <div class="nav2-logo nav2-amram">
              <a href="http://www.codarss.com" target="_blank" rel="noopener noreferrer">
                <img src="<?php bloginfo('template_directory')?>/images/brands/amram_logo.png">
              </a>
            </div>
            <div class="nav2-logo nav2-ldr">
              <a href="<?php echo $ldrSite ?>" target="_blank" rel="noopener noreferrer">
                <img src="<?php bloginfo('template_directory')?>/images/brands/ldr_logo.png">
              </a>
            </div>
            <div class="nav2-logo nav2-pipedecor">
              <a href="http://pipe-decor.com/" target="_blank" rel="noopener noreferrer">
                <img src="<?php bloginfo('template_directory')?>/images/brands/pipedecor_logo.png">
              </a>
            </div>
          </div>  <!-- end tn2-overall-table class  -->
        </div>  <!--  end top-nav2 container  -->
      </div> <!-- end top-nav2 -->
    </div> <!-- end all-container -->
