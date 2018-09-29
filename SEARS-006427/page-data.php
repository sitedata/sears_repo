<?php

$slug = basename( dirname( __FILE__ ) );

$img_dir = get_image_dir( __FILE__ );

$img_dir = get_relative_path( dirname( __FILE__ ) ) . '/img/';



// $hero = array(
//   'img' => '01_masthead_Mattress_buying_guide.jpg',
//   'alt' => htmlentities("Mattress Buying Guide - How to Choose the Right Mattress"),
// );

$Tip="<b>Lie down!</b> It’s the tried and true technique to get a good feel of a new mattress. If possible, spend 5-10 minutes trying out your favorite sleep positions before you buy. ";

$video= array(
  'img'=>'http://hometown.dev1.sb3.production.netsuitestaging.com/assets/cms/purered/2018_09_28_Mattress_LandingPage/02_videoTipsforAGoodNightSleep.jpg',
  'alt'=>htmlentities("Video: Tips for a Good Night’s Sleep Tips for a Good night Sleep pand5")
  );

$sleep="A good night’s sleep starts with the right mattress and you need your beauty rest for great days ahead! Find a mattress that fits <b><i>you</i></b> by considering your sleep style. Are you a side sleeper, back sleeper or stomach sleeper? Do you have pets, kids or a spouse sharing your mattress? How big is your bedroom? Take these things into consideration before you purchase.";

$dataHeadline = array(
  'mattress-size'=>array(
    'headline'=>'Which Mattress Size Is Right for You?',
    'copy'=>htmlentities('Finding the right size mattress is all about comfort. A few things to think about:')
    ),
   'mattress-type'=>array(
    'headline'=>'Which Mattress Type Is Best for You?',
    'copy'=>htmlentities('The way a mattress is made determines how it sleeps. Traditional innerspring mattresses are made with springs (also called “coils”) inside, which provide the softness or firmness for comfortable sleeping. Today, there are also memory foam and hybrid options available, giving you choices in how you sleep.')
    ),
    'comfort-counts'=>array(
      'headline'=>'Comfort Counts -<br> How to Choose the Ideal Firmness and Support',
      'copy'=>htmlentities('The firmer the mattress, the less you’ll feel like you’re sinking into the bed. The firmness is determined by the upper layers of the mattress. Support is determined by the lower layers of the mattress. Typically, innerspring mattresses are firmer because they’re made with coils or springs. Memory foam mattresses may be soft or firm, depending on the construction of the foam. Hybrid mattresses offer the benefits of coils and foam. Larger people may prefer the support of a firmer mattress, while smaller people may be comfortable on a softer mattress. The choice comes down to personal preference.')
    ),
     'top-pick'=>array(
      'headline'=>'Top Picks - Choosing the Type of Mattress Top',
      'copy'=>htmlentities('Every mattress has a top layer that’s usually quilted or tufted for appearance and comfort. Depending on your sleeping style, you may want the plushness of a Pillow Top or Euro Top or the firmer feel of a Tight Top. There are also Specialty Tops to suit your unique comfort needs.')
    ),
    'dream-bed'=>array(
      'headline'=>'Finish Your Dream Bed from the Bottom Up -<br> Box Springs and Bed Frames',
      'copy'=>htmlentities('Complete your new bed with a quality box spring and bed frame. If seeking customized support, an adjustable base may be best for you.')
    )
  );

$mattressSizeRow1 =array(
  array(
    'img'=>'http://hometown.dev1.sb3.production.netsuitestaging.com/assets/cms/purered/2018_09_28_Mattress_LandingPage/03_CaliforniaKing.jpg',
    'alt'=>'California King',
    'listHead'=>'California King',
    'link'=>'/Mattresses/Mattresses/California-King-Mattresses',
    'listcopy'=>array(
      'The longest mattress on the market—4” longer than a King, but 4” narrower',
      'Ideal for tall people (over 6’)',
      'Plenty of space for pets or young children to share')
    ),
    array(
    'img'=>'http://hometown.dev1.sb3.production.netsuitestaging.com/assets/cms/purered/2018_09_28_Mattress_LandingPage/04_King.jpg',
    'alt'=>'King',
    'listHead'=>'King',
    'link'=>'/Mattresses/Mattresses/King-Mattresses',
    'listcopy'=>array(
      'The widest mattress on the market—16” wider than a Queen',
      'Generous space for couples',
      'Plenty of space for pets or young children to share')
    ),
    array(
    'img'=>'http://hometown.dev1.sb3.production.netsuitestaging.com/assets/cms/purered/2018_09_28_Mattress_LandingPage/05_Queen.jpg',
    'alt'=>'Queen',
    'listHead'=>'Queen',
    'link'=>'/Mattresses/Mattresses/Queen-Mattresses',
    'listcopy'=>array(
      'The most popular mattress size',
      'Provides more space than a Full, and fits in most bedrooms',
      'Comfortably spacious for couples')
    )
  );
$mattressSizeRow2 =array(
  array(
    'img'=>'http://hometown.dev1.sb3.production.netsuitestaging.com/assets/cms/purered/2018_09_28_Mattress_LandingPage/06_Full.jpg',
    'alt'=>'Full',
    'listHead'=>'Full',
    'link'=>'/Mattresses/Mattresses/Full-Mattresses',
    'listcopy'=>array(
      'Much bigger than a Twin, but smaller than a Queen',
      'Ideal for solo sleepers',
      'Can accommodate a couple, so it’s a good choice for a guest room')
    ),
    array(
    'img'=>'http://hometown.dev1.sb3.production.netsuitestaging.com/assets/cms/purered/2018_09_28_Mattress_LandingPage/07_Twin.jpg',
    'alt'=>'Twin',
    'listHead'=>'Twin',
    'link'=>'/Mattresses/Mattresses/Twin-Mattresses',
    'listcopy'=>array(
      'Sized for a solo sleeper',
      'Often a first “big bed” for children when they outgrow a crib',
      'Great for guest rooms with limited space')
    )
  );

$MattressTips=array(
    'img'=>'http://hometown.dev1.sb3.production.netsuitestaging.com/assets/cms/purered/2018_09_28_Mattress_LandingPage/08_MattressTips.jpg',
    'alt'=>'Mattress Tips',
    'tip'=>'<b>Replace your mattress every 7-10 years</b> to ensure adequate support and sleeping comfort.'
  );
$ComfortTips="<b>How do you sleep?</b> Side sleepers often prefer a softer mattress, while stomach sleepers typically opt for firmer styles. Back sleepers can usually sleep comfortably on soft, medium or firm beds.";
// $Tip2="<b>Replace your mattress every 7-10 years</b> to ensure adequate support and sleeping comfort. ";

$mattressType =array(
  array(
    'img'=>'http://hometown.dev1.sb3.production.netsuitestaging.com/assets/cms/purered/2018_09_28_Mattress_LandingPage/09_Innerspring.jpg',
    'alt'=>'Innerspring',
    'listHead'=>'Innerspring',
    'link'=>'/s?Category0=Mattresses&Category1=Mattresses&c=3721178&n=2&nav_search=1&search_return=all&Mattressconstruction=Innerspring',
    'listcopy'=>array(
      'Made with springs (or coils) inside',
      'Springs are either tied together or individually wrapped',
      'The more coils, the more the mattress conforms to your body',
      'The gauge and shape of the springs determines how firm the mattress is')
    ),
    array(
    'img'=>'http://hometown.dev1.sb3.production.netsuitestaging.com/assets/cms/purered/2018_09_28_Mattress_LandingPage/10_memoryfoam.jpg',
    'alt'=>'Memory Foam',
    'listHead'=>'Memory Foam ',
    'link'=>'/s?Category0=Mattresses&Category1=Mattresses&c=3721178&n=2&nav_search=1&search_return=all&Mattressconstruction=Memory%20Foam',
    'listcopy'=>array(
      'Made from slow-response foam that conforms to your body',
      'Doesn’t cause pressure to the body',
      'Great for couples because you can’t feel your partner move or shift—no bounce',
      'Because the foam construction relieves pressure, it may help neck, back or shoulder pain')
    ),
    array(
    'img'=>'http://hometown.dev1.sb3.production.netsuitestaging.com/assets/cms/purered/2018_09_28_Mattress_LandingPage/11_Hybrid.jpg',
    'alt'=>'Hybrid',
    'listHead'=>'Hybrid',
    'link'=>'/s?Category0=Mattresses&Category1=Mattresses&c=3721178&n=2&nav_search=1&search_return=all&Mattressconstruction=Hybrid',
    'listcopy'=>array(
      'Combines innersprings with layers of memory foam on top',
      'Gives you the body-conforming coziness of foam with the traditional bounciness of springs',
      'Offers the pressure-relief benefits of memory foam',
      'Offers the best of both worlds')
    )
  );
$TopPicks =array(
  array(
    'img'=>'http://hometown.dev1.sb3.production.netsuitestaging.com/assets/cms/purered/2018_09_28_Mattress_LandingPage/toppicks_01_tighttop.jpg',
    'alt'=>'Tight Top',
    'listHead'=>'Tight Top',
    'link'=>'/s?Category0=Mattresses&Category1=Mattresses&c=3721178&n=2&nav_search=1&search_return=all&Mattresstop=Tight%20Top',
    'listcopy'=>array(
      'Sewn onto the top of the mattress',
      'Less plush, so it provides a firmer feel',
      'Helps support the body')
    ),
    array(
    'img'=>'http://hometown.dev1.sb3.production.netsuitestaging.com/assets/cms/purered/2018_09_28_Mattress_LandingPage/toppicks_02_pillowtop.jpg',
    'alt'=>'Pillow Top',
    'listHead'=>'Pillow Top',
    'link'=>'/s?Category0=Mattresses&Category1=Mattresses&c=3721178&n=2&nav_search=1&search_return=all&Mattresstop=Pillow%20Top',
    'listcopy'=>array(
      'A separate layer of cushioning, resembling a pillow, that’s sewn to the top of the mattress',
      'Provides cushioning for softness',
      'Still offers support, but with plushness')
    ),
    array(
    'img'=>'http://hometown.dev1.sb3.production.netsuitestaging.com/assets/cms/purered/2018_09_28_Mattress_LandingPage/toppicks_03_eurotop.jpg',
    'alt'=>'Euro Top',
    'listHead'=>'Euro Top',
    'link'=>'/s?Category0=Mattresses&Category1=Mattresses&c=3721178&n=2&nav_search=1&search_return=all&Mattresstop=Euro%20top',
    'listcopy'=>array(
      'Similar to a Pillow Top, but rather than a pillow-like design, the edges are flush with the mattress edges',
      'Provides plush cushioning for softness',
      'Still offers support, but with plushness')
    ),
    array(
    'img'=>'http://hometown.dev1.sb3.production.netsuitestaging.com/assets/cms/purered/2018_09_28_Mattress_LandingPage/toppicks_04_specialty.jpg',
    'alt'=>'Specialty',
    'listHead'=>'Specialty',
    'link'=>'/s?Category0=Mattresses&Category1=Mattresses&c=3721178&n=2&nav_search=1&search_return=all&Mattresstop=Specialty',
    'listcopy'=>array(
      'Other top layers designed to add customized comfort to mattresses')
    )

  );
$BoxSpring =array(
  array(
    'img'=>'http://hometown.dev1.sb3.production.netsuitestaging.com/assets/cms/purered/2018_09_28_Mattress_LandingPage/boxspringsframes_01_boxspringsad.jpg',
    'alt'=>'Box Springs',
    'listHead'=>'Box Springs',
    'link'=>'/Mattresses/Box-Springs-Foundations',
    'listcopy'=>array(
      'Help distribute the weight of a mattress for added support and comfort',
      'Available in all mattress sizes')
    ),
    array(
    'img'=>'http://hometown.dev1.sb3.production.netsuitestaging.com/assets/cms/purered/2018_09_28_Mattress_LandingPage/boxspringsframes_02_bedframesad.jpg',
    'alt'=>'Bed Frames',
    'listHead'=>'Bed Frames',
    'link'=>'/Mattresses/Bed-Frames',
    'listcopy'=>array(
      'Raises a mattress and box spring off the floor',
      'Come in metal or wood styles to enhance your bedroom décor')
    ),
    array(
    'img'=>'http://hometown.dev1.sb3.production.netsuitestaging.com/assets/cms/purered/2018_09_28_Mattress_LandingPage/boxspringsframes_03_adjustablebasesh.jpg',
    'alt'=>'Adjustable Bases',
    'listHead'=>'Adjustable Bases',
    'link'=>'/Mattresses/Mattresses/Adjustable-Beds',
    'listcopy'=>array(
      'Customized support',
      'Adjustable bed frames can relieve a variety of sleeping issues by raising your head or elevating your feet so you and your partner can sleep more soundly')
    )

  );
  $dreamBed="<b>Customize your comfort.</b> Adjustable bases help relieve snoring, acid reflux, sleep apnea, lower back pressure and improve circulation.";


$footer_copy = "Now you know ten money-saving secrets to keeping your things fresh by throwing them in your weekly wash.";

// hide the brand logos heading on mobile for some reason...
$brand_logos_heading_wrapper_classes = 'visible-md-inline visible-lg-inline visible-xl-inline';

$brand_logos_heading = replace_non_display_chars( "Ready to shop? We have unbeatable prices on a wide variety of washers from the best brands available." );
