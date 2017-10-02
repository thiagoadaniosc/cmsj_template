<?php include 'header.php'; ?>
<main class="conteudo col-lg-12">
	<section class="home-post-panel col-lg-12">

		<section class="home-post-sidebar col-lg-3" style="float:right; background-color: white; padding:0">
			<h4 class="text-center" style="background-color: #3841BA; color: white; margin-top:0; line-height: 50px"><i class="fa fa-birthday-cake"> </i> Aniversariantes</h4>
		</section>

		<div class="home-post-content col-lg-9">
			<div class="row" style="background-color: white">
				
				<h1>Ultimas Noticias</h1>
				<?php for ($i=0; $i < 10; $i++):?>
					<div class="col-lg-6" style="">
						<div class="thumbnail col-lg-12">
							<img src="imgs/sao-jose-icon.png" class="col-lg-4">
							<p class="col-lg-8">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore.</p>
						</div>
					</div>	

				<?php endfor; ?>
			</div>
		</div>

	</section>

</main> 

<?php include 'footer.php'; ?>