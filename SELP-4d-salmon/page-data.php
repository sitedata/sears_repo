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
$prod_slug = '2018-09-05_salmon-and-veggies';

// creates a constant named PROD_IMG_DIR containing full URL of sandbox image directory for this page
set_prod_img_dir( $prod_slug );

// redundant
$prod_img_dir = PROD_IMG_DIR;

// $img_dir = $prod_img_dir;

// salmon-and-veggies_800w.jpg
// salmon-and-veggies_991w.jpg
// salmon-and-veggies_1550w.jpg

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
	'alt' => 'Salmon on a baking sheet with asparagus and sweet potatoes',
/**
NOTE: see the <span itemprop="name"> in the h1.
This is for the Schema.org Recipe microdata.
*/
	'h1' => 'Easy One Sheet Pan Recipe &mdash; <span itemprop="name">Salmon and Veggies</span>',
	'text' => 'Dinner doesn’t have to be complicated to be delicious. Try one sheet recipes like this one to get healthy and delectable meals to the table from start to finish in 30 minutes or less!',
	'link' => array(
		'text' => 'Download Recipe PDF',
		'url' => '#',
	)
);

/**
PRETTY SURE EVERYTHING AFTER THIS IS STILL THE DATA FOR THE CHILI RECIPE
*/

$ingredients = array(
	'headline' => 'Shopping List',
	'list' => array(
		'1 medium butternut squash peeled and chopped into 1-in cubes',
		'1 medium yellow onion coarsely chopped',
		'1 red bell pepper de-seeded and chopped into bite-sized pieces',
		'1 lb. shredded chicken or pre-cooked ground chicken',
		'1 (28 oz.) can diced fire-roasted tomatoes',
		'2 (15 oz.) cans black beans, unseasoned',
		'3 cups chicken broth',
		'1 teaspoon kosher salt',
		'1-2 tablespoons minced garlic',
		'1 ½ tablespoon chili powder',
		'½ tablespoon cumin',
		'1 teaspoon cayenne pepper',
		'1 teaspoon cinnamon',
		'1 teaspoon oregano',
		'2 tablespoons olive oil',
		'Chopped green onions (optional)',
		'Avocado (optional)',
		'Cheese of choice (optional)',
	),
);

/**
Pre-prep
*/
$prep = array(
	'how-to-position' => 1,
	'headline' => 'Pre-Prep',
	'copy' => 'Use your fridge to save time. Just a little bit of meal prep will make dinnertime go much faster with these few simple tips!',
	'steps' => array(
		array(
			'headline' => 'Pre-cook your protein.',
			'copy' => array(
				array(
					'type' => 'tip', // or direction!
					'text' => 'For this recipe, cook and shred your chicken 3-4 days before you make your chili.',
				),
				array(
					'type' => 'direction',
					'text' => 'In a stock pot, add chicken and water.',
				),
				array(
					'type' => 'direction',
					'text' => 'Bring to a boil and then move to medium heat to simmer for about 15 minutes.',
				),
				array(
					'type' => 'direction',
					'text' => 'After chicken has cooled, shred with a fork.',
				),
				array(
					'type' => 'tip',
					'text' => 'If shredded chicken is not your speed, try ground chicken!',
				),
				array(
					'type' => 'direction',
					'text' => 'Sauté over medium heat for 10-15 minutes until all pinkness is gone and remove from grease.',
				),
			),
		),

		array(
			'headline' => 'Wash and prepare your vegetables in advance.',
			'copy' => 'Once peeled, de-seeded and cut into chunks, the butternut squash will last 2-5 days in your refrigerator. Chopped onion will last up to a week and chopped bell pepper is good for 2-3 days in the fridge.',
		),

		array(
			'headline' => 'Pre-mix your spices in large batches.',
			'copy' => 'You can use it for this recipe and in the future for any other chili or soup you might whip up.',
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
	'headline' => 'Directions',
	'copy' => '',
	'how-to-position' => 2,
	'steps' => array(
		array(
			'headline' => '',
			'copy' => 'In a Dutch oven, heat olive oil on medium. Add coarsely chopped onion and saut&eacute; until translucent.',
		),

		array(
			'headline' => '',
			'copy' => 'Add your pre-cooked chicken, spices, canned tomatoes, rinsed black beans, chicken broth and chopped bell pepper. Cover and simmer for 15 mins.',
		),

		array(
			'headline' => '',
			'copy' => 'Add butternut squash chunks and simmer for an additional 15 mins.',
		),

		array(
			'headline' => '',
			'copy' => 'Serve topped with green onion, avocado chunks and/or your cheese of choice! White cheddar pairs nicely, or if you&rsquo;re looking for a little more heat shredded pepper jack would also be a nice addition.',
		),
	),
);

/**
Footer
*/
$footer = array(
	'headline' => 'An easy, customizable, delicious fall meal in under 45 minutes!',
	'copy' => 'Switch it up — add ground turkey instead of chicken, or sweet potatoes instead of butternut squash. It’s easy and your family will love it!',
);


/**
Brand Logos
*/
$brand_logos = array(
	'headline' => 'Ready to get started?',
	'copy' => 'Sears Hometown Store has unbeatable prices on the best brands available.',
	'btn_url' => '#'
);

/**
View More
*/
$view_more = array(
	array(
		'text' => 'Meal Planning Tips &amp; Recipes',
		'url' => '#'
	),
);
