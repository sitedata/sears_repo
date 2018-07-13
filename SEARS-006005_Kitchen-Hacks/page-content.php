<?php

/**

*/

$slug = basename( dirname( __FILE__ ) );

$img_dir = get_image_dir( __FILE__ );

$img_dir = get_relative_path( dirname( __FILE__ ) ) . '/img/';
$logo_dir = $img_dir . 'logos/';

$hero = array(
  'img' => '01_masthead_Entertaining.jpg',
  'alt' => htmlentities("Cooking Essentials: Can't-Miss Cooking Hacks"),
);

$content = array(
  array(
    'img' => '02_PittingCherries.jpg',
  	'heading' => "1.	Pitting Cherries",
  	'subheading' => "Perfect for pies, cheese plates, garnishes & more.",
    'youll_need' => true,
    'list' => array(
  		"A glass or plastic soda bottle, a chopstick",
  		"Place cherry on top of an open soda bottle",
  		"Insert chopstick down through the center",
  		"Out pops the pit!",
    ),
  ),
  array(
    'img' => '03_DestemStrawberries.jpg',
  	'heading' => "2.	De-stem Strawberries",
  	'subheading' => "Delicious muddled in drinks or tossed in a fruit salad.",
    'youll_need' => true,
    'list' => array(
  		"A straw",
  		"Push straw through the berry's bottom",
  		"Stem will pop out clean!",
    ),
  ),
  array(
    'img' => '04_ChoppedOnions.jpg',
  	'heading' => "3.	Tear-Free Chopped Onions",
  	'subheading' => "Try these tricks for tearless prep.",
    'youll_need' => false,
    'list' => array(
  		"Chew gum",
  		"Submerge the onion in cold water first",
  		"Turn on a fan",
  		"Light a candle",
      ),
    ),
    array(
      'img' => '05_ElegantIceCubes.jpg',
  	'heading' => "4.	Elegant Ice Cubes",
  	'subheading' => "Liven up everything from mixed drinks to water.",
    'youll_need' => true,
    'list' => array(
  		"A muffin pan (silicone or tin), chopped citrus fruit, mint or cucumber",
  		"Place your favorite combo of fruit and herbs in the pan",
  		"Pour in some boiled-then-cooled water",
  		"Freeze then serve",
      ),
    ),
    array(
      'img' => '06_PeelHardboiledEggs.jpg',
    	'heading' => "5.	Peel Hardboiled Eggs",
    	'subheading' => "Try them deviled, diced or sliced.",
      'youll_need' => false,
      'list' => array(
    		"After boiling, angle the lid inside the pot and drain the water out into the sink using the lid to keep the eggs inside",
    		"Refill the pan halfway with cold water",
    		"Put on the lid, hold firm and shake it up",
    		"Remove the lid and find the eggs already halfway-peeled",
    		"Slide off the remaining shells with your thumbs",
      ),
    ),
);


$bonus_round = array(
/*
Bonus Round

	Stop boil over
by placing a wooden spoon across the pot.
	Dry fresh herbs fast
using the microwave.
	Defrost meat 30% faster
by placing on an aluminum tray.
	Spray measuring cups with nonstick cooking spray
when working with sticky ingredients like honey or peanut butter.
	Get 20% more juice from your lemons
when you microwave them for 20 seconds each.
	Use an ice cream scoop
to craft the perfect meatball and keep your hands clean.
	Prevent spoiling
by storing your onions and potatoes separately.

*/
);


$logos = array(
  '01_Kenmore.png',
	'02_Whirlpool.png',
	'03_Frigidaire.png',
	'03_GE.png',
	'04_LG.png',
	'05_Samsung.png',
	'06_Bosch.png',
	'07_KitchenAid.png',
);

/**

IMPORTANT!
HERO MUST BE OUTSIDE OF DIV.CONTAINER TO BE FULL WIDTH!

*/
?>
<div class="cms-content cms-content-html padding-vert-xl <?php echo $slug ?>" id="cms-content-1920-1920">
    <!-- BEGIN #hero -->
    <!-- TEMPLATE STARTS: n-->
    <section id="hero">
        <img alt="<?php echo $hero['alt'] ?>" src="<?php echo $img_dir . $hero['img'] ?>" class="img-responsive mqImage width100percent">
    </section><!-- #hero -->
    <!-- END #hero -->

    <div id="<?php echo $slug ?>" class="container <?php echo $slug ?>">

        <div class="col-xs-12">
<?php foreach( $content as $row ): ?>
<?php
// lazy
$img = $img_dir . $row['img'];
$heading = htmlspecialchars( $row['heading'] );
$subheading = htmlspecialchars( $row['subheading'] );
$list = array_map( 'htmlspecialchars', $row['list'] );

?>
            <div class="row padding-vert-xl">
                <div class="col-sm-12 col-md-6 col-left">
                    <img src="<?php echo $img ?>" class="width100percent" alt="<?php echo $heading ?>">
                </div>
                <div class="col-sm-12 col-md-6 padding-horiz-xl col-right">
                    <h3 class="font--400"><?php echo $heading ?></h3>
                    <h5><?php echo $subheading ?></h5>
<?php if ( $row['youll_need'] ): ?>
                    <strong>You&rsquo;ll Need:</strong>
<?php endif; ?>
                    <ul>
<?php foreach( $list as $i => $li ): ?>
                    <li><?php echo $li ?></li>
<?php endforeach; ?>
                    </ul>
                </div>
              <?php if ( true || $row != end( $content ) ): ?>
                <div class="col-xs-12 col-sm-12 padding-horiz-xl fake-bottom-border">
                  <hr class="bordered--bottom bordered--sm">
                </div>
              <?php endif; ?>
            </div>
<?php endforeach; ?>
<!-- BONUS ROUND -->
            <div class="row padding-vert-xl bonus-round">
              <h2>Bonus Round:</h2>
              <div class="col-xs-11 col-sm-12 bordered--bottom bordered--sm padding-horiz-xl fake-bottom-border"></div>
            </div>

<!-- LOGOS -->
          <div class="row padding-vert-xl brand-logos">
            <strong></strong>
            <div class="">
              LOGOS
            </div>
            <a href="#">CTA</a>
          </div>
        </div><!-- .col-xs-12 -->
    </div><!-- .container -->
</div><!-- #cms-content-1920-1920.cms-content.cms-content-html -->
