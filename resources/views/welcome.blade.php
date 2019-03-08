@extends('layouts.front')

@section('content')

         <section class="banner">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12 col-md-6 d-flex align-items-center order-sm-2 order-1">
                     <div class="left-cnt">
                        <h2>Création éclair de votre <span class="blue">SARL|</span></h2>
                        <p>Créez votre entreprise en toute simplicité !</p>
                        <a class="btn cmn-btn" href="#">Commencez</a>
                        <a class="btn cmn-btn cmn-outline" href="#">Quel statut chosir?</a>
                     </div>
                  </div>
                  <div class="col-sm-12 col-md-6 order-sm-1 order-md-2">
                     <div class="banner-right-img d-md-block d-lg-none ">
                        <img src="img/banner-right-img.png" width="100%" alt="banner-right-img"/>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!--Service section-->
         <section class="services">
            <div class="container">
               <div class="row">
                  <div class="col-12 col-sm-6 col-md-4 col-lg-3 ">
                     <div class="serv-bx">
                        <div class="serv-cr"><img src="img/fast.png" alt="fast"/></div>
                        <h6>Rapide et efficace</h6>
                        <p>Demande de création en 10 min</p>
                     </div>
                  </div>
                  <div class="col-12 col-sm-6 col-md-4 col-lg-3 ">
                     <div class="serv-bx">
                        <div class="serv-cr"><img src="img/security.png" alt="fast"/></div>
                        <h6>Fiable et sécurisé</h6>
                        <p>Un cabinet d’expertise comptables
                           s’occupent de vos démarches
                        </p>
                     </div>
                  </div>
                  <div class="col-12 col-sm-6 col-md-4 col-lg-3 ">
                     <div class="serv-bx">
                        <div class="serv-cr"><img src="img/chat.png" alt="fast"/></div>
                        <h6>Assistance personnalisée</h6>
                        <p>Nos conseillers répondent à 
                           toutes vos questions.
                        </p>
                     </div>
                  </div>
                  <div class="col-12 col-sm-6 col-md-4 col-lg-3 ">
                     <div class="serv-bx">
                        <div class="serv-cr"><img src="img/time.png" alt="fast"/></div>
                        <h6>Rappel de vos obligations</h6>
                        <p>N’oubliez jamais une 
                           déclaration
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!--how it work section-->
         <section class="How-it-works">
            <div class="container">
               <h2 class="text-center title">COMMENT ÇA MARCHE ?</h2>
               <div class="row">
                  <div class="col-sm-12 col-12 col-md-4 col-lg-4">
                     <div class="Itwork-bx">
                        <div class="cont-bx">
                           <h6 class="clr1">Choisissez votre statut d’entreprise</h6>
                           <p>Informez-vous sur la structure juridique la plus adaptée à vos besoins à travers nos articles ou en contactant un de nos experts.
                           </p>
                        </div>
                        <div class="work"><i class="fas fa-question icn"></i></div>
                     </div>
                  </div>
                  <div class="col-sm-12 col-md-4 col-lg-4">
                     <div class="Itwork-bx ">
                        <div class="cnt cont-bx">
                           <h6 class="clr2">Faites vos formalités en ligne  </h6>
                           <p>De la création à la cession de votre entreprise, faites l’ensemble de vos formalités en ligne en répondant à des questions simples et rapides.
                           </p>
                        </div>
                        <div class="work"><i class="fas fa-globe icn"></i></div>
                     </div>
                  </div>
                  <div class="col-sm-12 col-md-4 col-lg-4">
                     <div class="Itwork-bx">
                        <div class="cont-bx">
                           <h6 class="clr3">Obtenez votre Kbis</h6>
                           <p>Votre société est créée, vous pouvez télécharger votre Kbis.</p>
                        </div>
                        <div class="work1"><i class="fas fa-check icn"></i></div>
                     </div>
                  </div>
                  <div class="work-bg"><img src="img/work-bg.png"/></div>
               </div>
            </div>
         </section>
         <!--creation-->
         <section class="creation-sec">
            <div class="container">
               <div class="row">
                  <div class="col-12 col-md-6 col-lg-6 ">
                     <div class="d-md-block d-lg-none"><img src="img/creation1.png" width="100%" alt="creation1"/></div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-6 d-flex align-items-center">
                     <div class="creation-cnt">
                        <h4>Une création simplifiée au maximum</h4>
                        <p>Nous avons pour mission de vous simplifier toutes vos démarches et de vous accompagner de la création à la pérénisation de votre société.</p>
                        <a class="cmn-btn btn " href="#">Commencez</a>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!--create you business sec-->
         <section class="business">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                     <div class="business-txt text-center">
                        <h2 class="text-center title">Créez votre entreprise</h2>
                        <p>Création rapide et suivi personnalisé</p>
                        <a class="cmn-btn btn " href="#">Je me lance !</a>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!--your question about business-->
         <section class="question">
            <div class="container">
               <div class="row">
                  <div class="col-12 col-md-12 col-lg-12">
                     <div class="question-cnt text-center">
                        <img src="img/faq.png"  alt="faq"/>
                        <h2 class="text-center title">Vos questions sur la création d'entreprise</h2>
                        <p>Une question? Consultez les réponses aux questions les plus réquentes et <br>
                           n’hésitez pas à nous contacter directement.
                        </p>
                     </div>
                  </div>
               </div>
               <!--Accordion wrapper-->
               <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
                  <div class="row">
                     <div class="col-12 col-md-6 col-lg-6">
                        <!-- Accordion card -->
                        <div class="card">
                           <!-- Card header -->
                           <div class="card-header" role="tab" id="headingTwo2">
                              <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2"
                                 aria-expanded="false" aria-controls="collapseTwo2">
                                 <h5 class="mb-0">
                                    Quels sont les avantages du régime SAS?<span class="accor-cr"><i class="fas fa-plus acr-icn"></i></span>
                                 </h5>
                              </a>
                           </div>
                           <!-- Card body -->
                           <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2" data-parent="#accordionEx">
                              <div class="card-body">
                                 Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                                 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                 eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                                 assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                                 nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                 farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                                 labore sustainable VHS.
                              </div>
                           </div>
                        </div>
                        <!-- Accordion card -->
                     </div>
                     <div class="col-12 col-md-6 col-lg-6">
                        <!-- Accordion card -->
                        <div class="card">
                           <!-- Card header -->
                           <div class="card-header" role="tab" id="headingTwo3">
                              <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo3"
                                 aria-expanded="false" aria-controls="collapseTwo3">
                                 <h5 class="mb-0">
                                    Quels sont les inconvénients du régime SAS ?<span class="accor-cr"><i class="fas fa-plus acr-icn"></i></span>
                                 </h5>
                              </a>
                           </div>
                           <!-- Card body -->
                           <div id="collapseTwo3" class="collapse" role="tabpanel" aria-labelledby="headingTwo3" data-parent="#accordionEx">
                              <div class="card-body">
                                 Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                                 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                 eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                                 assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                                 nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                 farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                                 labore sustainable VHS.
                              </div>
                           </div>
                        </div>
                        <!-- Accordion card -->
                     </div>
                     <div class="col-12 col-md-6 col-lg-6">
                        <!-- Accordion card -->
                        <div class="card">
                           <!-- Card header -->
                           <div class="card-header" role="tab" id="headingTwo4">
                              <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo4"
                                 aria-expanded="false" aria-controls="collapseTwo4">
                                 <h5 class="mb-0">
                                    Il y a-t-il des humains derrière votre site ?<span class="accor-cr"><i class="fas fa-plus acr-icn"></i></span>
                                 </h5>
                              </a>
                           </div>
                           <!-- Card body -->
                           <div id="collapseTwo4" class="collapse" role="tabpanel" aria-labelledby="headingTwo4" data-parent="#accordionEx">
                              <div class="card-body">
                                 Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                                 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                 eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                                 assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                                 nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                 farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                                 labore sustainable VHS.
                              </div>
                           </div>
                        </div>
                        <!-- Accordion card -->
                     </div>
                     <div class="col-12 col-md-6 col-lg-6">
                        <!-- Accordion card -->
                        <div class="card">
                           <!-- Card header -->
                           <div class="card-header" role="tab" id="headingTwo5">
                              <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo5"
                                 aria-expanded="false" aria-controls="collapseTwo5">
                                 <h5 class="mb-0">
                                    J’ai peur de me tromper de statut…<span class="accor-cr"><i class="fas fa-plus acr-icn"></i></span>
                                 </h5>
                              </a>
                           </div>
                           <!-- Card body -->
                           <div id="collapseTwo5" class="collapse" role="tabpanel" aria-labelledby="headingTwo5" data-parent="#accordionEx">
                              <div class="card-body">
                                 Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                                 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                 eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                                 assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                                 nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                 farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                                 labore sustainable VHS.
                              </div>
                           </div>
                        </div>
                        <!-- Accordion card -->
                     </div>
                  </div>
                  <!-- Accordion wrapper -->
               </div>
            </div>
         </section>
      
     
@endsection
