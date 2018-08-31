<?php

$brand_logos = isset( $brand_logos ) ? $brand_logos : array();
$brand_logos = is_array( $brand_logos ) ? $brand_logos : compact( 'brand_logos' );

$_defaults = array(
  'headline' => 'Ready to get started?',
  'copy' => 'Sears Hometown Store has unbeatable prices on the best brands available.',
  'link_url' => '#',
  'classes' => '',
  'btn_url' => '#',
  'logo_dir' => '/assets/cms/brand-logos/',
);

$brand_logos = array_merge( $_defaults, $brand_logos );

if ( defined( 'SEARS_USE_SANDBOX_ASSETS' ) && SEARS_USE_SANDBOX_ASSETS ) {
  $brand_logos['logo_dir'] = 'http://hometown.sb3.production.netsuitestaging.com/assets/cms/purered/brand-logos/logos/';
}
// else if ( defined( 'SEARS_PROJECT_PATH' ) ) {
//   $logo_dir = get_relative_path( SEARS_PROJECT_PATH . '/img/logos/' );
// }
// else {
//   $logo_dir = '/assets/cms/brand-logos/';
// }


if ( false !== strpos( $brand_logos['copy'], '%1$s' ) ) {
  $brand_logos['copy'] = sprintf( $brand_logos['copy'], $brand_logos['link_url'] );
}

$logos = isset( $logos ) ? $logos :
  array(
    'Kenmore' => 'kenmore.svg',
    'Kenmore Elite' => 'kenmore-elite.svg',
  	'Whirlpool' => 'whirlpool.svg',
  	'Frigidaire' => 'frigidaire.svg',
  	'Samsung' => 'samsung.svg',
    'Maytag' => 'maytag.png',
    'LG' => 'lg.svg',
    'KitchenAid' => 'kitchenAid.svg',
    'GE' => 'ge.svg',
  	'Bosch' => 'bosch.svg',

// PNGs
    // 'Kenmore' => 'kenmore.png',
    // 'Kenmore Elite' => 'kenmore-elite.png',
  	// 'Whirlpool' => 'whirlpool.png',
  	// 'Frigidaire' => 'frigidaire.png',
  	// 'Samsung' => 'samsung.png',
    // 'Maytag' => 'maytag.png',
    // 'LG' => 'lg.png',
    // 'KitchenAid' => 'kitchenAid.png',
    // 'GE' => 'ge.png',
  	// 'Bosch' => 'bosch.png',
  );

?>
<!-- BRAND LOGOS -->
        <section class="container brand-logos">

          <!-- BRAND LOGOS HEADING -->
          <div class="row<?php echo $brand_logos['classes'] ?>">
            <div class="col-xs-12 padding-vert-xl text-align-center">
            <?php if ( !empty( $brand_logos['headline'] ) ): ?>
              <h2 class="brand-logos__headline font-40 font--700 lh-sm"><?php echo $brand_logos['headline'] ?></h2>
            <?php endif; ?>
              <p class="brand-logos__copy font--black font-31 lh-md"><?php echo $brand_logos['copy'] ?></p>
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
                  <img src="<?php echo $brand_logos['logo_dir'] . $logo ?>" alt="<?php echo $brand ?>" class="">
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
              <a href="<?php echo $brand_logos['btn_url'] ?>"
                data-href="<?php echo $brand_logos['btn_url'] ?>"
                class="btn btn-lg btn--shop-now"><span>shop</span>now</a>
            </div>
          </div>
        </section><!-- .col-xs-12 -->
