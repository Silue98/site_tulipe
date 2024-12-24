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
                             <h2 class="title">Poissons</h2>
                         </div>
                         <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="{{url('/')}}">Accueil</a>
                                </span>
                             <span>Poissons </span>
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
                     <div class="col-lg-12 col-md-12 col-sm-12 mx-auto">
                         <div class="ttm_single_image-wrapper">
                             <div class="widget widget_img_gellary clearfix">
                                  <ul>
                                      <li>
                                          <a href="{{asset('images/st_pierre.jpeg')}}" rel="prettyPhoto[coregallery]" data-rel="prettyPhoto">
                                              <img class="img-fluid" style="height: 200px"  src="{{asset('images/st_pierre.jpeg')}}" alt=""></a>
                                          <h5>Saint pierre</h5>
                                      </li>
                                      <li>
                                          <a href="{{asset('images/sole.jpg')}}" rel="prettyPhoto[coregallery]" data-rel="prettyPhoto">
                                              <img class="img-fluid" style="height: 200px"  src="{{asset('images/sole.jpg')}}" alt=""></a>
                                          <h5>Sole</h5>
                                      </li>
                                      <li>
                                          <a href="{{asset('images/pangasus.jpg')}}" rel="prettyPhoto[coregallery]" data-rel="prettyPhoto">
                                              <img class="img-fluid" style="height: 200px"  src="{{asset('images/pangasus.jpg')}}" alt=""></a>
                                          <h5>Pangasus</h5>
                                      </li>

                                      <li>
                                          <a href="{{asset('images/Sosso.jpg')}}" rel="prettyPhoto[coregallery]" data-rel="prettyPhoto">
                                              <img class="img-fluid" style="height: 200px"  src="{{asset('images/Sosso.jpg')}}" alt=""></a>
                                          <h5>Ombrine</h5>
                                      </li>
                                      <li>
                                          <a href="{{asset('images/tilapia.jpeg')}}" rel="prettyPhoto[coregallery]" data-rel="prettyPhoto">
                                              <img class="img-fluid" style="height: 200px"  src="{{asset('images/tilapia.jpeg')}}" alt=""></a>
                                          <h5>Tilapia</h5>
                                      </li>
                                      <li><a href="{{asset('images/Chinchard.jpg')}}"  rel="prettyPhoto[coregallery]" data-rel="prettyPhoto">
                                              <img class="img-fluid" style="height: 200px"  src="{{asset('images/Chinchard.jpg')}}" alt=""></a>
                                          <h5>Chinchard</h5>
                                      </li>
                                      <li><a href="{{asset('images/thon_rouge.png')}}"  rel="prettyPhoto[coregallery]" data-rel="prettyPhoto">
                                              <img class="img-fluid" style="height: 200px"  src="{{asset('images/thon_rouge.png')}}" alt=""></a>
                                          <h5>Thon</h5>
                                      </li>
                                      <li><a href="{{asset('images/maquerau.jpg')}}"  rel="prettyPhoto[coregallery]" data-rel="prettyPhoto">
                                              <img class="img-fluid" style="height: 200px"  src="{{asset('images/maquerau.jpg')}}" alt=""></a>
                                          <h5>Maquereau</h5>
                                      </li>
                                      <li><a href="{{asset('images/Capitaines.jpg')}}"  rel="prettyPhoto[coregallery]" data-rel="prettyPhoto">
                                              <img class="img-fluid" style="height: 200px"  src="{{asset('images/Capitaines.jpg')}}" alt=""></a>
                                          <h5>Capitaine</h5>
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
