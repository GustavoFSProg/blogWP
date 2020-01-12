


 <?php    
 		
 		

 	 function mj_enqueue_script(){


 	  				wp_enqueue_style("estilo-geral",   get_bloginfo("template_url") . "/css/style.css");

 	  				wp_enqueue_style("estilo-boot",   get_bloginfo("template_url") ." /bootstrap-4.3.1-dist/css/bootstrap.css");
 	  				wp_enqueue_style("estilo-boo22t",  get_bloginfo("template_url") ."/bootstrap/dist/css/bootstrap.css");

 	  			
 	  				wp_enqueue_script("estilo-b",   get_bloginfo("template_url") ."/jquery.js");

						wp_enqueue_script("estilo-boo22t",   get_bloginfo("template_url") ."/bootstrap.js");

					wp_enqueue_script("estilo-boo22t",   get_bloginfo("template_url") ."/bootstrap-min.js");	

 	  	}	

 	


    add_action("wp_enqueue_scripts","mj_enqueue_script");


      add_image_size("img-1", 300, 400, true);

      add_image_size("img-search", 100, 200, true);


 	add_theme_support("post-thumbnails");
 


 ?>