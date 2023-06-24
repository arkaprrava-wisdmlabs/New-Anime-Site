<?php
    get_header();
    the_post();
    $post = get_post();
?>
<h1><?php the_title(); ?></h1>
<?php 
    if(learndash_is_course_post($post)){
        $lessons = learndash_get_course_lessons_list($post);
        $lessons_show = array();
        foreach($lessons as $lesson){
            $vid = $lesson['post'];
            $arr = array(
                'ID' => $vid->ID,
                'title' => $vid->post_title,
                'content' => $vid->post_content
            );
            array_push($lessons_show, $arr);
        }
    }
    if(!empty($lessons_show)){
        ?>
        <div class="content">
            <div class="sidebar">
            <?php
            $count = 0;
            foreach($lessons_show as $show){
                $count+=1
                ?>
                <p class="play"><?php echo $count; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $show['title']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="#" class="fa fa-play-circle" style="font-size:24px;float:right;" id="<?php echo $show['ID']; ?>"></a></p>
                <?php
            }
            ?>
            </div>
            <div class="video">
                <?php echo $lessons_show[0]['content']; ?>
            </div>
            <div class="image">
                <img src="<?php echo get_the_post_thumbnail_url( get_the_ID() ); ?>" alt="<?php $post->post_title; ?> image" width="200px" />
                <?php the_title('<h2>','</h2>'); ?>
            </div>
        </div>
        <?php
    }
    else{
        ?>
        <p><?php _e('No Episodes Posted Yet...', 'wdm_cm'); ?></p>
        <?php
    }
?>
<?php
    get_footer();
?>