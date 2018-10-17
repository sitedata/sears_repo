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
      <div class="heroText font-48 font--700 ">Composting 101</div>
      <div class="banner">
      <picture class="picture img-responsive mqImage width100percent">
        <source media="(max-width:991px)" srcset="<?php echo 'http://hometown.sb3.production.netsuitestaging.com/assets/cms/purered/2018-10-08-SEARS_Composting101_SubLandingPage/SHO_1011_compost_LP_hero_M.jpg' ?>">
        <source media="(min-width:992px)" srcset="<?php echo 'http://hometown.sb3.production.netsuitestaging.com/assets/cms/purered/2018-10-08-SEARS_Composting101_SubLandingPage/SHO_1011_compost_LP_hero.jpg' ?>">
        <img src="<?php echo 'http://hometown.sb3.production.netsuitestaging.com/assets/cms/purered/2018-10-08-SEARS_Composting101_SubLandingPage/SHO_1011_compost_LP_hero.jpg' ?>" alt="Mattress Buying Guide - How to Choose the Right Mattress" class="picture__img img-responsive mqImage width100percent">
      </picture>
      </div>
  </section>
  <!-- END #hero -->

<!-- extra wrapper around all these things that are spozta be 65px narrower than hero -->
<div class="">
  <section class="container">
      <div class="row">
        <div class="padding-vert-xl">
          <div class="col-xs-12">
            <h2 class="font--400 font--primary2 font-35"><?php echo $headlineHeader; ?> </h2>
              <p class="font--black font-18 mobleading">Fall is here, and brings with it apple cider, football and lots of lawn and garden cleanup. Put yard waste to excellent use by composting those colorful leaves, grass clippings and yard trimmings. Come springtime, you’ll have an organic fertilizer and soil conditioner that’s rich in nutrients, improves soil texture, and regulates moisture and soil pH. Find more ways to ensure your yard is looking its best with our  <a href="/fall-lawn-garden-cleanup-tips" data-href="/fall-lawn-garden-cleanup-tips">fall lawn and garden cleanup tips</a>.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12  no-pad ">
          <hr class="bordered--bottom bordered--sm removeMarginTop">
        </div>
      </div>
      <div class="row">
        <div class="col-md-7">
        <?php $d=$dataHeadline['compostBenefit']; ?>
          <h2 class="font--400 font--primary2 font-35 "><?php echo $d['headline']; ?> </h2>
          <p class="font--black font-18 mobleading"><?php  echo $d['copy'];?></p>
        </div>
        <div class="col-md-5">
            <aside class="tip-box">
              <div class="tip-box__head textTransCap">Did You Know?</div>
              <div class="tip-box__body font-18 lh-md">
                <?php echo $firstTipBody; ?>
              </div>
            </aside>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 fake-bottom-border">
          <hr class="bordered--bottom bordered--sm">
        </div>
      </div>
       <div class="row">
      <?php $d=$dataHeadline['compostHead']; ?>
       <div class="col-xs-12"> 
           <h2 class="font--400 font--primary2 font-35 "><div>
              <?php echo $d['headline'] ?></div>
            </h2>
            <p class="font--black font-18 lh-md mobleading"><?php echo $d['copy'] ?></p>
          
       </div>
       <div class="col-md-6"></div>
     </div>
      <div class="row">
<div class="col-md-4 padding-bottom-xl padding-horiz-lg no-pad-mob">
          <img src="http://hometown.sb3.production.netsuitestaging.com/assets/cms/purered/2018-10-08-SEARS_Composting101_SubLandingPage/SHO_1011_compost_LP_whattocompost_01browns.png" alt="The Browns" class="center-block img-responsive">
         <h3 class="font--400 font--primary2 font-24  padding-top-xl">1. Browns</h3>
            <div class="font--black font-18 padding-bottom-xl mobleading">The browns are those dead leaves, pine needles, twigs and branches that you pick up from your lawn. </div>   
              <div class="font-18 mobleading"><a href="/Lawn-Garden/Handheld-Power-Tools/Hedge-Trimmers" data-href="/Lawn-Garden/Handheld-Power-Tools/Hedge-Trimmers">Shop Trimmers</a></div>
         
                  
              <div class="font-18 mobleading"><a href="/s?keywords=Pruners%20and%20Loppers" data-href="/s?keywords=Pruners%20and%20Loppers">Shop Pruners and Loppers</a></div>
         
                  
              <div class="font-18 mobleading"><a href="/Lawn-Garden/Handheld-Power-Tools/Leaf-Blowers" data-href="/Lawn-Garden/Handheld-Power-Tools/Leaf-Blowers">Shop Blowers</a></div>
         
                </div>
              <div class="col-md-4 padding-bottom-xl padding-horiz-lg no-pad-mob">
          <img src="http://hometown.sb3.production.netsuitestaging.com/assets/cms/purered/2018-10-08-SEARS_Composting101_SubLandingPage/SHO_1011_compost_LP_whattocompost_02greens.png" alt="The Greens" class="center-block img-responsive">
         <h3 class="font--400 font--primary2 font-24  padding-top-xl ">2. Greens</h3>
            <div class="font--black font-18 padding-bottom-xl mobleading">The greens are your grass clippings, veggie waste and fruit scraps. </div>
              <div class="font-18 mobleading"><a href="/Lawn-Garden/Mowers-Tractors" data-href="/Lawn-Garden/Mowers-Tractors">Shop Lawn Mowers</a></div>
         
                  
              <div class="font-18 mobleading"><a href="/Lawn-Garden/Mowers-Tractors" data-href="/Lawn-Garden/Mowers-Tractors">Shop Riding Mowers</a>
              </div>
        
         
                </div>
              <div class="col-md-4 padding-bottom-xl padding-horiz-lg no-pad-mob">
          <img src="http://hometown.sb3.production.netsuitestaging.com/assets/cms/purered/2018-10-08-SEARS_Composting101_SubLandingPage/SHO_1011_compost_LP_whattocompost_03moisture.png" alt="Moisture" class="center-block img-responsive">
         <h3 class="font--400 font--primary2 font-24  padding-top-xl">3. Moisture</h3>
            <div class="font--black font-18 padding-bottom-xl mobleading">For proper decomposition, just add water.</div>        
              <div class="font-18 mobleading"><a href="/Lawn-Garden/Lawn-Garden-Care/Garden-Hoses-Sprinklers" data-href="/Lawn-Garden/Lawn-Garden-Care/Garden-Hoses-Sprinklers">Shop Watering Equipment</a></div>
          <div class="col-xs-12 no-pad">
            <aside class="tip-box padding-top-xl">
              <div class="tip-box__head">Tip</div>
              <div class="tip-box__body font-18 lh-md">
                <?php echo $secondTipBody; ?>
              </div>
            </aside>
        </div>
          </div>
     </div>
     <div class="row">
        <div class="col-xs-12 fake-bottom-border no-pad-mob">
          <hr class="bordered--bottom bordered--sm">
        </div>
      </div>
      <div class="row">
      <?php $d=$dataHeadline['nonCompostHead']; ?>
       <div class="col-xs-12"> 
           <h2 class="font--400 font--primary2 font-35 "><div>
              <?php echo $d['headline'] ?></div>
            </h2>
            <p class="font--black font-18 lh-md mobleading"><?php echo $d['copy'] ?></p>
       </div>
     </div>
      <div class="row">
       <div class="col-xs-12 no-pad-mob">
        <?php foreach($imgGroup as $imgval): ?>
         <div class="coloredBox font-22 center-block mobleading">
           
           <div class="col-xs-6 col-md-12 no-pad">
             <img src="<?php echo $imgval['img']?>" class="img-responsive center-block fullWidthMobile">
             <div class="text-align-center">
               <div class="font-22 padding-sm"><?php echo $imgval['copy']?></div>
             </div>
           </div>
         </div>
         <?php endforeach; ?>

       </div>
     </div>  
      <div class="row">
        <div class="col-xs-12 fake-bottom-border no-pad-mob">
          <hr class="bordered--bottom bordered--sm">
        </div>
      </div> 
      <div class="row">
      <?php $d=$dataHeadline['CompostHow']; ?>
       <div class="col-xs-12"> 
           <h2 class="font--400 font--primary2 font-35"><div>
              <?php echo $d['headline'] ?></div>
            </h2>
            <p class="font--black font-18 lh-md mobleading"><?php echo $d['copy'] ?></p>
       </div>
     </div>

      <div class="row">
        <?php foreach ($TopPicks as $value ): ?>
        <div class="col-md-3 padding-bottom-xl no-pad-mob">

            <img src="<?php echo $value['img']; ?>" alt="<?php echo $value['alt']; ?>" class="center-block img-responsive fullWidth">

        <div class="font--black font-18 padding-lg mobleading"><?php echo $value['copy']?></div>
      </div>
         
    <?php endforeach; ?>
    </div>
    <div class="row">
      <div class="col-md-7"></div>
      <div class="col-md-5">
        <div class="col-xs-12 no-pad">
            <aside class="tip-box noMarginmob">
              <div class="tip-box__head">Tip</div>
              <div class="tip-box__body font-18 lh-md ">
                <?php echo $thirdTipBody; ?>
              </div>
            </aside>
        </div>
      </div>
    </div>
    
     <div class="row">
        <div class="col-xs-12 fake-bottom-border no-pad-mob">
          <hr class="bordered--bottom bordered--sm">
        </div>
      </div>
      <div class="row">
      <?php $d=$dataHeadline['CompostUse']; ?>
       <div class="col-xs-12"> 
           <h2 class="font--400 font--primary2 font-35"><div>
              <?php echo $d['headline'] ?></div>
            </h2>
            <p class="font--black font-18 lh-md mobleading"><?php echo $d['copy'] ?></p>

            <div class="font-18 mobleading">
            <a href="<?php echo $d['linkref'] ?>" data-href="<?php echo $d['linkref'] ?>"><?php echo $d["linktext"]?></a>
            </div>
       </div>
     </div>
      <div class="row">
        <div class="col-xs-12 fake-bottom-border no-pad-mob">
          <hr class="bordered--bottom bordered--sm">
        </div>
      </div>


  </section>
  </div>















        <!-- FOOTER-ISH HEADLINE -->



<?php

/**
Add a MFn additional parameter to allow for hiding the brand_logos_heading
to match the inconsistent design!
*/

// use element to include reusable page-element snippet!
element( 'brand-logos-compost.php',
  compact( 'brand_logos_heading', 'brand_logos_heading_wrapper_classes' )
);
?>

<section>
 <div class="container">
   <div class="row">
     <div class="col-xs-12 text-align-center">
          <div class="font-25"><b>View More:</b> <a href="/fall-lawn-and-garden-care" data-href="/fall-lawn-and-garden-care">Fall Lawn & Garden Care</a></div>
     </div>
   </div>
 </div>
</section>
  </div><!-- div.pading-horiz-xl -->
</div><!-- #cms-content-1920-1920.cms-content.cms-content-html -->

