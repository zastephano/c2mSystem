<?PHP 
$title = 'Alkhadim Location de voitures';
include('partials/header.php'); ?>

<main class="entry-main">



<section id="main-container" class="main-container">
		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<h2 class="project-title style-title title"><?php echo$lang['Alkhadim : Location de voiture'] ?></h2>
				</div><!-- Slider col end -->
				
			</div><!-- Row end -->

			<div class="gap-20"></div>

			<div class="row">
				
				</div><!-- Content Col end -->

				<div class="col-sm-12">
					<div class="content-inner-page">
						
						<img style="height: 35%;width: 35%; min-width: 200px;min-height: 200px;" class="single main-img" src="imgs/projects/project6.jpg" alt="location_de_voiture_c2m_system" />
						<div class="wpb_text_column wpb_content_element ">
						<div class="wpb_wrapper">
								<p><?php echo$lang["L'application de gestion de location de voiture est un logiciel permettant la Â gestion de toutes les tâches effectuées dans une entreprise de location de voiture en allant du réservation jusqu'au facturation ainsi que la gestion du parque.
						L'application est multi poste multi utilisateur . A l'exécution du programme, chaque utilisateur peut y accéder en tapant le code utilisateur et le mot de passe pour accéder aux éléments du menu dont il a droit.
						Si l'utilisateur tape correctement ses informations, une autre forme s'ouvre donnant des informations concernant l'état de la flotte.
						Ainsi l'utilisateur peut consulter les différents éléments du menu dont il a droit, à savoir"] ?></p>

					</div>
				</div>


				<p class="head titles sub-title"><?php echo$lang["Alerts :"] ?></p>
				<p><?php echo$lang["Cette partie traite l’ensemble des états représentant la liste des voitures :"] ?></p>
				<ul>
					<li><?php echo$lang["En circulation c'est-à -dire tout véhicule loué et que son contrat de location n'est pas encore retourné à  la société."] ?></li>
					<li><?php echo$lang["Disponibles à la location autrement dit tout véhicule qu'on peut louer à tout moment."] ?></li>
					<li><?php echo$lang["En retour c'est-à -dire la date de location est expirée."] ?></li>
					<li><?php echo$lang["Ne sont pas disponibles à  la location c'est-à -dire tout véhicule en garage et ne peut pas être loué."] ?></li>
					<li><?php echo$lang["Ont besoin de vidange ."] ?></li>
					<li><?php echo$lang["Ont besoin de changement de pneu, cette liste est obtenue par rapport à un compteur prédéfini."] ?></li>
					<li><?php echo$lang["Ont besoin de la visite technique, cette liste est obtenue par rapport à la date d'expiration de la validité de la visite technique."] ?></li>
					<li><?php echo$lang["Ont besoin de renouvellement d'assurance cette liste est obtenue par rapport à  la date d'expiration de la validité de l'assurance."] ?></li>
					<li><?php echo$lang["En êtat d'examens aviaires sont accessibles via le menu examen,à  chaque moment l'utilisateur peut y revenir et modifier les resultats."] ?></li>
				</ul>

				<p><img class=" wp-image-4675 alignleft" src="imgs/content/location.png" alt="gestion de location de voiture" width="173" height="208" /></p>

				<p class="head titles sub-title"><?php echo$lang["Gestion :"] ?></p>
				<p><?php echo$lang["Comprend tous les éléments de base à  savoir :"] ?></p>

				<ul>
					<li><?php echo$lang["Societé :"] ?><br />
					<?php echo$lang["Utile en cas de travail en multi Societé et comprend les informations de bases de chacune : le code ; le nom ; responsable ; adresse ; téléphone ; fax ; E-mail, en mode ajout, modification, consultation, suppression et listes."] ?></li>
					<li><?php echo$lang["Agences :"] ?><br />
					<?php echo$lang["Utile en cas de travail en multi agence et comprend les informations de bases de chacune : le code ; le nom ; responsable ; adresse ; téléphone ; fax ; E-mail, en mode ajout, modification, consultation, suppression et listes."] ?></li>
					<li><?php echo$lang["Voiture:"] ?><br />
					<?php echo$lang["Le fichier véhicule est en fait une fiche détaille qui comprend toutes les informations concernant des véhicules avec tous les détails : marque, catégorie, modéle , photos"] ?></li>
					<li><?php echo$lang["Client :"] ?><br />
					<?php echo$lang["Comprend toutes les informations propres à  chaque client : code, nom, adresse, téléphone, E-mail, matricule fiscaleâ€¦en différent mode (ajout, modification, suppression, consultation, liste)."] ?></li>
					<li><?php echo$lang["Facturation :"] ?><br />
					<?php echo$lang["Le fichier facturation permet de facturer les différent types des contrats (location, excursion, transfert et mise à  disposition) en appliquant les tarifs indiqués dans le fichier tarif ainsi que de lister les différentes factures."] ?></li>
				</ul>

				<p class="head titles sub-title"><?php echo$lang["Dépenses et Réservation :"] ?></p>

				<p><?php echo$lang["Elle comprend les différents types de réservation et en différents modes ainsi que les états de réservations (Â  réservations annulées, confirmées, no show,â€¦).
				Chaque réservation comprend des informations concernant le client, le délai de location, les marques à  louer, les clients qui vont utiliser les véhicules ainsi que la disponibilité des véhicules pour chaque marque en affichant des listes explicatives."] ?></p>

				<p class="head titles sub-title"><?php echo$lang["Operations :"] ?></p>

				<p><?php echo$lang["Contrat :"] ?></p>
				<ul>
					<li>
						<?php echo$lang['Comprend une description détaillée de contrat indiqué ainsi que les statistiques propres à ce contrat.'] ?>
					</li>
				</ul>
				<p><?php echo$lang["Sans Contrat :"] ?></p>
				<ul>
					<li>
						<?php echo$lang["Comprend la liste des sous contrats de location."] ?>
					</li>
				</ul>

				<p class="head titles sub-title"><?php echo$lang["La deuxiéme rubrique :"] ?></p>

				<p><?php echo$lang["Permet de faire la mise à jour de l'assurance de véhicule, elle affecte les différentes informations concernant le véhicule (compteur, agence, les charges de véhicule) et affecte les données concernant l'assurance .
				L'application garde l'historique des mouvements effectués en cas de vente de véhicule, ce -ci peut etre modifié supprimer ou consulter. (Cette derniére remarque concerne toutes les rubriques de mise Ã  jour)."] ?></p>


				<p class="head titles sub-title"><?php echo$lang["Contrat :"] ?></p>

				<p><?php echo$lang["Le fichier contrat comprend toutes les données propres aux véhicules à louer (la fiche technique ainsi que d’autres informations) et toutes les données propres à la réservation (s’il y a lieu ) à indiquée dans le fichier.
				Notons bien que lors des contrats que ce soit sortie ou bien retours, il y’a une mise à jour automatique des données propres au véhicule tel que l’état de location (en circulation, en repos, disponible), le compteur, le niveau d’essence. Et ses données apparaissent dans le fichier véhicule."] ?></p>

				<p class="head titles sub-title"><?php echo$lang["Utilisateur :"] ?></p>

				<p><?php echo$lang["Le fichier utilisateur permet la gestion des utilisateurs de l'application en indiquant les informations de bases tels que le code, le nom, le mot de passe, en différents modes (ajout, modification, suppression, consultation et liste) ainsi que la gestion des droits d'accés en indiquant pour chaque utilisateur les différents éléments du menu qu'il a droit de les affecter."] ?></p>


 
				<p class="head titles sub-title"><?php echo$lang["Règlement :"] ?></p>
				<p><?php echo$lang['les règlements efféctués par les clients des factures éditées dans le fichier facturation, elle comprend les éléments suivants :'] ?></p>

				<p><?php echo$lang["Réglements des factures :"] ?></p>
				<ul>
					<li>
						<?php echo$lang["Ils comprennent la liste des factures non clôturées pour le client, ils permettent d’indiquer des nouveaux réglements."] ?>
					</li>
				</ul>
				<p><?php echo$lang["Extrait :"] ?></p>
				<ul>
					<li>
						<?php echo$lang["Comprend la liste des factures et des règlements efféctués sur des factures par le client pendant la période indiquée."] ?>
					</li>
				</ul>
				<p><?php echo$lang["Extrait détaillé :"] ?></p>
				<ul>
					<li>
						<?php echo$lang["Comprend la liste des factures et des détails des règlements efféctués sur des factures par le client pendant la période indiquée."] ?>
					</li>
				</ul>
				<p><?php echo$lang["Liste des règlements et liste des règlements par client :"] ?></p>
				<ul>
					<li>
						<?php echo$lang["Comprend la liste des règlements effectués ainsi que les totaux par moyenne de payement."] ?>
					</li>
				</ul>



				<p class="head titles sub-title"><?php echo$lang["Vente voiture :"] ?></p>

				<p><?php echo$lang["Cette partie de l'application permet la gestion des opérations de vente, de la rentabilité le la flotte.Elle comporte la possibilité du transfert d'un véhicule en fin de circulation au service vente. On peut accéder Ã  la liste de ces derniers en choisissant la premiére rubrique.Pour pouvoir transférer ces véhicules, on utilise la deuxiÃ¨me rubrique assignée d’un prix .Ces enregistrements peuvent etre modifiés, supprimés, ou consultés grace Ã  la liste des véhicules au service vente."] ?></p>

				<ul>
					<p><?php echo$lang["Exemple :"] ?></p>
					<li><?php echo$lang["Les données concernant la vente (Acheteur, date de vente, mode de payement â€¦) peuvent etre aussi enregistrés suivant deux méthodes de vente :"] ?>
					<ul>
					<li><?php echo$lang["Au comptant"] ?></li>
					<li>
					<p><?php echo$lang["Par tranche"] ?></p>
					<?php echo$lang["Dans cette méthode, les tranches sont automatiquement calculées, leurs dates sont fixées dans le tableau échéancier.Une liste des véhicules vendus est aussi disponibles avec la possibilité de recherche selon différents critéres dont l'apercu est le suivant.Finalement, on peut accéder Ã  un bilan complet décrivant la totalité des charges et des revenus des véhicules ainsi que leurs prix d'achat et de vente."] ?>
					</li>
				</ul>
					</li>
				</ul>




					</div><!-- Content inner end -->
				</div><!-- Content Col end -->


			</div><!-- Row end -->
		</div><!-- Conatiner end -->
	</section><!-- Main container end -->


</main>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5a7989e9bec59583"></script>

<?PHP include('partials/footer.php'); ?>