<?php

/***
 NetSuite image directory

http://hometown.sb3.production.netsuitestaging.com/assets/cms/purered/2018-08-08_Refrigerator-Essentials/


http://hometown.sb3.production.netsuitestaging.com/assets/cms/purered/brand-logos/


 */


// get the directory name
$slug = basename( dirname( __FILE__ ) );

$img_dir = get_image_dir();

$prod_img_dir = 'http://hometown.sb3.production.netsuitestaging.com/assets/cms/purered/2018-08-08_Refrigerator-Essentials/';

// bento-boxes_760w.jpg
// bento-boxes_941w.jpg
// chopped-chicken-breast_760w.jpg
// chopped-chicken-breast_941w.jpg
// fast-healthy-weeknight-dinners_800w.jpg
// fast-healthy-weeknight-dinners_991w.jpg
// fast-healthy-weeknight-dinners_1550w.jpg
// hand-washing-dishes_760w.jpg
// hand-washing-dishes_941w.jpg
// oven-roasted-veggies_760w.jpg
// oven-roasted-veggies_941w.jpg

$hero = array(
	'picture' => array(
		array(
			'media' => '(max-width:991px)',
			'srcset' => 'fast-healthy-weeknight-dinners_991w.jpg',
		),
		array(
			'media' => '(min-width:992px)',
			'srcset' => 'fast-healthy-weeknight-dinners_1550w.jpg',
		),
	),
	'img' => 'fast-healthy-weeknight-dinners_991w.jpg',
	'alt' => 'A family cooking a healthy meal together.',
	'h1' => 'Time-saving Tips for Fast, Healthy Weeknight Dinners',
	'text' => 'Between getting ready for work, kids off to school, extracurricular school activities and completing homework, you have enough to think about on a daily basis. Don’t let “what are we having for dinner” become that nagging question at the end of a long day! Use these tips and tricks to get healthy meal options onto your table in no time.',
);

$content = array(
  array(
    'img' => 'bento-boxes_760w.jpg',
  	'alt' => "Bento boxes",
  	'subheading' => "Plan and Prep Ahead of Time",
    'listitem' => array(
  		"Make your menus a week in advance and include days for leftovers or eating out.",
  		"Include a protein, a vegetable and a carb in each meal.",
  		"Wash and chop your vegetables ahead of time for a quick snack or easy addition to any meal."
    ),
    // 'link' => array(
    // 	"#",
    // 	"#",
    // ),
    // 'linktext' => array(
  		// "Shop Freezers",
  		// "Shop Refrigerators"
    // ),
  ),
 );

$links =array( 
	array(
	'reference' => "#",
	'linktext' => 'Shop Freezers'
		)
	,array(
	'reference' => "#",
	'linktext' => 'Shop Refrigerators'
		)
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
