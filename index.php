<?php get_header(); get_sidebar(); ?>	   
     
<div id="content"><br>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<hr>
	<br>
			<div class="post">
				<h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
        <?php the_excerpt(); ?>
			</div>
		<br>
		<?php endwhile; ?><hr><br> <?php wp_corenavi(); else : ?>
		<h2>Не найдено</h2>
		<p>К сожалению, но вы запросили то, чего здесь нет.</p>		
	<?php endif; ?>
	<br>
	<div id="mobile_sidebar"></div>
</div> 


<?php get_footer(); ?>
   