<div class="col-md-4"> 
    <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
        <?php dynamic_sidebar( 'footer-1' ); ?>
    <?php endif; ?>
    </div><!-- .widget-area -->

    <div class="col-md-4"> 
    <?php wp_nav_menu(['theme_location' => 'Header'
    ,'container' => 'ul',
    'menu_class' => 'navbar-nav ml-auto'
    ]); ?>
    </div><!-- .widget-area -->
    

    <div class="col-md-4"> 
    <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
        <?php dynamic_sidebar( 'footer-2' ); ?>
    <?php endif; ?>
</div><!-- .widget-area -->