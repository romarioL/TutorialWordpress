<?php get_header(); ?>
<div class="content">
  <div class="wrap">
    <?php if(have_posts()) {
      while(have_posts()) {
        the_post();

     ?>
     <?php the_post_thumbnail(); ?>
     <?php the_content();?>
   <?php  }} ?>
  </div>
</div>

<?php get_footer(); ?>
