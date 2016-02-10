<?php get_header(); ?> 
     <div class="row">

        <div class="col-sm-8 blog-main">
          <div class="blog-post">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <ol class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li><?php the_title(); ?></li>
      </ol>
            <h1 class="blog-post-title"><?php the_title(); ?></h1>
            <p class="blog-post-meta"><?php the_time('jS F Y') ?></p>
            <?php the_content(); ?>
          <?php endwhile; endif; ?>
          </div><!-- /.blog-post -->
    <?php comments_template(); ?> 

        </div><!-- /.blog-main -->

  <?php get_sidebar(); ?> 

      </div><!-- /.row -->

    </div><!-- /.container -->
<?php get_footer(); ?> 