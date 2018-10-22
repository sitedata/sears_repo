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
      'src' => 'kenmore.png',
      'w' => '141',
      'h' => '59',
    ),

  	'Whirlpool' => array(
      'src' => 'whirlpool.png',
      'w' => '155',
      'h' => '59',
    ),


    'GE' => array(
      'src' => 'ge.png',
      'w' => '84',
      'h' => '59',
    ),

  	'Samsung' => array(
      'src' => 'samsung.png',
      'w' => '144',
      'h' => '59',
    ),

    'Maytag' => array(
      'src' => 'maytag.png',
      'w' => '136',
      'h' => '59',
    ),


  );

?>
<!-- BRAND LOGOS -->
        <section class="container brand-logos padding-vert-md">

          <!-- BRAND LOGOS HEADING -->
          <div class="row<?php echo $data['classes'] ?>">
            <div class="col-xs-12 text-align-center">
            <?php if ( !empty( $data['headline'] ) ): ?>
              <h2 class="brand-logos__headline font-40 font--700 lh-sm"><?php echo $data['headline'] ?></h2>
            <?php endif; ?>
              <p class="brand-logos__copy font--black font-18 lh-sm"><?php echo $data['copy'] ?></p>
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
<?php if ( false && $i === 3 || $i === 7 ): ?>
                <br class="md--hide">
<?php elseif ( false && $i === 5 && false ): ?>
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
