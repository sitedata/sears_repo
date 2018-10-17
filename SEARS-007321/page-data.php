<?php

$slug = basename( dirname( __FILE__ ) );

$img_dir = get_image_dir( __FILE__ );

$img_dir = get_relative_path( dirname( __FILE__ ) ) . '/img/';



$hero = array(
  'img' => '01_masthead_ThingsYouDidntKnowWash.jpg',
  'alt' => htmlentities("Laundry essentials 10 Things You Didn’t Know You Could Wash"),
);

$headline = "Tips and tricks to make fall cleanup and yard maintenance a breeze.";

$content = array(
  array(
  	'img' => 'http://hometown.sb3.production.netsuitestaging.com/assets/cms/purered/2018_10_04_FallLawnGardenCare/SHO_1011_Fall_LG_main_LP_D_FNL_02.jpg',
  	'heading' => "Fall Lawn & Garden Cleanup Tips",
  	'copy' => "These shortcuts will have you done with the yard work faster than you can say, \"winter is coming.\"",
    'linkcopy'=>'View Fall Cleanup Tips',
    'linkref'=>'/fall-lawn-garden-cleanup-tips'
  ),
  array(
  	'img' => 'http://hometown.sb3.production.netsuitestaging.com/assets/cms/purered/2018_10_04_FallLawnGardenCare/SHO_1011_Fall_LG_main_LP_D_FNL_03.jpg',
  	'heading' => "Composting 101",
  	'copy' => "Fall is the perfect time to learn to compost, and it's easier than you might think. Our guide breaks it down.",
      'linkcopy'=>"View Composting Guide",
      'linkref'=>"/composting-101"
      
    
  ),
);

// $footer_copy = "Now you know ten money-saving secrets to keeping your things fresh by throwing them in your weekly wash.";

// hide the brand logos heading on mobile for some reason...
$brand_logos_heading_wrapper_classes = 'visible-md-inline visible-lg-inline visible-xl-inline';

$brand_logos_heading = replace_non_display_chars( "Ready to shop? We have unbeatable prices on a wide variety of washers from the best brands available." );
