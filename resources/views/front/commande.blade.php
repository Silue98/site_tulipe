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
                             <h2 class="title">Passez votre commande</h2>
                         </div>
                         <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="{{url('/')}}">Accueil</a>
                                </span>
                             <span>Passez votre commande</span>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- page-title end -->

     <div class="site-main">


         <!-- conatct-section -->
         <section class="ttm-row conatct-section ttm-bgcolor-grey clearfix padding_top50">
             <div class="container">
                 <!-- row -->
                 <div class="row">
                     <div class="col-lg-12">
                         <!-- section-title -->
                         <div class="section-title title-style-center_text">
                             <div class="title-header">
                                 <h3>Commandez en ligne</h3>
                                 <h2 class="title">Vous avez une commande à passer?</h2>
                             </div>
                             <div class="title-desc">
                                 <p>Passez votre commande, notre équipe commerciale se charge de traiter votre commande et de vous livrér à l'endroit souhaité.</p>
                             </div>
                         </div><!-- section-title end -->
                     </div>
                 </div>
                 <!-- row end -->
                 <div class="row">
                     <div class="col-lg-8">
                         <div class="ttm-bgcolor-white p-40 padding_top35 border-rad_5 margin_top15">
                             <form id="request_qoute_form" class="request_qoute_form wrap-form clearfix" method="post" novalidate="novalidate" action="#">
                                 <div class="row">
                                     <div class="col-md-6">
                                         <span class="text-input"><input name="nom" type="text" value="" placeholder="Votre nom complet*" required="required"></span>
                                     </div>
                                     <div class="col-md-6">
                                         <span class="text-input"><input name="email" type="email" value="" placeholder="Votre Email*" required="required"></span>
                                     </div>
                                     <div class="col-md-6">
                                         <span class="text-input"><input name="phone" type="text" value="" placeholder="Votre contact*" required="required"></span>
                                     </div>
                                     <div class="col-md-6">
                                         <span class="text-input"><input name="phone" type="text" value="" placeholder="Lieu de livraison*" required="required"></span>
                                     </div>
                                     <div class="col-lg-12">
                                         <span class="text-input"><textarea name="message" rows="5" placeholder="Votre commande" required="required"></textarea></span>
                                     </div>
                                     <div class="col-lg-12">
                                         <button class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-fill ttm-btn-color-skincolor w-100 margin_top5" type="submit">Envoyer votre commande</button>
                                     </div>
                                 </div>
                             </form>
                         </div>
                     </div>
                     <div class="col-lg-4">
                         <div class="ttm-bgcolor-white p-30 border-rad_5 margin_top15">
                             <!--featured-icon-box-->
                             <div class="featured-icon-box icon-align-top-content margin_top0 margin_bottom25">
                                 <div class="featured-icon">
                                     <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                         <i class="flaticon-email"></i>
                                     </div>
                                 </div>
                                 <div class="featured-content pt-2">
                                     <div class="featured-title">
                                         <h3 class="margin_bottom0 fs-20">Nos coordonnées</h3>
                                     </div>
                                     <div class="featured-desc">info@latulipefood.ci<br>+225 27 21 59 03 10</div>
                                 </div>
                             </div><!-- featured-icon-box end-->
                             <!--featured-icon-box-->
                             <div class="featured-icon-box icon-align-top-content margin_bottom25">
                                 <div class="featured-icon">
                                     <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                         <i class="flaticon-address"></i>
                                     </div>
                                 </div>
                                 <div class="featured-content pt-2">
                                     <div class="featured-title">
                                         <h3 class="margin_bottom0 fs-20">Localisation</h3>
                                     </div>
                                     <div class="featured-desc">Vridy, ZI Bvd de Petit Bassam</div>
                                 </div>
                             </div><!-- featured-icon-box end-->
                             <!--featured-icon-box-->
                             <div class="featured-icon-box icon-align-top-content margin_bottom10">
                                 <div class="featured-icon">
                                     <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                         <i class="themifyicon ti-themify-favicon"></i>
                                     </div>
                                 </div>
                                 <div class="featured-content pt-2">
                                     <div class="featured-title">
                                         <h3 class="margin_bottom0 fs-20">Whatsapp</h3>
                                     </div>
                                     <div class="featured-desc">+225 07 01 16 42 42</div>
                                 </div>
                             </div><!-- featured-icon-box end-->
                         </div>
                     </div>
                 </div>
             </div>
         </section>
         <!-- conatct-section end -->


         <!--- conatact-section -->
         <section class="ttm-row conatact-section mb_20 clearfix">
             <div class="container">
                 <!-- row -->
                 <div class="row ttm-boxes-spacing-30px">
                     <div class="col-md-2 col-sm-2 ttm-box-col-wrapper">
                         <div class="ttm_single_image-wrapper border-rad_5">
                             <img class="img-fluid" src="{{asset('images/raw-fish-on-market.jpg')}}" height="330" width="570" alt="single-09">
                         </div>
                     </div>
                     <div class="col-md-2 col-sm-2 ttm-box-col-wrapper">
                         <div class="ttm_single_image-wrapper border-rad_5">
                             <img class="img-fluid" src="{{asset('images/bv-0007(1)_265_400_str.jpg')}}" height="330" width="570" alt="single-10">
                         </div>
                     </div>
                     <div class="col-md-2 col-sm-2 ttm-box-col-wrapper">
                         <div class="ttm_single_image-wrapper border-rad_5">
                             <img class="img-fluid" src="{{asset('images/silde1.jpg')}}" height="330" width="570" alt="single-09">
                         </div>
                     </div>
                     <div class="col-md-2 col-sm-2 ttm-box-col-wrapper">
                         <div class="ttm_single_image-wrapper border-rad_5">
                             <img class="img-fluid" src="{{asset('images/boeuf.jpg')}}" height="330" width="570" alt="single-10">
                         </div>
                     </div>
                     <div class="col-md-2 col-sm-2 ttm-box-col-wrapper">
                         <div class="ttm_single_image-wrapper border-rad_5">
                             <img class="img-fluid" src="{{asset('images/chevre.jpeg')}}" height="330" width="570" alt="single-09">
                         </div>
                     </div>
                     <div class="col-md-2 col-sm-2 ttm-box-col-wrapper">
                         <div class="ttm_single_image-wrapper border-rad_5">
                             <img class="img-fluid" src="{{asset('images/agneau.jpeg')}}" height="330" width="570" alt="single-10">
                         </div>
                     </div>
                 </div><!-- row end -->
             </div>
         </section>
         <!-- conatact-section end -->


     </div><!--site-main end-->
 @endsection
