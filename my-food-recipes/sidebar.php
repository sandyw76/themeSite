<?php
/*
* main sidebar la barre de droite
*/
if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
    <div class="col-md-4 foodrecipes-side-menu-bgcolor main-sidebar">
         <?php dynamic_sidebar( 'sidebar-1' );  ?>
    </div>	
<?php endif; ?>
