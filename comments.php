<div id="comments-wrap">


     <ol class="commentlist">


	<?php wp_list_comments(); ?>

			 <?php  

		?><p> Seja o Primeiro a Começar </p>

</ol>

</div>

						<?php 


						 $commenter = wp_get_current_commenter();
						 $req= get_option('require_name_email');
						 $aria_req=($req ? "aria-requires='true'"  : '');


						comment_form(array(


							'fields'=> array(


								'author' =>"<label>
								<span>Nome:</span>
								<input type='text' name='author' placeholder='Deixe seu nome'>
							</label>",


								'email' => "<label>
								<span>Email:</span>
								<input type='text' name='email' placeholder='Deixe seu email'>
							</label>"
							)


							)); ?>

							<br><br>