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
                             <h2 class="title">Notre actualité</h2>
                         </div>
                         <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="{{url('/')}}">Accueil</a>
                                </span>
                             <span>Notre actualité</span>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- page-title end -->

     <!--site-main start-->
     <div class="site-main">


         <div class="ttm-row sidebar ttm-sidebar-right clearfix">
             <div class="container">
                 <!-- row -->
                 <div class="row">
                     <div class="col-lg-12  ">
                         <!-- featured-imagebox-post -->
                         <div class="featured-imagebox featured-imagebox-post style3 mt-0">
                             <div class="featured-thumbnail">
                                 <img class="img-fluid" src="{{asset('images/prix2.jpg')}}" alt="blog-image">
                                 <div class="ttm-box-post-date">

                                 </div>
                             </div>
                             <div class="featured-content">
                                 <div class="featured-title">
                                     <h3><a href="#">Prix national d'Excellence 2022</a></h3>
                                 </div>

                                 <div class="featured-desc">
                                     <p> Notre entreprise via son administrateur général a reçu en 2022, le Prix national d'Excellence du meilleur chef d'entreprise catégorie femme.</p>
                                 </div>
                                   </div>
                         </div>
                         <!-- featured-imagebox-post end -->
                         <!-- featured-imagebox-post -->
                         <div class="featured-imagebox featured-imagebox-post style3 mt-0">
                             <div class="featured-content">
                                 <div class="featured-title">
                                     <h3><a href="#">Journée des droits de la femme</a></h3>
                                 </div>

                                 <div class="featured-desc">
                                     <p>
                                         A l'occasion de la journée des droits de la femme ce 8 mars 2023, La Tulipe Food a décidé de mettre nos valeureuses et braves femmes à l'honneur et cela au cours d'une belle cérémonie qui a ravi plus d'une.
                                     </p>
                                 </div>
                             </div>
                             <div class="featured-thumbnail">
                                 <img class="img-fluid" src="{{asset('images/8_mars_tulipe.jpg')}}" alt="blog-image">
                                 <div class="ttm-box-post-date">

                                 </div>
                             </div>
                         </div>
                         <!-- featured-imagebox-post end -->
                         <!-- featured-imagebox-post -->
                         <div class="featured-imagebox featured-imagebox-post style3 mt-0">
                             <div class="featured-thumbnail">
                                 <img class="img-fluid" src="{{asset('images/interview.png')}}" alt="blog-image">
                                 <div class="ttm-box-post-date">

                                 </div>
                             </div>
                             <div class="featured-content">
                                 <div class="featured-title">
                                     <h3><a href="#">Interview | Maimouna Sissoko, Administrateur Général - La Tulipe FOOD</a></h3>
                                 </div>

                                 <div class="featured-desc">
                                     <p>
                                        <strong>
                                            <i>
                                             Félicitations pour le Prix que vous avez reçu. Comment avez-vous
                                             réussi à vous démarquer dans un secteur aussi concurrentiel que le
                                             vôtre ?
                                         </i>
                                        </strong>
                                     </p>
                                     <p>
                                         Je voudrais tout d’abord remercier Son Excellence Monsieur le Président
                                         de la République de Côte d’Ivoire pour cette distinction inattendue qui
                                         honore mon entreprise et surtout l’ensemble des femmes et hommes
                                         qui l’animent au quotidien par leur travail rigoureux et leur loyauté sans
                                         concession vis-à-vis de ma modeste personne et des valeurs de La
                                         TULIPE FOOD. Merci également à la CGECI qui nous a accueilli parmi
                                         ses membres et encouragé notre candidature à ce Prix National de
                                         l’Excellence 2022.
                                     </p>
                                     <p>
                                        <a href="/interview.pdf" class="btn btn-primary">Télécharger l'interview</a>
                                    </p>
                                 </div>
                             </div>
                         </div>
                         <!-- featured-imagebox-post end -->
                         <!-- featured-imagebox-post end -->
                         <!-- <div class="pagination-block">
                         <span class="page-numbers current">1</span>
                         <a class="page-numbers" href="#">2</a>
                         <a class="next page-numbers" href="#"><i class="fa fa-long-arrow-right"></i></a>
                     </div>
                     -->
                     </div>

                 </div><!-- row end -->
             </div>
         </div>


     </div><!--site-main end-->


 @endsection
