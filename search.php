<?php
get_header();
global $query_string;
wp_parse_str( $query_string, $search_query );
$search = new WP_Query( $search_query );
?>
<h1><?php _e('Search Results', 'wdm_cm'); ?>:</h1>
<pre>
<div class="category-content">
<?php
// $post = get_post( $total_results );
$posts = $search->posts;
if(!empty($posts)){
    $flag = true;
    foreach($posts as $post){
        if(learndash_is_course_post($post)){
            $out = '<a href="'. $post->guid . '"><div class="category-content-card">';
            $out .= '<img src="'.get_the_post_thumbnail_url( $post->ID ).'" alt="'.$post->post_title.' image" width="200px" />';
            $out .= '<h2>'.$post->post_title.'</h2>';
            $out .= '<p>'.count(learndash_get_course_lessons_list($post->ID)).' '.learndash_get_custom_label('lessons').'</p></div></a>';
            echo $out;
            $flag = false;
        }
    }
    if($flag){
        ?>
        <p><?php _e('No Results Found', 'wdm_cm'); ?></p>
        <?php
    }
}
else{
    ?>
    <p><?php _e('No Results Found', 'wdm_cm'); ?></p>
    <?php
}
?>
</div>
</pre>
<?php
get_footer();
?>