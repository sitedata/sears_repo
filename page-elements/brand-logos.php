<?php

if ( defined( 'SEARS_USE_SANDBOX_ASSETS' ) && SEARS_USE_SANDBOX_ASSETS ) {
  $logo_dir = 'http://hometown.sb3.production.netsuitestaging.com/assets/cms/purered/brand-logos/logos/';
}
else if ( defined( 'SEARS_PROJECT_PATH' ) ) {
  $logo_dir = get_relative_path( SEARS_PROJECT_PATH . '/img/logos/' );
}
else {
  $logo_dir = '/assets/cms/brand-logos/';
}

$brand_logos_link_url = isset( $brand_logos_link_url ) ? $brand_logos_link_url : '#';

$brand_logos_heading = isset( $brand_logos_heading ) ?
  replace_non_display_chars( $brand_logos_heading ) :
  'Shop the latest <a href="%1$s" data-href="%1$s"class="font--primary2 font--700">appliances</a> for the best in kitchen solutions. We have unbeatable prices on the best brands available.';

if ( false !== strpos( $brand_logos_heading, '%1$s') ) {
  $brand_logos_heading = sprintf( $brand_logos_heading, $brand_logos_link_url );
}

$brand_logos_heading_wrapper_classes = isset( $brand_logos_heading_wrapper_classes ) ?
  ' ' . $brand_logos_heading_wrapper_classes : '';

$shop_now_url = isset( $shop_now_url ) ? $shop_now_url : '#';

$logos = isset( $logos ) ? $logos :
  array(
    'Kenmore' => '01_Kenmore.png',
  	'Whirlpool' => '02_Whirlpool.png',
    'GE' => '03_GE.png',
  	'Frigidaire' => '04_Frigidaire.png',
  	'LG' => '05_LG.png',
  	'Samsung' => '06_Samsung.png',
  	'Bosch' => '07_Bosch.png',
  	'KitchenAid' => '08_KitchenAid.png',
  );

?>
<!-- BRAND LOGOS -->
        <section class="container brand-logos">

          <!-- BRAND LOGOS HEADING -->
          <div class="row<?php echo $brand_logos_heading_wrapper_classes ?>">
            <div class="col-xs-12 padding-vert-xl">
              <strong class="brand-logos--heading font--black"><?php echo $brand_logos_heading ?></strong>
            </div>
          </div>

          <div class="row">
<?php
// place to store index since $logos is an associative array
$i = 0;
?>
<?php foreach ( $logos as $brand => $logo ): ?>
  <?php if ( $i == 0 || $i == ceil(count( $logos ) / 2) ): ?>
            <div class="col-xs-12 col-sm-12 col-md-6 brand-logos--col<?php if ( $i !== 0 ): echo ' brand-logos--col_right'; endif; ?>">
              <div class="brand-logos--wrapper">
  <?php endif; ?>
                <div class="brand-logo">
                  <img src="<?php echo $logo_dir . $logo ?>" alt="<?php echo $brand ?>" class="">
                </div>
  <?php if ( $logo === end( $logos ) || $i == (( count( $logos ) / 2 ) - 1) ): ?>
              </div>
            </div>
  <?php endif; ?>
  <?php $i++; ?>
<?php endforeach; ?>
          </div>
          <div class="row">
            <div class="col-xs-12 padding-vert-xl text-align-center">
              <a href="<?php echo $shop_now_url ?>" data-href="<?php echo $shop_now_url ?>" class="btn btn-lg btn--shop-now"><span>shop</span>now</a>
            </div>
          </div>
        </section><!-- .col-xs-12 -->
