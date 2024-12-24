@extends('layouts.template')
 @section('content')
     <!-- Banner -->
     <div class="banner_slider_wrapper">
         <div class="banner_slider banner_slider_2">
             <div class="slide">
                 <div class="slide_img" style="background-image: url({{asset('public/images/silde1.jpg')}});"></div>
                 <div class="slide__content">
                     <div class="container">
                         <div class="row">
                             <div class="col-lg-12">
                                 <div class="slide__content--headings text-center">
                                     <div >
                                         <h3  data-animation="fadeInDown">
                                             <span class="num"></span>
                                             <span></span>
                                         </h3></div>
                                     <h2  data-animation="fadeInDown" style="color: #FFF">La qualité dans votre assiette</h2>
                                     <div class="margin_top40 res-767-margin_top30 margin_bottom60 res-991-margin_bottom0" data-animation="fadeInUp" data-delay="1.4">
                                         <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-fill ttm-btn-color-skincolor" href="{{url('qui-sommes-nous')}}">En savoir plus</a>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="slide">
                 <div class="slide_img" style="background-image: url({{asset('public/images/slide2.jpg')}});"></div>
                 <div class="slide__content">
                     <div class="container">
                         <div class="row">
                             <div class="col-lg-12">
                                 <div class="slide__content--headings text-center">
                                     <h3  data-animation="fadeInDown">
                                         <span class="num"></span>
                                         <span></span>
                                     </h3>
                                     <h2  data-animation="fadeInDown">La qualité dans votre assiette</h2>
                                     <div class="margin_top40 res-767-margin_top30 margin_bottom60 res-991-margin_bottom0" data-animation="fadeInUp" data-delay="1.4">
                                         <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-fill ttm-btn-color-skincolor" href="{{url('qui-sommes-nous')}}">En savoir plus</a>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="slide">
                 <div class="slide_img" style="background-image: url({{asset('public/images/rognon_tulipe.jpeg')}});"></div>
                 <div class="slide__content">
                     <div class="container">
                         <div class="row">
                             <div class="col-lg-12">
                                 <div class="slide__content--headings text-center">
                                     <div >
                                         <h3  data-animation="fadeInDown">
                                             <span class="num"></span>
                                             <span></span>
                                         </h3></div>
                                     <h2  data-animation="fadeInDown" style="color: #FFF">La qualité dans votre assiette</h2>
                                     <div class="margin_top40 res-767-margin_top30 margin_bottom60 res-991-margin_bottom0" data-animation="fadeInUp" data-delay="1.4">
                                         <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-fill ttm-btn-color-skincolor" href="{{url('qui-sommes-nous')}}">En savoir plus</a>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="slide">
                 <div class="slide_img" style="background-image: url({{asset('public/images/queue-de-boeuf.webp')}});"></div>
                 <div class="slide__content">
                     <div class="container">
                         <div class="row">
                             <div class="col-lg-12">
                                 <div class="slide__content--headings text-center">
                                     <h3  data-animation="fadeInDown">
                                         <span class="num"></span>
                                         <span></span>
                                     </h3>
                                     <h2  data-animation="fadeInDown">La qualité dans votre assiette</h2>
                                     <div class="margin_top40 res-767-margin_top30 margin_bottom60 res-991-margin_bottom0" data-animation="fadeInUp" data-delay="1.4">
                                         <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-fill ttm-btn-color-skincolor" href="{{url('qui-sommes-nous')}}">En savoir plus</a>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- Banner end-->

     <div class="site-main">
         <!--padding_zero-section-->
         <section class="ttm-row padding_zero-section clearfix">
             <div class="container">
                 <!-- row -->
                 <div class="row">
                     <div class="col-lg-12">
                         <div class="row mt_60 res-991-margin_top0 mb_15">
                             <div class="col-lg-6 col-md-12 col-sm-12">
                                 <!--featured-icon-box-->
                                 <div class="featured-icon-box style3 ttm-bgcolor-white">
                                     <div class="featured-content">
                                         <div class="featured-desc">
                                             <p>Nos produits</p>
                                         </div>
                                         <div class="featured-title">
                                             <h3>Poissons</h3>
                                         </div>
                                     </div>
                                 </div><!-- featured-icon-box end-->
                             </div>
                             <div class="col-lg-6 col-md-12 col-sm-12">
                                 <!--featured-icon-box-->
                                 <div class="featured-icon-box style3 ttm-bgcolor-darkgrey">
                                     <div class="featured-content">
                                         <div class="featured-desc">
                                             <p class="ttm-textcolor-skincolor">Nos produits</p>
                                         </div>
                                         <div class="featured-title">
                                             <h3>Viandes</h3>
                                         </div>
                                     </div>
                                 </div><!-- featured-icon-box end-->
                             </div>

                         </div>
                     </div>
                 </div><!-- row end -->
             </div>
         </section>
         <!--padding_zero-section-->

         <section class="ttm-row about-section bg-layer-equal-height clearfix padding_bottom50 padding_top50">
             <div class="container">
                 <div class="row">
                     <div class="col-lg-6">
                         <!-- col-img-img-three -->
                         <div class="ttm-bg ttm-col-bgimage-yes col-bg-img-three ttm-left-span z-index-2">
                             <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                             <div class="layer-content">
                             </div>
                         </div><!-- col-img-bg-img-three end-->
                         <img class="img-fluid ttm-equal-height-image" src="{{asset('public/images/AA_63.jpeg')}}" alt="bg-image">
                     </div>
                     <div class="col-lg-6 col-md-12 col-xs-12">
                         <div class="d-flex flex-column justify-content-center h-100 res-991-padding_top40">
                             <!-- section title -->
                             <div class="section-title">
                                 <div class="title-header">
                                     <h3>Notre entreprise</h3>
                                     <h2 class="title">LA TULIPE FOOD</h2>
                                 </div>
                                 <div class="title-desc">
                                     <p>
                                         Agréée pour l'importation et la distribution de produits alimentaires congelés La Tulipe Food est une entreprise ivoirienne qui commercialise principalement le poisson et les abats de bœuf et de mouton. <p>

                                 </div>
                             </div><!-- section title end -->
                             <!--<div class="row">
                                 <div class="col-sm-6">
                                     <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor ttm-textcolor-darkgrey fs-15">
                                         <li><i class="ti ti-arrow-circle-right"></i><span class="ttm-list-li-content">The Asia Leads the Way</span></li>
                                         <li><i class="ti ti-arrow-circle-right"></i><span class="ttm-list-li-content">A Feeding Farmed Fish</span></li>
                                         <li><i class="ti ti-arrow-circle-right"></i><span class="ttm-list-li-content">We Serving Up Seaweed</span></li>
                                     </ul>
                                 </div>
                                 <div class="col-sm-6">
                                     <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor ttm-textcolor-darkgrey fs-15">
                                         <li><i class="ti ti-arrow-circle-right"></i><span class="ttm-list-li-content">New Options From Startups</span></li>
                                         <li><i class="ti ti-arrow-circle-right"></i><span class="ttm-list-li-content">Taking Aquaculture Further</span></li>
                                         <li><i class="ti ti-arrow-circle-right"></i><span class="ttm-list-li-content">Tackling a Seafood Deficit</span></li>
                                     </ul>
                                 </div>
                             </div>-->
                             <div class="margin_top30">
                                 <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-border ttm-btn-color-dark" href="{{url('qui-sommes-nous')}}">En savoir plus</a>
                             </div>
                         </div>
                     </div>
                 </div><!-- row end -->
             </div>
         </section>

     </div>

 @endsection
