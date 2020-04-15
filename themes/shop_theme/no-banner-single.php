<?php /* Template Name: No banner */ ?>
<div class="container"></div>
<?php get_header(); ?>
<!-- Page Content -->
<div class="image-aboutus-banner" >
   <div class="container">
   <?php echo do_shortcode('[display_homepage_Contact_Info]'); ?>
    <div class="row">
        <div class="col-md-12">
         <h2 class="lg-text"><?php the_title(); ?></h2>
       </div>
    </div>
</div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <!-- Blog Post -->
                <div class=" mb-4">
                    <?php  if ( has_post_thumbnail() ) {
                        the_post_thumbnail(array(800, 400, true), array('class' => ' card-img-top')); // add post thumbnail
                    }
                    ?>
                    <div class="card-body">
                        
                        <p class="card-text">
                            <?php the_content();?>
                        </p>

                    </div>

                </div>
            <?php endwhile; else: ?>
                <div class="no-results">
                    <p>
                        <strong>There has been an error.
                        </strong>
                    </p>
                    <p>We apologize for any inconvenience, please
                        <a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('description'); ?>">return to the home page
                        </a> or use the search form below.
                    </p>
                </div>
                <!--noResults-->
            <?php endif; ?>
            <!-- Pagination -->

        </div>

    </div>
    <!-- /.row -->
</div>
<!-- /.container -->
<?php get_footer(); ?>
