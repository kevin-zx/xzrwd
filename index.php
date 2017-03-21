<?php get_header(); ?>

<?php
	get_template_part( 'template-parts/test', 'page');
	if (have_posts()) {
		while (have_posts()) {
			the_post();
			?>
			<a href=<?php the_permalink(); ?>><?php the_title(); ?></a>
			<!-- <?php the_content(); ?> -->
			<?php
			
		}
	}else{
		echo "have nothing post";
	}
	get_sidebar();
	var_dump(get_categories());
?>
	<body>
		



<?php get_footer(); ?>
