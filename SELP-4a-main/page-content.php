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
    <h1 class="font-48 font--700 font--white text-align-center padding-vert-xl"
      itemprop="name"><?php echo $hero['h1'] ?></h1>
    <picture class="Xhero--full-width">
    <?php foreach ($hero['picture'] as $p): ?>
      <source media="<?php echo $p['media'] ?>" srcset="<?php echo $img_dir . $p['srcset'] ?>">
    <?php endforeach; ?>
      <img src="<?php echo $img_dir . $hero['img'] ?>"
        alt="<?php echo $hero['alt'] ?>"
        itemprop="image"
        >
    </picture>

  </header>
  <!-- END #hero -->

  <!-- Articles -->
<?php foreach ( $articles as $a ): ?>
<?php
// if article has link url,
// check for substitution tokens in the article text
if ( isset( $a['link'] ) &&
  isset( $a['link']['url'] ) &&
  false !== strpos( $a['text'], '%1$s' ) ) {
  // if has, replace them with link URL
  $a['text'] = sprintf( $a['text'], $a['link']['url'] );
}
?>
  <article class="container">
    <div class="row padding-vert-xl">
      <div class="col-xs-12 col-md-6">
        <?php
        element( 'picture', $a );
        ?>
      </div>
      <div class="col-xs-12 col-md-6">
        <h2 class="headline"><?php echo $a['headline'] ?></h2>
        <p class="text"><?php echo $a['text'] ?></p>
        <a href="<?php echo $a['link']['url'] ?>" data-href="<?php echo $a['link']['url'] ?>" class="article-link"><?php echo $a['link']['text'] ?></a>
      </div>
    </div>
  </article>
<?php endforeach; ?>
  <!-- END Articles -->

<?php
// use element to include reusable page-element snippet!
element( 'brand-logos',
  $brand_logos
);
?>
</main><!-- #cms-content-1920-1920.cms-content.cms-content-html -->
