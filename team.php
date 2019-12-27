<!--  Template Name: Team. -->

<?php get_header(); ?>

<div class="container">

  <div class="team-personnels">
    <div class="team-personnels-maintitle">
      <span>MEET THE TEAM</span>
      <div class="team-personnels-maintitle-underline">
      </div>
    </div>

    <div class="team-wrapper">
    <?php
      global $wpdb;

      $team = $wpdb->get_results("SELECT * FROM wp_personnel ORDER BY sort ASC;");
      // echo count($team);
      // print_r(sizeof($team));
      foreach($team as $teaminner) {
        echo "<div class='team-individualimg'>";
          $firstformat = preg_replace('/[^A-Za-z0-9\-]/','',$teaminner->first);
          $lastformat = preg_replace('/[^A-Za-z0-9\-]/','',$teaminner->last);
          echo "<div class='team-crop' id='".strtolower($firstformat).strtolower($lastformat)."'>";
          echo "<img src='".$teaminner->img."'>";
          echo "</div>";
          echo "<div class='team-individualname'>".$teaminner->first." ".$teaminner->last."</div>";
          echo "<hr class='team-breakline'/>";
          echo "<div class='team-individualtitle'>".$teaminner->title."</div>";
        echo "</div>";
      }
      echo "<div class='team-modal'>";
        echo "<div class='team-modal-container'>";
          echo "<span class='team-close glyphicon glyphicon-remove'></span>";
          foreach($team as $teammodal) {
            $firstformat = preg_replace('/[^A-Za-z0-9\-]/','',$teammodal->first);
            $lastformat = preg_replace('/[^A-Za-z0-9\-]/','',$teammodal->last);
            echo "<div class='team-modal-content team-".strtolower($firstformat).strtolower($lastformat)."'>";
              echo "<div class='team-modal-icontents'>";
                echo "<div class='team-modal-iname'><span>".$teammodal->first." ".$teammodal->last."</span><div class='team-modal-iname-underline'></div></div>";
                echo "<div class='team-modal-ititle'><span>".$teammodal->title."</span></div>";
                echo "<div class='team-blurb'>";
                  for($teamdesc=0; $teamdesc < 5; $teamdesc++){
                    $currDescIndex = 'desc'.$teamdesc;
                    if($teammodal->$currDescIndex !="") {
                      echo "<p class='team-blurb-contents'>".$teammodal->$currDescIndex."</p>";
                    }
                  }
                echo "</div>";  // end team-blurb;
              echo "</div>";  // end col
            echo "</div>";  //end row team-modal-content with individual person name;
          }
        echo "</div>";  // end team-modal-container;
      echo "</div>";  // end team-modal;
      // unset($team);
      // print_r($team);
      ?>
    </div> <!-- END TEAM WRAPPER -->
  </div>
</div>  <!--  end container -->

<div class='team-salesmanager'>
  <div class='container'>
    <div class="team-salesmanager-section">
      <?php
        global $wpdb;
        $salesmanager = $wpdb->get_results("SELECT * FROM wp_codasalesmanager ORDER BY sort ASC;");
        // echo count($salesmanager);
        if(count($salesmanager) > 1){
          echo "<span>SALES MANAGERS</span>";
        } else {
          echo "<span>SALES MANAGER</span>";
        }
      ?>
      <div class="team-salesmanager-section-underline">
      </div>
    </div>
    <div class='team-mapcontainer'>
      <?php
      //  map images from http://readysetraphael.com/
      include("images/usmap2.svg");
      ?>
    </div>
    <div class='team-salesmanager-container'>
      <?php
        foreach ($salesmanager as $salesmanager1){
          echo "<div class='team-salesmanager-each'>";
            echo "<div class='team-salesmanager-img'>";
              echo "<img class='team-state-".$salesmanager1->si."' src='".$salesmanager1->img."'>";
            echo "</div>";
            echo "<div class='team-salesmanager-name'><span>".ucfirst($salesmanager1->first)." ".ucfirst($salesmanager1->last)."</span></div>";
            echo "<div class='team-salesmanager-title'><span>".ucfirst($salesmanager1->title)."</span></div>";
            echo "<div class='team-salesmanager-email'><a href='mailto:".$salesmanager1->email."'>".$salesmanager1->email."</a></div>";
            echo "<div class='team-salesmanager-phone'><span>".$salesmanager1->phone."</span></div>";
            echo "<div class='team-salesmanager-text'><span>".strtoupper($salesmanager1->text)."</span></div>";
          echo "</div>";
        }
      ?>
    </div>
  </div>  <!--  end container  -->
</div>  <!--  end team-salesmanager class -->


<?php get_footer(); ?>
