	<!-- sidebar --> 

 	  				<link href="<?php  get_bloginfo("template_url");?>/css/style.css">

 	  				<link href="<?php    get_bloginfo("template_url")?>/bootstrap-4.3.1-dist/css/bootstrap.css">
 	  				<link href="<?php   get_bloginfo("template_url") ?>/bootstrap/dist/css/bootstrap.css">



 
		<div class="lado-dir sidebar" style="margin-top:-1520px;margin-left:100px;">
">			
			<div class="base-sidebar">
				<div class="pesquisa caixa-branco-add">
					
				<div class="especial" align="left">

					<?php get_search_form(); 

					?>

					</div>

					<?php

					add_image_size("img-vistos", 250,140, true);
				?>

				</div>

				

							
				<div class="vistos caixa-branco-add">
					<h1 class="titulo"><span>  Mais Vistos</span></h1>
				<?php 	


				 $posts = new WP_Query(array(


				 		'showposts' => 3

				 ));
 					
				while($posts->have_posts()) : $posts->the_post()  




					
				?>
					<figure>
						<a href="index.php?link=3" class="thumb"><a href=" <?php the_permalink()  ?>"> <?php  the_post_thumbnail("img-vistos") ?></a>
						<br><br><figcaption><a href="index.php?link=3" style="font-weight: bold; font-size: 16px;"><?php   the_title();  ?></a>

							<br><br><br>
						</figcaption>
					</figure><br><br>

											
				</div>

			<?php  endwhile  ?>
				
				
		
			</div>
		</div>

 					</div>