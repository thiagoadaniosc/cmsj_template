<?php include 'header.php'; ?>
<main class="conteudo col-lg-12">
	<section class="home-post-panel col-lg-12">

		<div class="home-post-content col-lg-8">

			<section class="row home-welcome col-lg-12">
				<h1 style="color: white; font-size: 15px;">
					Bem vindo á nova
					<br>
					<span>Intranet</span> da <span>Câmara Municipal de São José</span> 
				</h1>

				<p class="col-lg-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<a class="btn btn-success welcome-btn-more-info">Mais Informações</a>

			</section>

			<div class="row col-lg-12" style="">
				<div class="row last-news-title">
					<h1 class="col-lg-10" style="border-left: 2px solid #3267AA;">Ultimas Noticias 
					<i class="fa fa-plus" style="color:#3267AA; font-size: 20px; position:absolute;bottom: -2px; margin-left: 5px;"></i>
					</h1>
					<a  class="col-lg-2 text-right" href="" style="margin-top: 20px; color:#3267AA;">
					Mais Noticias</a>
					
				</div>
				
				<section class="home-last-news row thumbnail">
					<?php for ($i=0; $i < 4; $i++):?>
						<div class="col-lg-6" style="">
							<div class="thumbnail col-lg-12" style="border:0">
								<img src="https://s.profissionaisti.com.br/wp-content/uploads/2014/02/gerenciamento-aquisicoes-projetos-ti.jpg" class="col-lg-4">
								<a class="last-news-link" href="">
									<p class="col-lg-8">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore.</p>
								</a>
							</div>
						</div>	

					<?php endfor; ?>
				</section>
				
				<div class="row last-info-ti-title">
					<h1 class="col-lg-10" style="">Informatica
						<i class="fa fa-code" style="color:#8247B1; position:absolute;bottom: 0px; margin-left: 5px;"></i>
					</h1>
					<a  class="col-lg-2 text-right" href="" style="margin-top: 20px">Mais Noticias</a>
					
				</div>

				<section class="home-last-info-ti row thumbnail">
					<?php for ($i=0; $i < 4; $i++):?>
						<div class="col-lg-6" style="">
							<div class="thumbnail col-lg-12" style="border:0">
								<img src="https://www.penso.com.br/wp-content/uploads/2017/03/5-ferramentas-de-seguran%C3%A7a-que-todo-suporte-em-TI-precisa-dominar.jpg" class="col-lg-4">
								<a class="last-news-link" href="">
									<p class="col-lg-8">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore.</p>
								</a>
							</div>
						</div>	

					<?php endfor; ?>
				</section>

				<div class="row last-info-rh-title">
					<h1 class="col-lg-10" style="">Recursos Humanos
						<i class="fa fa-users" style="color:#3267AA; color: #DF5656"></i>
					</h1>
					<a  class="col-lg-2 text-right" href="" style="margin-top: 20px">Mais Noticias</a>
					
				</div>

				<section class="home-last-info-rh row thumbnail">
					<?php for ($i=0; $i < 4; $i++):?>
						<div class="col-lg-6" style="">
							<div class="thumbnail col-lg-12" style="border:0">
								<img src="imgs/sao-jose-icon.png" class="col-lg-4">
								<a class="last-news-link" href="">
									<p class="col-lg-8">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore.</p>
								</a>
							</div>
						</div>	

					<?php endfor; ?>
				</section>


			</div>

		</div>

		<section class="home-post-sidebar col-lg-4" style="float:right; background-color: white; padding:0;padding-right: 30px; min-height: 800px;">
			<section class="sidebar-suporte">
				<div class="suporte-row col-lg-12">
					<h2 class="text-left">Precisando de Ajuda ?</h2>
						<p>Acesse o novo sistema de suporte da Câmara municipal de São José, muito mais simples e eficiente.</p>
					<a href="" class="btn btn-success" style="float: right; background-color: #414141;border:0; padding:15px; padding-left: 30px; padding-right: 30px;">Acessar</a>

				</div>
			</section>
			<section>
			<h4 class="text-center birthday"><i class="fa fa-birthday-cake"> </i> Aniversariantes</h4>
			</section>
		</section>

	</section>

</main> 

<?php include 'footer.php'; ?>