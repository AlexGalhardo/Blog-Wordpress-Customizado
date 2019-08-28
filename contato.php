<?php
// Template Name: Contato
?>

<?php get_header(); ?>

	<main role="main container col-lg-8">
      	<br><br>
      	<div class="album py-5">
        	<div class="container col-lg-8">
          		<div class="row">
          			<div class="container col-lg-2"></div>
            			<div class="col-lg-8">
							<form name="contact" method="POST" action="/wordpress/enviar" class="formphp">
						        <p class="hidden">
						        <label>Don’t fill this out if you're human: <input name="bot-field" /></label>
						        </p>
				                <div class="form-group">
				                	<label for="exampleFormControlInput1">Email</label>
				                	<input type="email" name="email" id="email" class="form-control" id="email" placeholder="Digite o seu email">
				              	</div>
					            <div class="form-group">
					                <label for="exampleFormControlTextarea1">Mensagem</label>
					                <textarea class="form-control" id="menssgem" name="mensagem" rows="6" placeholder="Digite sua mensagem"></textarea>
					            </div>
						        <button type="submit" id="enviar" name="enviar" class="btn btn-outline-primary">Enviar</button>
						    </form>
						</div>
					<div class="container col-lg-2"></div>
				</div>
			</div>
		</div>
	</main>


<?php get_footer(); ?>