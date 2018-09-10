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
  <header id="hero" class="hero--full-width text-align-center">
    <div class="banner">
      <h1 class="font-65 font--700 font--white text-align-center center--both"><?php echo $hero['h1'] ?></h1>
      <?php element( 'picture', $hero ); ?>
    </div>
    <div class="padding-vert-xl text-align-center">
      <div class="hero__text font-31 lh-sm"><?php echo $hero['text'] ?></div>
    </div>
  </header>
  <!-- END #hero -->

  <!-- Articles -->
<?php foreach ( $articles as $a ): ?>
<?php
/**
if article has link url,
check for substitution tokens in the article text
*/
if ( isset( $a['link'] ) &&
  isset( $a['link']['url'] ) &&
  false !== strpos( $a['text'], '%1$s' ) ) {
  // if has, replace them with link URL
  $a['text'] = sprintf( $a['text'], $a['link']['url'] );
}
?>
<?php
/**
Don't use .container on the outer element because it makes it needlessly complicated to make full-width!
*/
?>
  <article class="article sm__article--full-width">
    <div class="row padding-vert-xl">
      <div class="col-xs-12 col-md-6 sm__full-width">
        <?php
        element( 'picture', $a );
        ?>
      </div>
      <div class="col-xs-12 col-md-6 font-31 sm__text-column">
        <h2 class="headline font-40 font--700"><?php echo $a['headline'] ?></h2>
        <div class="text font--black lh-sm"><?php echo $a['text'] ?></div>
        <a class="link lh-sm"
          href="<?php echo $a['link']['url'] ?>"
          data-href="<?php echo $a['link']['url'] ?>"
          ><?php echo $a['link']['text'] ?></a>
      </div>
    </div>
  </article>
<?php endforeach; ?>
  <!-- END Articles -->

<?php
/**
No brand logos on main page!
*/
// use element to include reusable page-element snippet!
// element( 'brand-logos',
//   $brand_logos
// );
?>
</main><!-- #cms-content-1920-1920.cms-content.cms-content-html -->
