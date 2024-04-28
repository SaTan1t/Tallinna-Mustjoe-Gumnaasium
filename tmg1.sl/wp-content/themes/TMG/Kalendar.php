<?php
/*
Template Name: kalendar
*/
?>

<?php get_header(); ?>
<main>
        <div class="container calender pupa" style="margin-top: 293px;padding:0;" ;>
            <div class="d120px">
                <div class="Календарьзаглав">
                <h1>Школьный календарь</h1>
                </div>
                   <?php  The_field('kalender')?>
                
                <?php get_footer(); ?>
            </div>
        </div>