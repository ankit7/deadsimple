<?php get_header(); ?> 
     <div class="row">

        <div class="col-sm-8 blog-main">
          <div class="blog-post">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h3 class="blog-post-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
            <p class="blog-post-meta"><?php the_time('jS F Y') ?></p>
            <?php the_excerpt(); ?>
          <?php endwhile; endif; ?>
          </div><!-- /.blog-post -->

          <nav>
            <ul class="pager">
              <li><?php next_posts_link( 'Older posts' ); ?></li>
              <li><?php previous_posts_link( 'Newer posts' ); ?></li>
            </ul>
          </nav>

        </div><!-- /.blog-main -->

  <?php get_sidebar(); ?>
      </div><!-- /.row -->

    </div><!-- /.container -->
  <?php get_footer(); ?> 