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
?>
<main class="cms-content cms-content-html padding-vert-xl SEARS--landing-page <?php echo $slug ?>" id="cms-content-1920-1920"  itemscope itemtype="http://schema.org/Recipe">

  <!-- BEGIN #hero -->
  <header id="hero" class="hero--full-width">
    <h1 class="font-48 font--700 text-align-center padding-vert-xl"
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

    <div class="container headline">
      <div class="row">
        <div class="col-xs-12 text-align-center padding-vert-lg">
          <div class="hero--text font-31 lh-sm" itemprop="description">
            <?php echo $hero['text'] ?>
          </div>
          <div class="padding-vert-lg">
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


<?php
// use element to include reusable page-element snippet!
element( 'brand-logos',  $brand_logos );
?>
</main><!-- #cms-content-1920-1920.cms-content.cms-content-html -->
