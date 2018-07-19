<?php

$slug = basename( dirname( __FILE__ ) );

$img_dir = get_image_dir( __FILE__ );

$img_dir = get_relative_path( dirname( __FILE__ ) ) . '/img/';
$logo_dir = $img_dir . 'logos/';

$hero = array(
  'img' => '01_masthead_Entertaining.jpg',
  'alt' => htmlentities("Cooking Essentials: Can't-Miss Cooking Hacks"),
);

$headline = "Try our favorite kitchen hacks and make cooking for friends and family a breeze.";

$content = array(
  array(
    'img' => '02_PittingCherries.jpg',
  	'heading' => "1.	Pitting Cherries",
  	'subheading' => "Perfect for pies, cheese plates, garnishes & more.",
    'youll_need' => true,
    'list' => array(
  		"A glass or plastic soda bottle, a chopstick",
  		"Place cherry on top of an open soda bottle",
  		"Insert chopstick down through the center",
  		"Out pops the pit!",
    ),
  ),
  array(
    'img' => '03_DestemStrawberries.jpg',
  	'heading' => "2. De-stem Strawberries",
  	'subheading' => "Delicious muddled in drinks or tossed in a fruit salad.",
    'youll_need' => true,
    'list' => array(
  		"A straw",
  		"Push straw through the berry's bottom",
  		"Stem will pop out clean!",
    ),
  ),
  array(
    'img' => '04_ChoppedOnions.jpg',
  	'heading' => "3.	Tear-Free Chopped Onions",
  	'subheading' => "Try these tricks for tearless prep.",
    'youll_need' => false,
    'list' => array(
  		"Chew gum",
  		"Submerge the onion in cold water first",
  		"Turn on a fan",
  		"Light a candle",
      ),
    ),
    array(
      'img' => '05_ElegantIceCubes.jpg',
  	'heading' => "4.	Elegant Ice Cubes",
  	'subheading' => "Liven up everything from mixed drinks to water.",
    'youll_need' => true,
    'list' => array(
  		"\nA muffin pan (silicone or tin), chopped citrus fruit, mint or cucumber",
  		"Place your favorite combo of fruit and herbs in the pan",
  		"Pour in some boiled-then-cooled water",
  		"Freeze then serve",
      ),
    ),
    array(
      'img' => '06_PeelHardboiledEggs.jpg',
    	'heading' => "5.	Peel Hardboiled Eggs",
    	'subheading' => "Try them deviled, diced or sliced.",
      'youll_need' => false,
      'list' => array(
    		"After boiling, angle the lid inside the pot and drain the water out into the sink using the lid to keep the eggs inside",
    		"Refill the pan halfway with cold water",
    		"Put on the lid, hold firm and shake it up",
    		"Remove the lid and find the eggs already halfway-peeled",
    		"Slide off the remaining shells with your thumbs",
      ),
    ),
);


$bonus_round = array(
	array(
		'head' => "Stop boil over",
		'body' => "by placing a wooden spoon across the pot.",
	),
	array(
		'head' => "Dry fresh herbs fast",
		'body' => "using the microwave.",
	),
	array(
		'head' => "Defrost meat 30% faster",
		'body' => "by placing on an aluminum tray.",
	),
	array(
		'head' => "Spray measuring cups with nonstick cooking spray",
		'body' => "when working with sticky ingredients like honey or peanut butter.",
	),
	array(
		'head' => "Get 20% more juice from your lemons",
		'body' => "when you microwave them for 20 seconds each.",
	),
	array(
		'head' => "Use an ice cream scoop",
		'body' => "to craft the perfect meatball and keep your hands clean.",
	),
	array(
		'head' => "Prevent spoiling",
		'body' => "by storing your onions and potatoes separately.",
	),
);

$logos_heading = "Shop the latest <span class=\"font--primary2\">appliances</span> for the best in kitchen solutions. We have unbeatable prices on the best brands available.";

$logos = array(
  'Kenmore' => '01_Kenmore.png',
	'Whirlpool' => '02_Whirlpool.png',
  'GE' => '03_GE.png',
	'Frigidaire' => '04_Frigidaire.png',
	'LG' => '05_LG.png',
	'Samsung' => '06_Samsung.png',
	'Bosch' => '07_Bosch.png',
	'KitchenAid' => '08_KitchenAid.png',
);
