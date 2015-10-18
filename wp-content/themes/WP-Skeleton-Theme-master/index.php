<?php
/**
 * @package WordPress
 * @subpackage WP-Skeleton
 */
 
    get_header();  //the Header
        
    get_template_part( 'menu', 'index' ); //the  menu + logo/site title 
    
    get_template_part( 'loop', 'index' ); //the Loop  

    $test2 = get_field('message', 5);
    echo $test2;
     
    get_template_part( 'sidebar', 'index' ); //the Sidebar 
            
    get_footer(); //the Footer 
   
?>                        
           
