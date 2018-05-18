<?PHP 

if(isset($_POST['send']))
		{
			include 'connexion.php';

			$nom = $_POST['name'];
			$prenom = $_POST['surname'];
			$email = $_POST['email'];
			$telephone = $_POST['phone'];
			$commune = $_POST['commune'];
			$priorite = $_POST['priorite'];
			$message = $_POST['message'];


			$sql = $db->prepare("insert into assistance (nom,prenom,email,telephone,commune,priorite,message)values (:nom,:prenom,:email,:telephone,:commune,:priorite,:message)");

			$sql->execute(array(
			':nom'=>$nom,
			':prenom'=>$prenom,
			':email'=>$email,
			':telephone'=>$telephone,
			':commune'=>$commune,
			':priorite'=>$priorite,
			':message'=>$message,
			));
		}



$title = 'Assistance-commune';
include('partials/header.php'); ?>
<main class="entry-main">

<section class="contact contact__style-2 section-bg-img" id="contact">
         <div class="app-overlay">
             <div class="container">
                 <div class="section-title style-gradient white-color wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
                     <h2>
                        Contacter-Nous
                     </h2>
                     <span><span></span></span>
                 </div>
                 <div class="contact-form wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s">
                     <div class="row">

                         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
                                     <input type="text" name="surname" required class="form-control" placeholder="Prenom" />
                                 </div>
                                </div>

                                <div class="col-md-6"> 
                                 <div class="form-group">
                                     <input type="email" name="email" required class="form-control" placeholder="Email"  />
                                 </div>
                                </div>
 
                             <div class="col-md-6">
                                 <div class="form-group">
                                     <input type="tel" pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$" name="phone" required class="form-control" placeholder="Telephone"  />
                                 </div>
                             </div>

                             <div class="col-md-6">
                                 <div class="form-group">
                                     <input type="text" name="commune" required class="form-control" placeholder="Nom de commune" />
                                 </div>
                                </div>


                                <div class="col-md-6">
                                 <div class="form-group">
									<select class="form-control form-control-subject" name="priorite">
										<option style="color:grey;">Normale</option>
										<option style="color:grey;">Urgent</option>
									</select>
                                 </div>
                                </div>

                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
							$nom = $_POST['name'];
							$prenom =  $_POST['surname'];
							$email =  $_POST['email'];
							$telephone =  $_POST['phone'];
							$commune =  $_POST['commune'];
							$priorite =  $_POST['priorite'];
							$message = $_POST['message'];

							$subject = 'Sujet';

							$msg = 'Envoyer par : ' . $nom . ' ' . $prenom .' '. "\n" . "\n" 
							.'Email : ' . $email . ' ' . "\n" . "\n"  
							.'Telephone : ' . $telephone . ' ' . "\n" . "\n"  
							.'Commune : ' . $commune. ' ' . "\n" . "\n"  
							.'Priorite : '. $priorite .' '. "\n" . "\n"  
							.'Message : ' . $message;

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


</main>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5a7989e9bec59583"></script>

<?PHP include('partials/footer.php'); ?>