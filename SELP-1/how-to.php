<?php
/**
Same block for recipes and how-tos
*/

$type = isset( $type ) ? $type : 'recipe';
?>
<article class="container refrigerator-guides refrigerator-<?php echo $type ?>s">
  <header class="row">
    <div class="col-xs-12">
      <h2 class="font--400 font--primary2"><?php echo $d['headline'] ?></h2>
      <p class="font--black"><?php echo $d['copy'] ?></p>
    </div>
  </header>

  <div class="row">
  <?php foreach ( $d['items'] as $row ): ?>
    <section class="col-xs-12 col-md-6 refrigerator-guide padding-vert-lg">
      <div class="col-xs-12 col-md-6">
        <img src="<?php echo $img_dir . $row['img'] ?>" alt="<?php $row['alt'] ?>" class="img-responsive width100percent">
      </div>
      <div class="col-xs-12 col-md-6">
        <header>
          <span class="font--primary3 text-uppercase refrigerator-guide__idea"><?php echo $row['pre'] ?></span>
          <h3 class="font--black font--900 text-uppercase"><?php echo $row['headline'] ?></h3>
        </header>
        <p class="font--black"><?php echo $row['copy'] ?></p>
        <footer>
          <a href="<?php echo $prod_img_dir . $row['url'] ?>" data-href="<?php echo $prod_img_dir . $row['url'] ?>" class="refrigerator-guide__link">
            <img src="<?php echo $img_dir . 'icon-document.png' ?>" alt="Document Download Icon" class="icon-document">
            <span class="font--primary3 refrigerator-guide__link--text"><?php echo $row['link-text'] ?></span>
          </a>
        </footer>
      </div>
    </section>
  <?php endforeach; ?>
  </div>


  <div class="row">
    <div class="col-10 col-push-1 fake-bottom-border">
      <hr class="bordered--bottom bordered--sm">
    </div>
  </div>

</article>
