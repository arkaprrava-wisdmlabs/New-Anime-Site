<?php
get_header();
$queried_object = get_queried_object();
$posts = get_posts( array(
    'post_type' => 'sfwd-courses',
    'showposts' => -1,
    'tax_query' => array(
        'taxonomy' => $queried_object->taxonomy,
        'terms' => $queried_object->term_id,
        'field' => 'term_id'
    ),
    'orderby' => 'title',
    'order' => 'ASC'
) );
?>
<h1><?php echo $queried_object->name; ?></h1>
<div class="category-content">
    <?php 
    $out = '';
    foreach($posts as $post){
        $out .= '<a href="'. $post->guid . '"><div class="category-content-card">';
        $out .= '<img src="'.get_the_post_thumbnail_url( $post->ID ).'" alt="'.$post->post_title.' image" width="200px" height="350px" />';
        $out .= '<h2>'.$post->post_title.'</h2>';
        $out .= '<p>'.count(learndash_get_course_lessons_list($post->ID)).' '.learndash_get_custom_label('lessons').'</p></div></a>';
    }
    echo $out;
    ?>
</div>
<?php
get_footer();
?>