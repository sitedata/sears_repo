<?php

/***
 NetSuite image directory

http://hometown.sb3.production.netsuitestaging.com/assets/cms/purered/2018-08-08_Refrigerator-Essentials/


http://hometown.sb3.production.netsuitestaging.com/assets/cms/purered/brand-logos/


 */


// get the directory name
$slug = basename( dirname( __FILE__ ) );

// local image directory
$img_dir = get_relative_path( SEARS_PROJECT_PATH . '/images/' );

// slug of image directory on sandbox
$prod_slug = '2018-09-05_Salmon-and-Veggies';

// creates a constant named PROD_IMG_DIR containing full URL of sandbox image directory for this page
set_prod_img_dir( $prod_slug );

$hero = array(
	'picture' => array(
		array(
			'media' => '(max-width:991px)',
			'srcset' => 'salmon-and-veggies_991w.jpg',
		),
		array(
			'media' => '(min-width:992px)',
			'srcset' => 'salmon-and-veggies_1550w.jpg',
		),
	),
	'img' => 'salmon-and-veggies_991w.jpg',
	'alt' => 'Baked salmon with asparagus and sweet potatoes',
/**
NOTE: see the <span itemprop="name"> in the h1.
This is for the Schema.org Recipe microdata.
*/
	'h1' => 'Easy One Sheet Pan Recipe &mdash; <span itemprop="name">Salmon and Veggies</span>',
	'text' => 'Dinner doesn&rsquo;t have to be complicated to be delicious. Try one sheet recipes like this one to get healthy and delectable meals to the table from start to finish in 30 minutes or less!',
	'link' => array(
		'text' => 'Download Recipe PDF',
		'url' => get_prod_img_dir() . 'Salmon_and_Veggies_recipe.pdf',
	)
);

/**
PRETTY SURE EVERYTHING AFTER THIS IS STILL THE DATA FOR THE CHILI RECIPE
*/

$ingredients = array(
	'id' => 'ingredients',
	'headline' => 'Ingredients',
	'list' => array(
		"3 (4-6 oz.) salmon steaks",
		"¼ cup olive oil",
		"2 teaspoons minced garlic",
		"½ tablespoon onion powder",
		"1 tablespoon paprika",
		"½ teaspoon cayenne pepper 	(if you don’t like heat, hold the pepper!)",
		"½ teaspoon kosher salt",
		"1 tablespoon chopped, fresh parsley",
		"1 bundle of asparagus, stems removed",
		"2 sweet potatoes peeled and cut into 1-inch cubes"
	),
);

/**
Pre-prep
*/
$prep = array(
	'id' => 'pre-prep',
	'how-to-position' => 1,
	'headline' => 'Pre-Prep',
	'copy' => 'Meal prepping is a great way to eat healthier and further cut down on cooking time. Try these tips to make this recipe go even faster.',
	'steps' => array(
		array(
			'headline' => 'Pre-mix your spices.',
			'copy' => array(
				array(
					'type' => 'tip', // or direction!
					'text' => "You’ll just need to add the olive oil and herbs!",
				),
			),
		),
		array(
			'headline' => "Wash and cut your vegetables and herbs after purchase.",
			'copy' => "Asparagus can stay fresh in your refrigerator for 2-4 days. Chopped herbs will last 3-5 days. Sweet potatoes are fine for up to a month!",
		),

		array(
			'headline' => 'Pre-peel the skin off of garlic cloves.',
			'copy' => 'Store them in an airtight container in the fridge so they will be at the ready for mincing.',
		),
	)
);

/**
Directions
*/

$directions = array(
	'id' => 'directions',
	'headline' => 'Directions',
	'copy' => '',
	'how-to-position' => 2,
	'steps' => array(
		array(
			'headline' => '',
			'copy' => "10-15 minutes before cook time remove your salmon fillets from the refrigerator to allow them to come to room temperature.",

		),

		array(
			'headline' => '',
			'copy' => "Pre-heat oven to 375&deg;F.",
		),

		array(
			'headline' => '',
			'copy' => "In a small saucepan on medium heat, combine olive oil, garlic, onion powder, paprika, cayenne pepper, salt and chopped parsley. Stir for one minute, then turn off heat and allow to sit for 5 minutes.",
		),
		array(
			'headline' => '',
			'copy' => "Coat your room temperature salmon steaks and veggies with your olive oil mixture.",
		),
		array(
			'headline' => '',
			'copy' => "Cover a large baking sheet with tin foil or parchment paper and evenly lay out salmon and veggies.",
		),
		array(
			'headline' => '',
			'copy' => "Bake for about 20 mins until salmon is flaky and vegetables are tender."
		),
	),
);

/**
Footer
*/

$footer = array(
	'headline' => "Voil&agrave; — a simple fall dinner recipe that will leave you looking like a gourmet chef.",
	'text' => "Not a fan or asparagus or sweet potatoes? Change it up! Carrots, Brussels sprouts, broccoli or any of your favorite vegetables can be substituted to suit your preferences."

);


/**
Brand Logos
*/
$brand_logos = array(
	'headline' => 'Ready to get started?',
	'copy' => 'Sears Hometown Store has unbeatable prices on the best brands available.',
	'btn_url' => '/appliances'
);

/**
View More
*/
$view_more = array(
	array(
		'text' => 'Meal Planning Tips &amp; Recipes',
		'url' => '/fall-meal-planning-ideas'
	),
);
