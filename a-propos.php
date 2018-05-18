<?PHP 
$title = 'A propos de nous';
include('partials/header.php'); ?>

<main class="entry-main">



<section id="main-container" class="main-container">
		<div class="container">

			<div class="row">
				<div class="col-md-6">
					<h2 class="title">C2M System</h2>
					<p><?php echo$lang["C2M System est une société spécialisé dans le développement des solutions informatiques de gestion d'entreprise.

					C2M System est installée à  casa, employant une équipe d'ingénieurs informaticiens qui ont une experience de plus de 5 ans dans le secteur industriel.
					D'éveloppement du systeme d'informatique :
					Analyse et conception des solutions de Gestion des systeme d'information.
					Proposer ou d'évelopper les solutions appropriées.
					Publicité ,Désigne et infographie :
					Publicité informatique à :
					Hébergement et Hosting à :

					Administration Réseau et télécomunication : Vous avez besoin d'installer et d'optimiser le fonctionnement de votre réseau ou de le reconfigurer, C2M System vous offre ce service  : Installation et la Configuration du matérial Réseau (Càble RG45, Fibre Optique, Switch, Routeur), Installation des serveurs.

					Sécurité Internet : Vous avez besoin de connecter votre réseau à Internet en conservant un niveau de sécurité maximum.
					Vous souhaitez prévenir les risques d’attaques portant atteinte aux ressources informatiques…
					Sauvegarde des Donnée et archivage :
					Vous souhaitez gérer et exploiter plus efficacement l’espace disque dont vous disposez…
					Le volume des données de votre entreprise ne cesse d’augmenter.
					Vous ne savez plus comment gérer vos données et les exploiter efficacement.
					Notre objectif : Etablir la stratàgie de sauvegarde adéquate.			
					Développement du systeme d'information :
					Analyse et conception des solutions de Gestion des systémes d'information.
					Proposer ou développer les solutions appropriées."] ?></p>
				</div><!-- Col end -->


<section class="faq">
         <div class="container">

		<h2 class="title"><?php echo$lang['Pourquoi Travaillez avec nous ?'] ?></h2>
             <div class="section-title style-gradient wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
             </div>
             <div class="row">
                 <div class="col-md-6">
                     <div class="panel-group questions-container" id="accordion" role="tablist" aria-multiselectable="true">
                         
                         <div class="panel panel-default wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s">
                             <div class="panel-heading" role="tab" id="headingOne">
                                 <h4 class="panel-title">
                                     <a class="gradient-bg" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                         <span><?php echo$lang['sécurité'] ?></span>
                                     </a>
                                 </h4>
                             </div>
                             <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                 <div class="panel-body">
                                     <p><?php echo$lang['Notre équipe travaille sur la sécurité et la stabilité de votre application'] ?></p>
                                 </div>
                             </div>
                         </div>
                         
                         <div class="panel panel-default wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s">
                             <div class="panel-heading" role="tab" id="headingTwo">
                                 <h4 class="panel-title">
                                     <a class="collapsed gradient-bg" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                         <span><?php echo$lang['Service Clients'] ?></span>
                                     </a>
                                 </h4>
                             </div>
                             <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                 <div class="panel-body">
                                     <p>
<?php echo$lang['Notre équipe vous donne un traitement en douceur pour satisfaire toutes vos demandes'] ?>                                 </p>
                                 </div>
                             </div>
                         </div>
                         
                     </div>
                 </div>
                 <!-- <div class="col-lg-5 col-lg-offset-1 col-md-6 hidden-sm hidden-xs">
                     <img alt="" src="imgs/03.png" class="img-responsive wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s" />
                 </div> -->
             </div>
         </div>
     </section>

				</div><!-- Col end -->
			</div><!-- Content row end -->
		</div><!-- Conatiner end -->
	</section><!-- Main container end -->


<div class="container">
	<section class="pattern-bg">
		<div class="container about_section">
			<div class="row text-center">
				<div class="section-title style-gradient wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
                <h2>
                    <?php echo$lang['Nos mellieurs pratiques'] ?>
                </h2>
                <span><span></span></span>
            </div>
			</div><!--/ Title row end -->

			<div class="row">
				<div class="col-md-3">
					<div class="ts-service-box text-center">
						<div class="ts-service-icon">
							<i class="fa fa-users"></i>
						</div>
						<div class="ts-service-box-info">
							<h3 class="service-box-title"><a><?php echo$lang['Equipe Professionnelle'] ?></a></h3>
							<p><?php echo$lang['Notre équipe est a votre service.'] ?></p>
					  </div>
					</div>
				</div><!-- Col 1 end -->

				<div class="col-md-3">
					<div class="ts-service-box text-center">
						<div class="ts-service-icon">
							<i class="fa fa-thumbs-up"></i>
						</div>
						<div class="ts-service-box-info">
							<h3 class="service-box-title"><a><?php echo$lang['Responsabilité'] ?></a></h3>
							<p><?php echo$lang['Notre équipe prendre vos besoin sérieusement.'] ?></p>
					  </div>
					</div>
				</div><!-- Col 2 end -->

				<div class="col-md-3">
					<div class="ts-service-box text-center">
						<div class="ts-service-icon">
							<i class="fa fa-tachometer"></i>
						</div>
						<div class="ts-service-box-info">
							<h3 class="service-box-title"><a><?php echo$lang['Focus sur le temps'] ?></a></h3>
							<p><?php echo$lang['notre équipe gère le temps pour vous satisfaire dans le temps Convenu.'] ?></p>
					  </div>
					</div>
				</div><!-- Col 3 end -->

				<div class="col-md-3">
					<div class="ts-service-box text-center">
						<div class="ts-service-icon">
							<i class="fa fa-diamond"></i>
						</div>
						<div class="ts-service-box-info">
							<h3 class="service-box-title"><a><?php echo$lang['La diversité'] ?></a></h3>
							<p><?php echo$lang['Notre équipe a une diversité dans la réalisation des projets.'] ?></p>
					  </div>
					</div>
				</div><!-- Col 4 end -->

			</div><!--/ Content row end -->
		</div><!--/ Container end -->
	</section><!-- Facts end -->
</div>


</main>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5a7989e9bec59583"></script>

<?PHP include('partials/footer.php'); ?>