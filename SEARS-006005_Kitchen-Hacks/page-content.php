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
<div class="cms-content cms-content-html padding-vert-xl <?php echo $slug ?>" id="cms-content-1920-1920">
  <!-- BEGIN #hero -->
  <!-- TEMPLATE STARTS: n-->
  <section id="hero">
      <img alt="<?php echo $hero['alt'] ?>" src="<?php echo $img_dir . $hero['img'] ?>" class="img-responsive mqImage width100percent">
  </section><!-- #hero -->
  <!-- END #hero -->

  <section class="container headline">
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

  <section class="container kitchen-hacks">

    <div class="col-xs-12">
<?php foreach( $content as $row ): ?>
<?php
// lazy
$img = $img_dir . $row['img'];
$heading = htmlspecialchars( $row['heading'] );
$subheading = htmlspecialchars( $row['subheading'] );
$list = array_map( 'htmlspecialchars', $row['list'] );
$list = array_map( 'nl2br', $list );

?>
            <div class="row">
                <div class="col-sm-12 col-md-6 col-left">
                    <img src="<?php echo $img ?>" class="width100percent" alt="<?php echo $heading ?>">
                </div>
                <div class="col-sm-12 col-md-6 padding-horiz-xl col-right">
                    <h3 class="font--400 font--primary2"><?php echo $heading ?></h3>
                    <h5 class="font--600 font--black"><?php echo $subheading ?></h5>
                    <ul>
<?php foreach( $list as $i => $li ): ?>
                    <li class="padding-bottom-sm">
  <?php if ( $i === 0 && $row['youll_need'] ): ?>
                      <strong class="font--black">You&rsquo;ll Need:</strong>
  <?php endif; ?>
                      <span class="font--black"><?php echo $li ?></span>
                    </li>
<?php endforeach; ?>
                    </ul>
                </div>
              <?php if ( true || $row != end( $content ) ): ?>
                <div class="col-xs-12 col-sm-12 fake-bottom-border">
                  <hr class="bordered--bottom bordered--sm">
                </div>
              <?php endif; ?>
            </div>
<?php endforeach; ?>
          </div>
        </section>

<!-- BONUS ROUND -->
        <section class="container bonus-round">
          <div class="col-xs-12">
            <div class="row padding-bottom-md padding-horiz-md">
              <h3 class="font--400 font--primary2 padding-bottom-xl">Bonus Round:</h3>
            </div>
            <div class="row padding-bottom-xl padding-horiz-md">
<?php foreach ( $bonus_round as $i => $round ): ?>
  <?php if ( $i === 0 || $i == ceil( count( $bonus_round ) / 2 ) ): ?>
              <div class="col-xs-12 col-sm-6">
                <ul>
  <?php endif; ?>
                  <li>
                    <div class="font--400 font--primary2 margin--none"><?php echo $round['head'] ?></div>
                    <div class="font--black"><?php echo $round['body'] ?></div>
                  </li>
  <?php if ( $i === 3 || $round == end( $bonus_round ) ): ?>
                </ul>
              </div>
  <?php endif; ?>
<?php endforeach; ?>
            </div>
            <div class="row">
              <div class="col-xs-12 col-sm-12 fake-bottom-border">
                <hr class="bordered--bottom bordered--sm">
              </div>
            </div>
          </div>
        </section>

<?php
// use element to include reusable page-element snippet!
element( 'brand-logos.php' );
?>

</div><!-- #cms-content-1920-1920.cms-content.cms-content-html -->
