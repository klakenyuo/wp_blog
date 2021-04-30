
<?php get_header() ?>
<!-- Intro Section-->
<section class="intro">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <h2 class="h3">Some great intro here</h2>
        <p class="text-big">Place a nice <strong>introduction</strong> here <strong>to catch reader's attention</strong>. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderi.</p>
      </div>
    </div>
  </div>
</section>
  <section class="featured-posts no-padding-top">
    <div class="container">
      <!-- Post-->
      <?php if(have_posts(  )) : $i=1;?>
        <?php  while($i<=3 and have_posts()): the_post(); ?>
            <div class="row d-flex align-items-stretch">
            <?php if($i==2):?>
            <div class="image col-lg-5"><img src=<?= get_theme_file_uri("img/featured-pic-1.jpeg")?> alt="..."></div>
          <?php endif;?>
              <div class="text col-lg-7">
                <div class="text-inner d-flex align-items-center">
                  <div class="content">
                    <header class="post-header">
                      <div class="category"><a href="#"><?php the_category( ",")?></a></div>
                      <a href="<?php the_permalink();?>"><h2 class="h4"><?php the_title( )?></h2></a>
                    </header>
                    <p style="text-align:justify" ><?php the_content('En voir plus')?></p>
                    <footer class="post-footer d-flex align-items-center"><a href="#" class="author d-flex align-items-center flex-wrap">
                      <div class="avatar"><img src=<?= get_theme_file_uri("img/avatar-1.jpg")?> alt="..." class="img-fluid"></div>
                      <div class="title"><span><?php the_author();?></span></div></a>
                      <div class="date"><i class="icon-clock"></i> <?php the_date()?></div>
                      <div class="comments"><i class="icon-comment"></i>12</div>
                    </footer> 
                  </div>
                </div>
              </div>
          <?php if($i!=2):?>
            <div class="image col-lg-5"><img src=<?= get_theme_file_uri("img/featured-pic-1.jpeg")?> alt="..."></div>
          <?php else : endif;?>
        </div>
        <?php $i+=1;endwhile?>
        
      <?php else :?>
        <h1>Pas de posts</h1>
      <?php endif?>   
    </div>
  </section>
  <!-- Divider Section-->
  <section style="background: url(<?= get_theme_file_uri("img/divider-bg.jpg")?>); background-size: cover; background-position: center bottom" class="divider">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</h2><a href="#" class="hero-link">View More</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Latest Posts -->
    <section class="latest-posts"> 
      <div class="container">
        <header> 
          <h2>Latest from the blog</h2>
          <p class="text-big">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </header>
        <div class="row">
          <div class="post col-md-4">
            <div class="post-thumbnail"><a href="post.html"><img src=<?= get_theme_file_uri("img/blog-1.jpg")?> alt="..." class="img-fluid"></a></div>
            <div class="post-details">
              <div class="post-meta d-flex justify-content-between">
                <div class="date">20 May | 2016</div>
                <div class="category"><a href="#">Business</a></div>
              </div><a href="post.html">
                <h3 class="h4">Ways to remember your important ideas</h3></a>
              <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
            </div>
          </div>
          <div class="post col-md-4">
            <div class="post-thumbnail"><a href="post.html"><img src=<?= get_theme_file_uri("img/blog-1.jpg")?> alt="..." class="img-fluid"></a></div>
            <div class="post-details">
              <div class="post-meta d-flex justify-content-between">
                <div class="date">20 May | 2016</div>
                <div class="category"><a href="#">Business</a></div>
              </div><a href="post.html">
                <h3 class="h4">Ways to remember your important ideas</h3></a>
              <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
            </div>
          </div>
          <div class="post col-md-4">
            <div class="post-thumbnail"><a href="post.html"><img src=<?= get_theme_file_uri("img/blog-1.jpg")?> alt="..." class="img-fluid"></a></div>
            <div class="post-details">
              <div class="post-meta d-flex justify-content-between">
                <div class="date">20 May | 2016</div>
                <div class="category"><a href="#">Business</a></div>
              </div><a href="post.html">
                <h3 class="h4">Ways to remember your important ideas</h3></a>
              <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
<!-- Newsletter Section-->
<section class="newsletter no-padding-top">    
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2>Subscribe to Newsletter</h2>
        <p class="text-big" style="text-align:justify" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
      <div class="col-md-6">
        <div class="form-holder"  style="padding-top:45;">
          <form action="#">
            <div class="form-group">
              <input type="email" name="email" id="email" placeholder="Type your email address">
              <button type="submit" class="submit">Subscribe</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer() ?>

