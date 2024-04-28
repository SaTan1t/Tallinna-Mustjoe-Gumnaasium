<!DOCTYPE html>
<html <?php language_attributes(  )?>>

<head>
   <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 

  <title>Главная страница</title>

  <?php wp_head(); ?>

  <!--  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="assets\css\style.css"> -->


</head>

<body style="background-color: #F1F1F1;">
  <header>

 <a href="<?php echo get_page_link(34)?>"> <button class="logo"></button></a>
      <div class="dropdown " onmouseover="this.style.background='#A6DE4A';" onmouseout="this.style.background='';">
        <a class="btn dropdown-toggle no-border Zindex"  href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">О школе</a>
        <ul class="dropdown-menu no-border">
          <li><a class="dropdown-item  no-border" href="<?php echo get_page_link(72)?>">Миссия и ценности школы</a></li>
          <li><a class="dropdown-item  no-border" href="<?php echo get_page_link(58)?>">Наша команда</a></li>
          <li><a class="dropdown-item  no-border" href="<?php echo get_page_link(44)?>">Документы</a></li>
          <li><a class="dropdown-item  no-border" href="https://drive.google.com/drive/folders/0B1foadvkBA8TZkZXZFgtZFBFZkE?resourcekey=0-qXn3p3JLxR1kX8Hpj4bjvQ">Школьное питание</a></li>
          <li><a class="dropdown-item  no-border" href="<?php echo get_page_link(49)?>">Галерея</a></li>
          <li><a class="dropdown-item  no-border" href="<?php echo get_page_link(60)?>">Новости</a></li>
        </ul>
    </div>

    <div class="dropdown" onmouseover="this.style.background='#A6DE4A';" onmouseout="this.style.background='';">
      <a class="btn  dropdown-toggle no-border"  href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Учебная работа
      </a>

      <ul class="dropdown-menu no-border">
        <li><a class="dropdown-item  no-border" href="<?php echo get_page_link(78)?>">Цели учебного года</a></li>
        <li><a class="dropdown-item  no-border" href="https://www.mjg.ee/failid/oppetoo/PK_uldosa_2021-1.pdf">Программа основной школы</a></li>
        <li><a class="dropdown-item  no-border " href="https://www.mjg.ee/failid/oppetoo/G_uldosa_2021-1.pdf">Программа гимназии</a></li>
        <li><a class="dropdown-item  no-border" href="https://mustjoe.edupage.org/timetable/view.php?fullscreen=1">Расписание уроков</a></li>
        <li><a class="dropdown-item  no-border" href="#">Расписание звонков</a></li>
        <li><a class="dropdown-item  no-border" href="<?php echo get_page_link(70)?>">Сроки триместров</a></li>
        <li><a class="dropdown-item  no-border" href="<?php echo get_page_link(75)?>">Уроки по выбору</a></li>
        <li><a class="dropdown-item  no-border" href="<?php echo get_page_link(126)?>">Экзамены/уровневые работы</a></li>
        <li><a class="dropdown-item  no-border" href="https://www.riigiteataja.ee/akt/129042022018?leiaKehtiv">Каникулы</a></li>
        <li><a class="dropdown-item  no-border" href="https://www.mjg.ee/failid/oppetoo/KONSULTATSIOONID%202023-2024%20%C3%B5a.pdf">Консультации</a></li>
        <li><a class="dropdown-item  no-border" href="https://www.mjg.ee/failid/oppetoo/KkLisa_2_TMG_PK_Lisa%201_2021.pdf">Оценивание основной шоклы</a></li>
        <li><a class="dropdown-item  no-border" href="https://www.mjg.ee/failid/oppetoo/KkLisa_8_TMG_G_Lisa%201_2021.pdf">Оценивание гимназии</a></li>
        <li><a class="dropdown-item  no-border" href="<?php echo get_page_link(124)?>">Обязательная литература</a></li>
        <li><a class="dropdown-item  no-border" href="<?php echo get_page_link(68)?>">Совет попечителей</a></li>
        <li><a class="dropdown-item  no-border" href="#"> Система поддержки</a></li>
        <li><a class="dropdown-item  no-border" href="<?php echo get_page_link(56)?>">MÕK</a></li>
        <li><a class="dropdown-item  no-border" href="<?php echo get_page_link(122)?>">Проекты и мероприятия</a></li>
        <li><a class="dropdown-item  no-border" href="<?php echo get_page_link(80)?>">Здоровый образ жизни</a></li>
        <li><a class="dropdown-item  no-border" href="<?php echo get_page_link(119)?>">Календарь</a></li>
      </ul>
    </div>
    <div class="dropdown" onmouseover="this.style.background='#A6DE4A';" onmouseout="this.style.background='';">
      <a class="btn dropdown-toggle no-border"  href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Поступление в школу
      </a>

      <ul class="dropdown-menu no-border">
        <li><a class="dropdown-item  no-border" href="<?php echo get_page_link(66)?>">Прием в 1 класс</a></li>
        <li><a class="dropdown-item  no-border" href="<?php echo get_page_link(62)?>">Прием в основную школу</a></li>
        <li><a class="dropdown-item  no-border" href="<?php echo get_page_link(51)?>">Прием в 10 класс</a></li>
        <li><a class="dropdown-item  no-border" href="<?php echo get_page_link(64)?>">Прием в подготовителньый класс</a></li>
      </ul>
    </div>
    <a href="<?php echo get_page_link(39)?>" class="dropdown" onmouseover="this.style.background='#A6DE4A';" onmouseout="this.style.background=''" style="padding: 6px 12px; color:black ;text-decoration:none">
      Контакты </a>
    <a href="<?php echo get_page_link(53)?>" class="dropdown" onmouseover="this.style.background='#A6DE4A';" onmouseout="this.style.background=''"style="padding: 6px 12px;color:black ;text-decoration:none">KiVa</a>
    <div class="langlinks">
      <a href="" class="dropdown" onmouseover="this.style.background='#A6DE4A';" onmouseout="this.style.background=''" style="color:black ;text-decoration:none;padding: 6px 12px">RU/EST</a>

    </div>
  </header>