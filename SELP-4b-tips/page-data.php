<?php

/***
 NetSuite image directory

http://hometown.sb3.production.netsuitestaging.com/assets/cms/purered/2018-08-08_Refrigerator-Essentials/


http://hometown.sb3.production.netsuitestaging.com/assets/cms/purered/brand-logos/


 */


// get the directory name
$slug = basename( dirname( __FILE__ ) );

$img_dir = get_relative_path( SEARS_PROJECT_PATH . '/images/' );

$prod_img_dir = 'http://hometown.sb3.production.netsuitestaging.com/assets/cms/purered/2018-08-08_Refrigerator-Essentials/';

// $img_dir = $prod_img_dir;

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
