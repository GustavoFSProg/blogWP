<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <titleBLOG> </title>
    <link rel="icon" href="imagens/favicon.png">

   <!-- <link href="<?php  //echo get_bloginfo("template_url"); ?>.bootstrap-4.3.1-dist/css/bootstrap.css" rel="stylesheet">
      <link href="bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">-->
</head>

<body>

	<?php  get_header(); 


 add_image_size("img-single", 290,180, true);

?>


  <div class="container">



      <?php 

        while(have_posts()) : the_post()  

          
        ?>

          
      
        <div class="row">

          <div class="col-md-6 post-1">

            <!--<img src="img/bateria2.jpg" width="200" height="170">-->
  <a href="<?php  the_permalink(); ?>" class="thumb"><?php   the_post_thumbnail("img-single"); ?></a>

          <span><?php   the_title(); ?></span>

            <p><?php  the_excerpt(); ?></p>
</div>

</div>




<div class="limpar"></div>
        <div class="base-comentario">
          <h1 class="titulo"><span>COMENTÁRIO</span></h1>
          <h2>Envie-nos um comentário sobre o que achou do nosso site</h2>
            
             <?php  comments_template(); ?>
                    
        </div>
        
      </div>
      </div>

        <?php endwhile ?>




 


 <?php

      get_footer(); 
    ?>

  </body>

  </html>