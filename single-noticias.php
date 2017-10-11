<?php include 'header.php'; ?>
<main class="conteudo col-lg-12" style="padding-top: 20px !important; padding-left: 20px !important; padding-right: 20px !important">
	<section class="single-noticias home-last-news col-lg-12">
		<div class="row">
			<h1 class="col-lg-2">Noticias</h1> 
		</div>

		<?php for ($i=0; $i < 9;$i++) : ?>
			<div class="col-lg-4" style="padding: 2px">
				<div class="thumbnail col-lg-12" style="border:0; margin:0; padding-left: 0; padding-right:0 ;">
					<a class="home-last-news-link" href="page.php">
						<figure class="col-lg-12">

							<span class="home-last-news-tag">
								politica
							</span>

							<span class="single-noticias-date">
								<i class="fa fa-calendar"></i>
								10/10/2017 
							</span>

							<img src="https://s.profissionaisti.com.br/wp-content/uploads/2014/02/gerenciamento-aquisicoes-projetos-ti.jpg" class="img-responsive">

							<h2 class="text-center news-title col-lg-12" style="">Titulo da Noticia: Ola Mundo, Ola Mundo e Ola Mundo</h2>
						</figure>
					</a>
				</div>
			</div>	
		<?php endfor;  ?>

	</section>

</main> 

<?php include 'footer.php'; ?>