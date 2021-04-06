<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bizni
 */
?>
<div class="col-sm-3">
            
    <div class="widget widget-search">
        
        <form name="search" method="get" action="<?php bloginfo('home'); ?>">
            <fieldset>
                <input id="s" type="search" name="s" "placeholder="Search..." value="<?php echo get_search_query() ?>">
                <label for="s">Search</label>
                <input type="submit" name="submit">
            </fieldset>
        </form>
        
    </div><!-- widget-search -->

    <?php 
        if( is_active_sidebar( 'bizni_widget_sidebar' )){
            dynamic_sidebar( 'bizni_widget_sidebar' );
        }

    ?>
    
</div>
