<?php 
class Post extends Model {

    public static function  get_projects( ) {
        $projects =  get_posts( [
          // 'post_type' => 'project',
          'posts_per_page' => 2
        ] );
        foreach( $projects as &$p ) {
          $p->thumbnail = get_the_post_thumbnail_url( $p->ID );
        }
        return $projects;
      }
    public  function index()
    {
        return [
            'hihi'=>'fff'
        ];
    }
}


?>