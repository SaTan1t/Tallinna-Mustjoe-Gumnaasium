<?php
/*
Template Name: home
*/
?>

<?php get_header(); ?>

<main>

  <div class="container pupa" style="padding:0;margin-left: 0px;">
    <div class="block1 ">
      <div class="block2btndwn">
        <div class="btn-group dropup-center ">
          
            <a href="#" class="linkblack knopkastyle1" style="padding:8px 16px;margin">Питание</a>
          
            <a href="#" class="linkblack knopkastyle1" style="padding:8px 16px;">Галерея</a>
          


          
          <div class="dropup-center " >
            <a class="btn  no-border Zindex dropdown2 knopkastyle1" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">События</a>
            <ul class="dropdown-menu no-border shadow-none knopkintop">
              <li><a class="dropdown-item  no-border" href="">Сегодня</a></li>
              <li><a class="dropdown-item  no-border" href="">Планируется</a></li>
              <li><a class="dropdown-item  no-border" href="">Состоялось</a></li>
              
          </div>



        </div>
        <div class="btn-group dropup">
        </div>
      </div>
      <div class="mainblock">
        <img src="http://tmg1.sl/wp-content/uploads/2024/04/Homepage.png" alt="" class="Picmain">
        <div class="textblock1">
          <H1>Tallinna Mustjõe Gümnaasium</H1>
          <p>Tallinna Mustjõe Gümnaasium – безопасное и современное учебное заведение, всемерно учитывающее
            особенности и
            потребности личности, ценящее развитие, традиции, сотрудничество и новаторство ученика, учителя и
            организации,
            ориентированное на учащегося, инновационная школа, несущая общие ценности и предлагающая разностороннее
            образование.</p>
          <button><a href="<?php echo get_page_link(72) ?>" class="linkblack">Подробнее о школе</a></button>
        </div>
      </div>

      <div class="block1btndwn">
        <div class="dropdown-center" style=" margin-left: 90px;">
          <a class="btn  no-border Zindex dropdown2 knopkastyle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Родитель</a>
          <ul class="dropdown-menu no-border shadow-none knopkiniz">
            <li><a class="dropdown-item  no-border" href="">Контакт</a></li>
            <li><a class="dropdown-item  no-border" href="">Заявления</a></li>
            <li><a class="dropdown-item  no-border" href="">Горячая линия</a></li>
          </ul>
        </div>
        <div class="dropdown2">
          <div class="dropdown-center">
            <a class="btn  no-border Zindex dropdown2 knopkastyle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Учитель</a>
            <ul class="dropdown-menu no-border shadow-none knopkiniz">
              <li><a class="dropdown-item  no-border" href="">Учительская</a></li>
            </ul>
          </div>
        </div>
        <div class="dropdown2">
          <div class="dropdown-center ">
            <a class="btn  no-border Zindex dropdown2 knopkastyle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Ученик</a>
            <ul class="dropdown-menu no-border shadow-none knopkiniz">
              <li><a class="dropdown-item  no-border" href="">Ученический билет</a></li>
              <li><a class="dropdown-item  no-border" href="">Экзамен</a></li>
              <li><a class="dropdown-item  no-border" href="">Уровневые работы</a></li>
              <li><a class="dropdown-item  no-border" href="">Loovtöö</a></li>
              <li><a class="dropdown-item  no-border" href="">Ürimistöö</a></li>
          </div>
        </div>
        <div class="dropdown2">
          <div class="dropdown-center ">
            <a class="btn  no-border Zindex dropdown2 knopkastyle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Расписание</a>
            <ul class="dropdown-menu no-border shadow-none knopkiniz scrollable-menu" style="padding: 20px;">
              <li><a class="dropdown-item  no-border" href="https://mustjoe.edupage.org/timetable/view.php?fullscreen=1">Уроки</a></li>
              <li><a class="dropdown-item  no-border" href="">Замены</a></li>
              <li><a class="dropdown-item  no-border" href="">Звонки</a></li>
              <li><a class="dropdown-item  no-border" href="">Кабинеты</a></li>
              <li><a class="dropdown-item  no-border" href="https://www.mjg.ee/failid/oppetoo/KONSULTATSIOONID%202023-2024%20%C3%B5a.pdf">Консультации</a></li>
              <li><a class="dropdown-item  no-border" href="">Кружки</a></li>
              <li><a class="dropdown-item  no-border" href="https://www.riigiteataja.ee/akt/129042022018?leiaKehtiv">Каникулы</a></li>
              <li><a class="dropdown-item  no-border" href="<?php echo get_page_link(70)?>">Триместры</a></li>
          </div>


        </div>
      </div>
    </div>
  </div>
</main>
</script>
<div class="d120px">
  <div class="container news pupa" style="margin-top: 160px" ;>
    <div class="новостизаглав">
      <h1>Новости</h1>
      <a href="<?php echo get_page_link(60)?>" style="margin-top: 38px;">Больше новостей</a>
    </div>


      <Div style="margin-top: 94px">
        <?php
        global $post;
        $myposts = get_posts([
          'numberposts' => 3,
        ]);
        if( $myposts ){
          foreach( $myposts as $post ){
            setup_postdata( $post );
            ?>
            <div class="Новость" >
             <img  class="photonovost" src= <?php the_post_thumbnail(); ?> 
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

          
  <div class="container calender pupa" style="margin-top: 293px" ;>
    <div class="Календарьзаглав">
      <h1>Школьный календарь</h1>
      <a href="<?php echo get_page_link(119) ?>" style="margin-top: 38px;">Смотреть больше</a>
    </div>
    <?php  The_field('kalender')?>
  </div>
  <div class="container menuzvonki pupa" style="margin-top: 280px" ;>
    <div class="schoolmenu">
      <h1 style="text-align: left;">Школьное Меню</h1>
      <div class="menutable">
        <div class="menutablebuttons">
          <H1>Сегодня в столовой: </h1>
        </div>
        <div>
         <?php the_field('menu_na_den')?>
        </div>
      </div>
    </div>
    <div class="Raspisanie" style="margin-right: 40px;">
      <h1 style="text-align: left;">Расписание звонков</h1>
      <div class="Raspisanietable" style="display:block;">
        <div style="display: flex;width: 520px;height: 785px;">
          <div class="uroki">
            <p>1.урок</p>
            <p>2.урок</p>
            <p>3.урок</p>
            <p>4.урок</p>
            <p>5.урок</p>
            <p>6.урок</p>
            <p>7.урок</p>
            <p>8.урок</p>
          </div>
          <div class="vrema">
            <p>8:30-9:15</p>
            <p>9:25-10:10</p>
            <p>10:25-11:10</p>
            <p>11:25-12:10</p>
            <p>12:25-13:10</p>
            <p>13:25-14:10</p>
            <p>14:20-15:05</p>
            <p>15:10-15:55</p>
          </div>
        </div>
        <button style="justify-content: center;">
          <a style="color: white" href="https://mustjoe.edupage.org/timetable/view.php?fullscreen=1">Расписание уроков</a>
        </button>
      </div>

    </div>
  </div>
  <div class="container gallery pupa" >
  <div>
    <div class="galleryheadermain" >
      <h1>Галерея</h1>
      <a href="#" style="margin-top: 38px;">Смотреть больше</a>
    </div>
    
    <div class="gallery1">
        
      <div class="galleryphotos">
        <img  alt="" class="pictcha1" src ="<?php the_field('kartinka_1'); ?>">
        <img  alt="" class="pictcha2"style="top:-75px" src=" <?php the_field('kartinka_2'); ?>">
      </div>
      <div class="galleryphotos">
        <img  alt="" class="pictcha3" src="<?php the_field('kartinka_3'); ?>">
        <img  alt="" class="pictcha4"style="top:-107px" src="<?php the_field('kartinka_4'); ?>">
      </div>
      <div class="galleryphotos">
        <img  alt="" class="pictcha5" src="<?php the_field('kartinka_5'); ?>">
        <img  alt="" class="pictcha6" style="top: -75px;" src="<?php the_field('kartinka_6'); ?>">
      </div>
        

    </div>

        


      <?php get_footer(); ?>
    </div>
</div>
