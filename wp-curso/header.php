<!DOCTYPE html>
<html>
<head>
<title><?php wp_title();?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/css/jquery.bxslider.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/assets/js/jquery.bxslider.js"></script>

<?php wp_head(); ?>
</head>
<body>
  <?php if(is_home()) {?>

  <div class="header">
    <div class="wrap">
      <h1><a href="<?php echo site_url();?>" title="<?php bloginfo('name') ?>">Romis Sousa</a><h1>
      <div class="infor">
        <?php
        $args = array('post_type' => 'page', 'pagename' => 'sobre');
        $my_page = get_posts($args)
         ?>
         <?php
         if($my_page) {
           foreach ($my_page as $post) {
             setup_postdata($post);
        ?>
          <h2><?php the_title(); ?></h2>
           <?php the_excerpt(); ?>
           <a href="<?php the_permalink(); ?>" class="custom-botao">Leia mais</a>


          <?php }
          }else {
        ?>

             <p>Nenhum conteúdo inserido</p>
        <?php } ?>

      </div>
    </div>
  </div>

<?php }else {

 ?>
 <div class="header-page">
   <div class="wrap">
     <h1><a href="<?php echo site_url();?>" title="<?php bloginfo('name') ?>">Romis Sousa</a><h1>
  </div>
  <div class="bg-page">
    <div class="wrap">
      <?php  if(is_category()) {
      ?>
      <h2>Blog</h2>
      <?php }else { ?>
      <h2><?php the_title(); ?></h2>
      <?php } ?>
   </div>
  </div>
 </div>
<?php }?>
