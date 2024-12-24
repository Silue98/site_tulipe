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
                             <h2 class="title">Boeuf</h2>
                         </div>
                         <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="{{url('/')}}">Accueil</a>
                                </span>
                             <span>Boeuf</span>
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

                 <div class="row">

                     <div class="col-lg-12">
                         <div class="ttm_single_image-wrapper">
                             <div class="widget widget_img_gellary clearfix">
                                 <ul>

                                     <li>
                                         <a href="{{asset('images/cdb.jpeg')}}" rel="prettyPhoto[coregallery]" data-rel="prettyPhoto">
                                             <img class="img-fluid" style="height: 200px" src="{{asset('images/cdb.jpeg')}}" alt=""></a>
                                         <h5>Coeur de boeuf</h5>
                                     </li>
                                     <li>
                                         <a href="{{asset('images/langue.jpeg')}}" rel="prettyPhoto[coregallery]" data-rel="prettyPhoto">
                                             <img class="img-fluid" style="height: 200px" src="{{asset('images/langue.jpeg')}}" alt=""></a>
                                         <h5>Langue de boeuf</h5>
                                     </li>
                                     <li><a href="{{asset('images/foie.jpeg')}}"  rel="prettyPhoto[coregallery]" data-rel="prettyPhoto">
                                             <img class="img-fluid" style="height: 200px" src="{{asset('images/foie.jpeg')}}" alt=""></a>
                                         <h5>Foie de boeuf</h5>
                                     </li>

                                     <li><a href="{{asset('images/qdb.jpeg')}}"  rel="prettyPhoto[coregallery]" data-rel="prettyPhoto">
                                             <img class="img-fluid" style="height: 200px" src="{{asset('images/qdb.jpeg')}}" alt=""></a>
                                         <h5>Queue de boeuf</h5>
                                     </li>
                                     <li>
                                         <a href="{{asset('images/rdb.jpeg')}}" rel="prettyPhoto[coregallery]" data-rel="prettyPhoto">
                                             <img class="img-fluid" style="height: 200px" src="{{asset('images/rdb.jpeg')}}" alt=""></a>
                                         <h5>Rognon de boeuf</h5>
                                     </li>
                                     <li>
                                         <a href="{{asset('images/vdn.jpeg')}}" rel="prettyPhoto[coregallery]" data-rel="prettyPhoto">
                                             <img class="img-fluid" style="height: 200px" src="{{asset('images/vdn.jpeg')}}" alt=""></a>
                                         <h5>Viande de boeuf</h5>
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
