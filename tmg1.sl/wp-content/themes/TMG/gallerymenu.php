<?php
/*
Template Name: gallerymenu
*/
?>

<?php get_header(); ?>
<main>

    <div class="container pupa" style="padding:0;">
      <div class="d120px">
        <div class="container calender" style="margin-top: 120px"; >
            <div class="Календарьзаглав">
              <h1>Галерея</h1>
            </div>
          <div class="Календарьраздел1">
            <?php the_field('gallery_menu')?>
            

            
         </div>
          <?php get_footer(); ?>
      </div>    
    </div>
    