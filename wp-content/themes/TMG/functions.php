
<?php




add_action( 'wp_enqueue_scripts', 'blankslate_load_scripts' );
function blankslate_load_scripts() {
    

    wp_enqueue_style( 'contacts', get_template_directory_uri(). '/assets/css/Contact.css' ) ;   

    wp_enqueue_style( 'documents', get_template_directory_uri(). '/assets/css/dokuments.css' ) ;   
    
    wp_enqueue_style( 'dataprotection', get_template_directory_uri(). '/assets/css/dataprotection.css' ) ;  
    
    wp_enqueue_style( 'sovetpop', get_template_directory_uri(). '/assets/css/Sovetpop.css' ) ;

    wp_enqueue_style( 'sovetpop', get_template_directory_uri(). '/assets/css/Sovetpop.css' ) ;

    wp_enqueue_style( 'gallery', get_template_directory_uri(). '/assets/css/Gallery.css' ) ;
    
    wp_enqueue_style( 'gallerymenu', get_template_directory_uri(). '/assets/css/Gallery menu.css' ) ;
    
    wp_enqueue_style( 'News', get_template_directory_uri(). '/assets/css/News.css' ) ;

    wp_enqueue_style( 'Yeargoals', get_template_directory_uri(). '/assets/css/yeargoalscss.css' ) ;

    wp_enqueue_style( 'sroki', get_template_directory_uri(). '/assets/css/Sroki.css' ) ;

    wp_enqueue_style( 'urokivibor', get_template_directory_uri(). '/assets/css/Urokivibor.css' ) ;

    wp_enqueue_style( 'zdorovie', get_template_directory_uri(). '/assets/css/Zdorovie.css' ) ;

    wp_enqueue_style( 'mok', get_template_directory_uri(). '/assets/css/mokcss.css' ) ;

    wp_enqueue_style( 'kiev', get_template_directory_uri(). '/assets/css/Kiva.css' ) ;

    wp_enqueue_style( 'nashakomanda', get_template_directory_uri(). '/assets/css/Nashakomanda.css' ) ;
    
    wp_enqueue_style( 'style', get_template_directory_uri(). '/assets/css/style.css' ) ;    

    wp_enqueue_style( 'siegclass', get_template_directory_uri(). '/assets/css/siegclasscss.css' ) ; 

    wp_enqueue_style( 'gimnasyum', get_template_directory_uri(). '/assets/css/gymnasiumcss.css' ) ; 

    wp_enqueue_style( 'osnovnaya', get_template_directory_uri(). '/assets/css/osnovnayacss.css' ) ; 

    wp_enqueue_style( 'podkotovka', get_template_directory_uri(). '/assets/css/podgotovishkicss.css' ) ; 



    
    wp_enqueue_script( 'bt','https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js') ;

    wp_enqueue_style( 'bt1','https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css') ;}




    add_theme_support('post-thumbnails');
    add_theme_support('tittle-tag');
    add_theme_support('custom-logo');
?>