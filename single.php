<?php get_header(); get_sidebar(); ?>	   
     
<div id="content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<hr>
			<div class="post">
				<h1 style="text-decoration: underline;"><?php the_title(); ?></h2>
        <?php the_content(); ?>
			</div>
			<hr>
			<?php
		if(comments_open( get_the_ID() )){
			comments_template('', true);
		}
	?>
		<?php endwhile; wp_corenavi(); else : ?>
		<h2>Не найдено</h2>
		<p>К сожалению, но вы запросили то, чего здесь нет.</p>		
	<?php endif; ?>
</div> 

<?php get_footer(); ?>