<?php
/**
Elements now expect to receive an array named $data!
*/

$_defaults = array(
  'headline' => 'Ready to get started?',
  'copy' => 'Sears Hometown Store has unbeatable prices on the best brands available.',
  'link_url' => '#',
  'classes' => '',
  'btn_url' => '#',
  'logo_dir' => get_brand_logos_dir(),
);

/**
Check to see if 'text' in array instead of 'copy'.
*/
if ( isset( $data['text'] ) && !isset( $data['copy'] ) ) {
  $data['copy'] = $data['text'];
}

// merge $data with $_defaults
$data = array_merge( $_defaults, $data );

/**
In the before times, the below was to allow for links in the copy above the
brand logos box.
*/
if ( false !== strpos( $data['copy'], '%1$s' ) ) {
  $data['copy'] = sprintf( $data['copy'], $data['link_url'] );
}

/**
NOTE: width and height are based on values from PSDs!
*/
$logos = isset( $logos ) ? $logos :
  array(
    'Kenmore' => array(
      'src' => 'kenmore.svg',
      'w' => '118',
      'h' => '25',
    ),

    'Kenmore Elite' => array(
      'src' => 'kenmore-elite.svg',
      'w' => '176',
      'h' => '25',
    ),

  	'Whirlpool' => array(
      'src' => 'whirlpool.svg',
      'w' => '123',
      'h' => '38',
    ),

  	'Frigidaire' => array(
      'src' => 'frigidaire.svg',
      'w' => '193',
      'h' => '21',
    ),

  	'Samsung' => array(
      'src' => 'samsung.svg',
      'w' => '151',
      'h' => '53',
    ),

    'Maytag' => array(
      'src' => 'maytag.png',
      'w' => '126',
      'h' => '48',
    ),

    'LG' =>
    array(
      'src' => 'lg.svg',
      'w' => '93',
      'h' => '41',
    ),

    'KitchenAid' => array(
      'src' => 'kitchenAid.svg',
      'w' => '199',
      'h' => '22',
    ),

    'GE' => array(
      'src' => 'ge.svg',
      'w' => '59',
      'h' => '58',
    ),

  	'Bosch' => array(
      'src' => 'bosch.svg',
      'w' => '143',
      'h' => '33',
    ),


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
          <div class="row<?php echo $data['classes'] ?>">
            <div class="col-xs-12 padding-vert-xl text-align-center">
            <?php if ( !empty( $data['headline'] ) ): ?>
              <h2 class="brand-logos__headline font-40 font--700 lh-sm"><?php echo $data['headline'] ?></h2>
            <?php endif; ?>
              <p class="brand-logos__copy font--black font-31 lh-sm"><?php echo $data['copy'] ?></p>
            </div>
          </div>

          <div class="row">
<?php
// place to store index since $logos is an associative array
$i = 0;
?>
            <div class="brand-logos--wrapper">
<?php foreach ( $logos as $brand => $logo ): ?>
                <div class="brand-logo">
                  <img src="<?php echo $data['logo_dir'] . $logo['src'] ?>"
                  width="<?php echo $logo['w'] ?>"
                  height="<?php echo $logo['h'] ?>"
                  alt="<?php echo $brand ?>"
                  class="">
                </div>
<?php
/**
Use linebreaks that display at different breakpoints to conform to design.
*/
?>
<?php if ( $i === 3 || $i === 7 ): ?>
                <br class="md--hide">
<?php elseif ( $i === 5 && false ): ?>
                <br class="md--show">
<?php endif; ?>
<?php $i++; ?>
<?php endforeach; ?>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 padding-vert-xl text-align-center">
              <a href="<?php echo $data['btn_url'] ?>"
                data-href="<?php echo $data['btn_url'] ?>"
                class="btn btn-lg btn--shop-now"><span>shop</span>now</a>
            </div>
          </div>
        </section><!-- .col-xs-12 -->
