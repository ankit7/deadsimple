<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
	    <?php do_action( 'before_sidebar' ); ?>
              <?php if ( ! dynamic_sidebar( 'primary' ) ) : ?>
                <h4>About</h4>
            	<p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
            	  <h4 class="widget-title"><?php _e( 'Archives', 'shape' ); ?></h4>
            	  <ol class="list-unstyled">
                    <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
            	  </ol>
   	    <?php endif; ?>
</div><!-- /.blog-sidebar -->