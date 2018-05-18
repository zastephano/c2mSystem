<?PHP 
$title = 'Realisation 2';
include('partials/header.php'); ?>

<main class="entry-main">

<style type="text/css">
		.bloc{
		font-size: 20px;
		font-weight: bold;
		text-align: center;
	}
	</style>

<section id="main-container" class="main-container">
		<div class="container">
			<div class="row">




				<div class="col-md-offset-1 col-md-10">

							<img style="width: 100%" srcset="imgs/realisation/recette_mondial.JPG"/>

							<p>
								<p class="links-container"><a href="http://recettesmondiale.com" class="project-link" target="_blank"><?php echo$lang["Voir le site"] ?></a></p>
							</p>

						</div><!-- Slider col end -->

				<!-- --------------------------------------------------------------- -->
				<div class="col-md-offset-1 col-md-10">
					<img style="width: 100%" class="test" srcset="imgs/projects/lagar.jpg"/>
						<p>
						<a href="http://lagarecar.com" class="h5-size btn-project-link" target="_blank"><?php echo$lang["Voir le site"] ?></a>
						</p>

				</div><!-- Slider col end -->

				<!-- --------------------------------------------------------------- -->
				<div class="col-md-offset-1 col-md-10">

					<img style="width:100%;" class="test" srcset="imgs/projects/kafala.jpg"/>
					<p>
						<h3><?php echo$lang["Kafalat Alyatime"] ?></h3>
						<p>
						<a href="http://www.kafalatalyatime.org/" class="h5-size btn-project-link" target="_blank"><?php echo$lang["Voir le site"] ?></a>
						</p>
					</p>
				</div>

				<!-- --------------------------------------------------------------- -->
				<div class="col-md-offset-1 col-md-10">
					<img style="width: 100%;" class="test" srcset="imgs/projects/archive.jpg"/>
					<p>
						<h3>C2M <?php echo$lang["Archive"] ?></h3>
						<p>
						<a href="http://c2m-archive.com/" class="h5-size btn-project-link no-text" target="_blank"><?php echo$lang["Voir le site"] ?></h3></a>
						</p>
					</p>						
				</div>

				<!-- --------------------------------------------------------------- -->
				<div class="col-md-offset-1 col-md-10">
					<img style="width: 100%;" class="test" srcset="imgs/projects/dawjin.jpg"/>
					<p>
						<h3><?php echo$lang['Dawajine'] ?></h3>
						<p>
						<a href="http://www.dawajine.com/" class="h5-size btn-project-link" target="_blank"><?php echo$lang["Voir le site"] ?></a>
						</p>
					</p>
					</div>
				</div>
				<!-- --------------------------------------------------------------- -->

				<div class="col-md-offset-1 col-md-10">
					<img style="width: 100%;" class="test" srcset="imgs/projects/frigo.jpg"/>
					<p>
						<h3><?php echo$lang["Frigoouled Ziane"] ?></h3>
						<p>
						<a href="http://www.frigoouledziane.com/" class="h5-size btn-project-link" target="_blank"><?php echo$lang["Voir le site"] ?></a>
						</p>
					</p>
				</div>


			</div><!-- Row end -->

			<div class="gap-20"></div>

			<div class="row">

				<div class="col-sm-12">
					<div class="content-inner-page">

					</div><!-- Content inner end -->
				</div><!-- Content Col end -->


			</div><!-- Row end -->
		</div><!-- Conatiner end -->
	</section>


<!-- --------------------------------------------------------------------------------------------------------------------------------------------------------------- -->



			<!-- <h4 class="bloc">
				<a class="buttonmoins" href="realisation.php"> << Précédent</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			
				<a class="links" href="realisation.php">1</a>&nbsp;
				<a class="links" href="realisation2.php">2</a>&nbsp;
				<a class="links" href="realisation3.php">3</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

				<a class="buttonplus" href="realisation3.php">Suivant >> </a>
			</h4> -->

			<nav aria-label="Page navigation example" style="text-align: center;">
			  <ul class="pagination">
			  	<li class="page-item"><a class="page-link" href="realisation.php"><?php echo$lang['Précedent'] ?></a></li>
			    <li class="page-item"><a class="page-link" href="realisation.php">1</a></li>
			    <li class="page-item"><a class="page-link" href="realisation2.php">2</a></li>
			    <li class="page-item"><a class="page-link" href="realisation3.php">3</a></li>
			    <li class="page-item"><a class="page-link" href="realisation4.php">4</a></li>
			    <li class="page-item"><a class="page-link" href="realisation5.php">5</a></li>
			    <li class="page-item"><a class="page-link" href="realisation3.php"><?php echo$lang['Suivant'] ?></a></li>
			  </ul>
			</nav>



</main>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5a7989e9bec59583"></script>

<?PHP include('partials/footer.php'); ?>