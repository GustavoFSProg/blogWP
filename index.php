<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <titleBLOG> t´tulo da index
    </title>
    <link rel="icon" href="imagens/favicon.png">

   <!-- <link href="<?php  //echo get_bloginfo("template_url"); ?>.bootstrap-4.3.1-dist/css/bootstrap.css" rel="stylesheet">
      <link href="bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">-->
</head>

<body>

	<?php  get_header(); 


?>
 

 <?php



 add_image_size("img-lista", 290,180, true);

add_theme_support("post-thumbnails");
 ?>


		<div class="row">

		
			<div class="col-md-12">


	 <!-- CARROUSEL -->

	 <BR><BR><br>
	 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php    echo get_bloginfo("template_url"); ?>/banners/banner01.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php  echo get_bloginfo("template_url"); ?>/banners/banner02.jpg" alt="Second slide">
    </div>
  
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</div>
</div>
</div>

				<br><br><br><br>


			<div class="container">

				<?php  $posts = new WP_Query(array(

                            	
                            	"showposts" => 3

                            ));

				while($posts->have_posts()) : $posts->the_post()  

					
				?>

					
			
 				<div class="row">

					<div class="col-md-6 post-1">

						<!--<img src="img/bateria2.jpg" width="200" height="170">-->
	<a href="<?php  the_permalink(); ?>" class="thumb"><?php   the_post_thumbnail("img-lista"); ?></a>

					<span><?php   the_title(); ?></span>

						<p><?php  the_excerpt(); ?></p>
</div>

</div>

 				<?php endwhile ?>


 			

				<div class="row recentes" >
				<div class="col-md-6" ><br><br>

				<h2>POSTS RECENTES</h2>
					<div class="linha"></div>
					<br>

				
			</div>

				<div>

					<div class="row">

					<div class="col-md-6 post-1" >

						<img src="<?php echo  get_bloginfo("template_url") ?>/img/bateria3.jpg" width="150" height="120">

						<span style="font-size: 15px; ">O que é Lorem Ipsum?</span>

						<p> Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser</p>
 					</div>

 					<div class="col-md-1"></div>

		<div class="col-md-5 " >


	<?php include "sidebar.php"; ?>



 					
    </div>



 					
		</div>
</div>
 				

 					<div class="row">

 					<div class="col-md-6 post-1">

						<img src="<?php  echo get_bloginfo("template_url") ?>/img/bateria2.jpg" width="150" height="120">

						<span style="font-size: 15px; ">O que é Lorem Ipsum?</span>

						<p>  simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser</p>
 					</div>
				</div>	

				  <div class="row">

 						<div class="col-md-6 post-1">

						<img src="<?php echo  get_bloginfo("template_url") ?>/img/bateria3.jpg" width="150" height="120">

						<span style="font-size: 15px; ">O que é Lorem Ipsum?</span>

						<p> Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser</p>
 					</div>

 						
	

 					<div class="col-md-1"></div>
				
 						



					

		<br><br>
		</div>
	</div>



		

			
 
<br><br><br><br>
	</div>
</div>

		
		</div>



			</div>
			</div>
		
	</div>


	


  </div>
	
				
		




	
	

<br><br><br><Br><Br><br><br><Br><br><br>
	

  	<?php

  		get_footer(); 
  	?>

	</body>

	</html>