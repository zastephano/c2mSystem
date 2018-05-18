<?PHP 
$title = 'Presse';
include('partials/header.php'); ?>

<main class="entry-main">

<script src="js/jquery-3.2.1.min.js"></script>

	<style type="text/css">
		.content-inner-page{
			color:#000;
		}

		.content-inner-page p.head{
			color:darkred;
			font-size: 22px;
			font-weight: bold;
			text-align: center;
		}
		.links{
			text-decoration: underline;
		}
		.button{
			float: right;
			line-height:65px;
			border-radius: 10px;
			background-color: #fff;
			font-size: 20px;
			font-weight: bold;
			text-decoration: underline;
		}
		.l{
			font-weight: bold;
		}
		.content{
			margin-top: 50px;
			/*margin-left: 350px;*/
		}
		.text_link{
			text-decoration: underline;
		}
		li.li{
		list-style: none;
		display: inline;
		}
		.cont{
			margin-top: 20px;
		}
		.style:hover{
			transition: 0.5s;
    		cursor: pointer;
    		transform: scale(1.1);
		}
		.space{
			margin-bottom: 10px;
		}

	</style>


<script type="text/javascript">
            $(document).ready(function()
            {
                /*hide*/
                $("#2m").hide();
                $("#rtm").hide();
                $("#presse").hide();


                /*functions*/
                $("#b2m").click(function(){
                    $("#2m").show("slow");
                    $("#rtm").hide("slow");
                    $("#presse").hide("slow");
                    $("#all").hide("slow");
                });

                $("#brtm").click(function(){
                    $("#rtm").show("show");
                    $("#2m").hide("slow");
                    $("#presse").hide("slow");
                    $("#all").hide("slow");
                });

                $("#bpresse").click(function(){
                    $("#presse").show("show");
                    $("#2m").hide("slow");
                    $("#rtm").hide("slow");
                    $("#all").hide("slow");
                });

                $("#ball").click(function(){
                	$("#all").show("show");
                    $("#2m").hide("slow");
                    $("#rtm").hide("slow");
                    $("#presse").hide("slow");
                })
            });
        </script>


<div align="center" style="margin:10px 10px;">
        <!-- <button style="margin:0 auto;" id="b2m">2M</button>
        <button id="brtm">RTM</button>
        <button id="bpresse">PRESSE</button> -->

        <a id="ball" class="style"><img class="style" src="imgs/presse/tous.jpg" width="100" height="50"></a>
        <a id="b2m"><img class="style" width="90" height="40" src="imgs/presse/2M.png"></a>
        <a id="brtm"><img class="style" width="100" height="50" src="imgs/presse/rtm.jpg"></a>
        <a id="bpresse"><img class="style" width="100" height="50" src="imgs/presse/presse.png"></a>
</div>


<div class="container">
	<div class="row text-center">
	<div class="col-md-12">


	<div id="2m">

				<iframe class="space" width="300" height="300" controls frameborder="0" allowfullscreen="allowfullscreen" src="https://www.youtube.com/embed/F4RoXDOiT10"></iframe>
			
				<iframe class="space" src="https://www.youtube.com/embed/v5sAaGaZQpM" width="300" height="300" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
							
				<iframe class="space" src="https://www.youtube.com/embed/MfT7SFkqdus" width="300" height="300" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
	</div>



	<div id="rtm">		
			
				<iframe class="space" src="https://www.youtube.com/embed/HMy6WrH_OoM" width="300" height="300" frameborder="0" allowfullscreen="allowfullscreen"></iframe>				
			
				<iframe class="space" src="https://www.youtube.com/embed/xOgmU2KRPy4" width="300" height="300" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
	</div>



	<div>
		<div id="presse">
					
				<a href=alkhadim-presse-content.php><img title="alkhadim" width="300" height="300" align="center" src="imgs/features/feature1.jpg"></a>			
	
				<a href="kifache.php"><img class="preload-me" srcset="imgs/presse/kifache.jpg" alt="c2m system" title="kifache" width="300" height="300"/></a>
								
				<a href="massae.php"><img class="preload-me" srcset="imgs/presse/presse.jpg" alt="" title="massae" width="300" height="300"/></a>
					
				<a href="agadir.php" ><img class="preload-me" srcset="imgs/presse/agadir.jpg" alt="c2m system agadir" title="agadir" width="300" height="300"  /></a>
						
				<a href="villedesale.php" ><img class="preload-me" srcset="imgs/presse/ville.jpg" alt="" title="villedesale" width="300" height="300"  /></a>
			
				<a href="rassdmaroc.php"  title="" data-dt-img-description="medradio">
				<img class="preload-me" srcset="imgs/presse/rassd.jpg" alt="" title="rassdmaroc" width="300" height="300"  />
				</a>
						
				<a href="medradio.php"  title="" data-dt-img-description="medradio">
				<img class="preload-me" srcset="imgs/presse/med.jpg" alt="" title="medradio" width="300" height="300"  />
				</a>
		</div>
	</div>	

</div>
</div>
</div>


<div id="all">
<div class="container">
	<div class="row text-center">
		<div class="col-md-12">

				<iframe class="space" width="300" height="300" controls frameborder="0" allowfullscreen="allowfullscreen" src="https://www.youtube.com/embed/F4RoXDOiT10"></iframe>
			
				<iframe class="space" src="https://www.youtube.com/embed/v5sAaGaZQpM" width="300" height="300" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
							
				<iframe class="space" src="https://www.youtube.com/embed/MfT7SFkqdus" width="300" height="300" frameborder="0" allowfullscreen="allowfullscreen"></iframe>

				<!-- <iframe src="https://www.youtube.com/embed/HMy6WrH_OoM" width="300" height="300" frameborder="0" allowfullscreen="allowfullscreen"></iframe> -->				
				
				<!-- <video width="300" height="300" controls><source src="video/khadim.mp4" type="video/mp4"></video> -->

				<!-- <iframe src="https://www.youtube.com/embed/xOgmU2KRPy4" width="300" height="300" frameborder="0" allowfullscreen="allowfullscreen"></iframe> -->

				<a class="space" href=alkhadim-presse-content.php><img title="alkhadim" width="300" height="300" align="center" src="imgs/features/feature1.jpg"></a>			
	
				<a class="space" href="kifache.php"><img class="preload-me" srcset="imagges/presse/kifache.jpg" alt="" title="kifache" width="300" height="300"/></a>
								
				<a class="space" href="massae.php"><img class="preload-me" srcset="imgs/presse/presse.jpg" alt="" title="massae" width="300" height="300"/></a>
					
				<a class="space" href="agadir.php" ><img class="preload-me" srcset="http://www.c2m.ma/wp-content/uploads/2015/08/300px-Logo.agadir1.jpg 1x, http://www.c2m.ma/wp-content/uploads/2015/08/300px-Logo.agadir1.jpg 2x" alt="" title="agadir" width="300" height="300"  /></a>
						
				<a class="space" href="villedesale.php" ><img class="preload-me" srcset="imgs/presse/ville.jpg 1x, http://www.c2m.ma/wp-content/uploads/2015/08/441.jpg 2x" alt="" title="villedesale" width="300" height="300"  /></a>
			
				<a class="space" href="rassdmaroc.php"  title="" data-dt-img-description="medradio">
				<img class="preload-me" srcset="imgs/presse/rassd.jpg" alt="" title="rassdmaroc" width="300" height="300"  />
				</a>
						
				<a class="space" href="medradio.php"  title="" data-dt-img-description="medradio">
				<img class="preload-me" srcset="imgs/presse/med.jpg" alt="" title="medradio" width="300" height="300"  />
				</a>
		</div>
	</div>
</div>
</div>



</main>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5a7989e9bec59583"></script>

<?PHP include('partials/footer.php'); ?>