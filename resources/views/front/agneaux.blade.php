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
                             <h2 class="title">Mouton</h2>
                         </div>
                         <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="{{url('/')}}">Accueil</a>
                                </span>
                             <span>Mouton</span>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- page-title end -->

     <div class="site-main">

         <section class="ttm-row padding_bottom_zero-section clearfix">
             <div class="container">
                 <!-- row -->
                 <div class="row">
                     <div class="col-lg-12 col-md-12 col-sm-12 mx-auto">
                         <div class="ttm_single_image-wrapper">
                             <div class="widget widget_img_gellary clearfix">
                                 <ul>

                                     <li>
                                         <a href="{{asset('images/poitrine.jpeg')}}" rel="prettyPhoto[coregallery]" data-rel="prettyPhoto">
                                             <img class="img-fluid" style="height: 200px"  src="{{asset('images/poitrine.jpeg')}}" alt=""></a>
                                        <h5>Poitrine d'agneau</h5>
                                     </li>
                                     <li>
                                         <a href="{{asset('images/Poitrine_agneau.jpeg')}}" rel="prettyPhoto[coregallery]" data-rel="prettyPhoto">
                                             <img class="img-fluid" style="height: 200px"  src="{{asset('images/Poitrine_agneau.jpeg')}}" alt=""></a>
                                         <h5>Carcasse d’agneau</h5>
                                     </li>
                                     <li>
                                         <a href="{{asset('images/tete_de_mouton.jpeg')}}" rel="prettyPhoto[coregallery]" data-rel="prettyPhoto">
                                             <img class="img-fluid" style="height: 200px"  src="{{asset('images/tete_de_mouton.jpeg')}}" alt=""></a>
                                         <h5>Tête de mouton</h5>
                                     </li>
                                     <li>
                                         <a href="{{asset('images/patte-de-mouton.jpg')}}" rel="prettyPhoto[coregallery]" data-rel="prettyPhoto">
                                             <img class="img-fluid" style="height: 200px"  src="{{asset('images/patte-de-mouton.jpg')}}" alt=""></a>
                                         <h5>Patte de mouton</h5>
                                     </li>

                                 </ul>
                             </div>
                         </div>
                     </div>
                 </div><!-- row end -->
             </div>
         </section>
     </div>
 @endsection
