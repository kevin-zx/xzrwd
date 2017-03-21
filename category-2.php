<?php 
$args = array ( 'category' => ID, 'posts_per_page' => 5);
$myposts = get_posts( $args );
foreach( $myposts as $post ) :	setup_postdata($post);
 ?>
//Style Posts here
<?php endforeach; ?>