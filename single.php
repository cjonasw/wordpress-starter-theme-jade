<?php

  $jade = include('jade-compiler.php');
  $data = include('page-data.php');

  if ( have_posts() ) : while ( have_posts() ) : the_post();

    $data['permalink'] = get_permalink();
    $data['title'] = get_the_title();
    $data['content'] = get_the_content();

  endwhile; endif;

  echo $jade->render(get_template_directory() . '/views/page.jade', $data);

?>
