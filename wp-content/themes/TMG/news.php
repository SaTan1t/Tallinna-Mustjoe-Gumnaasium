<?php
/*
Template Name: news
*/
?>

<?php get_header(); ?>
<body style="background-color: #F1F1F1;">
    <main>
    <div class="d120px">
  <div class="container news pupa" style="margin-top: 160px" ;>
    <div class="новостизаглав">
      <h1>Новости</h1>
    </div>


      <Div style="margin-top: 94px">
        <?php
        global $post;
        $myposts = get_posts([
          'numberposts' => -1,
        ]);
        if( $myposts ){
          foreach( $myposts as $post ){
            setup_postdata( $post );
            ?>
            <div class="Новость" >
            <img  class="photonovost"src=<?php the_post_thumbnail(); ?>
              <div style="margin-left:101px">
                <div style="display: flex;">
                  <p class="новостьдата" style="margin-right: 48px;"><?php the_date()?></p>
                  <p class="новостьтема" style="margin-left:130px"><?php the_title()?> </p>
                </div>
                <p class="новоститекст" <?php the_content() ?></p>
              </div>
            </div>
            <?php
          }
        } 
        wp_reset_postdata(); // Сбрасываем $post
        ?>
    </div>    
    <?php get_footer(); ?>
    </main>
    