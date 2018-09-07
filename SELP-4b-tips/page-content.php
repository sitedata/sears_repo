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
<main class="cms-content cms-content-html padding-vert-xl SEARS--landing-page <?php echo $slug ?>" id="cms-content-1920-1920">

  <!-- BEGIN #hero -->
  <header id="hero" class="hero--full-width">
    <h1 class="font-48 font--700 text-align-center padding-vert-xl"
     ><?php echo $hero['h1'] ?></h1>
     <?php 
     element('picture', $hero);
     ?>

    <div class="container headline">
      <div class="row">
        <div class="col-xs-12 text-align-center padding-vert-lg">
          <div class="hero--copy font-31 lh-sm">
            <?php echo htmlspecialchars($hero['text']) ?>
          </div>
          
        </div>
      </div>
    </div>
  </header>
  <!-- END #hero -->
  <section class="container">
     <div class="col-xs-12">  
      <?php foreach( $content as $row ): ?>
      <?php
          $img = $img_dir . $row['img'];
          $alt=$row['alt'];
          $subheading=$row['subheading'];
          $listitem= $row['listitem'];
          // $link=$row['link'];
          // $linktext=$row['linktext'];

      // $heading = htmlspecialchars( $row['heading'] );
      // $subheading = htmlspecialchars( $row['subheading'] );
      // $list = array_map( 'htmlspecialchars', $row['list'] );
      // $list = array_map( 'nl2br', $list );

      ?>
          <div class="col-xs-12 col-md-6"><img src='<?php echo $img; ?>' class="width100percent" alt='<?php echo $alt; ?>'></div>
          <div class="col-xs-12 col-md-6" class="width100percent">
            <h2><b><?php echo $subheading ?></b></h2>
              <ul>
                <?php foreach( $listitem as $li ): ?>
                  <li class="padding-bottom-sm listfont">
                    <span class="font--black listfont">
                  <?php echo $li ?>
                    </span>
                  </li>
    
                <?php endforeach; ?>
              </ul>
      <?php endforeach; ?>
      <?php foreach( $links as $row ): ?>
      <?php 
        $reference=$row['reference'];
        $linktext=$row['linktext'];
      ?>
          <a href='<?php echo $reference ?>'><?php echo  $linktext ?></a><br>
      <?php endforeach; ?>
          </div>
      
     </div>
  </section>
<?php
// use element to include reusable page-element snippet!
element( 'brand-logos',
 
  $brand_logos
);
?>
</main><!-- #cms-content-1920-1920.cms-content.cms-content-html -->
