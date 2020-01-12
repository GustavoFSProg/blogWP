

 

 <?php

 
wp_head();  


  			wp_enqueue_script("estilo-boo22t",   get_bloginfo("template_url") ."/bootstrap-4.3.1-dist/js/bootstrap.js");

					wp_enqueue_script("estilo-boo22t",   get_bloginfo("template_url") ."/bootstrap/dist/js/bootstrap.js");

  
   	?> <link href="<?php    echo get_bloginfo("template_url") ?>/css/style.css" rel="stylesheet">


    <div class="container">

	
				
			
	
	<nav class="navbar navbar-fixed-top navbar-transparent navbar-inverse menu">

	

		<div align="left" style="margin-right:800px;"><img src="<?php  echo get_bloginfo("template_url"); ?>/img/logo.png" width="25%" height="25%"></div>

			



			<div class="navbar-header">

				<button type="button" class="navbar-toggle navbar-collapsed" data-toggle="collapse" data-target="#barranav">
				<span class="icon-bar"></span> 
				<span class="icon-bar"></span> 
				<span class="icon-bar"></span> 


			</button>

			
			</div>
				
				<div id="barranav" class="collapse navbar-collapse">

				<ul class="nav navbar-nav navbar-right lista" style="display:inline; margin-top: -25px;  margin-right: 70px;">

					<li><a href="index.php" style="color:#006680; padding-right: 17px;">HOME</a></li> 
					<li><a href="#" style="color:#006680; padding-right: 17px;">POSTS</a></li> 
					<li><a href="#" style="color:#006680; padding-right: 17px;">CURSOS</a></li> 
		
							</ul>

			</div>


	

  </div>

	</nav>


</div>
  

	</body>

	</html>