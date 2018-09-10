<?php

/***
 NetSuite image directory

http://hometown.sb3.production.netsuitestaging.com/assets/cms/purered/2018-08-08_Refrigerator-Essentials/


http://hometown.sb3.production.netsuitestaging.com/assets/cms/purered/brand-logos/


 */


// get the directory name
if ( !defined( 'SLUG' ) ) {
	// $slug = basename( dirname( __FILE__ ) );
	$slug = basename( SEARS_PROJECT_PATH );
	define( 'SLUG', $slug );
}

get_relative_path( SEARS_PROJECT_PATH . '/images/' );

$prod_slug = '2018-09-05_Fall-Meal-Planning-Ideas';

set_prod_img_dir( $prod_slug );

$hero = array(
	'picture' => array(
		array(
			'media' => '(max-width:991px)',
			'srcset' => 'quick-easy-meal-planning-ideas_991w.jpg',
		),
		array(
			'media' => '(min-width:992px)',
			'srcset' => 'quick-easy-meal-planning-ideas_1550w.jpg',
		),
	),
	'img' => 'quick-easy-meal-planning-ideas_991w.jpg',
	'alt' => 'Fall vegetables with zucchini, yellow squash, tomatoes, pumpkin',
	'h1' => 'Quick &amp; Easy<br>Fall Meal<br>Planning Ideas',
	'text' => 'Make delicious and healthy meals a routine this fall with some time-saving meal prep tips and simple recipes!',
);

/**
Articles
*/
$articles = array(
	//
	// time-saving-ideas_800w.jpg
	//
	// Time Saving Ideas!
	array(
		'picture' => array(
			array(
				'media' => '(max-width:991px)',
				'srcset' => 'time-saving-tips_991w.jpg',
			),
			array(
				'media' => '(min-width:992px)',
				'srcset' => 'time-saving-tips_725w.jpg',
			),
		),
		'img' => 'time-saving-tips_991w.jpg',
		'alt' => 'A family preparing a healthy dinner together',
		'headline' => "Time-saving Ideas for Fast,<br>Healthy Weeknight Dinners",
		'text' => 'Don&rsquo;t let &ldquo;what are we having for dinner&rdquo; become that nagging question at the end of a long day! Use these <a class="article-link" href="%1$s" data-href="%1$s">tips and tricks</a> to get healthy meal options onto your table in no time.',
		'link' => array(
			'text' => "View Time-saving Tips",
			'url' => '/time-saving-dinner-tips'
		)
	),
	array(
		'picture' => array(
			array(
				'media' => '(max-width:991px)',
				'srcset' => 'butternut-squash-chicken-chili_991w.jpg',
			),
			array(
				'media' => '(min-width:992px)',
				'srcset' => 'butternut-squash-chicken-chili_725w.jpg',
			),
		),
		'img' => 'butternut-squash-chicken-chili_991w.jpg',
		'alt' => 'Butternut squash chicken chili with avocado slices',
		'headline' => "Easy One Pot Meal Recipe:<br>Butternut Squash Chicken Chili",
		'text' => "What is better when the weather turns brisk than a hearty chili? Make it quick, easy and healthy with some simple meal prep and have dinner on the table in 45 minutes or less!",
		'link' => array(
			'text' => "View Butternut Squash Chicken Chili Recipe",
			'url' => '/butternut-squash-chicken-chili-recipe'
		)
	),
	// butternut-squash-chicken-chili_725w.jpg
	// butternut-squash-chicken-chili_800w.jpg
	// butternut-squash-chicken-chili_991w.jpg
	// quick-easy-meal-planning-ideas_800w.jpg
	// quick-easy-meal-planning-ideas_991w.jpg
	// quick-easy-meal-planning-ideas_1550w.jpg
	// salmon-and-veggies_725w.jpg
	// salmon-and-veggies_800w.jpg
	//
	array(
		'picture' => array(
			array(
				'media' => '(max-width:991px)',
				'srcset' => 'salmon-and-veggies_991w.jpg',
			),
			array(
				'media' => '(min-width:992px)',
				'srcset' => 'salmon-and-veggies_725w.jpg',
			),
		),
		'img' => 'salmon-and-veggies_991w.jpg',
		'alt' => 'Baked salmon with asparagus and sweet potatoes',
		'headline' => "Easy One Sheet Pan Recipe:<br>Salmon and Veggies",
		'text' => "Dinner doesn&rsquo;t have to be complicated to be delicious. Try this one sheet recipe to get a healthy and delectable meal to the table from start to finish in 30 minutes or less!",
		'link' => array(
			'text' => "View Salmon and Veggies Recipe",
			'url' => '/baked-salmon-and-veggies-recipe'
		)
	)
);


/**
Brand Logos
*/
$brand_logos = array(
	'headline' => 'Ready to get started?',
	'copy' => 'Sears Hometown Store has unbeatable prices on the best brands available.',
	'btn_url' => '/appliances',
);
