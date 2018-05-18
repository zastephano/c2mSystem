<?PHP 


$home = true; $title = 'Acceuil'; 
include('partials/header.php'); ?>
<main class="entry-main">
<style>
    .s{
        display: inline;
    }
    img.s:hover{
  transition: 0.5s;
  cursor: pointer;
  transform: scale(1.1);
}
.btn-partners{
    margin-top: 50px;
    text-align: center;
}
    article.show:hover{
    transition: 0.5s;
    cursor: pointer;
    transform: scale(1.1);
  }

/*.btn2{
    background-color: #FFF !important;
    color:red !important;
}*/
</style>

    <section id="partners-area" class="partners-area">
        <div class="container">
            <div class="section-title style-gradient wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
                <h2>
                    <?php echo$lang['Nos Partenaire'] ?>
                </h2>
                <span><span></span></span>
            </div>
            <marquee direction="right" behavior="alternate" scrolldelay="1" onmouseover="this.stop()" onmouseout="this.start()">
                <img class="img-responsive s" src="imgs/clients-logo/partner1.jpg" alt="client_c2m_system">
                <img class="img-responsive s" src="imgs/clients-logo/partner2.jpg" alt="client_c2m_system">
                <img class="img-responsive s" src="imgs/clients-logo/partner3.jpg" alt="client_c2m_system">
                <img class="img-responsive s" src="imgs/clients-logo/partner4.jpg" alt="client_c2m_system">
                <img class="img-responsive s" src="imgs/clients-logo/partner5.jpg" alt="client_c2m_system">
                <img class="img-responsive s" src="imgs/clients-logo/partner6.jpg" alt="client_c2m_system">
                <img class="img-responsive s" src="imgs/partners/Unilever.png" alt="client_c2m_system">
                <img class="img-responsive s" src="imgs/partners/nexans.jpg" alt="client_c2m_system">
                <img class="img-responsive s" src="imgs/partners/chambre-francaise.jpg" alt="client_c2msystem">
                <img class="img-responsive s" src="imgs/partners/matu.png" alt="client_c2msystem">
                <img class="img-responsive s" src="imgs/partners/chipsy.jpg" alt="client_c2msystem">
                <img class="img-responsive s" src="imgs/partners/tfs.jpg" alt="client_c2msystem">
                <img class="img-responsive s" src="imgs/partners/LAGRARI.jpg" alt="client_c2msystem">
            </marquee>

            <div class="form-group btn-partners">
                <a href="partenaire.php" type="submit" class="appsLand-btn appsLand-btn-gradient btn-inverse btn btn2"><span><i class="fa fa-group"></i> <?php echo$lang['Voir tous les Partenaire'] ?> </span></a>
            </div>

        </div><!--/ Container end -->
    </section><!--/ Partners end -->



    <section class="mini-feature__style-2 section-without-title">
        <div class="container">

            <div class="section-title style-gradient wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
                <h2>
                    <?php echo$lang['SERVICES'] ?>
                </h2>
                <span><span></span></span>
            </div>




            <div class="row">

                <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
                    <div class="mini-feature-box">
                        <div class="icon-box">
                            <a href="create-logiciels.php"><img alt="Creation de logiciels_c2m" src="imgs/icons/service1.png" />
                            <img alt="Creation de logiciels_c2m" src="imgs/icons/service1.png" /></a>
                        </div>
                        <div class="data-box">
                            <a class="service-icons" href="create-logiciels.php"><h3><?php echo$lang['Creation des logiciels'] ?></h3></a>
                            <p>
                                <?php echo$lang["Le développement de logiciel sur mesure est l'une des spécificités."] ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s">
                    <div class="mini-feature-box">
                        <div class="icon-box">
                            <a href="create-site.php">
                                <img alt="creation_site_web_c2m" src="imgs/icons/service2.png" />
                                <img alt="creation_site_web_c2m" src="imgs/icons/service2.png" />
                            </a>
                        </div>
                        <div class="data-box">
                            <a class="service-icons" href="create-site.php"><h3><?php echo$lang['Creation des sites internet'] ?></h3></a>
                            <p>
                                <?php echo$lang['C2M System est une société spécialisée dans la communication.'] ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                    <div class="mini-feature-box">
                        <div class="icon-box">
                            <a href="create-app-mobile.php">
                                <img alt="application_mobile_c2m" src="imgs/icons/service3.png" />
                                <img alt="application_mobile_c2m" src="imgs/icons/service3.png" />
                            </a>
                        </div>
                        <div class="data-box">
                            <a class="service-icons" href="create-app-mobile.php"><h3><?php echo$lang['Applications mobile'] ?></h3></a>
                            <p><?php echo$lang['Nous vous proposons de réaliser la version mobile votre site web.'] ?></p>
                        </div>
                    </div>
                </div>
            </div>





            <div class="row">
                <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
                    <div class="mini-feature-box">
                        <div class="icon-box">
                            <a href="camera.php">
                            <img alt="camera_de_surveillance_c2m_system" src="imgs/icons/service4.png" />
                            <img alt="camera_de_surveillance_c2m_system" src="imgs/icons/service4.png" />
                            </a>
                        </div>
                        <div class="data-box">
                            <a class="service-icons" href="camera.php"><h3><?php echo$lang['Camera de surveillance'] ?></h3></a>
                            <p><?php echo$lang['La vidéosurveillance est un système de caméras et de transmission.'] ?></p>
                        </div>
                    </div>
                </div>


                <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s">
                    <div class="mini-feature-box">
                        <div class="icon-box">
                            <a href="gps.php">
                            <img alt="gps_localisation_c2m_system" src="imgs/icons/service5.png" />
                            <img alt="gps_localisation_c2m_system" src="imgs/icons/service5.png" />
                            </a>
                        </div>
                        <div class="data-box">
                            <a class="service-icons" href="gps.php"><h3><?php echo$lang['GPS / Localisation'] ?></h3></a>
                            <p><?php echo$lang["Il s'agit d'une solution permettant le suivie, l'enregistrement."] ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                    <div class="mini-feature-box">
                        <div class="icon-box">
                            <a href="saisie.php">
                            <img alt="saisie_de_données_c2m_system" src="imgs/icons/service10.png" />
                            <img alt="saisie_de_données_c2m_system" src="imgs/icons/service10.png" />
                            </a>
                        </div>
                        <div class="data-box">
                            <a class="service-icons" href="saisie.php"><h3><?php echo$lang['Saisie de données'] ?></h3></a>
                            <p><?php echo$lang['La saisie de données une opération consistant à intégrer manuellement.'] ?></p>
                        </div>
                    </div>
                </div>
            </div>




            <div class="row">
                <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
                    <div class="mini-feature-box">
                        <div class="icon-box">
                            <a href="service-archive.php">
                            <img alt="Archivage_physique_numerique_c2m_system" src="imgs/icons/service11.png" />
                            <img alt="Archivage_physique_numerique_c2m_system" src="imgs/icons/service11.png" />
                            </a>
                        </div>
                        <div class="data-box">
                            <a class="service-icons" href="service-archive.php"><h3><?php echo$lang['Archive Physique/Numérique'] ?></h3></a>
                            <p><?php echo$lang['La création, la gestion et la destruction d’archives imposent.'] ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s">
                    <div class="mini-feature-box">
                        <div class="icon-box">
                            <a href="satellite.php">
                            <img alt="satellite_c2m_system" src="imgs/icons/satellite.png" />
                            <img alt="satellite_c2m_system" src="imgs/icons/satellite.png" />
                            </a>
                        </div>
                        <div class="data-box">
                            <a class="service-icons" href="satellite.php"><h3><?php echo$lang['Internet par Satellite'] ?></h3></a>
                            <p><?php echo$lang['La solution Internet par satellite utilise la technique qui consiste à établir un lien direct.'] ?> </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                    <div class="mini-feature-box">
                        <div class="icon-box">
                            <a href="reference.php">
                            <img alt="referencement_c2m_system" src="imgs/icons/reference.png" />
                            <img alt="referencement_c2m_system" src="imgs/icons/reference.png" />
                            </a>
                        </div>
                        <div class="data-box">
                            <a class="service-icons" href="reference.php"><h3><?php echo$lang['Référencement'] ?></h3></a>
                            <p><?php echo$lang['Pack de référencement et netlinking Advance : Audit et Analyse de concurrents recherche.'] ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
                    <div class="mini-feature-box">
                        <div class="icon-box">
                            <a href="solution-pointage.php">
                            <img alt="solution_de_pointage_c2m_system" src="imgs/icons/pointage.png" />
                            <img alt="solution_de_pointage_c2m_system" src="imgs/icons/pointage.png" />
                            </a>
                        </div>
                        <div class="data-box">
                            <a class="service-icons" href="solution-pointage.php"><h3><?php echo$lang['Solution de Pointage'] ?></h3></a>
                            <p><?php echo$lang["Avec l'Evo3Bio, il est possible d'enrôler directement les empreintes digitales."] ?></p>
                        </div>
                    </div>
                </div>


                <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s">
                    <div class="mini-feature-box">
                            <div class="icon-box">
                                <a href="installation-reseau.php">
                                <img alt="installation_reseau_c2m_system" src="imgs/icons/reseau.png" />
                                <img alt="installation_reseau_c2m_system" src="imgs/icons/reseau.png" />
                                </a>
                            </div>
                        <div class="data-box">
                            <a class="service-icons" href="installation-reseau.php"><h3><?php echo$lang['Installation du réseau'] ?></h3></a>
                                <p><?php echo$lang["C2M SYSTEM est une société spécialisée dans Le déploiement d'un réseau informatique, ce dernier."] ?></p> 
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                    <div class="mini-feature-box">
                        <div class="icon-box">
                            <a href="voip.php">
                            <img alt="voix_sur_voip_c2m_system" src="imgs/icons/voip.png" />
                            <img alt="voix_sur_voip_c2m_system" src="imgs/icons/voip.png" />
                            </a>
                        </div>
                        <div class="data-box">
                            <a class="service-icons" href="voip.php"><h3><?php echo$lang['Voix sur VOIP'] ?></h3></a>
                            <p><?php echo$lang['La voix sur IP, ou VOIP comprenez Voice over Internet Protocol, est une technologie.'] ?></p>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </section>


    <section class="statistics section-without-title section-bg-img">
        <div class="app-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="stats wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
                            <div class="stats-icon icon">
                                <i class="fa fa-user-circle"></i>
                            </div>
                            <div class="stats-data">
                                <p class="timer" data-from="0" data-to="150" data-speed="6000">0 </p>
                                <h5 class="client"><?php echo$lang['Nombre des clients fidèles'] ?> </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="stats wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s">
                            <div class="stats-icon">
                                <i class="fa fa-download"></i>
                            </div>
                            <div class="stats-data">
                                <p class="timer" data-from="70" data-to="500" data-speed="6000">0 </p>
                                <h5 class="client"><?php echo$lang['Installations'] ?> <br /> <?php echo$lang['de projets'] ?> </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="stats wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            <div class="stats-icon">
                                <i class="fa fa-refresh"></i>
                            </div>
                            <div class="stats-data">
                                <p class="timer" data-from="70" data-to="2000000" data-speed="6000">0 </p>
                                <h5 class="client"><?php echo$lang['Données'] ?> <br/> <?php echo$lang['circulées'] ?> </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="stats wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.75s">
                            <div class="stats-icon">
                                <i class="fa fa-group"></i>
                            </div>
                            <div class="stats-data">
                                <p class="timer" data-from="70" data-to="10" data-speed="6000">0 </p>
                                <h5 class="client"><?php echo$lang['ans'] ?> <br /> <?php echo$lang['d\'expérience'] ?> </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="blog" id="blog">
        <div class="container">
            <div class="section-title style-gradient wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
                <h2>
                    <?php echo$lang["PROJETS"] ?>
                </h2>
                <span><span></span></span>
            </div>
            <div class="posts">
                <div class="row">
                    <div class="col-sm-4">
                        <div>
                            <article class="normal-post wow fadeInUp show" data-wow-duration="1s" data-wow-delay="0.25s">
                                <figure class="entry-header">
                                    <div class="post-image">
                                        <a href="alkhadim.php"><img alt="alkhadim_c2m_system" src="imgs/features/feature1.jpg" class="img-responsive" /></a>
                                    </div>
                                </figure>
                                <div class="entry-content">
                                    <div class="entry-post-info">
                                        <h4><a href="alkhadim.php"><?php echo$lang["Al Khadim - Etat civil"] ?></a></h4>
                                        <p class="posted-on date"><span>14 </span> Feb </p>
                                    </div>
                                    <div class="entry-expert">
                                        <p><?php echo$lang['Dans le cadre d’une bonne gouvernance concentrée, nous vous proposons des programmes informatiques visant à faciliter le travail des fonctionnaires au sein des divisions ...'] ?>
                                        </p>
                                        <div class="post-readMore">
                                            <a href="alkhadim.php" class="pull-left read-more-link"><?php echo$lang['Lire Plus'] ?>  <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>

                            </article>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div>
                            <article class="normal-post wow fadeInUp show" data-wow-duration="1s" data-wow-delay="0.5s">
                                <figure class="entry-header">
                                    <div class="post-image">
                                        <a href="gestion-budget.php"><img alt="c2m_system_gestion_budget" src="imgs/features/feature2.jpg" class="img-responsive" /></a>
                                    </div>
                                </figure>
                                <div class="entry-content">
                                    <div class="entry-post-info">
                                        <h4><a href="gestion-budget.php"><?php echo$lang['Alkhadim : Budget'] ?></a></h4>
                                        <p class="posted-on date"><span>14 </span> Feb </p>
                                    </div>
                                    <div class="entry-expert">
                                        <p><?php echo$lang['Il permet << la gestion du budget >> en deux parties dépenses et recettes à la fois tout en contrôlant les démarches informatiques conformément au bulletin officiel. Le Logiciel de Gestion intégré ...'] ?>
                                        </p>
                                        <div class="post-readMore">
                                            <a href="gestion-budget.php" class="pull-left read-more-link"><?php echo$lang['Lire Plus'] ?>  <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>

                            </article>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div>
                            <article class="normal-post wow fadeInUp show" data-wow-duration="1s" data-wow-delay="0.5s">
                                <figure class="entry-header">
                                    <div class="post-image">
                                        <a href="gestion-location.php"><img alt="c2m_system_location_voiture" src="imgs/features/feature3.jpg" class="img-responsive" /></a>
                                    </div>
                                </figure>
                                <div class="entry-content">
                                    <div class="entry-post-info">
                                        <h4><a href="gestion-location.php"><?php echo$lang['Alkhadim : Location de voiture'] ?></a></h4>
                                        <p class="posted-on date"><span>14 </span> Feb </p>
                                    </div>
                                    <div class="entry-expert">
                                        <p><?php echo$lang["L'application de gestion de location de voiture est un logiciel permettant la à gestion de toutes les tâches effectuées dans une entreprise de location de voiture en allant du réservation jusqu'au ..."] ?>
                                        </p>
                                        <div class="post-readMore">
                                            <a href="gestion-location.php" class="pull-left read-more-link"><?php echo$lang['Lire Plus'] ?>  <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>

                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section style="display: none;" class="screenShots" id="screenShots">
        <div>
            <div class="section-title style-gradient wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
                <h2>
                    Our Analytics
                </h2>
                <span><span></span></span>
            </div>
            <div class="app-screen">
                <div class="mobile-mockup text-center">
                    <img alt="" src="imgs/mobile__.png" />
                </div>

                <div class="swiper-container wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide"><img alt="" src="imgs/456.jpg" class="img-responsive" /></div>
                        <div class="swiper-slide"><img alt="" src="imgs/456.jpg" class="img-responsive" /></div>
                        <div class="swiper-slide"><img alt="" src="imgs/456.jpg" class="img-responsive" /></div>
                        <div class="swiper-slide"><img alt="" src="imgs/456.jpg" class="img-responsive" /></div>
                        <div class="swiper-slide"><img alt="" src="imgs/456.jpg" class="img-responsive" /></div>
                        <div class="swiper-slide"><img alt="" src="imgs/456.jpg" class="img-responsive" /></div>
                        <div class="swiper-slide"><img alt="" src="imgs/456.jpg" class="img-responsive" /></div>


                    </div>

                    <div class="custom_slider_arrows">
                        <ul class="list-inline list-unstyled">
                            <li>
                                <button class="appsLand-btn appsLand-btn-gradient screenShots__style-1__btn-prev">
                                     <span><i class="fa fa-angle-left"></i></span>
                                 </button>
                            </li>
                            <li>
                                <button class="appsLand-btn appsLand-btn-gradient screenShots__style-1__btn-next">
                                     <span><i class="fa fa-angle-right"></i></span>
                                 </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section style="display: none;" class="features" id="features">
        <div class="container">
            <div class="section-title style-gradient wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
                <h2>
                    Feature
                </h2>
                <span><span></span></span>
            </div>
            <div class="appInfo-container">
                <div class="row appInfo-row">
                    <div class="col-md-6 col-md-offset-1 col-sm-7">
                        <div class="appInfo-data wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s">
                            <h2>Easy To Use </h2>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it.
                            </p>
                            <a href="#" class="appsLand-btn appsLand-btn-gradient"><span>Read More </span></a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-5 hidden-xs">
                        <div class="img-box wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            <img alt="" src="imgs/01.png" class="img-responsive" />
                        </div>
                    </div>
                </div>
                <div class="row appInfo-row">
                    <div class="col-md-4 col-md-offset-1 col-sm-5 hidden-xs">
                        <div class="img-box wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
                            <img alt="" src="imgs/02.png" class="img-responsive" />
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-7">
                        <div class="appInfo-data wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s">
                            <h2>Modern Technologies </h2>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it.
                            </p>
                            <a href="#" class="appsLand-btn appsLand-btn-gradient"><span>Read More </span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section style="display: none;" class="download section-bg-img" id="download">
        <div class="app-overlay">
            <div class="container">
                <div class="section-title style-gradient white-color wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
                    <h2>
                        Our App
                    </h2>
                    <span><span></span></span>
                </div>
                <div class="download-buttons">
                    <div class="row">

                        <div class="col-sm-6">
                            <div class="wow fadeInUp second-download-btn" data-wow-duration="1s" data-wow-delay="0.5s">
                                <a href="#" class="appsLand-btn appsLand-btn-gradient appsLand-btn-larg"><span><img src="imgs/icons/google-play.png" /></span> </a>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="wow fadeInUp third-download-btn" data-wow-duration="1s" data-wow-delay="0.75s">
                                <a href="#" class="appsLand-btn appsLand-btn-gradient appsLand-btn-larg"><span><img src="imgs/icons/app-store.png" /></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    
    <section style="display: none;" class="testimonials section-bg-img" id="testimonials">
        <div class="app-overlay">
            <div class="container">
                <div class="section-title style-gradient white-color wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
                    <h2>
                        What our clients are saying
                    </h2>
                    <span><span></span></span>
                </div>
                <div class="testimonials-template">
                    <div class="row">
                        <div class="col-lg-10 col-lg-offset-1">
                            <div class="testimonials-slider-container wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide testimonials-slide">
                                        <div class="row table-row">
                                            <div class="col-lg-3 col-left table-cel">
                                                <div class="client-info text-center">
                                                    <div class="client-pic">
                                                        <img alt="" src="imgs/clients/01.jpg" class="center-block" />
                                                    </div>
                                                    <h4 class="client-name">John Doe </h4>
                                                    <p class="client-career">Job Title </p>
                                                </div>
                                            </div>
                                            <div class="col-lg-9 col-right table-cel">
                                                <div class="client-review">
                                                    <p>
                                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centurie. </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide testimonials-slide">
                                        <div class="row table-row">
                                            <div class="col-lg-3 col-left table-cel">
                                                <div class="client-info text-center">
                                                    <div class="client-pic">
                                                        <img alt="" src="imgs/clients/02.jpg" class="center-block" />
                                                    </div>
                                                    <h4 class="client-name">John Doe </h4>
                                                    <p class="client-career">Job Title </p>
                                                </div>
                                            </div>
                                            <div class="col-lg-9 col-right table-cel">
                                                <div class="client-review">
                                                    <p>
                                                        <p>
                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centurie. </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide testimonials-slide">
                                        <div class="row table-row">
                                            <div class="col-lg-3 col-left table-cel">
                                                <div class="client-info text-center">
                                                    <div class="client-pic">
                                                        <img alt="" src="imgs/clients/03.jpg" class="center-block" />
                                                    </div>
                                                    <h4 class="client-name">John Doe </h4>
                                                    <p class="client-career">Job Title </p>
                                                </div>
                                            </div>
                                            <div class="col-lg-9 col-right table-cel">
                                                <div class="client-review">
                                                    <p>
                                                        <p>
                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centurie. </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="testimonials-slider-button-prev swiper-button-prev"></div>
                                <div class="testimonials-slider-button-next swiper-button-next"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div style="display: none;" class="features-section features-tabs-section">
        <div class="container">
            <div class="header">
                <!-- <h2>SERVICES</h2>
                <p>Register for an account, connect a tablet/iPad and create a survey.<br> Let customers fill the surveys and you'll see reports and analytics instantly.</p> -->

                 <div class="section-title style-gradient wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
                <h2>
                    SERVICES
                </h2>
                <span><span></span></span>
            </div>
            </div>
            <div class="row">
                <div class="col-md-12 tabs-wrapper">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#step1" data-toggle="tab">Création Sites Internet</a></li>
                        <li><a href="#step2" data-toggle="tab">Création des logiciels</a></li>
                        <li><a href="#step3" data-toggle="tab">Création Applications mobile</a></li>
                        <li><a href="#step4" data-toggle="tab">Solution de pointage</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="step1">
                            <div class="col-md-6 info">
                                <h4>1. Setup your Account</h4>
                                <p>
                                    After you register, you'll be able to connect a tablet/iPad device and choose a survey that works for you.
                                </p>
                                <p>
                                    Customize the look and feel by adding your logo and branding on the device.
                                </p>
                            </div>
                            <div class="col-md-6 image">
                                <img src="imgs/services/service1.jpg" class="img-responsive" alt="Create Surveys" />
                            </div>
                        </div>
                        <hr class="visible-xs visible-sm">
                        <div class="tab-pane fade" id="step2">
                            <div class="col-md-6 info">
                                <h4>2. Collect Responses</h4>
                                <p>
                                    Hand over the tablet/iPad to your customers or set it up on a kiosk. The application automatically syncs data to your account when internet is connected.
                                </p>
                            </div>
                            <div class="col-md-6 image">
                                <br><br>
                                <img src="imgs/services/service2.jpg" class="img-responsive" alt="Get Reports and Insights" />
                            </div>
                        </div>
                        <hr class="visible-xs visible-sm">
                        <div class="tab-pane fade" id="step3">
                            <div class="col-md-6 info">
                                <h4>3. Get Reports &amp; Insights</h4>
                                <p>
                                    Login to your dashboard to see graphical reports generated from the data collected. See aggregated customer comments and respond to unhappy customers.
                                </p>
                            </div>
                            <div class="col-md-6 image">
                                <br><br>
                                <img src="imgs/services/service3.jpg" class="img-responsive" alt="Get Reports and Insights" />
                            </div>
                        </div>
                        <hr class="visible-xs visible-sm">
                        <div class="tab-pane fade" id="step4">
                            <div class="col-md-6 info">
                                <h4>2. Collect Responses</h4>
                                <p>
                                    Hand over the tablet/iPad to your customers or set it up on a kiosk. The application automatically syncs data to your account when internet is connected.
                                </p>
                            </div>
                            <div class="col-md-6 image">
                                <br><br>
                                <img src="imgs/services/service4.jpg" class="img-responsive" alt="Get Reports and Insights" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <section class="contact contact__style-2 section-bg-img" id="contact">
         <div class="app-overlay">
             <div class="container">
                 <div class="section-title style-gradient white-color wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
                     <h2>
                        <?php echo$lang['Contacter-Nous'] ?>
                     </h2>
                     <span><span></span></span>
                 </div>
                 <div class="contact-form wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s">
                     <div class="row">
                         <div class="col-md-4 col-lg-push-8 col-md-push-8">
                             <div class="contact-info">
                                 <div class="info-box">
                                     <div class="icon-box">
                                         <i class="fa fa-phone white-color"></i>
                                     </div>
                                     <h5><?php echo$lang['Telephone'] ?> </h5>
                                     <p>
                                        +212 5 22 01 07 08
                                     </p>
                                 </div>
                                 <div class="info-box">
                                     <div class="icon-box">
                                         <i class="fa fa-envelope-o white-color"></i>
                                     </div>
                                     <h5><?php echo$lang['Addresse Mail'] ?> </h5>
                                     <p>
                                        Contact@c2m.ma
                                     </p>
                                 </div>
                             </div>
                         </div>
                         <div class="col-md-8 col-lg-pull-4 col-md-pull-4">
                             <form action="" method="post" id="contact_form">
                                 <?php if(isset($_POST['send']))
                                        { 
                                            echo ' <div class="alert alert-success alert-dismissable fade in">
                                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                    <strong>Succès !</strong> Message envoyé.</div>';
                                        }
                                        ?>
                                <div class="col-md-6">
                                 <div class="form-group">
                                     <input type="text" name="name" required class="form-control" placeholder="Nom" />
                                 </div>
                                </div>
                                <div class="col-md-6"> 
                                 <div class="form-group">
                                     <input type="email" name="email" required class="form-control" placeholder="Email"  />
                                 </div>
                                </div>
                                <div class="col-md-6"> 
                                 <div class="form-group">
                                     <input type="text" name="subject" required class="form-control" placeholder="Sujet"  />
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <div class="form-group">
                                     <input type="tel" pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$" name="phone" required class="form-control" placeholder="Telephone"  />
                                 </div>
                             </div>
                             <div class="col-md-12">
                                 <div class="form-group">
                                     <textarea type="text" class="form-control" name="message" required placeholder="Message" ></textarea>
                                 </div>
                             </div>
                             <div class="col-md-12">
                                 <div class="form-group">
                                     <button type="submit" name="send" class="appsLand-btn appsLand-btn-gradient btn-inverse btn btn-rtl"><span><i class="fa fa-send"></i> <?php echo$lang['Envoyer'] ?> </span></button>
                                 </div>
                             </div>
                            </form>
                        </div>
                    <!-- ----------------------------------------------------------------------- -->



                    
                    <!-- ------------------------------------------------------------------------- -->
                     </div>
                 </div>
             </div>
         </div>
     </section>

    
    

    <section style="display: none;" class="subscribe">
        <div class="container">
            <div class="section-title style-gradient wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
                <h2>
                    News letter
                </h2>
                <span><span></span></span>
            </div>
            <form id="mc-form" class="en-form">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                        <div class="custom-input-group wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s">
                            <input id="mc-email" type="email" class="form-control" placeholder="Email" />
                            <button class="appsLand-btn appsLand-btn-gradient subscribe-btn"><span>Subscribe </span></button>
                            <div class="clearfix"></div>
                        </div>
                        <label for="mc-email"></label>
                    </div>
                </div>
            </form>
        </div>
    </section>
</main>
<?PHP include('partials/footer.php'); ?>