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
                             <h2 class="title">Chèvre</h2>
                         </div>
                         <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="{{url('/')}}">Accueil</a>
                                </span>
                             <span>Chèvre</span>
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
                     <div class="col-lg-5">
                         <div class="padding_right80 res-991-padding_right0 res-991-margin_bottom50">
                             <!-- section title -->
                             <div class="section-title">
                                 <div class="title-header">
                                     <h3>La Tulipe Food</h3>
                                     <h2 class="title">Chèvre</h2>
                                 </div>
                                 <div class="title-desc">
                                     <p>
                                         Des produits de qualités et très bien conservés. <br>
                                         Faites votre choix dans nos produits à base de chèvres de meilleur qualité disponible:
                                     <ul class="ttm-list fs-15 ttm-list-style-icon ttm-list-icon-color-skincolor">
                                         <li>
                                             <i class="ti ti-arrow-circle-right"></i>
                                             <div class="ttm-list-li-content">Carcasse de chèvre </div>
                                         </li>
                                         <li>
                                             <i class="ti ti-arrow-circle-right"></i>
                                             <div class="ttm-list-li-content">Colombo de chèvre </div>
                                         </li>
                                     </ul>
                                     <br>
                                         La Tulipe Food est votre grossiste qui vous offre les meilleurs produits rapport qualité prix.
                                     </p>
                                     <p>
                                         Afin de faciliter la tâche de nos clients, gagner du temps en commandant en ligne, notre équipe commerciale se charge de preparer votre commande. Vous avez la possibilité de payer à la livraison comme en ligne par mobile money.
                                     </p>
                                 </div>
                             </div><!-- section title end -->
                              <div class="ttm-horizontal_sep width-100 margin_top40 margin_bottom30"></div>

                         </div>
                     </div>
                     <div class="col-lg-7 col-md-7 col-sm-8 mx-auto">
                         <div class="ttm_single_image-wrapper">
                             <div class="widget widget_img_gellary clearfix">

                                 <ul>
                                     <li>
                                         <a href="{{asset('images/CV-0001(3).jpg')}}" rel="prettyPhoto[coregallery]" data-rel="prettyPhoto">
                                             <img class="img-fluid" style="width: 100%; height: 130px"  src="{{asset('images/CV-0001(3).jpg')}}" alt=""></a>

                                     </li>
                                     <li>
                                         <a href="{{asset('images/CV-0002(1)_165_210_crp.jpg')}}" rel="prettyPhoto[coregallery]" data-rel="prettyPhoto">
                                             <img class="img-fluid" style="width: 100%; height: 130px"  src="{{asset('images/CV-0002(1)_165_210_crp.jpg')}}" alt=""></a>

                                     </li>
                                     <li>
                                         <a href="{{asset('images/bv-0007(1)_265_400_str.jpg')}}" rel="prettyPhoto[coregallery]" data-rel="prettyPhoto">
                                             <img class="img-fluid" style="width: 100%; height: 130px" src="{{asset('images/bv-0007(1)_265_400_str.jpg')}}" alt=""></a>

                                     </li>
                                     <li>
                                         <a href="{{asset('images/bv-0003(1)_265_400_str.jpg')}}" rel="prettyPhoto[coregallery]" data-rel="prettyPhoto">
                                             <img class="img-fluid" style="width: 100%; height: 130px" src="{{asset('images/bv-0003(1)_265_400_str.jpg')}}" alt=""></a>

                                     </li>

                                     <li>
                                         <a href="{{asset('images/beef-lips-Alpi-Meat-300x300.jpg')}}" rel="prettyPhoto[coregallery]" data-rel="prettyPhoto">
                                             <img class="img-fluid" style="width: 100%; height: 130px" src="{{asset('images/beef-lips-Alpi-Meat-300x300.jpg')}}" alt=""></a>

                                     </li>
                                     <li><a href="{{asset('images/queue-de-boeuf.webp')}}"  rel="prettyPhoto[coregallery]" data-rel="prettyPhoto">
                                             <img class="img-fluid" style="width: 100%; height: 130px" src="{{asset('images/queue-de-boeuf.webp')}}" alt=""></a>

                                     </li>
                                     <li>
                                         <a href="{{asset('images/fresh-beef-throats-Alpi-Meat.jpg')}}" rel="prettyPhoto[coregallery]" data-rel="prettyPhoto">
                                             <img class="img-fluid" style="width: 100%; height: 130px" src="{{asset('images/fresh-beef-throats-Alpi-Meat.jpg')}}" alt=""></a>

                                     </li>
                                     <li>
                                         <a href="{{asset('images/sternums.jpeg')}}" rel="prettyPhoto[coregallery]" data-rel="prettyPhoto">
                                             <img class="img-fluid" style="width: 100%; height: 130px" src="{{asset('images/sternums.jpeg')}}" alt=""></a>

                                     </li>
                                     <li>
                                         <a href="{{asset('images/BV-0065(1)_165_210_crp.jpg')}}" rel="prettyPhoto[coregallery]" data-rel="prettyPhoto">
                                             <img class="img-fluid" style="width: 100%; height: 130px" src="{{asset('images/BV-0065(1)_165_210_crp.jpg')}}" alt=""></a>

                                     </li>
                                     <li>
                                         <a href="{{asset('images/BV-0073(1)_165_210_crp.jpg')}}" rel="prettyPhoto[coregallery]" data-rel="prettyPhoto">
                                             <img class="img-fluid" style="width: 100%; height: 130px" src="{{asset('images/BV-0073(1)_165_210_crp.jpg')}}" alt=""></a>

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
