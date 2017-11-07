<?php
the_post();
get_header();
$post_thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'interior-contenido');
$elpost = $post->ID;
?>
<main class="conten_content min5000">
	<div class="barraazul"></div>
	<div class="div960 w-clearfix">
		<div class="tituleimgblog w-clearfix">
			<a class="botregres w-button" href="<?php bloginfo('home'); ?>/contenidoinformativo">Button Text</a>
			<h1 class="tituldelblogint"><?php the_title(); ?></h1>
			<img class="imgdebloginter" src="<?php echo $post_thumbnail[0]; ?>" alt="<?php the_title(); ?>">
			<div class="fechdeinterb"><?php echo get_the_time('F j, Y'); ?></div>
			<div class="textyrecomen w-clearfix">
				<div class="textdelblog"><?php the_content(); ?></div>
				<div class="recomends w-clearfix">
					<div class="textderecient">Recientes</div>
					<?php
					$co = 0;
					$query = new WP_Query( array( 'post_type' => 'contenidoinformativo', 'posts_per_page'=> 4, 'orderby' => 'date', 'post__not_in' => array( $elpost ),'order' => 'ASC' ) );
					while ($query->have_posts()):$query->the_post();
					$post_thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'mini-recientes');
					?>
					<a href="<?php the_permalink(); ?>" class="unrecomendado w-clearfix" data-ix="up">
						<img class="inmdereco" src="<?php echo $post_thumbnail[0]; ?>" alt="<?php the_title(); ?>">
						<div class="titulyfech w-clearfix">
							<div class="textderecomnes"><?php the_title(); ?></div>
							<div class="fechderecoms"><?php echo get_the_time('F j, Y'); ?></div>
						</div>
					</a>
					<?php
					$co++;
					endwhile;
					wp_reset_postdata(); 
					?>
				</div>
			</div>
		</div>
	</div>
</main>
<?php
get_footer();
?>