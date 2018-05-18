<?PHP 
$title = 'FAQ';
include('partials/header.php'); ?>

<main class="entry-main">


<section class="faq">
         <div class="container">

		<h2 class="title"><?php echo$lang["Solutions Systemes informatique"] ?></h2>
             <div class="section-title style-gradient wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
             </div>
             <div class="row">
                 <div class="col-md-12">
                     <div class="panel-group questions-container" id="accordion" role="tablist" aria-multiselectable="true">
                         
                         <div class="panel panel-default wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s">
                             <div class="panel-heading" role="tab" id="headingOne">
                                 <h4 class="panel-title">
                                     <a class="gradient-bg" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                         <span><?php echo$lang["Pourquoi Travaillez avec nous ?"] ?></span>
                                     </a>
                                 </h4>
                             </div>
                             <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                 <div class="panel-body">
                                     <p><?php echo$lang["Nous sommes un groupe homogéne de developpeurs qui vous serait toujours a votre disposition"] ?></p>
                                 </div>
                             </div>
                         </div>
                         
                         <div class="panel panel-default wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s">
                             <div class="panel-heading" role="tab" id="headingTwo">
                                 <h4 class="panel-title">
                                     <a class="collapsed gradient-bg" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                         <span><?php echo$lang['Questions & Reponses'] ?></span>
                                     </a>
                                 </h4>
                             </div>
                             <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                 <div class="panel-body">
                                     <p>
<?php echo$lang["Si vous avez des questions, merci de les envoyées dans un message au responsable du site afin d'avoir une response satisfaisante"] ?></p>
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



</main>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5a7989e9bec59583"></script>

<?PHP include('partials/footer.php'); ?>