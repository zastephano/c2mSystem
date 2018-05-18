<?php require "core/init.php"; ?>
<!DOCTYPE html>
 <html lang="zxx">
 <meta charset="utf-8">
 <head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
     <meta charset="utf-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />
     <meta name="viewport" content="width=device-width, initial-scale=1" />
     <title><?=$title;?> | C2M System</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
     <link rel="icon" href="imgs/willLogo.png" />
    <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/bootstrap.min.css" />
     <link rel="stylesheet" href="css/swiper.min.css" />
     <link rel="stylesheet" href="css/animate.css" />
     <link rel="stylesheet" href="css/rangeslider.css" />
     <link rel="stylesheet" href="css/style.css" />

     <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
    #parent{
        position: relative;
    }

    #parent:hover > #child{
        opacity: 1;
        visibility: visible;
    }

    #child{
        transition :all 0.3s;
        opacity:0;
        position:absolute;
        visibility:hidden;
        /*left:80%;*/
 /*       top:0;
        background-color: #fff;
        list-style: none;
        width: 250px;
        left:100%;*/
    }
</style>
 </head>

 <body data-spy="scroll" data-target="#bs-example-navbar-collapse-1" data-offset="5" class="scrollspy-example without_bg_images">
     
        
                        <!-- <div class="modal fade login-register-form" role="dialog">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">
                                            <span class="glyphicon glyphicon-remove"></span>
                                        </button>
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a data-toggle="tab" href="#login-form"> Login <span class="glyphicon glyphicon-user"></span></a></li>
                                            <li><a data-toggle="tab" href="#registration-form"> Register <span class="glyphicon glyphicon-pencil"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="modal-body">
                                        <div class="tab-content">
                                            <div id="login-form" class="tab-pane fade in active">
                                                <form action="/">
                                                    <div class="form-group">
                                                        <label for="email">Email:</label>
                                                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="pwd">Password:</label>
                                                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                                                    </div>
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" name="remember"> Remember me</label>
                                                    </div>
                             <a href="#" class="appsLand-btn appsLand-btn-gradient"><span>Login</span></a>
                                                </form>
                                            </div>
                                            <div id="registration-form" class="tab-pane fade">
                                                <form action="/">
                                                    <div class="form-group">
                                                        <label for="name">Your Name:</label>
                                                        <input type="text" class="form-control" id="name"   placeholder="Enter your name" name="name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="newemail">Email:</label>
                                                        <input type="email" class="form-control" id="newemail" placeholder="Enter new email" name="newemail">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="newpwd">Password:</label>
                                                        <input type="password" class="form-control" id="newpwd" placeholder="New password" name="newpwd">
                                                    </div>
                             <a href="#" class="appsLand-btn appsLand-btn-gradient"><span>Register</span></a>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>      -->
     
     <style type="text/css">
        .nav-font-color{
            color:black;
        }
        .lang{
        right:0;
        top: 40%;
        position: fixed;
    }

     </style>

 <nav class="navbar navbar-default navbar-fixed-top appsLand-navbar navBar__style-2">
     <div class="container">
         <div class="navbar-header">
             <span class="menu-toggle">
                 <i class="chart"></i>
                 <i class="chart"></i>
                 <i class="chart"></i>
             </span>
             <a class="navbar-brand" href="index.php">
                 <img alt="C2M System" src="imgs/willLogo.png" />
             </a>
         </div>
         <div class="app-links" id="bs-example-navbar-collapse-1">
             <ul class="nav navbar-nav navbar-right appsLand-links">
                 <li class="visible-xs-block text-center mobile-size-logo">
                     <a href="index.php">
                         <img style="width: 100px;" alt="C2M System" src="imgs/willLogo.png" />
                     </a>
                 </li>
                 <li><a class="nav-font-color font" href="index.php"><?php echo$lang['Accueil'] ?> </a></li>


                 <li id="parent"><a class="pointer"><?php echo$lang['Notre Societé'] ?> </a>
                    <ul class="dropdown-menu font" id="child">
                         <li><a href="a-propos.php"><?php echo$lang['A propos de nous'] ?></a></li>
                         <li><a href="faq.php"><?php echo $lang['FAQ'] ?></a></li>
                     </ul>
                </li>


                <li id="parent">
                    <a class="nav-font-color pointer"><?php echo $lang['Projets'] ?> </a>
                     <ul class="dropdown-menu font" id="child">
                         <li><a href="alkhadim.php"><?php echo$lang['ALkhadim : Etat civil'] ?></a></li>
                         <li><a href="gestion-cafe.php"><?php echo$lang['Alkhadim : Café/Restaurant'] ?></a></li>
                         <li><a href="gestion-cheque.php"><?php echo$lang['Alkhadim : Chéque'] ?></a></li>
                         <li><a href="gestion-hamam.php"><?php echo$lang['Alkhadim : Hamam'] ?></a></li>
                         <li><a href="gestion-veterinaire.php"><?php echo$lang['Alkhadim : Vétérinaire'] ?></a></li>
                         <li><a href="gestion-teledeclaration.php"><?php echo$lang['Télédéclaration AlKhadim:EDI'] ?></a></li>
                         <li><a href="gestion-location.php"><?php echo$lang['Alkhadim : Location de voiture'] ?></a></li>
                         <li><a href="gestion-stock.php"><?php echo$lang['Alkhadim : Stock'] ?></a></li>
                         <li><a href="gestion-salarie.php"><?php echo$lang['Alkhadim : Salarié'] ?></a></li>
                         <li><a href="gestion-budget.php"><?php echo$lang['Alkhadim : Budget'] ?></a></li>
                         <li><a href="bureau-ordre.php"><?php echo$lang["Alkhadim : Bureau d'ordre"] ?></a></li>
                         <li><a href="alkhadim-archive.php"><?php echo$lang['Alkhadim : Archive'] ?></a></li>
                     </ul>   
                </li>     

                <li id="parent">
                    <a class="nav-font-color font pointer"><?php echo$lang['Services'] ?> </a>
                        <ul class="dropdown-menu" id="child">
                             <li><a href="create-logiciels.php"><?php echo$lang['Creation des logiciels'] ?></a></li>
                             <li><a href="create-app-mobile.php"><?php echo$lang['Création des Applications Mobiles'] ?></a></li>
                             <li><a href="create-site.php"><?php echo$lang['Création des Sites Internet'] ?></a></li>
                             <li><a href="reference.php"><?php echo$lang['Référencement'] ?></a></li>
                             <li><a href="installation-reseau.php"><?php echo$lang['Installation de réseau'] ?></a></li>
                             <li><a href="camera.php"><?php echo$lang['Caméras de surveillance'] ?></a></li>
                             <li><a href="voip.php"><?php echo$lang['Voix sur IP "VOIP"'] ?></a></li>
                             <li><a href="gps.php"><?php echo$lang['GPS / Localisation'] ?></a></li>
                             <li><a href="solution-pointage.php"><?php echo$lang['Solution de Pointage'] ?></a></li>
                             <li><a href="satellite.php"><?php echo$lang['Internet par Satellite'] ?></a></li>
                             <li><a href="saisie.php"><?php echo$lang['Saisie de Données'] ?></a></li>
                             <li><a href="service-archive.php"><?php echo$lang['Archives physiques et numériques'] ?></a></li>
                             
                         </ul>
                 </li>
                 <li><a class="nav-font-color font pointer" href="realisation.php"><?php echo$lang['Nos Réalisations'] ?> </a></li>

                 <li id="parent">
                     <a class="nav-font-color pointer"><?php echo$lang['Presse'] ?> </a>
                     <ul class="dropdown-menu" id="child">
                         <li><a href="evenement.php"><?php echo$lang['Evénements'] ?></a></li>
                         <li><a href="presse.php"><?php echo$lang['Presse'] ?></a></li>
                     </ul>
                 </li>

                 <li id="parent">
                 <a class="nav-font-color pointer"><?php echo$lang['Contact'] ?> </a>
                    <ul class="dropdown-menu" id="child">
                         <li><a href="contact.php"><?php echo$lang['Contact'] ?></a></li>
                         <li><a href="assistance-commune.php"><?php echo$lang['Assistance commune'] ?></a></li>
                     </ul>
                 </li>

                <div class="lang">
                    <a><?php include 'menu/menu.php'; ?></a>
                </div>

                 <li style="display: none;"><a class="nav-font-color"  data-toggle="modal" data-target=".login-register-form">login / Register</a></li>
             </ul>
         </div>
     </div>
 </nav>
     

<?PHP
     if( !isset($home) )
         include('partials/firstView.php');
     else
         include('partials/firstView_home.php');
?>