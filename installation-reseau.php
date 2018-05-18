<?PHP 
$title = 'Installation réseaux';
include('partials/header.php'); ?>

<main class="entry-main">



<style type="text/css">
	.titles{
		font-weight: bold;
    	color:#1f284d;
    	font-size: 18px;
	}
	.title_page{
		margin-top: -2px;
		margin-bottom: 30px;
	}
</style>

<section id="main-container" class="main-container">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="content-inner-page">

						<h2 class="project-title title_page style-title title">Installation de réseau</h2>

						<img style="height: 35%;width: 35%; min-width: 200px;min-height: 200px;" class="single main-img" src="imgs/services/installation.jpg" alt="installation reseau"/>
												
						<p><strong>C2M SYSTEM</strong> est une société spécialisée dans Le déploiement d'un réseau informatique, ce dernier suit certaines étapes. Voici un plan de déploiement et les étapes techniques pour l'installation d'un réseau d'entreprise.</p>
						
						<h3 class="titles">1. Conseil de déploiement et audit du réseau</h3>

						<p>Avant de démarrer une installation ou une modernisation du réseau informatique, l'entreprise doit évaluer ses besoins et connaître le périmètre fonctionnel de son réseau. Un prestataire rédige alors un cahier des charges précis. Parmi les éléments pris en compte, il peut notamment retenir :</p>

						<ul>
							<li>la nature et la superficie des locaux à équiper</li>
							<li>les contraintes techniques de ces locaux</li>
							<li>le nombre de serveurs requis</li>
							<li>le nombre de personnes et de postes de travail à relier</li>
							<li>les besoins en bande passante et en débit</li>
						</ul>

						<h3 class="titles">2. Câblage</h3>

						<p>Cette étape vise à équiper les locaux de l'entreprise d'un réseau de câbles pour relier les serveurs et les PC entre eux. La nature du bâtiment doit être prise en compte :</p>

						<ul>
							<li>si le bâtiment est ancien, il sera difficile de percer les murs. L'entreprise doit repositionner son plan de câblage et peut décider de s'équiper de bornes WiFi ou encore CPL.</li>
							<li>si le bâtiment est récent, l'entreprise peut dissimuler les câbles dans les murs.</li>
						</ul>

						<h3 class="titles">3. Vérification des serveurs physiques</h3>

						<p>Il convient de vérifier la connectique des serveurs. Disposent-ils de possibilités suffisamment étendues pour répondre aux besoins réseau de l'entreprise ? Les cartes réseaux supportent-elles les contraintes techniques prévues en amont par l'audit ? Idéalement, chaque serveur doit disposer d'au moins 2 ports (entrées qui permettent de connecter le câble). A ce stade, l'entreprise doit également choisir le système d'exploitation pour motoriser les serveurs : Windows ou Linux.</p>

						<h3 class="titles">4. Installation des commutateurs réseaux</h3>

						<p>Les commutateurs réseaux sont des équipements électroniques intelligents qui permettent de connecter les différents serveurs et les postes de travail. Ils font le lien entre les différents câblages et les équipements informatiques. 
						Il est donc nécessaire d'évaluer la topologie des serveurs en amont afin de calculer combien de commutateurs l'entreprise doit installer. 
						A cette étape, l'entreprise a interconnecté tous les composants de son réseau.
						</p>

						<h3 class="titles">5. Installation des logiciels serveurs</h3>

						<p>Cette étape plutôt classique vise à paramétrer les serveurs Windows et/ou Linux. L'entreprise doit ensuite les configurer pour que chaque élément du réseau dispose de son adresse IP. L'adresse IP permet d'identifier chaque ordinateur ou périphérique installé sur le réseau informatique.</p>

						<h3 class="titles">6. Configuration logique</h3>

						<p>L'entreprise peut configurer ses commutateurs afin de donner des droits d'accès physiques. Tel ordinateur, avec telle adresse IP, a le droit d'accéder à tel serveur. Par exemple, seuls les ordinateurs du service comptabilité ont accès aux serveurs de la direction financière.</p>

						<h3 class="titles">7. Sécurisation du réseau</h3>

						<p>Si l'entreprise a investi dans des commutateurs intelligents (et donc plus chers), elle peut y régler des paramètres de sécurité, comme :</p>

						<ul>
							<li>allouer des accès par utilisateur (mot de passe/identifiant)</li>
							<li>créer une liaison avec l'annuaire de l'entreprise</li>
							<li>définir des priorités entre services. Par exemple, la VoIP (voix sur IP) est prioritaire sur tous les autres services transitant par le réseau.</li>
						</ul>

					</div><!-- Content inner end -->
				</div><!-- Content Col end -->
			</div><!-- Row end -->
		</div><!-- Conatiner end -->
</section><!-- Main container end -->


</main>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5a7989e9bec59583"></script>

<?PHP include('partials/footer.php'); ?>