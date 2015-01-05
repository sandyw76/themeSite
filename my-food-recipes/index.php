<<<<<<< HEAD
<?php
/**
 * The main template file test
 */
get_header(); ?>
<div class="container foodrecipes-container-recipes foodrecipes-main-template">
  <div class="col-md-12 foodrecipes-bg">
    <div class="col-md-8">
      <div class="masonry-container masonry">
        <?php     
if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
  elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
  else { $paged = 1; }
              $foodrecipes_args = array(
                    'orderby'          => 'post_date',
                    'order'            => 'DESC',
                    'post_type'        => 'post',
                    'post_status'      => 'publish',
					'paged'			  => $paged
                );
            $foodrecipes_posts = new WP_Query( $foodrecipes_args );
           	
            while ( $foodrecipes_posts->have_posts() ) {
            $foodrecipes_posts->the_post();
            
            $foodrecipes_feature_img_url = wp_get_attachment_url(get_post_thumbnail_id(get_the_id()));
        ?>
        <div class="col-md-6 box masonry-brick foodrecipes-post-box-margin no-padding">
          <div class="article">
           <div class="foodrecipes-post-box">
            <div class="foodrecipes-post-box-img">
              <?php if($foodrecipes_feature_img_url == "") {?>
              <img src="<?php echo esc_url(get_template_directory_uri().'/images/no-image.jpg'); ?>" class="img-responsive">
              <?php } else { ?>
              <img src="<?php echo esc_url($foodrecipes_feature_img_url); ?>">
              <?php } ?>
              <div class="foodrecipes-post-box-hover">
                <div class="foodrecipes-post-box-hover-center">
                  <div class="foodrecipes-post-box-hover-center1"> <a href="<?php the_permalink(); ?>"><i class="foodrecipes-zoom-icon"></i></a> </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="foodrecipes-box-name">
              <h6><?php echo get_the_date("j F, Y"); ?></h6>
              <div class="foodrecipes-title"> <a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a> </div>
              <div class="foodrecipes-hr"><?php _e('Post By:','foodrecipes') ?>  <span class="foodrecipes-postby-color"><a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>"> <?php echo get_the_author(); ?></a></span><?php if ( get_comments_number() > 0 ) : ?> <?php _e('Comments:','foodrecipes') ?> <span class="foodrecipes-postby-color"><?php echo get_comments_number(); ?></span><?php endif; ?> </div>
            </div>
          </div>
          </div>
        </div>
        <?php } ?>
      </div>
      
      <!-- next,prev,pages  -->
      <div class="clearfix"></div>
        

        
    </div>

      <?php get_sidebar() ?>
  </div>
</div>
<?php get_footer(); ?>
=======
<?php
/**
 * The main template file
 */
get_header(); ?>
<div class="container foodrecipes-container-recipes foodrecipes-main-template">
  <div class="col-md-12 foodrecipes-bg">
    <div class="col-md-8">
      <div class="masonry-container masonry">
        <?php     
if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
  elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
  else { $paged = 1; }
              $foodrecipes_args = array(
                    'orderby'          => 'post_date',
                    'order'            => 'DESC',
                    'post_type'        => 'post',
                    'post_status'      => 'publish',
					'paged'			  => $paged
                );
            $foodrecipes_posts = new WP_Query( $foodrecipes_args );
           	
            while ( $foodrecipes_posts->have_posts() ) {
            $foodrecipes_posts->the_post();
            
            $foodrecipes_feature_img_url = wp_get_attachment_url(get_post_thumbnail_id(get_the_id()));
        ?>
        <div class="col-md-6 box masonry-brick foodrecipes-post-box-margin no-padding">
          <div class="article">
           <div class="foodrecipes-post-box">
            <div class="foodrecipes-post-box-img">
              <?php if($foodrecipes_feature_img_url == "") {?>
              <img src="<?php echo esc_url(get_template_directory_uri().'/images/no-image.jpg'); ?>" class="img-responsive">
              <?php } else { ?>
              <img src="<?php echo esc_url($foodrecipes_feature_img_url); ?>">
              <?php } ?>
              <div class="foodrecipes-post-box-hover">
                <div class="foodrecipes-post-box-hover-center">
                  <div class="foodrecipes-post-box-hover-center1"> <a href="<?php the_permalink(); ?>"><i class="foodrecipes-zoom-icon"></i></a> </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="foodrecipes-box-name">
              <h6><?php echo get_the_date("j F, Y"); ?></h6>
              <div class="foodrecipes-title"> <a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a> </div>
              <div class="foodrecipes-hr"><?php _e('Post By:','foodrecipes') ?>  <span class="foodrecipes-postby-color"><a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>"> <?php echo get_the_author(); ?></a></span><?php if ( get_comments_number() > 0 ) : ?> <?php _e('Comments:','foodrecipes') ?> <span class="foodrecipes-postby-color"><?php echo get_comments_number(); ?></span><?php endif; ?> </div>
            </div>
          </div>
          </div>
        </div>
        <?php } ?>
      </div>
      
      <!-- next,prev,pages  -->
      <div class="clearfix"></div>
        

        
    </div>

      <?php get_sidebar() ?>
  </div>
</div>
<?php get_footer(); ?>
>>>>>>> 8c8bd9028e23bb387be4988e85f8e268bec2c8b2
