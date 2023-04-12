<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header(); ?>
    <div class="main-container container" id="main-container">

<!-- Content -->
<div class="row">
  <!-- Sidebar -->
  <aside class="col-lg-4 sidebar">

  <aside class="widget widget__custom-form">
    <?php
      if( is_active_sidebar('cust_sidebar_1') ){
        dynamic_sidebar('cust_sidebar_1');
      }
    ?>         
  </aside>

  <?php if( !is_page(58) ) : get_template_part('parts/section', 'timer'); endif;?> 

  <?php
      if( is_active_sidebar('cust_sidebar_2') ){
        dynamic_sidebar('cust_sidebar_2');
      }
  ?>
  <?php
    if( is_active_sidebar('pages_sidebar')){
      dynamic_sidebar('pages_sidebar');
    }
  ?>

  </aside> <!-- end sidebar -->
      
  <!-- post content -->
  <div class="col-lg-8 blog__content mb-72">
    <div class="content-box">           

      <!-- standard post -->
      <article class="entry mb-0">
        
        <div class="single-post__entry-header entry__header">
          <h1 class="single-post__entry-title">
            <?php the_title(); ?>
          </h1>
        </div> <!-- end entry header -->

        <div class="entry__article-wrap">

          <div class="entry__article">

            <?php the_content(); ?>

          </div> <!-- end entry article -->
        </div> <!-- end entry article wrap -->

        <?php if( !is_page(58) ) : get_template_part('parts/section', 'product'); endif;?>
        <?php if( is_page(68) or is_page(58) ) : get_template_part('parts/section', 'rewiews'); endif;?>
        <?php if( is_page(58) ) : get_template_part('parts/section', 'number'); endif;?>
        <?php if( is_page(58) ) : get_template_part('parts/section', 'advantage'); endif;?>
        <?php if( is_page(58) ) : get_template_part('parts/section', 'team'); endif;?>
        <?php if( is_page(58) ) : get_template_part('parts/section', 'info'); endif;?>
        <?php if( is_page(58) ) : get_template_part('parts/section', 'fishka'); endif;?>
        <?php if( is_page(58) ) : get_template_part('parts/section', 'skills'); endif;?>
        <?php if( is_page(58) ) : get_template_part('parts/section', 'vuz'); endif;?>
        
      </article> <!-- end standard post -->

    </div> <!-- end content box -->
  </div> <!-- end post content -->

</div> <!-- end content -->
</div> <!-- end main container -->
<?php get_footer(); ?>