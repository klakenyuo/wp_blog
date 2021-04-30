<!DOCTYPE html>
<html>
  <head>
  <?php get_template_part( 'template-parts/header/link' ); ?>
    
        
  </head>
  <body>
  
  <?php wp_body_open(); ?>
    <header class="header" >
      <!-- Main Navbar-->
      <nav class="navbar navbar-expand-lg">
        <div class="search-area">
          <div class="search-area-inner d-flex align-items-center justify-content-center">
            <div class="close-btn"><i class="icon-close"></i></div>
            <div class="row d-flex justify-content-center">
              <div class="col-md-8">
                <!-- The search Form-->
                <?php get_search_form();?>
                
                <!-- The end of search Form-->
              </div>
            </div>
          </div>
        </div>
        <div class="container">
        <?php get_template_part( 'template-parts/header/site-header' ); ?>
          
        </div>
      </nav>
    </header>
    <!-- Hero Section-->
    <?php get_template_part( 'template-parts/hero/hero-section' ); ?>
    