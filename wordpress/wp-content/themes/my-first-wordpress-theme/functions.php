<?php

function create_post_type() {

  register_post_type('news',
  array(
    'public' => true,
    'labels' => array(
      'name' => 'News',
      'singular_name' => 'News'
    )
  )
);

}

add_action('init', 'create_post_type'); ?>
