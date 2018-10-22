<?php
/**
Put the variables storing the copy, et al, into a separate file.
*/
require_once( dirname( __FILE__ ) . '/page-data.php' );

/**
IMPORTANT!
You just need to set a -20px left & right margins on the hero to make it full-width.
*/

/**
MORE DIFFERENT IMPORTANT!
At this time, it seems to make the most sense to keep grid directives in page-content.php rather than introducing additional complexity to all of the page elements.
By keeping the grid directives in the definition of each page, page elements will be able to be easily used in a variety of scenarios.
*/

?>
<main class="cms-content cms-content-html padding-vert-xl SEARS--landing-page <?php echo $slug ?>" id="cms-content-1920-1920">

  <!-- BEGIN #hero -->
  <header id="hero" class="hero--full-width">
    <div class="banner">
      <h1 class="text-align-center">
        <!-- <span class="hero__headline"><?php echo $hero['h1'] ?></span> -->
        <?php element( 'picture', $hero ); ?>
      </h1>
    </div>
    <div class="container padding-vert-xl padding-horiz-xl">
      <h2 class="headline font-36 font--700 text-align-center font--primary2"><?php echo $hero['header']['h2'] ?></h2>
      <div class="hero__text font-18 lh-sm"><?php echo $hero['header']['p'] ?></div>
    </div>
  </header>
  <!-- END #hero -->

  <!-- Articles -->
  <section class="thanksgiving-tips">
<?php foreach ( $articles as $index => $a ): ?>
<?php
/**
if article has link url,
check for substitution tokens in the article text
*/
if ( isset( $a['links'] ) ) {
  foreach( $a['links'] as $search => $link ) {
    $link_tag = sprintf( $link_tmpl8, $link, $link, $search );
    // erp( compact( 'link_tag' ) );
    $a['p'] = preg_replace( '/' . $search . '/', $link_tag, $a['p'], 1 );
  }
  // if has, replace them with link URL
  // $a['text'] = sprintf( $a['text'], $a['link']['url'] );
}
?>
<?php
/**
Don't use .container on the outer element because it makes it needlessly complicated to make full-width!
*/
?>
  <article class="col-xs-12 col-md-6 padding-vert-sm">
    <?php
    element( 'picture', $a );
    ?>
    <div class="padding-vert-lg">
      <h3 class="headline font-36 font--primary2 lh-lg"><?php echo $a['h3'] ?></h3>
      <div class="text font--black lh-sm font-18"><?php echo $a['p'] ?></div>
    </div>
  </article>

  <div class="md--hide">
    <div class="col-xs-12">
      <hr>
    </div>
  </div>

  <?php if ( $index % 2 == 1 ): ?>
    <div class="xs--hide sm--hide md--block">
      <div class="col-xs-12">
        <hr>
      </div>
    </div>
  <?php endif; ?>

<?php endforeach; ?>
  <!-- END Articles -->

  <div class="turkey-tip col-xs-12 col-md-6 padding-vert-sm">
    <?php element( 'picture', $turkey_tip ); ?>
    <?php element( 'tip-box', $turkey_tip ); ?>
  </div>

  <div class="dont-hide--desktop">
    <div class="col-xs-12">
      <hr>
    </div>
  </div>

</section>

<article class="turkey-chart-wrap text-align-center">
  <header>
    <div class="pre-headline"><?php echo $chart['pre-headline'] ?></div>
    <h2 class="headline font--900"><?php echo $chart['h2'] ?></h2>
    <div class="text"><?php echo $chart['p'] ?></div>
  </header>
  <?php // erp( compact( 'chart' ) ); ?>
  <table class="turkey-chart">
    <thead>
      <tr>
  <?php foreach ( $chart['thead'] as $c ): ?>
        <th><?php echo $c ?></th>
  <?php endforeach; ?>
      </tr>
    </thead>
    <tbody>
<?php foreach( $chart['rows'] as $row ): ?>
<?php
/**
if cell data is an array, first element wrapped with strong, 2nd with span
*/
foreach( $row['cells'] as $i => $c ){
  if ( is_array( $c ) ) {
    $c[0] = '<strong>' . $c[0] . '</strong>';
    $c[1] = '<span>' . $c[1] . '</span>';
    $row['cells'][$i] = implode( ' ', $c );
  }
  else {
    $row['cells'][$i] = '<strong>' . $c . '</strong>';
  }
}
?>
      <tr>
        <th>
          <?php // <div class="chart__icon--wrap"> ?>
            <img src="http://hometown.sb3.production.netsuitestaging.com/assets/cms/purered/2018-10-25_Stress-Free-Thanksgiving-Dinner-Tips/icons/<?php echo $row['img'] ?>"
              alt="<?php echo $row['alt'] ?>"
              class="chart__icon">
          <?php // </div>  ?>
<?php
/**
Remove the first cell again because I didn't think this though.
This really only happens for the turkey
*/
$c = array_shift( $row['cells'] );
?>
          <div class="chart__text--wrap">
            <div class="chart__text">
              <?php echo $c ?>
            </div>
          </div>
        </th>
  <?php foreach ( $row['cells'] as $c ): ?>
        <td><?php echo $c ?></td>
  <?php endforeach; // $row['cells'] as $c ?>
      </tr>
<?php endforeach; ?>
    </tbody>
  </table>
</article>

<?php
/**
No brand logos on main page!
*/
// use element to include reusable page-element snippet!
element( 'brand-logos__kitchen-appliances',
  $brand_logos
);
?>
  <footer>
    <div class="footer__content text-align-center font-24 lh-sm">
      <strong class="font-black"><?php echo $footer['strong'] ?></strong>
      <a href="<?php echo $footer['url'] ?>"
      data-href="<?php echo $footer['url'] ?>"
      class="link font--primary3"><?php echo $footer['a'] ?></a>
    </div>
  </footer>
</main><!-- #cms-content-1920-1920.cms-content.cms-content-html -->
