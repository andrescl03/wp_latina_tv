<?php get_header()?>


<div class="p-3 container text-white">
        <?php if (have_posts()) {?>
                <?php while (have_posts()) {the_post();?>
                    <?php the_content();?>
                <?php }?>
        <?php }?>
 <?php

$args = array(
    "post_type" => array("entrada"),
    "posts_per_page" => -1,
);

$entradas = new WP_Query($args);
?>
   <div class="latina__container">
    <?php if ($entradas->have_posts()) {?>
        <?php while ($entradas->have_posts()) {$entradas->the_post();?>

        <div class="latina__card">
            <?php the_post_thumbnail("post-thumbnail")?>
            <div class="latina__caption">
                <div >
                    <a href="<?php the_permalink();?>">
                        <strong class="fs-6 text-white"><?php the_title();?></strong>
                    </a>
                </div>
            </div>
        </div>
        <?php }?>
    <?php }?>
</div>

<?php get_footer()?>