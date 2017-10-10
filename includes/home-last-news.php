<div class="row last-news-title">
	<h1 class="col-lg-10" style="border-left: 2px solid #3267AA; background-color:#3267AA; line-height: 40px; color: white;">
		Ultimas Noticias 
		<i class="fa fa-plus" style="color:white; font-size: 20px; position:absolute;bottom: 8px; margin-left: 8px;"></i>
	</h1>
	<a  class="col-lg-2 text-right" href="" style="margin-top: 20px; color:white; line-height: 40px;background-color:#3267AA; ">
	Mais Noticias</a>
	
</div>
<!-- LAST NEWS - ULTIMAS NOTICIAS - Principal -->
<section class="home-last-news row thumbnail">
	<?php for ($i=0; $i < 3; $i++):?>
		<?php if ($i == 0) : ?>
			<div class="col-lg-12" style="padding: 2px">
				<div class="thumbnail col-lg-12" style="border:0; height: 400px; padding: 0; margin-bottom:0;">
					<a class="home-last-news-link" href="" s>
						<figure class="col-lg-12" style="height: 400px; width:100%">

							<span class="home-last-news-tag">
								politica
							</span>

							<img src="https://s.profissionaisti.com.br/wp-content/uploads/2014/02/gerenciamento-aquisicoes-projetos-ti.jpg" class="img-responsive" style="height:400px;  width:100%">

							<h2 class="text-center news-title col-lg-12" style="font-size: 30px !important; padding-top: 10px; padding-bottom: 10px;    letter-spacing: -2px!important; font-weight: bold;text-shadow: 0 1px 3px rgba(0,0,0,0.8);font-family: opensans,opensans-bastian,Arial,sans-serif;
							-webkit-font-smoothing: antialiased;">
							Titulo da Noticia: Ola Mundo, Ola Mundo e Ola Mundo
						</h2>
					</figure>
				</a>

			</div>
		</div>	

	<?php else : ?>
		<!-- Outras Noticias - Secundarias -->

		<div class="col-lg-6" style="padding: 2px">
			<div class="thumbnail col-lg-12" style="border:0; margin:0; padding-left: 0; padding-right:0 ;">
				<a class="home-last-news-link" href="" s>
					<figure class="col-lg-12">

						<span class="home-last-news-tag">
							politica
						</span>

						<img src="https://s.profissionaisti.com.br/wp-content/uploads/2014/02/gerenciamento-aquisicoes-projetos-ti.jpg" class="img-responsive">

						<h2 class="text-center news-title col-lg-12" style="">Titulo da Noticia: Ola Mundo, Ola Mundo e Ola Mundo</h2>
					</figure>
				</a>



			</div>
		</div>	

	<?php endif; ?>

	<!-- End -->


<?php endfor; ?>
</section>