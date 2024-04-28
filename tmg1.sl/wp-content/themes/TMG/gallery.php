<?php
/*
Template Name: gallery
*/
?>

<?php get_header(); ?>
<body>
    <div class="container pupa" style="padding:0;">
        <div class="galleryheader">
            <div class="galleryheader1">
                <H1><?the_field('zagolovokgal')?></H1>
                <button>
                    <a href="<?php echo get_page_link(49)?>">&#x2190; Вернуться назад</a>
                </button>
            </div>
            <div class="galleryheader2">
                <p><?the_field('textgal')?></p>
            </div>
        </div>
        <div class="gallery1" style="">
            <div class="galleryphotos">
                <img  class="pictcha1" src="<?the_field('gallerypic1')?>" alt="" >
                <img class="pictcha2" src="<?the_field('gallerypic2')?>" alt="" style="top:-75px">
            </div>
            <div class="galleryphotos">
                <img class="pictcha3" src="<?the_field('gallerypic3')?>" alt="">
                <img  class="pictcha4" src="<?the_field('gallerypic4')?>" alt="" style="top:-105px">
            </div>
            <div class="galleryphotos">
                <img  class="pictcha5 "src="<?the_field('gallerypic5')?>" alt="" >
                <img  class="pictcha6 "src="<?the_field('gallerypic6')?>" alt=""style="top: -70px;">
            </div>
         
        </div>
        <?php get_footer(); ?>
    </div>
    
</body>

