<?php get_header() ?>
<main class="conteudo col-lg-12 col-md-12 col-sm-12 col-xl-12 col-xs-12">
	<section class="home-post-panel col-lg-12 " style="background-color: #F5F5F5;">

		<div class="home-post-content col-lg-8">

			<section class="row home-welcome col-lg-12 ">
				<?php $welcome_query = new WP_Query(array("pagename" => 'bem-vindo'));
				$welcome_post = $welcome_query->get_posts();
			
				 ?>
				<h1 style="color: white; font-size: 15px;">
					Bem vindo á nova
					<br/>
					<span>Intranet</span> da <span>Câmara Municipal de São José</span> 
				</h1>

				<p class="col-lg-12">
					<?= $welcome_post[0]->post_excerpt ?>
				<!-- Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.--></p>
				<a href="bem-vindo" class="btn btn-success welcome-btn-more-info">Mais Informações <i class="fa fa-angle-right" style="font-size: 15px; padding-left: 10px;"></i></a>

			</section>
			
			<div class="row col-lg-12" style="">

				<section> <!-- Include Ultimas Noticias -->
					<?php include 'includes/home-last-news.php' ?>
				</section>
				
				<h1 class="text-center row" style="background-color: #2761AA; color: white; line-height: 40px; font-size: 21px; border-bottom: 5px solid #1D508F">Informativos</h1>
				<section> <!-- Include Informativo Administração -->
					<?php include 'includes/home-info-adm.php'; ?>
				</section>

				<section> <!-- Include Informativo TI -->
					<?php include 'includes/home-info-ti.php'; ?>
				</section>

				
				<section> <!-- Include Informativo RH -->
					<?php include 'includes/home-info-rh.php'; ?>
				</section>

	

			</div>

		</div>

		<section class="home-post-sidebar col-lg-4 col-md-12 col-xl-12 col-xs-12" style="float:right;padding:0;padding-right: 80px; min-height: 800px;">

			<section class="sidebar-suporte">
				<div class="suporte-row col-lg-12">
					<h2 class="text-justify">Precisando de Ajuda ?</h2>
					<p class="text-justify">Acesse o novo sistema de <span style="font-weight: bold">suporte da Câmara municipal de São José </span>, muito mais simples e eficiente.</p>
					<a href="" class="btn btn-success sidebar-suporte-btn" style=""> SUPORTE <i class="fa fa-search" style="padding-left: 10px;"></i></a>

				</div>
			</section>

			<?php get_sidebar(array('name' => 'home_sidebar')); ?>
			<!-- 

			<section>
				<h4 class="text-center birthday"><i class="fa fa-birthday-cake"> </i> Aniversariantes do Dia</h4>
			</section>
	
			<section>
				<h4 class="text-center calendar"><i class="fa fa-birthday-cake"> </i> 
					Calendario
				</h4>
				 <?php //the_widget( 'hmt_cpt_calender', 'dropdown=1' ); ?>
			-->
			</section>

		</section>

	</section>

</main> 

<?php get_footer(); ?>