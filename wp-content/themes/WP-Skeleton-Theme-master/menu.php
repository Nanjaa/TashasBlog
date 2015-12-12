<?php 

/**

 * @package WordPress

 * @subpackage WP-Skeleton

 */

?>

  <div class="header">  

    

    <div> 

        <div class="center menuContainer">
            <!-- The Title -->
            <a href="<?php echo home_url(); //make logo a home link ?>">
                <!-- <h1 class="logo">Tasha's</h1> -->
                <img class="inline" src="/wp-content/themes/WP-Skeleton-Theme-master/logo.png">
            </a>
            <nav class="inline">
                <a href="<?php echo home_url(); ?>">
                    <h1><?php echo get_field('website_name/title', 5); ?></h1>
                </a>
                <!-- The menu -->
                <div class="navigation">
                    <a class="menuLink" href="<?php echo home_url(); ?>">Home</a>|
                    <a class="menuLink" href="/about/">About Me</a>|
                    <a class="menuLink" href="/category/myadventures/">My Adventures</a>|
                    <a class="menuLink" href="/category/diy/">DIY</a>|
                    <a class="menuLink" href="/category/recipes/">Recipes</a>
                </div>
            </nav>
        </div>

    </div> 

</div> <!--  End blog header -->

   