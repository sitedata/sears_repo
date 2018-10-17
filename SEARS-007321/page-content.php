<?php
/**
Put the variables storing the copy, et al, into a separate file.
*/
require_once( dirname( __FILE__ ) . '/page-data.php' );

/**
IMPORTANT!
HERO MUST BE OUTSIDE OF DIV.CONTAINER TO BE FULL WIDTH!
*/
?>
<div class="cms-content cms-content-html padding-vert-xl SEARS--landing-page <?php echo $slug ?>" id="cms-content-1920-1920">
  <!-- BEGIN #hero -->
  <section id="hero">
      <div class="heroText font-40 font--700">Fall Lawn &<br> Garden Care</div>
      <div class="banner">
      <picture class="picture img-responsive mqImage width100percent">
        <source media="(max-width:991px)" srcset="<?php echo 'http://hometown.sb3.production.netsuitestaging.com/assets/cms/purered/2018_10_04_FallLawnGardenCare/SHO_1011_Fall_LG_main_LP_M_FNL_01.jpg' ?>">
        <source media="(min-width:992px)" srcset="<?php echo 'http://hometown.sb3.production.netsuitestaging.com/assets/cms/purered/2018_10_04_FallLawnGardenCare/SHO_1011_Fall_LG_main_LP_D_FNL_01.jpg' ?>">
        <img src="<?php echo 'http://hometown.sb3.production.netsuitestaging.com/assets/cms/purered/2018_10_04_FallLawnGardenCare/SHO_1011_Fall_LG_main_LP_D_FNL_01.jpg' ?>" alt="Fall Lawn & Garden Cleanup Tips" class="picture__img img-responsive mqImage width100percent">
      </picture>
      </div>
  </section>
  <!-- END #hero -->

<!-- extra wrapper around all these things that are spozta be 65px narrower than hero -->
<div class="">

  <!-- HEADLINE -->
  <section class="container headline">
    <div class="col-xs-12">
      <div class="row">
        <div class="col-xs-12">
          <div class="headline--copy text-align-center font-31 noHorizontalPad">
            <?php echo clean_text( $headline ) ?>
          </div>
        </div>
<!--         <div class="col-xs-12 col-sm-12 fake-bottom-border">
          <hr class="bordered--bottom bordered--sm">
        </div> -->
      </div>
    </div>
  </section>

  <section class="container no-pad">

    <div class="col-xs-12 padding-vert-xl noHorizontalPad">
<?php foreach( $content as $i => $row ): ?>
<?php
// lazy
$img = $row['img'];
$heading = clean_text( $row['heading'] );
$copy = clean_text( $row['copy'] );

?>
<?php if ( $i % 2 == 0 ): ?>
            <div class="row">
<?php endif; ?>
              <div class="col-sm-12 col-md-6">
                  <img src="<?php echo $img ?>" class="width100percent" alt="<?php echo $heading ?>">
                  <div class="padding-vert-xl">
                    <h3 class="font--700 font--primary2"><?php echo $heading ?></h3>
                    <p class="font--black font-18px"><?php echo $copy ?></p>
                  </div>
                  <div class="font-18px padding-bottom-xl"><a href="<?php echo $row['linkref']?>"><?php echo $row['linkcopy']?></a></div>
              </div>
<?php if ( $i % 2 == 1 ): ?>
            </div><!-- div.row -->
<?php endif; ?>
<?php endforeach; ?>
    </div><!-- div.col-xs-12 -->
  </section>

        <!-- FOOTER-ISH HEADLINE -->
        <section class="container headline footer-ish--headline">
<?php
/**
MOTHERSCRATCHING, INCONSISTENT, FAKE BORDERS THAT WANT TO BUST OUT OF BOXES!
*/
?>
          <div class="fake-bottom-border">
            <hr class="visible-xs visible-sm bordered--bottom bordered--sm">
          </div>



<?php

/**
Add a MFn additional parameter to allow for hiding the brand_logos_heading
to match the inconsistent design!
*/

// use element to include reusable page-element snippet!
// element( 'brand-logos.php',
//   compact( 'brand_logos_heading', 'brand_logos_heading_wrapper_classes' )
// );
?>
  </div><!-- div.pading-horiz-xl -->
</div><!-- #cms-content-1920-1920.cms-content.cms-content-html -->
