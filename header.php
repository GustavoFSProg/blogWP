

 

 <?php

 
wp_head();  


  			wp_enqueue_script("estilo-boo22t",   get_bloginfo("template_url") ."/bootstrap-4.3.1-dist/js/bootstrap.js");

					wp_enqueue_script("estilo-boo22t",   get_bloginfo("template_url") ."/bootstrap/dist/js/bootstrap.js");

  
   	?> <link href="<?php    echo get_bloginfo("template_url") ?>/css/style.css" rel="stylesheet">


    

	
	<nav class="navbar navbar-fixed-top navbar-transparent navbar-inverse menu">

	

		<div class="container">


			<div class="navbar-header">

				<button type="button" class="navbar-toggle navbar-collapsed" data-toggle="collapse" data-target="#barranav">
				<span class="icon-bar"></span> 
				<span class="icon-bar"></span> 
				<span class="icon-bar"></span> 


			</button>

			
			</div>
				
				<div id="barranav" class="collapse navbar-collapse">

				<ul class="nav navbar-nav navbar-right lista" style="display:inline;  ">

					<li><a href="index.php" style="color:#006680;">HOME</a></li> 
					<li><a href="#" style="color:#006680;">POSTS</a></li> 
					<li><a href="#" style="color:#006680;">CURSOS</a></li> 
		
							</ul>

			</div>


		


  </div>

	</nav>



  

	</body>

	</html>