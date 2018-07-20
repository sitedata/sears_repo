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
<div class="cms-content cms-content-html padding-vert-xl SEARS--landing-page <?php echo $slug ?>" id="cms-content-1920-1920">
  <!-- BEGIN #hero -->
  <section id="hero">
      <img alt="<?php echo $hero['alt'] ?>" src="<?php echo $img_dir . $hero['img'] ?>" class="img-responsive mqImage width100percent">
  </section>
  <!-- END #hero -->

  <section class="container headline padding-vert-xl">
    <div class="col-xs-12">
      <div class="row">
        <div class="col-xs-12">
          <div class="headline--copy text-align-center font--primary2 font--600">
            <?php echo htmlspecialchars( $headline ) ?>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 fake-bottom-border">
          <hr class="bordered--bottom bordered--sm">
        </div>
      </div>
    </div>
  </section>

  <section class="container laundry-hacks">

    <div class="col-xs-12">
<?php foreach( $content as $i => $row ): ?>
<?php
// lazy
$img = $img_dir . $row['img'];
$heading = clean_text( $row['heading'] );
$copy = $row['copy']; // already cleaned it and it may have a link it!
$extra = isset( $row['extra'] ) ? clean_text( $row['extra'] ) : false;
$extra_img = isset( $row['extra_img'] ) ? $img_dir . $row['extra_img'] : false;
?>
      <div class="row laundry-hack laundry-hack--<?php printf( "%02d", $i + 1 ) ?>">
        <div class="col-sm-12 col-md-6 col-left">
            <img src="<?php echo $img ?>" class="width100percent" alt="<?php echo $heading ?>">
        </div>
        <div class="col-sm-12 col-md-6 padding-horiz-xl col-right">
          <h3 class="font--400 font--primary2"><?php echo $heading ?></h3>
          <p class="font--black"><?php echo $copy ?></p>
<?php if ( false !== $extra && !empty( $extra ) ): ?>
          <a href="#" class="sticker--link"><?php if ($extra_img): ?><img src="<?php echo $extra_img; ?>" class="sticker--icon"><?php endif; ?> <span class="sticker--link_text"><?php echo $extra ?></span></a>
<?php endif; ?>
        </div>
      <?php if ( true || $row != end( $content ) ): ?>
        <div class="col-xs-12 col-sm-12 fake-bottom-border">
          <hr class="bordered--bottom bordered--sm">
        </div>
      <?php endif; ?>
    </div><!-- div.row.laundry-hack -->
<?php endforeach; ?>
    </div><!-- div.col-xs-12 -->
  </section><!-- section.laundry-hacks -->

<?php
// use element to include reusable page-element snippet!
element( 'brand-logos.php',
  compact( 'brand_logos_heading' )
);
?>
</div><!-- #cms-content-1920-1920.cms-content.cms-content-html -->
