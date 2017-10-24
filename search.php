<?php get_header(); ?>
<main class="conteudo col-lg-12">
	<section class="post-panel col-lg-12">
		<div class="post-title col-lg-12">
		
			<h1>Pesquisa</h1>
			<h3><?php the_excerpt(); ?></h3>
		</div>

		<div class="post-content col-lg-12">
			<?php get_search_form(); ?>
		<?php if(have_posts()): ?>
			<?php while(have_posts()): ?>
				<?php the_post(); ?>
				<?php the_title(); ?>
			<?php endwhile; ?>
		<?php endif; ?>

		</div>

	</section>

</main> 

<?php get_footer(); ?>