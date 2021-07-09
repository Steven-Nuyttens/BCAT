<?php
    function bcat_post_types() {
        register_post_type('event', array(
          'public' => true,
          'labels' => array(
            'name' => 'Events',
            'add_new_item' => 'Add New Event',
            'edit_item' => 'Eddit Event',
            'all_items' => 'All Events',
            'singular_name' => 'Event'
          ),
          'menu_icon' => 'dashicons-calendar'
      ));
      }
      
      
      add_action('init', 'bcat_post_types');
?>