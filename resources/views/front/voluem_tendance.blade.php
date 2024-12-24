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
                             <h2 class="title">Volume & Tendance</h2>
                         </div>
                         <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="{{url('/')}}">Accueil</a>
                                </span>
                             <span>Volume & Tendance</span>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- page-title end -->

     <!--site-main start-->
     <div class="site-main">

         <section class="ttm-row padding_bottom_zero-section clearfix">
             <div class="container">
                 <!-- row -->
                 <div class="row">
                     <div class="col-lg-7">
                         <div class="padding_right80 res-991-padding_right0 res-991-margin_bottom50">
                             <!-- section title -->
                             <div class="section-title">
                                 <div class="title-header">
                                     <h3>Volume & Tendance</h3>
                                     <h2 class="title">La Tulipe Food</h2>
                                 </div>
                                 <div class="title-desc">
                                    <p>
                                        Nous avons connu une évolution constante en termes de Chiffre d’Affaires et de Volumes. Aujourd’hui, La Tulipe Food est reconnue comme un partenaire fiable et flexible par de nombreux clients dans différentes villes. <br>
                                        Offrant une gamme étendue de produits et de par notre expertise, nous exportons dans plusieurs villes de la Cote d’Ivoire.

                                    </p>

                                 </div>
                             </div><!-- section title end -->
                             <div class="ttm-horizontal_sep width-100 margin_top40 margin_bottom30"></div>
                                <div class="row">
                                   <div class="col-lg-4 col-md-4 col-sm-6">
                                       <!-- ttm-fid -->
                                       <div class="ttm-fid inside ttm-fid-view-lefticon style1">
                                           <div class="ttm-fid-icon-wrapper">
                                               <i class="fa fa-info"></i>
                                           </div>
                                           <div class="ttm-fid-contents">
                                               <h4 class="ttm-fid-inner">
                                                      <span   data-appear-animation="animateDigits"
                                                              data-from="0"
                                                              data-to="190"
                                                              data-interval="5"
                                                              data-before=""
                                                              data-before-style="sup"
                                                              data-after="M+"
                                                              data-after-style="sub"
                                                              class="numinate">190</span><span>M+</span>
                                               </h4>
                                               <h3 class="ttm-fid-title">Tonnes de Viande</h3>
                                           </div>
                                       </div><!-- ttm-fid end -->
                                   </div>
                                   <div class="col-lg-4 col-md-4 col-sm-6">
                                       <!-- ttm-fid -->
                                       <div class="ttm-fid inside ttm-fid-view-lefticon style1">
                                           <div class="ttm-fid-icon-wrapper">
                                               <i class="fa fa-info"></i>
                                           </div>
                                           <div class="ttm-fid-contents">
                                               <h4 class="ttm-fid-inner">
                                                      <span   data-appear-animation="animateDigits"
                                                              data-from="0"
                                                              data-to="76"
                                                              data-interval="12"
                                                              data-before=""
                                                              data-before-style="sup"
                                                              data-after="M+"
                                                              data-after-style="sub"
                                                              class="numinate">76</span><span>M+</span>
                                               </h4>
                                               <h3 class="ttm-fid-title">Tonnes de poissons</h3>
                                           </div>
                                       </div><!-- ttm-fid end -->
                                   </div>
                                   <div class="col-lg-4 col-md-4 col-sm-6">
                                       <!-- ttm-fid -->
                                       <div class="ttm-fid inside ttm-fid-view-lefticon style1">
                                           <div class="ttm-fid-icon-wrapper">
                                               <i class="fa fa-info"></i>
                                           </div>
                                           <div class="ttm-fid-contents">
                                               <h4 class="ttm-fid-inner">
                                                      <span   data-appear-animation="animateDigits"
                                                              data-from="0"
                                                              data-to="10"
                                                              data-interval="1"
                                                              data-before=""
                                                              data-before-style="sup"
                                                              data-after="k+"
                                                              data-after-style="sub"
                                                              class="numinate">10</span><span>k+</span>
                                               </h4>
                                               <h3 class="ttm-fid-title">Clients satisfaits</h3>
                                           </div>
                                       </div><!-- ttm-fid end -->
                                   </div>
                               </div>

                         </div>
                     </div>
                     <div class="col-lg-5 col-md-7 col-sm-8 mx-auto">
                         <div class="ttm_single_image-wrapper">
                             <img class="img-fluid auto_size" src="{{asset('images/AA_116.jpg')}}" alt="La tulipe Food" style="width: 100%">
                         </div>
                     </div>
                 </div><!-- row end -->
             </div>
         </section>
     </div>
 @endsection
