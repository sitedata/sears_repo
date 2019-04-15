<?php

$slug = basename( dirname( __FILE__ ) );

$img_dir = get_image_dir( __FILE__ );

$img_dir = get_relative_path( dirname( __FILE__ ) ) . '/img/';



$hero = array(
  'img' => '01_masthead_ThingsYouDidntKnowWash.jpg',
  'alt' => htmlentities("Laundry essentials 10 Things You Didn’t Know You Could Wash"),
);

$headline = "Ahhh. The washing machine. What did people do without it?\nBut, there’s a bunch of stuff most folks don’t even know it can be used for.";

$content = array(
  array(
  	'img' => '02_MatsRugs.jpg',
  	'heading' => "1. Mats and Rugs",
  	'copy' => "It’s alright to throw mats and small rugs in the wash, but you might need to add a few bath towels for balance. Use cold water and a gentle cycle. Air dry anything with a rubber backing.",
  ),
  array(
  	'img' => '03_StuffedAnimals.jpg',
  	'heading' => "2. Stuffed Animals",
  	'copy' => "When your little one’s lovie is looking rough around the edges, throw it in a pillowcase and wash it along with other like-colored items.",
  ),
  array(
  	'img' => '04_Pillows.jpg',
  	'heading' => "3. Pillows",
  	'copy' => "1-2 at a time with warm water and a gentle cycle. Dry with rubber dryer balls at a low heat to keep things fluffy.",
  ),
  array(
  	'img' => '05_TennisShoes.jpg',
  	'heading' => "4. Tennis Shoes",
  	'copy' => "The laces can stay on, but the insoles need to come out. Stick the shoes in a pillowcase and wash on cold with some towels to keep the noise down. Air dry.",
  ),
  array(
  	'img' => '06_MopHeads.jpg',
  	'heading' => "5. Mop Heads",
  	'copy' => "Removable mop heads usually come with a label that lets you know if they can go in the washing machine. If not, put your mop in a bucket of hot water with bleach or vinegar and let soak for 10 minutes.",
  ),
  array(
  	'img' => '07_ShowerLiners.jpg',
  	'heading' => "6. Shower Liners",
  	'copy' => "You don’t need to toss it—go ahead and wash it. Wash on cold and a delicate cycle.",
  ),
  array(
  	'img' => '08_SmallToys.jpg',
  	'heading' => "7. Small Toys",
  	'copy' => "Any waterproof toy is washing-machine-ready as long as it’s put inside a washable bag. Set the temp on hot—unless they’re Legos, which need cool water. Air dry.",
  ),
  array(
  	'img' => '09_BaseballHats.jpg',
  	'heading' => "8. Baseball Hats",
  	'copy' => "Spray with stain remover and let sit for five minutes. Wash on a short cycle with cold water. Air dry.",
  ),
  array(
  	'img' => '10_PetBeds.jpg',
  	'heading' => "9. Pet Beds",
  	'copy' => "Remove the inner foam portion and hand wash. The outer portion can be machine washed by itself, or with other pet laundry.",
  ),
  array(
  	'img' => '11_SportsGear.jpg',
  	'heading' => "10. Sports Gear",
  	'copy' => "Fabric-lined sports gear such as kneepads, elbow pads and shin guards can be placed in the wash inside laundry bags on a regular, warm cycle. Air dry.",
  ),
);

$footer_copy = "Now you know ten money-saving secrets to keeping your things fresh by throwing them in your weekly wash.";

// hide the brand logos heading on mobile for some reason...
$brand_logos_heading_wrapper_classes = 'visible-md-inline visible-lg-inline visible-xl-inline';

$brand_logos_heading = replace_non_display_chars( "Ready to shop? We have unbeatable prices on a wide variety of washers from the best brands available." );
