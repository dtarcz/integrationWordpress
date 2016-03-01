<?php get_header(); ?>

<div id="main">
  <div id="content">
    <h1>Contenu Principal</h1>

<?php $args = array('post_type' => 'post', 'category_name' => 'cat1',);
// 2. on exécute la query
$my_query = new WP_Query($args);
#LA BOUCLE
	// 3. on lance la boucle WHILE!
if($my_query->have_posts()) : while($my_query->have_posts()) : $my_query->the_post();?>
  <h1> <?php the_title(); ?> </h1>
  <h4> Posted on <?php the_time('F jS, Y') ?> </h4>
  <p> <?php the_content(__('(plus...)')); ?> </p>
  <hr>

<?php endwhile; else:?>

  <p><?php _e('Desolé il n\'y a pas d\'article qui match.'); ?></p>
<?php endif; ?>
  </div>

<?php get_sidebar(); ?>
</div>

<div id="delimiter">
</div>

<?php get_footer(); ?>
