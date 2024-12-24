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
                             <h2 class="title">Notre galerie</h2>
                         </div>
                         <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="{{url('/')}}">Accueil</a>
                                </span>
                             <span>Notre galerie</span>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- page-title end -->

     <div class="site-main">


         <!--grid-section-->
         <div class="ttm-row grid-section clearfix">
             <div class="container">
                 <!-- row -->
                 <div class="row">
                     <div class="col-lg-4 col-md-6 col-sm-6 ttm-box-col-wrapper">
                         <!-- featured-imagebox -->
                         <div class="featured-imagebox featured-imagebox-portfolio style1">
                             <!-- ttm-box-view-overlay -->
                             <div class="ttm-box-view-overlay">
                                 <!-- featured-thumbnail -->
                                 <div class="featured-thumbnail">
                                     <img class="img-fluid" src="{{asset('images/AA_107n.jpg')}}" alt="image">
                                 </div><!-- featured-thumbnail end-->
                                 <div class="ttm-media-link">
                                     <a class="ttm_prettyphoto ttm_image" title="Cage System" data-rel="prettyPhoto" href="{{asset('images/AA_107n.jpg')}}">
                                         <i class="fa fa-search"></i>
                                     </a>
                                     <!--<a href="#" class="ttm_link"><i class="fa fa-plus"></i></a>-->
                                 </div>
                             </div><!-- ttm-box-view-overlay end-->
                             <div class="featured-content">
                                 <div class="featured-title">
                                     <h3><a href="#"></a></h3>
                                 </div>
                             </div>
                         </div><!-- featured-imagebox end-->
                     </div>
                     <div class="col-lg-4 col-md-6 col-sm-6 ttm-box-col-wrapper">
                         <!-- featured-imagebox -->
                         <div class="featured-imagebox featured-imagebox-portfolio style1">
                             <!-- ttm-box-view-overlay -->
                             <div class="ttm-box-view-overlay">
                                 <!-- featured-thumbnail -->
                                 <div class="featured-thumbnail">
                                     <img class="img-fluid" src="{{asset('images/AA_110n.jpg')}}" alt="image">
                                 </div><!-- featured-thumbnail end-->
                                 <div class="ttm-media-link">
                                     <a class="ttm_prettyphoto ttm_image" title="Prawn Lack" data-rel="prettyPhoto" href="{{asset('images/AA_110n.jpg')}}">
                                         <i class="fa fa-search"></i>
                                     </a>
                                     <!--<a href="#" class="ttm_link"><i class="fa fa-plus"></i></a>-->
                                 </div>
                             </div><!-- ttm-box-view-overlay end-->
                             <div class="featured-content">
                                 <div class="featured-title">
                                     <h3><a href="#"></a></h3>
                                 </div>
                             </div>
                         </div><!-- featured-imagebox end-->
                     </div>
                     <div class="col-lg-4 col-md-6 col-sm-6 ttm-box-col-wrapper">
                         <!-- featured-imagebox -->
                         <div class="featured-imagebox featured-imagebox-portfolio style1">
                             <!-- ttm-box-view-overlay -->
                             <div class="ttm-box-view-overlay">
                                 <!-- featured-thumbnail -->
                                 <div class="featured-thumbnail">
                                     <img class="img-fluid" src="{{asset('images/AA_152.jpg')}}" alt="image">
                                 </div><!-- featured-thumbnail end-->
                                 <div class="ttm-media-link">
                                     <a class="ttm_prettyphoto ttm_image" title="Prawn Lack" data-rel="prettyPhoto" href="{{asset('images/AA_152.jpg')}}">
                                         <i class="fa fa-search"></i>
                                     </a>
                                     <!--<a href="#" class="ttm_link"><i class="fa fa-plus"></i></a>-->
                                 </div>
                             </div><!-- ttm-box-view-overlay end-->
                             <div class="featured-content">
                                 <div class="featured-title">
                                     <h3><a href="#"></a></h3>
                                 </div>
                             </div>
                         </div><!-- featured-imagebox end-->
                     </div>
                     <div class="col-lg-4 col-md-6 col-sm-6 ttm-box-col-wrapper">
                         <!-- featured-imagebox -->
                         <div class="featured-imagebox featured-imagebox-portfolio style1">
                             <!-- ttm-box-view-overlay -->
                             <div class="ttm-box-view-overlay">
                                 <!-- featured-thumbnail -->
                                 <div class="featured-thumbnail">
                                     <img class="img-fluid" src="{{asset('images/AA_120.jpg')}}" alt="image">
                                 </div><!-- featured-thumbnail end-->
                                 <div class="ttm-media-link">
                                     <a class="ttm_prettyphoto ttm_image" title="Catfish Pound" data-rel="prettyPhoto" href="{{asset('images/AA_120.jpg')}}">
                                         <i class="fa fa-search"></i>
                                     </a>
                                     <!--<a href="#" class="ttm_link"><i class="fa fa-plus"></i></a>-->
                                 </div>
                             </div><!-- ttm-box-view-overlay end-->
                             <div class="featured-content">
                                 <div class="featured-title">
                                     <h3><a href="#"></a></h3>
                                 </div>
                             </div>
                         </div><!-- featured-imagebox end-->
                     </div>
                     <div class="col-lg-4 col-md-6 col-sm-6 ttm-box-col-wrapper">
                         <!-- featured-imagebox -->
                         <div class="featured-imagebox featured-imagebox-portfolio style1">
                             <!-- ttm-box-view-overlay -->
                             <div class="ttm-box-view-overlay">
                                 <!-- featured-thumbnail -->
                                 <div class="featured-thumbnail">
                                     <img class="img-fluid" src="{{asset('images/AA_125.jpg')}}" alt="image">
                                 </div><!-- featured-thumbnail end-->
                                 <div class="ttm-media-link">
                                     <a class="ttm_prettyphoto ttm_image" title="Shrimp Lack" data-rel="prettyPhoto" href="{{asset('images/AA_125.jpg')}}">
                                         <i class="fa fa-search"></i>
                                     </a>
                                     <!--<a href="#" class="ttm_link"><i class="fa fa-plus"></i></a>-->
                                 </div>
                             </div><!-- ttm-box-view-overlay end-->
                             <div class="featured-content">
                                 <div class="featured-title">
                                     <h3><a href="#"></a></h3>
                                 </div>
                             </div>
                         </div><!-- featured-imagebox end-->
                     </div>
                     <div class="col-lg-4 col-md-6 col-sm-6 ttm-box-col-wrapper">
                         <!-- featured-imagebox -->
                         <div class="featured-imagebox featured-imagebox-portfolio style1">
                             <!-- ttm-box-view-overlay -->
                             <div class="ttm-box-view-overlay">
                                 <!-- featured-thumbnail -->
                                 <div class="featured-thumbnail">
                                     <img class="img-fluid" src="{{asset('images/entr.jpeg')}}" alt="image">
                                 </div><!-- featured-thumbnail end-->
                                 <div class="ttm-media-link">
                                     <a class="ttm_prettyphoto ttm_image" title="" data-rel="prettyPhoto" href="{{asset('images/entr.jpeg')}}">
                                         <i class="fa fa-search"></i>
                                     </a>
                                     <!--<a href="#" class="ttm_link"><i class="fa fa-plus"></i></a>-->
                                 </div>
                             </div><!-- ttm-box-view-overlay end-->
                             <div class="featured-content">
                                 <div class="featured-title">
                                     <h3><a href="#"></a></h3>

                                 </div>
                             </div>
                         </div><!-- featured-imagebox end-->
                     </div>
                 </div><!-- row end -->
             </div>
         </div>
         <!--grid-section end-->

     </div>


 @endsection
