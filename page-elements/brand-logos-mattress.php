<?php
/**
Elements now expect to receive an array named $data!
*/

$_defaults = array(
  'headline' => 'Ready to shop a wide selection of <a href="/Mattresses/Mattresses" data-href="/Mattresses/Mattresses"><b>mattresses</b></a>, <a href="/Mattresses/Box-Springs-Foundations" data-href="/Mattresses/Box-Springs-Foundations"><b>box springs</b></a> and <a href="/Mattresses/Bed-Frames" data-href="/Mattresses/Bed-Frames"><b>bed frames</b></a>? ',
  'copy' => 'Your local Sears Hometown Store has unbeatable prices on the best brands available.',
  'link_url' => '#',
  'classes' => '',
  'btn_url' => '/Mattresses',
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
    'Sealy' => array(
      'src' => 'http://hometown.dev1.sb3.production.netsuitestaging.com/assets/cms/purered/brand-logos/logo_01_sealy.jpg',
      'w' => '100%',
      'h' => '103',
    ),

    'Tempur-pedic' => array(
      'src' => 'http://hometown.dev1.sb3.production.netsuitestaging.com/assets/cms/purered/brand-logos/logo_02_tempurpedic.jpg',
      'w' => '100%',
      'h' => '103',
    ),

  	'Stearns and Foster' => array(
      'src' => 'http://hometown.dev1.sb3.production.netsuitestaging.com/assets/cms/purered/brand-logos/logo_03_stearnsfoster.jpg',
      'w' => '100%',
      'h' => '103',
    ),

  	'Serta' => array(
      'src' => 'http://hometown.dev1.sb3.production.netsuitestaging.com/assets/cms/purered/brand-logos/logo_04_serta.jpg',
      'w' => '100%',
      'h' => '103',
    ),

  	'Beautyrest' => array(
      'src' => 'http://hometown.dev1.sb3.production.netsuitestaging.com/assets/cms/purered/brand-logos/logo_05_beautyrest.jpg',
      'w' => '100%',
      'h' => '103',
    ),

   //  'Maytag' => array(
   //    'src' => 'maytag.png',
   //    'w' => '126',
   //    'h' => '48',
   //  ),

   //  'LG' =>
   //  array(
   //    'src' => 'lg.svg',
   //    'w' => '93',
   //    'h' => '41',
   //  ),

   //  'KitchenAid' => array(
   //    'src' => 'kitchenaid.svg',
   //    'w' => '199',
   //    'h' => '22',
   //  ),

   //  'GE' => array(
   //    'src' => 'ge.svg',
   //    'w' => '59',
   //    'h' => '58',
   //  ),

  	// 'Bosch' => array(
   //    'src' => 'bosch.svg',
   //    'w' => '143',
   //    'h' => '33',
   //  ),


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
        <section class="container brand-logos brand-logos__mattress padding-vert-md">

          <!-- BRAND LOGOS HEADING -->
          <div class="row<?php echo $data['classes'] ?>">
            <div class="col-xs-12 text-align-center">
            <?php if ( !empty( $data['headline'] ) ): ?>
              <h2 class="brand-logos__headline font-25 font--700"><?php echo $data['headline'] ?></h2>
            <?php endif; ?>
              <p class="brand-logos__copy font--black font-18 lh-sm"><?php echo $data['copy'] ?></p>
            </div>
          </div>

          <div class="row" style="margin: 0px -35px;">
<?php
// place to store index since $logos is an associative array
$i = 0;
?>
            <div class="brand-logos--wrapper">
<?php foreach ( $logos as $brand => $logo ): ?>
                <div class="brand-logo">
                  <img src="<?php echo $logo['src'] ?>"
                  width="<?php echo $logo['w'] ?>"
                  height="<?php echo $logo['h'] ?>"
                  alt="<?php echo $brand ?>"
                  class="img-responsive">
                </div>
<?php
/**
Use linebreaks that display at different breakpoints to conform to design.
*/
?>



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
