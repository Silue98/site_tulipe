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
                             <h2 class="title">Notre équipe</h2>
                         </div>
                         <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Accueil" href="{{url('/')}}">Accueil</a>
                                </span>
                             <span>Notre équipe</span>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- page-title end -->

     <!--site-main start-->
     <div class="site-main">
         <!--grid-section-->
         <section class="ttm-row grid-section clearfix">
             <div class="container">
                 <!-- row -->
                 <div class="row">
                     <div class="col-lg-12">
                         <!-- section-title -->
                         <div class="section-title title-style-center_text">
                             <div class="title-header">
                                 <h3>L'équipe de La Tulipe Food</h3>
                                 <h2 class="title">Une équipe expérimentée au service des clients</h2>
                             </div>
                             <div class="title-desc">
                                 <p>
                                     Une équipe dynamique et organisée dans différents services ci-dessous
                                 </p>
                             </div>
                         </div><!-- section-title end -->
                     </div>
                 </div>
                 <!-- row end -->
                 <!-- row -->
                 <div class="row padding_top100">
                     <div class="col-lg-12">
                         <div class="ttm-bg ttm-col-bgcolor-yes ttm-bgcolor-white spacing-5">
                             <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                             <div class="layer-content">
                                 <div class="row">
                                     <div class="col-lg-4 col-md-6 col-sm-6">
                                         <!-- featured-imagebox -->
                                         <div class="featured-imagebox featured-imagebox-procedure">
                                             <div class="featured-thumbnail">
                                                 {{--<img class="img-fluid" style="height: 300px" src="{{asset('images/logo_tulipe.png')}}" alt="image">--}}
                                                 <div class="process-num"></div>
                                             </div>
                                             <div class="featured-content">
                                                 <div class="featured-title">
                                                     <h3><a href="{{url('#')}}">COMMERCIAL</a></h3>
                                                 </div>
                                             </div>
                                         </div><!-- featured-imagebox end-->
                                     </div>
                                     <div class="col-lg-4 col-md-6 col-sm-6">
                                         <!-- featured-imagebox -->
                                         <div class="featured-imagebox featured-imagebox-procedure">
                                             <div class="featured-thumbnail">
                                                 {{--<img class="img-fluid" style="height: 300px" src="{{asset('images/logo_tulipe.png')}}" alt="image">--}}
                                                 <div class="process-num"></div>
                                             </div>
                                             <div class="featured-content">
                                                 <div class="featured-title">
                                                     <h3><a href="{{url('#')}}">VENTE</a></h3>
                                                 </div>
                                             </div>
                                         </div><!-- featured-imagebox end-->
                                     </div>
                                     <div class="col-lg-4 col-md-6 col-sm-6">
                                         <!-- featured-imagebox -->
                                         <div class="featured-imagebox featured-imagebox-procedure">
                                             <div class="featured-thumbnail">
                                                 {{--<img class="img-fluid" style="height: 300px" src="{{asset('images/logo_tulipe.png')}}" alt="image">--}}
                                                 <div class="process-num"></div>
                                             </div>
                                             <div class="featured-content">

                                                 <div class="featured-title">
                                                     <h3><a href="{{url('#')}}">TRANSIT / LOGISTIQUE</a></h3>
                                                 </div>
                                             </div>
                                         </div><!-- featured-imagebox end-->
                                     </div>
                                     {{-- <div class="col-lg-3 col-md-6 col-sm-6">
                                          <!-- featured-imagebox -->
                                          <div class="featured-imagebox featured-imagebox-procedure">
                                              <div class="featured-thumbnail">
                                                  <img class="img-fluid" style="height: 300px" src="{{asset('images/chevre.jpeg')}}" alt="image">
                                                  <div class="process-num"></div>
                                              </div>
                                              <div class="featured-content">

                                                  <div class="featured-title">
                                                      <h3><a href="{{url('chevre')}}">Chèvre</a></h3>
                                                  </div>
                                              </div>
                                          </div><!-- featured-imagebox end-->
                                      </div>--}}

                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="row padding_top100">
                     <div class="col-lg-12">
                         <div class="ttm-bg ttm-col-bgcolor-yes ttm-bgcolor-white spacing-5">
                             <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                             <div class="layer-content">
                                 <div class="row">
                                     <div class="col-lg-4 col-md-6 col-sm-6">
                                         <!-- featured-imagebox -->
                                         <div class="featured-imagebox featured-imagebox-procedure">
                                             <div class="featured-thumbnail">
                                                 {{--<img class="img-fluid"  style="height: 300px" src="{{asset('images/logo_tulipe.png')}}" alt="image">--}}
                                                 <div class="process-num"></div>
                                             </div>
                                             <div class="featured-content">

                                                 <div class="featured-title">
                                                     <h3><a href="{{url('#')}}">CONTROLE</a></h3>
                                                 </div>
                                             </div>
                                         </div><!-- featured-imagebox end-->
                                     </div>
                                     <div class="col-lg-4 col-md-6 col-sm-6">
                                         <!-- featured-imagebox -->
                                         <div class="featured-imagebox featured-imagebox-procedure">
                                             <div class="featured-thumbnail">
                                                 {{--<img class="img-fluid" style="height: 300px" src="{{asset('images/logo_tulipe.png')}}" alt="image">--}}
                                                 <div class="process-num"></div>
                                             </div>
                                             <div class="featured-content">
                                                 <div class="featured-title">
                                                     <h3><a href="{{url('#')}}">GESTION DE STOCK</a></h3>
                                                 </div>
                                             </div>
                                         </div><!-- featured-imagebox end-->
                                     </div>
                                     <div class="col-lg-4 col-md-6 col-sm-6">
                                         <!-- featured-imagebox -->
                                         <div class="featured-imagebox featured-imagebox-procedure">
                                             <div class="featured-thumbnail">

                                                 <div class="process-num"></div>
                                             </div>
                                             <div class="featured-content">
                                                 <div class="featured-title">
                                                     <h3><a href="{{url('#')}}">CAISSE</a></h3>
                                                 </div>
                                             </div>
                                         </div><!-- featured-imagebox end-->
                                     </div>

                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <!-- row end -->
             </div>
         </section>
         <!--grid-section end-->
     </div>
 @endsection
