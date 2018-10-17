<?php

$slug = basename( dirname( __FILE__ ) );

$img_dir = get_image_dir( __FILE__ );

$img_dir = get_relative_path( dirname( __FILE__ ) ) . '/img/';


$headlineHeader="Your Guide for Creating a Healthy Compost Pile";

$firstTipBody="<b>Composting reduces household waste by 30%!</b>";

$secondTipBody="<b>For best composting results,</b> the pile should be a mixture of <b>1/3 green matter</b> to <b>2/3 brown matter</b>.";
$thirdTipBody="<b>The right time to compost is late spring, summer and fall</b> when the temperatures are just right to break down your browns and greens.";

$dataHeadline = array(
   
   'compostBenefit'=>array(
    'headline'=>'Compost Benefits',
    'copy'=>htmlentities('Your yard will thank you! Compost is an amazing, organic fertilizer for your yard and garden. It restores depleted soil and helps to ward off plant diseases. When you make your own, it saves money and benefits the environment! In fact, did you know that composting reduces household waste by 30%?')
    ),
  'compostHead'=>array(
    'headline'=>'What to Compost',
    'copy'=>htmlentities('It’s as easy as 1-2-3! Composting requires three basic ingredients: browns, greens and moisture. ')
    ),
    'nonCompostHead'=>array(
    'headline'=>'What NOT to Compost',
    'copy'=>htmlentities('Not all scraps are created equal. To keep your compost healthy, do not add the following:')
    ),
    'CompostHow'=>array(
    'headline'=>'Compost How-To',
    'copy'=>htmlentities('You’ve gathered your materials—now what do you do? ')
    ),
     'CompostUse'=>array(
    'headline'=>'Put Compost to Use',
    'copy'=>htmlentities('When your compost is ready to use, add a 1 to 2-inch layer to the top of your soil, then use a tiller to work it into your garden about 3 to 5 inches deep. Or, add a handful of compost into each hole when you are planting your seeds or seedlings.'),
    'linktext'=>'Shop Tillers',
    'linkref'=>'/Lawn-Garden/Outdoor-Power-Equipment/Tillers-Cultivators')
  );

$imgGroup=array(
  array(
    'img'=>'http://hometown.sb3.production.netsuitestaging.com/assets/cms/purered/2018-10-08-SEARS_Composting101_SubLandingPage/SHO_1011_compost_LP_nottocompost_01_dairy.jpg',
    'copy'=>'Dairy products'),
  array(
    'img'=>'http://hometown.sb3.production.netsuitestaging.com/assets/cms/purered/2018-10-08-SEARS_Composting101_SubLandingPage/SHO_1011_compost_LP_nottocompost_02_meat.jpg',
    'copy'=>'Meat, fish or bones'),
  array(
    'img'=>'http://hometown.sb3.production.netsuitestaging.com/assets/cms/purered/2018-10-08-SEARS_Composting101_SubLandingPage/SHO_1011_compost_LP_nottocompost_03_diseasedplants.jpg',
    'copy'=>'Diseased plants'),
  array(
    'img'=>'http://hometown.sb3.production.netsuitestaging.com/assets/cms/purered/2018-10-08-SEARS_Composting101_SubLandingPage/SHO_1011_compost_LP_nottocompost_04_coal.jpg',
    'copy'=>'Coal or charcoal ash'),
  array(
    'img'=>'http://hometown.sb3.production.netsuitestaging.com/assets/cms/purered/2018-10-08-SEARS_Composting101_SubLandingPage/SHO_1011_compost_LP_nottocompost_05_coloredpaper.jpg',
    'copy'=>'Colored paper'),
  array(
    'img'=>'http://hometown.sb3.production.netsuitestaging.com/assets/cms/purered/2018-10-08-SEARS_Composting101_SubLandingPage/SHO_1011_compost_LP_nottocompost_006chemicallytreated.jpg',
    'copy'=>'Chemically treated yard waste')

  );

$TopPicks =array(
  array(
    'img'=>'http://hometown.dev1.sb3.production.netsuitestaging.com/assets/cms/purered/2018-10-08-SEARS_Composting101_SubLandingPage/SHO_1011_compost_LP_composthowto_01.jpg',
    'alt'=>'Compost Pile',
    'copy'=>'Your compost pile should <b>start on bare earth</b>. This allows worms and other organisms to do their jobs. '
    ),
    array(
    'img'=>'http://hometown.dev1.sb3.production.netsuitestaging.com/assets/cms/purered/2018-10-08-SEARS_Composting101_SubLandingPage/SHO_1011_compost_LP_composthowto_02.jpg',
    'alt'=>'Bin',
    'copy'=>'<b>Place your bin in an out-of-the-way, shady spot</b> in your yard, then lay the twigs and sticks first. This will allow the pile to drain properly.'
    ),
    array(
    'img'=>'http://hometown.dev1.sb3.production.netsuitestaging.com/assets/cms/purered/2018-10-08-SEARS_Composting101_SubLandingPage/SHO_1011_compost_LP_composthowto_03.jpg',
    'alt'=>'Mixture',
    'copy'=>'Next, <b>add your mixture of browns and greens.</b> The final ingredient: moisture. Your pile should have the wetness of a wrung-out sponge. Don’t soak it. '
    ),
    array(
    'img'=>'http://hometown.dev1.sb3.production.netsuitestaging.com/assets/cms/purered/2018-10-08-SEARS_Composting101_SubLandingPage/SHO_1011_compost_LP_composthowto_04.jpg',
    'alt'=>'Pile',
    'copy'=>'<b>Turn your pile every two weeks.</b> It is ready to use when it looks and smells like very dark soil.'
    )

  );


$footer_copy = "Now you know ten money-saving secrets to keeping your things fresh by throwing them in your weekly wash.";

// hide the brand logos heading on mobile for some reason...
$brand_logos_heading_wrapper_classes = 'visible-md-inline visible-lg-inline visible-xl-inline';

$brand_logos_heading = replace_non_display_chars( "Ready to shop? We have unbeatable prices on a wide variety of washers from the best brands available." );
