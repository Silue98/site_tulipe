@extends('layouts.template')
 @section('content')
     <!-- page-title -->
     <div class="ttm-page-title-row ttm-bg ttm-bgimage-yes ttm-bgcolor-darkgrey clearfix">
         <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
         <div class="container">
             <div class="row align-items-center">
                 <div class="col-lg-12">
                     <div class="ttm-page-title-row-inner">
                         <div class="page-title-heading">
                             <h2 class="title">Nos contacts</h2>
                         </div>
                         <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="{{url('/')}}">Accueil</a>
                                </span>
                             <span>Nos contacts</span>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- page-title end -->

     <div class="site-main">


         <!-- conatct-section -->
         <section class="ttm-row conatct-section ttm-bgcolor-grey clearfix padding_top50 margin_bottom50">
             <div class="container">
                 <div class="row">
                     <div class="col-lg-12">
                         <div class="row">
                             <div class="col-lg-3">
                                 <div class="ttm-bgcolor-white p-30 border-rad_5 margin_top15">
                                     <!--featured-icon-box-->
                                     <div class="featured-icon-box icon-align-top-content margin_top0 margin_bottom25">
                                         <div class="featured-icon">
                                             <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                                 <i class="flaticon-email"></i>
                                             </div>
                                         </div>
                                         <div class="featured-content pt-2">
                                             <div class="featured-title">
                                                 <h3 class="margin_bottom0 fs-20">Nos coordonnées</h3>
                                             </div>
                                             <div class="featured-desc">info@latulipefood.ci<br>+225 27 21 59 03 10</div>
                                         </div>
                                     </div><!-- featured-icon-box end-->

                                 </div>
                             </div>
                             <div class="col-lg-3">
                                 <div class="ttm-bgcolor-white p-30 border-rad_5 margin_top15">
                                     <!--featured-icon-box-->
                                     <div class="featured-icon-box icon-align-top-content margin_bottom25">
                                         <div class="featured-icon">
                                             <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                                 <i class="flaticon-address"></i>
                                             </div>
                                         </div>
                                         <div class="featured-content pt-2">
                                             <div class="featured-title">
                                                 <h3 class="margin_bottom0 fs-20">Localisation 1</h3>
                                             </div>
                                             <div class="featured-desc">Vridy, ZI Bvd de Petit Bassam
                                             </div>
                                         </div>
                                     </div>

                                 </div>
                             </div>
                             <div class="col-lg-3">
                                 <div class="ttm-bgcolor-white p-30 border-rad_5 margin_top15">
                                     <!--featured-icon-box-->
                                     <div class="featured-icon-box icon-align-top-content margin_bottom10">
                                         <div class="featured-icon">
                                             <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                                 <i class="flaticon-address"></i>
                                             </div>
                                         </div>
                                         <div class="featured-content pt-2">
                                             <div class="featured-title">
                                                 <h3 class="margin_bottom0 fs-20">Localisation 2</h3>
                                             </div>
                                             <div class="featured-desc">
                                                 Marcory, Zone 4, Rue du canal
                                             </div>
                                         </div>
                                     </div><!-- featured-icon-box end-->

                                 <!--featured-icon-box-->

                                 </div>
                             </div>
                             <div class="col-lg-3">
                                 <div class="ttm-bgcolor-white p-30 border-rad_5 margin_top15">
                                     <!--featured-icon-box-->
                                     <div class="featured-icon-box icon-align-top-content margin_bottom25">
                                         <div class="featured-icon">
                                             <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                                 <a href="https://www.linkedin.com/company/tulipe-food/"><i class="fa fa-linkedin"></i></a>
                                             </div>
                                         </div>
                                         <div class="featured-content pt-2">
                                             <div class="featured-title">
                                                 <h3 class="margin_bottom0 fs-20"><a href="https://www.linkedin.com/company/tulipe-food/">La Tulipe Food</a></h3>
                                             </div>
                                             <div class="featured-desc">Suivez-nous sur linkedin</div>
                                         </div>
                                     </div><!-- featured-icon-box end-->
                                     <!--featured-icon-box-->

                                 </div>
                             </div>
                         </div>

                     </div>

                 </div>
             </div>
         </section>
         <!-- conatct-section end -->

         <!--- conatact-section -->
         <section class="ttm-row conatact-section mb_20 clearfix">
             <div class="container">
                 <!-- row -->
                 <div class="row ttm-boxes-spacing-30px">
                     <div class="col-lg-12 ttm-box-col-wrapper">
                         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.8925701867547!2d-3.9749112863328473!3d5.27945003783995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1ef0591ed55a1%3A0xbdf88d6877c4fb72!2sLA%20TULIPE%20FOOD!5e0!3m2!1sfr!2sci!4v1669110200621!5m2!1sfr!2sci" width="740" height="405" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                     </div>
                 </div><!-- row end -->
             </div>
         </section>
         <!-- conatact-section end -->



     </div><!--site-main end-->

 @endsection
