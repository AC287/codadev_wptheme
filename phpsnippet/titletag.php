<?php

  /*
    NOTES:
      This is a manual input.
      If new page or section is added, you will need to enter manually append below switch/case statement.
      Then update codametadesc spreadsheet.
  */

  // print_r($curLocationArr);
  global $wp_query, $wpdb;

  // switch ($curLocationArr) {
  switch (true) {

    case (empty($curLocationArr)):
      //GET HOME TITLE & META DESC TAG for live site.
      $metatitleDB = $wpdb->get_results("SELECT * FROM wp_codametadesc WHERE page='home';");
      echo "<title>CODA | ".$metatitleDB[0]->title."</title>";
      echo "<meta name='description' content='".htmlspecialchars($metatitleDB[0]->metadesc,ENT_QUOTES)."'>";
    break;

    case (in_array('about', $curLocationArr)):
      //GET ABOUT TITLE AND META DESC TAG.
      $metatitleDB = $wpdb->get_results("SELECT * FROM wp_codametadesc WHERE page='about';");
      echo "<title>CODA | ".$metatitleDB[0]->title."</title>";
      echo "<meta name='description' content='".htmlspecialchars($metatitleDB[0]->metadesc,ENT_QUOTES)."'>";
    break;

    case (in_array('team', $curLocationArr)):
      //GET TEAM TITLE AND META DESC TAG.
      $metatitleDB = $wpdb->get_results("SELECT * FROM wp_codametadesc WHERE page='team';");
      echo "<title>CODA | ".$metatitleDB[0]->title."</title>";
      echo "<meta name='description' content='".htmlspecialchars($metatitleDB[0]->metadesc,ENT_QUOTES)."'>";
    break;

    case (in_array('brands', $curLocationArr)):
      //GET TEAM TITLE AND META DESC TAG.
      $metatitleDB = $wpdb->get_results("SELECT * FROM wp_codametadesc WHERE page='brands';");
      echo "<title>CODA | ".$metatitleDB[0]->title."</title>";
      echo "<meta name='description' content='".htmlspecialchars($metatitleDB[0]->metadesc,ENT_QUOTES)."'>";
    break;

    case (in_array('career', $curLocationArr)):
      //GET TEAM TITLE AND META DESC TAG.
      $metatitleDB = $wpdb->get_results("SELECT * FROM wp_codametadesc WHERE page='career';");
      echo "<title>CODA | ".$metatitleDB[0]->title."</title>";
      echo "<meta name='description' content='".htmlspecialchars($metatitleDB[0]->metadesc,ENT_QUOTES)."'>";
    break;

    case (in_array('contact', $curLocationArr)):
      //GET TEAM TITLE AND META DESC TAG.
      $metatitleDB = $wpdb->get_results("SELECT * FROM wp_codametadesc WHERE page='contact';");
      echo "<title>CODA | ".$metatitleDB[0]->title."</title>";
      echo "<meta name='description' content='".htmlspecialchars($metatitleDB[0]->metadesc,ENT_QUOTES)."'>";
    break;

    case(count($curLocationArr)==3 && (gettype($curLocationArr[0])=='integer' && gettype($curLocationArr[1]=='integer'))):
      $metatitleDB = $wpdb->get_results("SELECT * FROM wp_codametadesc WHERE page='tradeshows';");
      echo "<title>CODA | ".$metatitleDB[0]->title."</title>";
      echo "<meta name='description' content='".htmlspecialchars($metatitleDB[0]->metadesc,ENT_QUOTES)."'>";
    break;

    default:
    $metatitleDB = $wpdb->get_results("SELECT * FROM wp_codametadesc WHERE page='home';");
    echo "<title>CODA Resources</title>";
    echo "<meta name='description' content='".htmlspecialchars($metatitleDB[0]->metadesc,ENT_QUOTES)."'>";
    break;
  }
?>
