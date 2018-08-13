<?php

/***
 NetSuite image directory

http://hometown.sb3.production.netsuitestaging.com/assets/cms/purered/2018-08-08_Refrigerator-Essentials/


http://hometown.sb3.production.netsuitestaging.com/assets/cms/purered/brand-logos/


 */


// get the directory name
$slug = basename( dirname( __FILE__ ) );

$img_dir = get_relative_path( SEARS_PROJECT_PATH . '/img/' );

$prod_img_dir = 'http://hometown.sb3.production.netsuitestaging.com/assets/cms/purered/2018-08-08_Refrigerator-Essentials/';

$img_dir = $prod_img_dir;

$hero = array(
	'img' => 'refrigerator-essentials.jpg',
	'alt' => 'Refrigerator Essentials Fridge Overview &amp; Top Tips',
);

$headline = "Upgrade the centerpiece of your kitchen, the refrigerator!";

$data = array(

	'keep-it-cool' => array(
		'img' => 'open-refrigerator.jpg',
		'alt' => '',
		'headline' => 'Keep it Cool &mdash; Refrigerators',
		'copy' => 'We&rsquo;ve come a long way since the days of the icebox, so there is a lot more to consider when choosing a new refrigerator. What size works for your kitchen? Do you need a larger freezer? Do you want it to be smart? The right fridge will provide you with the perfect amount of space for all your food prep and storage needs.',
		'tip' => '<span class="text-uppercase">Adjustable shelves</span> will provide you with the perfect configuration for your items, but don&rsquo;t forget capacity. As a general rule, allow 4-6 cu. ft. of space per adult in your household.',
	),

	'refrigerator-styles' => array(
		'headline' => 'What&rsquo;s Your Refrigerator Style?',
		'copy' => 'There are three basic models to consider before purchasing a new fridge.',
		'styles' => array(
			array(
				'img' => 'bottom-freezer-refrigerator.jpg',
				'alt' => 'A refrigerator with a bottom freezer',
				'headline' => 'Bottom Freezer',
				'url' => 'http://www.searshometownstores.com/Refrigerators-Freezers/French-Door-Refrigerators',
				'list' => array(
					'Offers easy access to fresh foods at eye level',
					'Freezer is typically 1/3 of total size',
					'Freezer is located below the refrigerator section',
					'Available in single door or French door models',
					'3-,4-, and 5-door models are available ',
					'Easy access to fresh-food compartments',
				),
			),
			array(
				'img' => 'side-by-side-refrigerator.jpg',
				'alt' => 'A refrigerator with side-by-side doors',
				'headline' => 'Side-by-Side',
				'url' => 'http://www.searshometownstores.com/Refrigerators-Freezers/Side-by-Side-Refrigerators',
				'list' => array(
					'Fridge and freezer section are equal in size',
					'Good for narrow spaces or galley style kitchens',
					'More freezer capacity than other configurations',
				),
			),
			array(
				'img' => 'top-freezer-refrigerator.jpg',
				'alt' => 'A refrigerator with a top freezer',
				'headline' => 'Top Freezer',
				'url' => 'http://www.searshometownstores.com/Refrigerators-Freezers/Top-Freezer-Refrigerators',
				'list' => array(
					'Traditional and reliable',
					'Comes in a wide variety of sizes',
					'Offers the most storage space for its size',
					'Freezer at eye level',
				),
			),
		),
		'tip' => '<span class="text-uppercase">MEASURE YOUR SPACE BEFORE YOU SHOP.</span> Account for at least an extra inch of space around the top, sides and back of where the refrigerator will go for proper ventilation.',
	),

	'refrigerator-features' => array(
		'headline' => 'The Bells and Whistles &mdash; Refrigerator Features',
		'features' => array(
			array(
				'headline' => 'In-Door Ice/Water Dispenser',
				'copy' => 'Forget about replacing your Brita<sup>&reg;</sup> filter or those annoying ice trays with this convenient feature.',
			),
			array(
				'headline' => 'Smart Technology ',
				'copy' => 'Write your grocery list or check to see what you&rsquo;re low on with a Wi-Fi enabled touchscreen like Samsung&rsquo;s The Family Hub&trade;.',
			),

			array(
				'headline' => 'Dual Cooling System',
				'copy' => 'Separate cooling systems for the Refrigerator and Freezer keeps temperatures stable and food at its freshest.',
			),

			array(
				'headline' => 'Energy Saving Models',
				'copy' => 'Use a minimum of 20% less energy a year than traditional models, which in turn saves you money on utility bills.',
			),

			array(
				'headline' => 'Finish',
				'copy' => 'Keep your kitchen stylish with stainless steel, black stainless, metallic, slate, black or white!',
			),

			array(
				'headline' => 'Shelves',
				'copy' => 'Come in wire or glass options for a classic look or easier clean up.',
			),

			array(
				'headline' => 'Door-in-Door Storage',
				'copy' => 'A separate, outer compartment for easy access to drinks or other snacks of choice.',
			),

			array(
				'headline' => 'Air-Filtration',
				'copy' => 'Added filter that works with air circulation to filter out smells and keep your food fresh.',
			),

			array(
				'headline' => 'Temperature/Humidity Control Drawers ',
				'copy' => 'Allows you the ability to customize temperatures for the food you buy in order to keep it fresher, longer.',
			),

			),
		'tip' => '<span class="text-uppercase">SAVE YOURSELF MONEY AND TIME</span> by organizing your fridge in a way that makes sense for your grocery buying habits. If you keep all the dairy products in one space, you&rsquo;re less likely to lose that sour cream in the back that might go moldy without your notice.',
	),

	'recipes' => array(
		'headline' => 'Desserts with Less Work – Yummy, No-Bake Recipes',
		'copy' => 'Do you have a sweet tooth? Use your fridge to whip up these quick and easy, no-bake recipes. Less time, less mess and instant success with just a mixing bowl and your refrigerator. <a href="' . $prod_img_dir . 'berry-fridge-cake-recipe.pdf" data-href="' . $prod_img_dir . 'berry-fridge-cake-recipe.pdf" class="font--a142ad">Berry Fridge Cake</a> and <a href="' . $prod_img_dir . 'chocolate-refrigerator-cookies-recipe.pdf" data-href="' . $prod_img_dir . 'chocolate-refrigerator-cookies-recipe.pdf" class="font--a142ad">Ready in a Pinch Chocolate Refrigerator Cookies</a> are yummy!',
		'items' => array(
			array(
				'img' => 'berry-fridge-cake-recipe.jpg',
				'alt' => 'No-Bake Berry Fridge Cake Recipe',
				'url' => 'berry-fridge-cake-recipe.pdf',
				'pre' => 'Refrigerated Recipe Idea:',
				'headline' => 'No-Bake Berry Fridge Cake',
				'copy' => 'Delicious doesn’t need to be baked! Use your refrigerator to whip up this tasty berry delight.',
				'link-text' => 'Download Recipe PDF',
			),
			array(
				'img' => 'chocolate-refrigerator-cookies-recipe.png',
				'alt' => 'Chocolate Refrigerator Cookies Recipe',
				'url' => 'chocolate-refrigerator-cookies-recipe.pdf',
				'pre' => 'Refrigerated Recipe Idea:',
				'headline' => 'Chocolate Refrigerator Cookies',
				'copy' => 'Tasty chocolate and peanut butter cookies that are super simple to make. ',
				'link-text' => 'Download Recipe PDF',
			),
		),
	),




	'how-tos' => array(
		'headline' => 'How-To: Create an Amazing Fridge Gallery <br>on Non-Magnetic Stainless Steel',
		'copy' => 'Believe it or not, not all fridges are magnetic anymore &mdash; but don&rsquo;t let that stop you from proudly displaying your pictures and notes. Our DIY Fridge Gallery ideas will help you keep your favorite memories and memos in full view.',
		'items' => array(
			array(
				'img' => 'framed-art-gallery-how-to.jpg',
				'alt' => 'Framed Art Gallery How-To',
				'url' => 'framed-art-gallery-how-to.pdf',
				'pre' => 'DIY Idea:',
				'headline' => 'Create a Framed Art Gallery',
				'copy' => 'An easy framed gallery how-to for stainless steel (non–magnetic) refrigerators.',
				'link-text' => 'Download DIY PDF',
			),
			array(
				'img' => 'hanging-art-gallery-how-to.jpg',
				'alt' => 'Hanging Art Gallery How-To',
				'url' => 'hanging-art-gallery-how-to.pdf',
				'pre' => 'DIY Idea:',
				'headline' => 'Create a Hanging Art Gallery',
				'copy' => 'An easy hanging gallery how-to for stainless steel (non–magnetic) refrigerators.',
				'link-text' => 'Download DIY PDF',
			),
		),
	),

);


/**
Brand Logos
*/
$brand_logos_link_url = '/buying-guide-refrigerators';
$brand_logos_heading = 'Ready to learn more about fridges? Read our <a href="%1$s" data-href="%1$s" class="font--700 font--primary2">buying guide</a>. Ready to shop fridges? We have unbeatable prices on the best brands available.';

$brand_logos_heading = sprintf( $brand_logos_heading, $brand_logos_link_url );

$shop_now_url = 'http://www.searshometownstores.com/Refrigerators-Freezers';
