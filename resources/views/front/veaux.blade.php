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
                             <h2 class="title">Veau</h2>
                         </div>
                         <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="{{url('/')}}">Accueil</a>
                                </span>
                             <span>Veau </span>
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
                                         <a href="{{asset('images/Sternum.jpg')}}" rel="prettyPhoto[coregallery]" data-rel="prettyPhoto">
                                             <img class="img-fluid" style="height: 200px" src="{{asset('images/Sternum.jpg')}}" alt=""></a>
                                        <h5>Sternum de veau</h5>
                                     </li>
                                     <li>
                                         <a href="{{asset('images/pdv.jpeg')}}" rel="prettyPhoto[coregallery]" data-rel="prettyPhoto">
                                             <img class="img-fluid" style=" height: 200px" src="{{asset('images/pdv.jpeg')}}" alt=""></a>
                                         <h5>Pieds de veau</h5>
                                     </li>
                                     <li>
                                         <a href="{{asset('images/qdv.jpg')}}" rel="prettyPhoto[coregallery]" data-rel="prettyPhoto">
                                             <img class="img-fluid" style="height: 200px" src="{{asset('images/qdv.jpg')}}" alt=""></a>
                                         <h5>Queue de veau</h5>
                                     </li>
                                     <li>
                                         <a href="{{asset('images/cdv.jpg')}}" rel="prettyPhoto[coregallery]" data-rel="prettyPhoto">
                                             <img class="img-fluid" style="height: 200px" src="{{asset('images/cdv.jpg')}}" alt=""></a>
                                         <h5>Coeur de veau</h5>
                                     </li>
                                     <li>
                                         <a href="{{asset('images/Tripe.jpeg')}}" rel="prettyPhoto[coregallery]" data-rel="prettyPhoto">
                                             <img class="img-fluid" style="height: 200px" src="{{asset('images/Tripe.jpeg')}}" alt=""></a>
                                         <h5>Tripes de veau</h5>
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
