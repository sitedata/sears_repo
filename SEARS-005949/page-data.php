<?php

// get the directory name
$slug = basename( dirname( __FILE__ ) );

$img_dir = get_relative_path( SEARS_PROJECT_PATH . '/img/' );

$hero = array(
	'img' => '01_masthead_LaundryHacksLifeEasier.jpg',
	'alt' => 'Laundry essentials 6 Hacks to Step Your Laundry Game Up',
);

$headline = "Lost socks, ruined tops and loads and loads of laundry that pile up. Feeling overwhelmed? We’re here to help with a handful of practical tips to make sure laundry doesn’t take over your life!";


$content = array(
	array(
		'img' => '02_HelpYourKids.jpg',
		'heading' => "1. Help your kids remember where their clothes belong with DIY stickers",
		'copy' => clean_text("Print out ") . "<a href=\"#\" class=\"font--600 font--black sticker--link\">this template</a>" . clean_text(" and create cute DIY stickers to label your kid’s furniture. Now, they have no excuse for not handling this most basic chore. Speaking of kids…"),
		'extra' => "Download Sticker Template",
		'extra_img' => 'icon-document.png',
  ),
	array(
		'img' => '03_UseTheDot.jpg',
		'heading' => "2. Use the dot system to organize kids’ clothes",
		'copy' => clean_text("Whether it’s matching outfit gifts from Grandma or a hand-me-down from older siblings, there will be times when you’re confused as to what belongs to who. Whip out a permanent marker and try this: draw one dot on everything belonging to the oldest, two dots for the next oldest, and so on. Once an item gets passed down, you simply add a dot. Boom."),
  ),
	array(
		'img' => '04_SayGoodbye.jpg',
		'heading' => "3. Say goodbye to lonely socks",
		'copy' => clean_text("We’ve all been there: two socks enter, one sock leaves. Try supplying every family member with a mesh bag for their dirty socks. Then, just close the bags and throw them into the washing machine."),
  ),
	array(
		'img' => '05_SaveTheIroning.jpg',
		'heading' => "4. Save the ironing",
		'copy' => clean_text("In our book, if it’s not a dress shirt, why press it? Toss in the dryer with a damp dryer sheet on the “dewrinkle cycle” for about 20 mins and voila!"),
  ),
	array(
		'img' => '06_WriteDirectionsOnMachines.jpg',
		'heading' => "5. Write directions on the machines with dry-erase markers",
		'copy' => clean_text("This is the laundry version of leaving a note on the fridge. You can enlist everyone and tell them when it’s time to switch loads, what needs to air dry or which items may need special attention."),
  ),
	array(
		'img' => '07_UnshrinkClothes.jpg',
		'heading' => "6. Unshrink clothes using conditioner",
		'copy' => clean_text("Soak your shrunk, washed garments in lukewarm water with ordinary hair conditioner for 15 minutes. Rinse the conditioner for 5 minutes, then wring the residual water out. Stretch the garments and allow them to air dry."),
    ),
);

/**
Brand Logos
*/
$brand_logos_heading = "Shop the latest <a href=\"#\" class=\"font--700 font--primary2\">appliances</a> for the best in laundry solutions. We have unbeatable prices on the best brands available.";
