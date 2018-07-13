<?php

/**
*/

$img_dir = get_image_dir( __FILE__ );

$content = array(
  array(
    'img' => '02_CooktopCraze.jpg',
    'heading' => 'Cooktop Craze',
    'copy' => "With so many enticing options and fun features available, it's no wonder customizable cooktops are sought after by home chefs and foodies of all types. Our cooktop overview breaks down everything you need to know.",
    'cta' => 'Learn More',
    'url' => '#',
  ),
  array(
    'img' => '03_WithinRange.jpg',
    'heading' => 'Within Range',
    'copy' => "Part oven, part cooktop; the range is the classic, tried-and-true kitchen appliance. But today, ranges can run the gamut from basic to all the bells and whistles. Our range overview has the scoop.",
    'cta' => 'Learn More',
    'url' => '#',
  ),
  array(
    'img' => '04_WallOvenOptions.jpg',
    'heading' => 'Wall Oven Options',
    'copy' => "Whether you love to bake, have a passion for entertaining or you're just looking for fast and easy meal solutions, there is a wall oven guaranteed to make your kitchen run smoother. Read our wall oven overview for all the details.",
    'cta' => 'Learn More',
    'url' => '#',
  ),
  array(
    'img' => '05_CantMissCookingHacks.jpg',
    'heading' => "Can't-Miss Cooking Hacks",
    'copy' => "Simple shortcuts that make your time in the kitchen easy, efficient and most importantly, enjoyable! Sound like a winning recipe?",
    'cta' => 'Learn More',
    'url' => '#',
  ),
  array(
    'img' => '06_CookingCreativity.jpg',
    'heading' => "Kitchen Creativity:\nTrends in Design",
    'copy' => "Ready to create the kitchen of your dreams? Read about the latest and greatest stylish, and smart solutions.",
    'cta' => 'Learn More',
    'url' => '#',
  ),
  // array(
  //   'img' => '',
  //   'heading' => '',
  //   'copy' => '',
  //   'cta' => 'Learn More',
  // ),
);


/**

IMPORTANT!
HERO MUST BE OUTSIDE OF DIV.CONTAINER TO BE FULL WIDTH!

*/
?>
<div class="cms-content cms-content-html padding-vert-xl" id="cms-content-1920-1920">
    <!-- BEGIN #hero -->
    <!-- TEMPLATE STARTS: n-->
    <section id="hero">
        <img alt="Cooking Essentials Appliance Overviews &amp; TOP Tips" src="<?php echo $img_dir ?>01_Masthead_CookingEssentials.jpg" class="img-responsive mqImage width100percent">
    </section><!-- #hero -->
    <!-- END #hero -->

    <div id="SEARS-005936" class="container SEARS-005936">

        <div class="col-xs-12">
<?php foreach( $content as $row ): ?>
<?php
// lazy
$img = $img_dir . $row['img'];
$heading = nl2br( htmlspecialchars( $row['heading'] ) );
$copy = htmlspecialchars( $row['copy'] );
$cta = htmlspecialchars( $row['cta'] );
?>

            <div class="SEARS-005936--card row padding-vert-xl cursor--pointer" data-4href="<?php echo $row['url'] ?>">
                <div class="col-sm-12 col-md-6 col-left">
                    <img src="<?php echo $img ?>" class="width100percent" alt="<?php echo $heading ?>">
                </div>
                <div class="col-sm-12 col-md-6 padding-horiz-xl col-right">
                    <h3 class="font--400"><?php echo $heading ?></h3>
                    <p class="font--black"><?php echo $copy ?></p>
                    <a href="<?php echo $row['url'] ?>" class="card-link"><?php echo $cta ?></a>
                </div>
              <?php if ( $row != end( $content ) ): ?>
                <div class="col-xs-11 col-sm-12 bordered--bottom bordered--sm padding-horiz-xl fake-bottom-border"></div>
              <?php endif; ?>
            </div>

<?php endforeach; ?>

            <!-- <br class="clear"> -->
        </div><!-- .col-xs-12 -->
    </div><!-- .container -->
</div><!-- #cms-content-1920-1920.cms-content.cms-content-html -->
