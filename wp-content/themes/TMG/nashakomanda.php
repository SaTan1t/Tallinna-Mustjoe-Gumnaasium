<?php
/*
Template Name: nashakomnda
*/
?>

<?php get_header(); ?>

<main>
  <div class="container pupa" style="padding:0;">
    <div class="d120px">
        <div style="margin-top:  120px;">
        <h1>Наша команда</h1>
        <div class="кнопки1">
          <a href="<?php echo get_page_link(58)?>">Учителя</a>
          <a href="<?php echo get_page_link(247)?>">Администрация</a>
          <a href="<?php echo get_page_link(249)?>">Специалисты</a>
          <a href="<?php echo get_page_link(252)?>">Команда KiVa</a>
        </div>
    </div>
    <div class="Учителя" style="position:relative;margin-left:-40px">
      <?php the_field('nashakomanda');?>
    </div>
    <?php get_footer(); ?>
  </div>
</main>
