<?php
/**
Put the variables storing the copy, et al, into a separate file.
*/
require_once( dirname( __FILE__ ) . '/page-data.php' );

/**
IMPORTANT!
HERO MUST BE OUTSIDE OF DIV.CONTAINER TO BE FULL WIDTH!
No, it actually doesn't.
You just need to set a -20px left & right margins on the hero to make it full-width.
*/

/**
MORE DIFFERENT IMPORTANT!
At this time, it seems to make the most sense to keep grid directives in page-content.php rather than introducing additional complexity to all of the page elements.
By keeping the grid directives in the definition of each page, page elements will be able to be easily used in a variety of scenarios.
*/

// $img_dir = get_image_dir();

$slug = (isset( $slug ) && !empty( $slug )) ? $slug : basename( SEARS_PROJECT_PATH );

?>
<main class="cms-content cms-content-html padding-vert-xl SEARS--landing-page <?php echo $slug ?>" id="cms-content-1920-1920"  itemscope itemtype="http://schema.org/Recipe">

  <!-- BEGIN #hero -->
  <header id="hero" class="hero--full-width">
    <h1 class="font-48 font--700 text-align-center padding-vert-xl"
      itemprop="name"><?php echo $hero['h1'] ?></h1>
    <?php element( 'picture', $hero ); ?>
<?php if (false): ?>
    <picture class="picture">
    <?php foreach ($hero['picture'] as $p): ?>
      <source media="<?php echo $p['media'] ?>" srcset="<?php echo $img_dir . $p['srcset'] ?>">
    <?php endforeach; ?>
      <img src="<?php echo $img_dir . $hero['img'] ?>"
        alt="<?php echo $hero['alt'] ?>"
        itemprop="image"
        >
    </picture>
<?php endif; ?>

    <div class="container">
      <div class="row text-align-center">
        <div class="col-xs-12 padding-vert-lg">
          <div class="hero--text font-31 lh-sm" itemprop="description">
            <?php echo $hero['text'] ?>
          </div>
          <div class="padding-vert-lg font-31">
            <?php element( 'link__download-document', $hero['link'] ); ?>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- END #hero -->

  <article class="container">
    <div class="row padding-vert-xl">
      <div class="col-xs-12 col-md-6">
        <?php
        element( 'recipe__ingredient-list', $ingredients );
        ?>
      </div>
      <div class="col-xs-12 col-md-6">
        <?php
        element( 'recipe__how-to-section', $prep );
        ?>
      </div>
    </div>
    <div class="row padding-vert-xl">
      <div class="col-xs-12">
        <?php
        element( 'recipe__how-to-section', $directions );
        ?>
      </div>
    </div>
  </article>

  <footer class="container footer">
    <div class="row">
      <div class="col-xs-12">
        <hr class="bordered--bottom bordered--sm">
      </div>
      <div class="col-xs-12 text-align-center font-31 lh-sm">
        <div class="footer__content">
          <div class="footer__headline font--700"><?php echo $footer['headline'] ?></div>
          <div class="footer__text"><?php echo $footer['text'] ?></div>
        </div>
      </div>
      <div class="col-xs-12">
        <hr class="bordered--bottom bordered--sm">
      </div>
    </div>
  </footer>

<?php
// use element to include reusable page-element snippet!
element( 'brand-logos', $brand_logos
);
?>

  <section class="container view-more">
    <div class="row padding-vert-xl">
    <?php foreach ( $view_more as $vm ): ?>
      <div class="col-xs-12 font-31">
        <strong class="font--700">View More:</strong>
        <a class="link"
          href="<?php echo $vm['url'] ?>"
          data-href="<?php echo $vm['url'] ?>"
          ><?php echo $vm['text'] ?></a>
      </div>
    <?php endforeach; ?>
    </div>
  </section>

</main><!-- #cms-content-1920-1920.cms-content.cms-content-html -->
