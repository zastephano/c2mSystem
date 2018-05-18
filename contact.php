<?PHP 

$title = 'Contacter';
include('partials/header.php'); 


if(isset($_POST['send']))
            {

               include 'connexion.php';

                $nom = $_POST['name'];
                $email = $_POST['email'];
                $sujet = $_POST['subject'];
                $telephone = $_POST['phone'];
                $message = $_POST['message'];


                $sql = $db->prepare("insert into contact (nom,email,sujet,telephone,message)values (:nom,:email,:sujet,:telephone,:message)");

                $sql->execute(array(
                ':nom'=>$nom,
                ':email'=>$email,
                ':sujet'=>$sujet,
                ':telephone'=>$telephone,
                ':message'=>$message,
                ));
            }


?>

 <main class="entry-main">

     
     <section class="contact contact__style-2 section-bg-img" id="contact">
         <div class="app-overlay">
             <div class="container">
                 <div class="section-title style-gradient white-color wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
                     <h2>
                        Contacter Nous
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
                                     <h5>Telephone </h5>
                                     <p>
                                        +212 5 22 01 07 08
                                     </p>
                                 </div>
                                 <div class="info-box">
                                     <div class="icon-box">
                                         <i class="fa fa-envelope-o white-color"></i>
                                     </div>
                                     <h5>Addresse Mail </h5>
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
                                     <button type="submit" name="send" class="appsLand-btn appsLand-btn-gradient btn-inverse btn"><span><i class="fa fa-send"></i> Envoyer </span></button>
                                 </div>
                             </div>
                        </form>
                        </div>

                        <!-- ----------------------------------------------------------------------- -->
                    <?php
                    if(isset($_POST['send']))
                        {
                            $name = $_POST['name'];

                            $phone = $_POST['phone'];

                            $email = $_POST['email'];

                            $subject = $_POST['subject'];


                            $msg = 'Envoyer par : ' . $name . ' ' . "\n" . "\n" 
                            .'Email : ' . $email . ' ' .  "\n" . "\n" 
                            .'Telaphone : ' . $phone . ' ' .  "\n" . "\n" 
                            .'Message : ' . $_POST['message'];

                            /*$mail = 'dupond@gmail.com';*/

                            $to = 'zadodido@gmail.com';
                            /*$subject = 'Contact from ';*/
                            /*$msg = 'message from C2M';*/
                            $headers = 'From: ' . $email . '\r\n';

                            mail($to,$subject,$msg,$headers,"Content-type: text/html");
                        }
                        ?>
                    <!-- ---------------------------------------------------------------------------- -->
                     </div>
                 </div>
             </div>
         </div>
     </section>

     <!-- Section MAP -->
    <section>
                <div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3323.4576224189195!2d-7.602830685532995!3d33.593428980733314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda7cccec6713805%3A0x90b8237919a98e10!2sC2M+System!5e0!3m2!1sfr!2s!4v1516116952836" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
    </section>

 </main>
     
 <div class="scrollToTop appsLand-btn appsLand-btn-gradient"><span><i class="fa fa-angle-up"></i></span></div>


     
 <div class="loading">
     <div class="spinner">
         <div class="double-bounce1"></div>
         <div class="double-bounce2"></div>
     </div>
 </div>

 <script src="js/jquery-2.2.4.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
 <script src="js/swiper.jquery.min.js"></script>
 <script src="js/wow.min.js"></script>
 <script src="js/jquery.countTo.min.js"></script>
 <script src="js/rangeslider.min.js"></script>
 <script src="js/plugins.js"></script>

<?PHP include('partials/footer.php'); ?>