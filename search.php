<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <titleBLOG> t´tulo da index
    </title>
    <link rel="icon" href="imagens/favicon.png">

   <link href="<?php  //echo get_bloginfo("template_url"); ?>.bootstrap-4.3.1-dist/css/bootstrap.css" rel="stylesheet">
      <link href="bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

	<?php  get_header(); 


?>
 

 <?php



 add_image_size("img-lista", 290,180, true);

add_theme_support("post-thumbnails");
 ?>




			<div class="container">

				<?php  if(have_posts()) : while(have_posts()) : the_post(); ?>

					
				

					
			
 				<div class="row">

					<div class="col-md-6 post-1">

						<!--<img src="img/bateria2.jpg" width="200" height="170">-->
	<a href="<?php  the_permalink(); ?>" class="thumb"><?php   the_post_thumbnail("img-lista"); ?></a>

					<span><?php   the_title(); ?></span>

						<p><?php  the_excerpt(); ?></p>
</div>

</div>

 				<?php endwhile; endif; ?>


<div class="container">

	<div class="col-md-6"></div>


 <div class="col-md-5 " style="margin-top:1150px;">


	<div align="center"> <?php include "sidebar.php"; ?></div>

</div>
</div>


<?php get_footer(); ?>

 			