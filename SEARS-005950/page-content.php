<?php

/**
*/

$img_dir = get_image_dir( __FILE__ );

$content = array(
  array(
    'img' => '02_WashingMachineShopping.jpg',
    'heading' => 'Washing Machine Shopping? Start Here!',
    'copy' => "Today's washing machines offer a laundry list of features and options. We've got the scoop on what you need to know.",
    'cta' => 'Learn More',
    'url' => '#',
  ),
  array(
    'img' => '03_YouCanWashThat.jpg',
    'heading' => 'Wait, You Can Wash That?',
    'copy' => "Who has time for handwashing or trips to the dry cleaner? Surprise! You can throw these items right into the machine.",
    'cta' => 'Learn More',
    'url' => '#',
  ),
  array(
    'img' => '04_LaundryHacks.jpg',
    'heading' => '6 Life Changing Laundry Hacks',
    'copy' => "Make your load lighter with these helpful wash day tips & tricks.",
    'cta' => 'Learn More',
    'url' => '#',
  ),
  array(
    'img' => '05_CrackTheCode.jpg',
    'heading' => "Crack the Code",
    'copy' => "Ever find yourself squinting at laundry care symbols on labels and trying to figure out what they mean? Print out this chart, pin it up in your laundry room and never wonder again.",
    'cta' => 'Learn More',
    'url' => '#',
  ),
  array(
    'img' => '06_ComeOutInTheWash.jpg',
    'heading' => "It'll Come Out in the Wash",
    'copy' => "Messes will happen, but stains don't stand a chance when you use these stain removal tricks. Print out this guide and post in your laundry area for easy reference.",
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
        <img alt="Laundry essentials: Appliance Overviews & TOP Tips" src="<?php echo $img_dir ?>01_masthead_LaundryMain.jpg" class="img-responsive mqImage width100percent">
    </section><!-- #hero -->
    <!-- END #hero -->

    <div id="SEARS-005950" class="container SEARS-005950">

        <div class="col-xs-12">
<?php foreach( $content as $row ): ?>
<?php
// lazy
$img = $img_dir . $row['img'];
$heading = nl2br( htmlspecialchars( $row['heading'] ) );
$copy = htmlspecialchars( $row['copy'] );
$cta = htmlspecialchars( $row['cta'] );
?>

            <div class="SEARS-005950--card row padding-vert-xl cursor--pointer" data-href="<?php echo $row['url'] ?>">
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
