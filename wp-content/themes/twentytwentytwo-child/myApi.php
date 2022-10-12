<?php

    class MyAPI {

        function __construct() {
            add_action( 'rest_api_init', [$this, 'init'] );
        }
    
        function init() {
            register_rest_route( 'wp', '/projects', [
            'methods' => 'GET',
            'callback' => [$this, 'get_products'],
            ] );
    
            register_rest_route( 'wp', '/project/(?P<id>\d+)', [
            'methods' => 'GET',
            'callback' => [$this, 'get_project'],
            ] );
    
            register_rest_route( 'wp', '/projects_search', [
            'methods' => 'POST',
            'callback' => [$this, 'post_projects_search']
            ] );
      }
    
      function get_projects( $params ) {
        $projects =  get_posts( [
          'posts_per_page' => 10
        ] );
    
        foreach( $projects as &$p ) {
          $p->thumbnail = get_the_post_thumbnail_url( $p->ID );
        }
    
        return $projects;
      }
    
      function get_project( $params ) {
        $project = get_post( $params['id'] );
        $project->thumbnail = get_the_post_thumbnail_url( $project->ID );
        return $project;
      }
    
      function post_projects_search( $request ) {
        $params = wp_parse_args( $request->get_params(), [
          'title' => '',
          'category' => null
        ] );
    
        $args = [
          'post_type' => 'project',
          's' => $params['title'],
        ];
    
        if( $params['category'] ) {
          $args['tax_query'] = [[
            'taxonomy' => 'project_category',
            'field' => 'id',
            'terms' => $params['category']
          ]];
        }
        return get_posts( $args );
      }

      function get_products(){
        global $wpdb;
        $query = "SELECT * FROM wp_t_products";
        return $wpdb->get_results($query);
        }
    }
new MyAPI();
?>