<?php
$breadcrumb_text = !empty($breadcrumb_text) ? $breadcrumb_text : 'no breadcrumb text defined';

$content_file = !empty( $content_file ) ? $content_file : SEARS_MODULE_PATH . '/content__appliance-buying-guides.php';

?>
<div class="shopping-layout-breadcrumb" itemscope="" itemtype="http://schema.org/WebPage">
    <div data-view="Global.Breadcrumb" data-type="breadcrumb">
        <!-- TEMPLATE STARTS: n-->
        <div class="col-xs-12 font-14 padding-vert-md">
            <div id="banner-breadcrumb-top" class="content-banner banner-breadcrumb-top" data-cms-area="breadcrumb_top" data-cms-area-filters="global"></div>
            <aside class="pull-right font-24">
                <span id="chat--container-breadcrumb" class="247--chat pull-right"></span>
                <div class="addthis_toolbox addthis_default_style addthis_20x20_style pull-right hidden-xs hidden-sm">
                    <a class="addthis_button_preferred_4"></a><a class="addthis_button_preferred_3"></a>
                    <a class="addthis_button_preferred_2"></a><a class="addthis_button_preferred_1"></a>
                </div>
            </aside>
            <span id="breadcrumbWrap" class="font--600 global-views-breadcrumb" itemprop="breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                <span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                    <a itemprop="item" href="/" data-touchpoint="home" data-hashtag="#"><strong itemprop="name">Home</strong></a>
                    <i class="fa fa-angle-right font--gray3 padding-horiz-xs"></i>
                    <meta itemprop="position" content="0">
                </span>
                <span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                    <span itemprop="name"><?php echo $breadcrumb_text ?></span>
                    <meta itemprop="position" content="1">
                </span>
            </span>

            <div class="row">
                <div id="banner-breadcrumb-left" class="col-xs-12 col-md-2 content-banner banner-breadcrumb-left" data-cms-area="breadcrumb_left" data-cms-area-filters="path"></div>
                <div id="banner-breadcrumb-right" class="col-xs-12 col-md-10 content-banner banner-breadcrumb-right" data-cms-area="breadcrumb_right" data-cms-area-filters="path"></div>
            </div>

            <div id="banner-breadcrumb-bottom" class="content-banner banner-breadcrumb-bottom" data-cms-area="breadcrumb_bottom" data-cms-area-filters="path">
<?php
/**

THIS IS WHERE CMS CONTENT ACTUALLY GOES!

*/
?>

<?php

include( $content_file );

?>

<?php
/**

HERE ENDS ACTUAL CMS CONTENT!

*/
?>
            </div><!-- id="banner-breadcrumb-bottom" class="content-banner banner-breadcrumb-bottom" -->
        </div><!-- .col-xs-12.font-14 padding-vert-md -->
<!-- TEMPLATE ENDS: n -->
    </div><!-- Global.Breadcrumb -->
</div><!-- .shopping-layout-breadcrumb -->

<div id="content" class="shopping-layout-content" style="min-height: 0px;">
    <div id="cms-landing-page" class="cms-landing-page">
        <!-- TEMPLATE STARTS: n-->
        <div class="cms-landing-page-row">
            <div class="cms-landing-page-row-full-col" data-cms-area="cms-landing-page-placeholder-page-type" data-cms-area-filters="page_type"></div>
            <div class="cms-landing-page-row-full-col" data-cms-area="cms-landing-page-placeholder-path" data-cms-area-filters="path"></div>
        </div>
        <!-- TEMPLATE ENDS: n -->
    </div><!-- #cms-landing-page.cms-landing-page -->
</div><!-- #content.shopping-layout-content -->
