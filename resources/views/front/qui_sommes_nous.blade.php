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
                             <h2 class="title">Notre entreprise</h2>
                         </div>
                         <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="{{url('/')}}">Accueil</a>
                                </span>
                             <span>Notre entreprise</span>
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
                                     <h3>Notre entreprise</h3>
                                     <h2 class="title">TULIPE FOOD SA</h2>
                                 </div>
                                 <div class="title-desc">
                                     <p>
                                         Agréée pour l'importation et la distribution de produits alimentaires congelés, La Tulipe Food SA est une entreprise ivoirienne qui commercialise principalement les abats de bœuf & de mouton et le poisson.


                                     </p>
                                     <p>
                                         Créée en 2018, La Tulipe Food SA couvre tout le marché ivoirien et progressivement le marché ouest africain grâce à la qualité et à la fraîcheur de ses produits : Ce qui lui vaut d’être leader du marché ivoirien dans son secteur d’activité et en forte croissance dans les autres pays ciblés.
                                     </p>
                                 </div>
                             </div><!-- section title end -->
                             <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-border ttm-btn-color-dark  margin_top15" href="{{url('contactez-nous')}}"> Nos contacts</a>
                             <div class="ttm-horizontal_sep width-100 margin_top40 margin_bottom30"></div>
                           {{--  <div class="row">
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
                                                            data-to="30"
                                                            data-interval="5"
                                                            data-before=""
                                                            data-before-style="sup"
                                                            data-after="+"
                                                            data-after-style="sub"
                                                            class="numinate">30</span><span>+</span>
                                             </h4>
                                             <h3 class="ttm-fid-title">Best Awards Winning</h3>
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
                                                            data-to="48"
                                                            data-interval="12"
                                                            data-before=""
                                                            data-before-style="sup"
                                                            data-after="+"
                                                            data-after-style="sub"
                                                            class="numinate">48</span><span>+</span>
                                             </h4>
                                             <h3 class="ttm-fid-title">Experience Members</h3>
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
                                                            data-to="5"
                                                            data-interval="1"
                                                            data-before=""
                                                            data-before-style="sup"
                                                            data-after="k+"
                                                            data-after-style="sub"
                                                            class="numinate">5</span><span>k+</span>
                                             </h4>
                                             <h3 class="ttm-fid-title">Clients satisfaits</h3>
                                         </div>
                                     </div><!-- ttm-fid end -->
                                 </div>
                             </div>--}}

                         </div>
                     </div>
                     <div class="col-lg-5 col-md-7 col-sm-8 mx-auto">
                         <div class="ttm_single_image-wrapper">
                             <img class="img-fluid auto_size" src="{{asset('images/AA_151.jpg')}}" alt="single-03" height="371" width="568">
                             <img class="img-fluid auto_size" src="{{asset('images/entr.jpeg')}}" alt="single-03" height="789" width="500">
                         </div>
                     </div>
                 </div><!-- row end -->
             </div>
         </section>






     </div><!--site-main end-->


 @endsection
