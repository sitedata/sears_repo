<?php
/**
Put the variables storing the copy, et al, into a separate file.
*/
require_once( dirname( __FILE__ ) . '/page-data.php' );

/**
IMPORTANT!
HERO MUST BE OUTSIDE OF DIV.CONTAINER TO BE FULL WIDTH!
*/
?>
<main class="cms-content cms-content-html padding-vert-xl SEARS--landing-page <?php echo $slug ?>" id="cms-content-1920-1920">

  <!-- BEGIN #hero -->
  <header id="hero">
    <h1>
      <img alt="<?php echo $hero['alt'] ?>" src="<?php echo $img_dir . $hero['img'] ?>" class="img-responsive mqImage width100percent">
    </h1>

    <div class="container headline padding-vert-xl">
      <div class="row">
        <div class="col-xs-12">
          <div class="headline--copy text-align-center font--primary2 font--700">
            <?php echo $headline ?>
          </div>
        </div>
        <div class="col-xs-12 fake-bottom-border">
          <hr class="bordered--bottom bordered--sm">
        </div>
      </div>
    </div>
  </header>
  <!-- END #hero -->

<?php
$d = $data['keep-it-cool'];
?>

  <article class="container refrigerator-essentials">
    <div class="row">
      <div class="col-xs-12 col-md-6">
        <img src="<?php echo $img_dir . $d['img'] ?>" alt="<?php echo $d['headline'] ?>" class="img-responsive width100percent">
      </div>
      <div class="col-xs-12 col-md-6">
        <h2 class="font--400 font--primary2 font-48"><?php echo $d['headline'] ?></h2>
        <p class="font--black font-18 lh-sm"><?php echo $d['copy'] ?></p>
        <aside class="tip-box">
          <div class="tip-box__left">Tip</div>
          <div class="tip-box__right font-18 ln-md">
            <?php echo $d['tip'] ?>
          </div>
        </aside>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 fake-bottom-border">
        <hr class="bordered--bottom bordered--sm">
      </div>
    </div>
  </article>

<?php
$d = $data['refrigerator-styles'];
?>
  <article class="container refrigerator-styles">
    <header class="row">
      <div class="col-xs-12">
        <h2 class="font--400 font--primary2 font-48"><?php echo $d['headline'] ?></h2>
        <p class="font--black"><?php echo $d['copy'] ?></p>
      </div>
    </header>
    <div class="row">
<?php foreach( $d['styles'] as $i => $row ): ?>
<?php
// lazy
$img = $img_dir . $row['img'];
?>
      <section class="col-xs-12 col-md-4 refrigerator-style refrigerator-style--<?php printf( "%02d", $i + 1 ) ?>">

          <header>
            <a href="<?php echo $row['url'] ?>" data-href="<?php echo $row['url'] ?>" class="refrigerator-style__link">
              <img src="<?php echo $img ?>" class="width100percent" alt="<?php echo $row['alt'] ?>">
              <h3 class="font--400 font--primary2 font-24"><?php echo $row['headline'] ?></h3>
            </a>
          </header>
        <div class="refrigerator-style__list--wrap">
          <ul class="refrigerator-style__list">
          <?php foreach ( $row['list'] as $j => $li ): ?>
            <li class="refrigerator-style__list--item font-18 lh-md"><?php echo $li ?></li>
          <?php endforeach; ?>
          </ul>
        </div>
      </section><!-- section.refrigerator-style -->
<?php endforeach; ?>
    </div><!-- div.row -->
    <div class="row">
      <div class="col-xs-12 col-md-6">
        <aside class="tip-box">
          <div class="tip-box__left">Tip</div>
          <div class="tip-box__right font-18 lh-md">
            <?php echo $d['tip'] ?>
          </div>
        </aside>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 fake-bottom-border">
        <hr class="bordered--bottom bordered--sm">
      </div>
    </div>
  </article><!-- article.refrigerator-styles -->

<?php
/**
Bells & Whistles! Refrigerator Features
*/

$d = $data['refrigerator-features'];
?>
  <article class="container refrigerator-features">
    <div class="row">
      <header class="col-xs-12">
        <h2 class="font--400 font--primary2 font-48"><?php echo $d['headline'] ?></h2>
      </header>
    </div>
    <div class="row">
      <section class="col-xs-12 refrigerator-features__list--wrap">
        <ul class="refrigerator-features__list">
        <?php foreach( $d['features'] as $row ): ?>
          <li class="refrigerator-feature">
            <span class="font--primary2 refrigerator-feature__name font-24"><?php echo $row['headline'] ?></span>
            <p class="font--black font-18 lh-md"><?php echo $row['copy'] ?></p>
          </li>
        <?php endforeach; ?>
        </ul>
      </section>
    </div>
    <div class="row">
      <div class="col-xs-12 col-md-6">
        <aside class="tip-box Xtip-box__tall">
          <div class="tip-box__left">Tip</div>
          <div class="tip-box__right font-18 lh-md">
            <?php echo $d['tip'] ?>
          </div>
        </aside>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 fake-bottom-border">
        <hr class="bordered--bottom bordered--sm">
      </div>
    </div>
  </article>


<?php
/**
Recipes
*/
$d = $data['recipes'];
$type = 'recipe';
include( dirname( __FILE__ ) . '/how-to.php' );
?>

<?php
/**
How-Tos
*/
$d = $data['how-tos'];
$type = 'how-to';
include( dirname( __FILE__ ) . '/how-to.php' );
?>

<?php
// use element to include reusable page-element snippet!
element( 'brand-logos.php',
  compact( 'brand_logos_heading', 'shop_now_url' )
);
?>
</main><!-- #cms-content-1920-1920.cms-content.cms-content-html -->
