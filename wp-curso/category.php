<?php get_header(); ?>
  <div class="content">
    <div class="wrap">
      <div class="blog">


          <div class="box-list-posts">
            <?php
            $cont = 1; if(have_posts()) {

              while(have_posts()) {the_post()

                // code...
             ?>


            <div class="list-posts <?php if($cont % 2 == 0) {echo "segundo-post";} ?>">
              <?php  the_post_thumbnail();?>
              <div class="box-content-posts">
                <h2><?php the_title();  ?></h2>
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink() ?>" class="custom-botao ">Leia mais.</a>
            </div>
            </div>
          <?php $cont++; }  } ?>
          </div>
        </div>
        <div class="clear"></div>
      </div>
      <div class="widgets">
        <div class="wrap">
          <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Sidebar footer") ) : ?>
          <?php endif;?>
          <div class="clear">
        </div>
      </div>
    </div>
    </div>

<?php get_footer(); ?>
