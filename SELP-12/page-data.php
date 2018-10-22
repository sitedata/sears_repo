<?php

$slug = basename( dirname( __FILE__ ) );

if ( !defined( 'SLUG' ) ) {
	// $slug = basename( dirname( __FILE__ ) );
	$slug = basename( SEARS_PROJECT_PATH );
	define( 'SLUG', $slug );
}
//
// get_relative_path( SEARS_PROJECT_PATH . '/images/' );

$prod_slug = '2018-10-25_Stress-Free-Thanksgiving-Dinner-Tips';

set_prod_img_dir( $prod_slug );


$link_tmpl8 = '<a href="%s" data-href="%s" class="font--primary3">%s</a>';

$hero = array(
	'picture' => array(
		array(
			'media' => '(max-width:991px)',
			'srcset' => 'hero_991w.jpg',
		),
		array(
			'media' => '(min-width:992px)',
			'srcset' => 'hero_1550w.jpg',
		),
	),
	'img' => 'hero_991w.jpg',
	'h1' => 'Stress-free Thanksgiving Dinner Tips',

	'header' => array(
		'h2' => 'Top 5 Tips for Cooking for a Crowd',
		'p' => 'They say, &ldquo;the more the merrier,&rdquo; especially when it comes to holiday dinners, but cooking for a crowd can be overwhelming. We&rsquo;ve put together a few tips to help you stress less this Thanksgiving.',
	),
);


$articles = array(
	array(
		'img_d' => 'stick-to-simple_724w.jpg',
		'img' => 'stick-to-simple_943w.jpg',
		'picture' => array(
			array(
				'media' => '(max-width:991px)',
				'srcset' => 'stick-to-simple_943w.jpg',
			),
			array(
				'media' => '(min-width:992px)',
				'srcset' => 'stick-to-simple_724w.jpg',
			),
		),
		'img' => 'stick-to-simple_943w.jpg',


		'h3' => '1. Stick to Simple',

		'p' => 'Greeting guests with a drink and an appetizer is the perfect way to kick off a holiday meal but keep it simple. Think ready-made starters like hummus, charcuterie, cheese platters and pre-cut fruit. Whip up big batch cocktails ahead of time, or just stick to wine and beer.',
	),

	array(
		'images' => array(
			'temperature-check_724w.jpg',
			'temperature-check_943w.jpg'
		),
		'picture' => array(
			array(
				'media' => '(max-width:991px)',
				'srcset' => 'temperature-check_943w.jpg',
			),
			array(
				'media' => '(min-width:992px)',
				'srcset' => 'temperature-check_724w.jpg',
			),
		),
		'img' => 'temperature-check_943w.jpg',

		'h3' => '2. Temperature Check',
		'p' => 'Slow cookers come in handy for keeping side dishes warm and freeing up valuable stove space; you can also serve warm dips or even apple cider out of them. Don&rsquo;t forget your cooler can also keep your sides and even your bird warm. If you have a warming drawer, now is the perfect time to put it to good use to keep dishes at the perfect serving temperature.',

		'links' => array(
			'cooler' => '/s?c=3721178&keywords=cooler&n=2&search_return=all&Itemclass=Coolers%20%26%20Beverage%20Holders',
			'warming drawer' => '/Cooking-Appliances/Warming-Drawers',
		),
	),

	array(
		'images' => array(
			'save-space_724w.jpg',
			'save-space_943w.jpg'

		),
		'picture' => array(
			array(
				'media' => '(max-width:991px)',
				'srcset' => 'save-space_943w.jpg',
			),
			array(
				'media' => '(min-width:992px)',
				'srcset' => 'save-space_724w.jpg',
			),
		),
		'img' => 'save-space_943w.jpg',

		'h3' => '3. Save Space',

		'p' => 'Say goodbye to plating in the kitchen and set up a buffet so guests can serve themselves. Make even more room at your table by using multi-height serving platters. Avoid an overcrowded refrigerator by using Ziploc&trade; bags instead of mixing bowls and plates. Bonus, when you&rsquo;re done there is less to wash!',
		'links' => array(
			'refrigerator' => '/Refrigerators-Freezers',
		),
	),

	array(
		'images' => array(
			'outsource_724w.jpg',
			'outsource_943w.jpg'

		),
		'picture' => array(
			array(
				'media' => '(max-width:991px)',
				'srcset' => 'outsource_943w.jpg',
			),
			array(
				'media' => '(min-width:992px)',
				'srcset' => 'outsource_724w.jpg',
			),
		),
		'img' => 'outsource_943w.jpg',


		'h3' => '4. Outsource',

		'p' => 'There&rsquo;s no rule that says you must make everything from scratch. Free up your time by buying a few pre-made items (we won&rsquo;t tell), like sides or a dessert. Look for pre-chopped ingredients, like the celery and onions for your Thanksgiving dressing. When you&rsquo;re cooking for a crowd, prep work can get labor-intensive fast.',
	),

	array(
		'images' => array(
			'go-easy-on-your-oven_724w.jpg',
			'go-easy-on-your-oven_943w.jpg'
		),
		'picture' => array(
			array(
				'media' => '(max-width:991px)',
				'srcset' => 'go-easy-on-your-oven_943w.jpg',
			),
			array(
				'media' => '(min-width:992px)',
				'srcset' => 'go-easy-on-your-oven_724w.jpg',
			),
		),
		'img' => 'go-easy-on-your-oven_943w.jpg',
		'alt' => 'Removing a turkey from the oven',


		'h3' => '5. Go Easy on Your Oven',

		'p' => 'An overstuffed oven results in unevenly cooked, or worse, undercooked food. In fact, the more food in your oven the higher the temperature needs to be. But don&rsquo;t crank up the heat and overcook everything. The solution is to limit the number of dishes you bake at once. Consider making some dishes ahead of time or mixing it up with the grill or smoker.',
		'links' => array(
			'oven' => '/Cooking-Appliances',
			'grill' => '/Outdoor-Living/Grills',
			'smoker' => '/s?Category0=Outdoor%20Living&amp;Category1=Grills&amp;c=3721178&amp;n=2&amp;nav_search=1&amp;search_return=all&amp;Itemclass=Smokers%20%26%20Specialty%20Cookers',
		),
	),
);

$turkey_tip = array(
	'picture' => array(
		array(
			'media' => '(max-width:991px)',
			'srcset' => 'turkey-tip_943w.jpg',
		),
		array(
			'media' => '(min-width:992px)',
			'srcset' => 'turkey-tip_724w.jpg',
		),
	),
	'img' => 'turkey-tip_943w.jpg',
	'alt' => 'A turkey baking in the oven',

	'label' => 'Did You Know?',
	'headline' => 'An unstuffed, fully defrosted bird should cook for about 15 minutes per pound in a 325&deg;F oven. If you&rsquo;re cooking a frozen turkey, it will take at least 50 percent longer.',
);

$chart = array(
	'pre-headline' => 'Now, for the question that&rsquo;s on everyone&rsquo;s minds:',

	'h2' => 'How much should I make for Thanksgiving dinner?',

	'p' => 'Our chart below provides a starting point for the number of people and dishes.',

	'thead' => array(
		'',
		'5 PEOPLE',
		'10 PEOPLE',
		'20 PEOPLE',
	),

	'rows' => array(

		array(
			'img' => 'turkey-leg.png',
			'alt' => 'turkey leg',
			'cells' => array(
				array(
					'Turkey',
					'(average 1.25 lbs per person)',
				),
				'6-7 LBS',
				'12-14 LBS',
				'24-28 LBS',
			),
		),

		array(
			'img' => 'taco.png',
			'alt' => 'lobster stuffed with tacos',
			'cells' => array(
				'# OF APPETIZERS',
				'1',
				'2',
				'2',
			),
		),

		array(
			'img' => 'salad.png',
			'alt' => 'head of lettuce',
			'cells' => array(
				'# OF SALADS',
				array(
					'1',
					'(green)',
				),
				array(
					'1',
					'(green)',
				),
				array(
					'2',
					'(green + additional)',
				),
			),
		),

		array(
			'img' => 'potato.png',
			'alt' => 'potato',
			'cells' => array(
				'# OF STARCHY SIDES',
				'1',
				'2',
				'3',
			),
		),

		array(
			'img' => 'broccoli.png',
			'alt' => 'broccoli',
			'cells' => array(
				'# OF VEGGIE SIDES',
				'1',
				'2',
				'3',
			),
		),

		array(
			'img' => 'ice-cream.png',
			'alt' => 'ice cream!',
			'cells' => array(
				'# OF DESSERTS',
				'1',
				'2',
				'3',
			),
		),

		array(
			'img' => 'wine.png',
			'alt' => 'wine glass',
			'cells' => array(
				'# OF BOTTLES OF WINE',
				'3',
				'6',
				'12',
			),
		),
	),
);








$brand_logos = array(

	'headline' => '',

	'text' => 'Now that you are ready for holiday meal preparations with these handy tips, don&rsquo;t forget the easiest way to a delicious dinner is great appliances.<br>Check out Sears Hometown Store for wall ovens, ranges, refrigerators, freezers and more that will have your guests raving about your culinary skills.',

	'links' => array(
		'wall ovens' => '/Cooking-Appliances/Ovens',

		'ranges' => '/Cooking-Appliances/Ranges',

		'refrigerators' => '/Refrigerators-Freezers',

		'freezers' => '/Refrigerators-Freezers/Freezers',
	),


	// 'logos' => array(
	// 	'Kenmore' => array(
	// 		'kenmore.png'
	// 	),
	// 	'Whirlpool' => array(
	// 		'whirlpool.png',
	// 	),
	// 	'GE' => array(
	// 		'ge.png'
	// 	),
	// 	'Samsung' => array(
	// 		'samsung.png'
	// 	),
	// 	'Maytag' => array(
	// 		'maytag.png'
	// 	),
	// ),
//http://hometown.sb3.production.netsuitestaging.com/assets/cms/purered/2018-10-25_Stress-Free-Thanksgiving-Dinner-Tips/turkey-tip_943w.jpg

	'logo_dir' => 'http://hometown.sb3.production.netsuitestaging.com/assets/cms/purered/2018-10-25_Stress-Free-Thanksgiving-Dinner-Tips/brand-logos/',
	// 'logo_dir' => '/SELP-12/images/brand-logos/',
	'btn_url' => '/',
);

foreach ( $brand_logos['links'] as $search => $url ) {
	$link = sprintf( $link_tmpl8, $url, $url, $search );
	$brand_logos['text'] = preg_replace( '/' . $search . '/', $link, $brand_logos['text'], 1 );
}

$footer = array(
	'strong' => 'View More:',
	'a' => 'Thanksgiving Holiday Prep',
	'url' => '/thanksgiving-holiday-prep',
);
