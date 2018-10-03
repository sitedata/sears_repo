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
      <!-- <img alt="<?php echo $hero['alt'] ?>" src="<?php echo $img_dir . $hero['img'] ?>" class="img-responsive mqImage width100percent"> -->
      <div class="banner">
      <picture class="picture img-responsive mqImage width100percent">
        <source media="(max-width:991px)" srcset="<?php echo 'http://hometown.dev1.sb3.production.netsuitestaging.com/assets/cms/purered/2018_09_28_Mattress_LandingPage/01_masthead_Mattress_buying_guidemobile.jpg' ?>">
        <source media="(min-width:992px)" srcset="<?php echo 'http://hometown.dev1.sb3.production.netsuitestaging.com/assets/cms/purered/2018_09_28_Mattress_LandingPage/01_masthead_Mattress_buying_guide.jpg' ?>">
        <img src="<?php echo 'http://hometown.dev1.sb3.production.netsuitestaging.com/assets/cms/purered/2018_09_28_Mattress_LandingPage/01_masthead_Mattress_buying_guide.jpg' ?>" alt="Mattress Buying Guide - How to Choose the Right Mattress" class="picture__img img-responsive mqImage width100percent">
      </picture>
      </div>
  </section>
  <!-- END #hero -->

<!-- extra wrapper around all these things that are spozta be 65px narrower than hero -->
<div class="">
  <section class="container-fluid">
      <div class="row">
        <div class="padding-vert-xl">
          <div class="col-md-6 md__no-pad padding-vert-xl">
            <div class="font-18"><?php echo $sleep?></div>
            <div class="text-align-center fullwidthPadding lg__no-pad ">
            <aside class="tip-box padding-bottom-xl">
              <div class="tip-box__head">Tip</div>
              <div class="tip-box__body font-18 lh-md">
                <?php echo $Tip ?>
              </div>
            </aside>
            </div>
          </div>
          <div class="col-md-6 no-pad-mob">
          <aside class="tip-box" id="videoHeaderPaddingMobile">
              <div class="tip-box__head textUntransformed font-24 ">Video: Tips for a Good Night’s Sleep </div>
            </aside>
            <iframe width="100%" height="350" src="https://www.youtube-nocookie.com/embed/wybvxdQSkT8?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
           <!--  <img alt="<?php echo $video['alt']?>" src="<?php echo $video['img']?>" class="width100percent"> -->
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 fake-bottom-border">
          <hr class="bordered--bottom bordered--sm">
        </div>
      </div>

  </section>
 
  <section class="container-fluid">
     <div class="row">
      <?php $d=$dataHeadline['mattress-size']; ?>
       <div class="col-md-6"> 
           <h2 class="font--400 font--primary2 font-35"><div>
              <?php echo $d['headline'] ?></div>
            </h2>
            <p class="font--black font-18 lh-md"><?php echo $d['copy'] ?></p>
          
       </div>
       <div class="col-md-6"></div>
     </div>
     <div class="row">
      <?php foreach ($mattressSizeRow1 as $value ): ?>
       <div class="col-md-4 padding-bottom-xl">
        <a href="<?php echo $value['link'] ?>" data-href="<?php echo $value['link'] ?>">
          <img src="<?php echo $value['img']; ?>" alt="<?php echo $value['alt']; ?>" class="center-block img-responsive">
         <h3 class="font--400 font--primary2 font-24  padding-top-xl"><?php echo $value['listHead']; ?></h3>
        </a>
         <?php foreach ($value['listcopy'] as $val ): ?>
          <ul>
              <li class="font-18 listspacing"><?php echo $val; ?></li>
          </ul>
         <?php endforeach; ?>
       </div>
       <?php endforeach; ?>
     </div>
      <div class="row">
      <?php foreach ($mattressSizeRow2 as $value ): ?>
      <div class="col-md-4 padding-bottom-xl ">
        <a href="<?php echo $value['link'] ?>" data-href="<?php echo $value['link'] ?>">
          <img src="<?php echo $value['img']; ?>" alt="<?php echo $value['alt']; ?>" class="center-block img-responsive">
         <h3 class="font--400 font--primary2 font-24 padding-top-xl"><?php echo $value['listHead']; ?></h3>
        </a>
         <?php foreach ($value['listcopy'] as $val ): ?>
          <ul>
            <li class="font-18 listspacing"><?php echo $val; ?></li>
          </ul>
         <?php endforeach; ?>
       </div>
       <?php endforeach; ?>
       <div class="col-md-4 padding-bottom-xl md__no-pad no-pad-mob">
          <img src="<?php echo $MattressTips['img']; ?>" alt="<?php echo $MattressTips['alt']; ?>" class="center-block img-responsive fullWidth">
         <div class="col-xs-12 text-align-center fullwidthPadding lg__no-pad">
            <aside class="tip-box">
              <div class="tip-box__head">Tip</div>
              <div class="tip-box__body font-18 lh-md">
                <?php echo $MattressTips['tip'] ?>
              </div>
            </aside>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 fake-bottom-border">
          <hr class="bordered--bottom bordered--sm">
        </div>
      </div>
     </div>
  </section>
 <section class="container-fluid">
     <div class="row">
      <?php $d=$dataHeadline['mattress-type']; ?>
       <div class="col-xs-12"> 
           <h2 class="font--400 font--primary2 font-35"><div>
              <?php echo $d['headline'] ?></div>
            </h2>
            <p class="font--black font-18 lh-md"><?php echo $d['copy'] ?></p>
          
       </div>

        <?php foreach ($mattressType as $value ): ?>
       <div class="col-md-4 padding-bottom-xl no-pad-mob">
        <a href="<?php echo $value['link'] ?>" data-href="<?php echo $value['link'] ?>">
          <img src="<?php echo $value['img']; ?>" alt="<?php echo $value['alt']; ?>" class="center-block img-responsive fullWidth">
         <h3 class="font--400 font--primary2 font-24  padding-top-xl"><?php echo $value['listHead']; ?></h3>
        </a>
         <?php foreach ($value['listcopy'] as $val ): ?>
          <ul>
              <li class="font-18 listspacing"><?php echo $val; ?></li>
          </ul>
         <?php endforeach; ?>
       </div>
       <?php endforeach; ?>
     
     </div>
     <div class="row">
        <div class="col-xs-12 fake-bottom-border">
          <hr class="bordered--bottom bordered--sm">
        </div>
      </div>
  </section>
  <section class="container-fluid">
     <div class="row">
      <?php $d=$dataHeadline['comfort-counts']; ?>
       <div class="col-md-7"> 
           <h2 class="font--400 font--primary2 font-31"><div>
              <?php echo $d['headline'] ?></div>
            </h2>
            <p class="font--black font-18 comfortPadding"><?php echo $d['copy'] ?></p>
          
       </div>
       <div class="col-md-5">
         <div class="col-xs-12 text-align-center fullwidthPadding lg__no-pad ">
            <aside class="tip-box">
              <div class="tip-box__head">Tip</div>
              <div class="tip-box__body font-18 lh-md">
                <?php echo $ComfortTips ?>
              </div>
            </aside>
        </div>
       </div>
     </div>
     <div class="row">
       <div class="col-xs-12 no-pad-mob">
         <div class="coloredBox font-22 center-block font--800" id="UltraPlush">Ultra Plush</div>
         <div class="coloredBox font-22 center-block font--800" id="Plush">Plush</div>
         <div class="coloredBox font-22 center-block font--800" id="CushionFirm">Cushion Firm</div>
         <div class="coloredBox font-22 center-block font--800" id="Firm">Firm</div>
         <div class="coloredBox font-22 center-block font--800" id="ExtraFirm">Extra Firm</div>
       </div>
     </div>
     <div class="row">
        <div class="col-xs-12 fake-bottom-border">
          <hr class="bordered--bottom bordered--sm">
        </div>
      </div>
  </section>
  <section class="container-fluid">
     <div class="row">
      <?php $d=$dataHeadline['top-pick']; ?>
       <div class="col-xs-12"> 
           <h2 class="font--400 font--primary2 font-35">
           <div><?php echo $d['headline'] ?></div>
            </h2>
            <p class="font--black font-18 lh-md"><?php echo $d['copy'] ?></p>
        </div>
        <?php foreach ($TopPicks as $value ): ?>
        <div class="col-md-3 padding-bottom-xl no-pad-mob">
          <a href="<?php echo $value['link'] ?>" data-href="<?php echo $value['link'] ?>">
            <img src="<?php echo $value['img']; ?>" alt="<?php echo $value['alt']; ?>" class="center-block img-responsive fullWidth">
          
          <h3 class="font--400 font--primary2 font-24 padding-top-xl"><?php echo $value['listHead']; ?></h3>
          </a>
        <?php foreach ($value['listcopy'] as $val ): ?>
          <ul>
            <li class="font-18 listspacing"><?php echo $val; ?></li>
          </ul>
        <?php endforeach; ?>
      </div>
         
    <?php endforeach; ?>
    </div>
  
      
     <div class="row">
        <div class="col-xs-12 fake-bottom-border">
          <hr class="bordered--bottom bordered--sm">
        </div>
      </div>
  </section>
  <section class="container-fluid">
     <div class="row">
      <?php $d=$dataHeadline['dream-bed']; ?>
       <div class="col-md-8"> 
           <h2 class="font--400 font--primary2 font-31"><div>
              <?php echo $d['headline'] ?></div>
            </h2>
            <p class="font--black font-18 lh-md"><?php echo $d['copy'] ?></p>
          
       </div>
       <div class="col-md-4">
          <div class="col-xs-12 text-align-center fullwidthPadding lg__no-pad">
            <aside class="tip-box">
              <div class="tip-box__head">Tip</div>
              <div class="tip-box__body font-18 lh-md">
                <?php echo $dreamBed ?>
              </div>
            </aside>
        </div
       </div>
     </div>
   
  </section>
  <section class="container-fluid">
     <div class="row">
      

        <?php foreach ($BoxSpring as $value ): ?>
       <div class="col-md-4 padding-bottom-xl">
        <a href="<?php echo $value['link'] ?>" data-href="<?php echo $value['link'] ?>">
          <img src="<?php echo $value['img']; ?>" alt="<?php echo $value['alt']; ?>" class="center-block img-responsive">
         <h3 class="font--400 font--primary2 font-24  padding-top-xl"><?php echo $value['listHead']; ?></h3>
        </a>
         <?php foreach ($value['listcopy'] as $val ): ?>
          <ul>
              <li class="font-18 listspacing"><?php echo $val; ?></li>
          </ul>
         <?php endforeach; ?>
       </div>
       <?php endforeach; ?>
     
     </div>
     <div class="row">
        <div class="col-xs-12 fake-bottom-border">
          <hr class="bordered--bottom bordered--sm">
        </div>
      </div>
  </section>
  </div>















        <!-- FOOTER-ISH HEADLINE -->
        <section class="container headline footer-ish--headline">
<?php
/**
MOTHERSCRATCHING, INCONSISTENT, FAKE BORDERS THAT WANT TO BUST OUT OF BOXES!
*/
?>
        <!--   <div class="fake-bottom-border">
            <hr class="visible-xs visible-sm bordered--bottom bordered--sm">
          </div>

          <div class="col-xs-12">
            <div class="row">
              <div class="col-xs-12">
                <div class="headline--copy text-align-center font--primary2 font--600">
                  <?php echo clean_text( $footer_copy ) ?>
                </div>
              </div>
            </div>
          </div> -->
        </section>


<?php

/**
Add a MFn additional parameter to allow for hiding the brand_logos_heading
to match the inconsistent design!
*/

// use element to include reusable page-element snippet!
element( 'brand-logos-mattress.php',
  compact( 'brand_logos_heading', 'brand_logos_heading_wrapper_classes' )
);
?>
  </div><!-- div.pading-horiz-xl -->
</div><!-- #cms-content-1920-1920.cms-content.cms-content-html -->

