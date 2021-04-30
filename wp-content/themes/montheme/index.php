<?php get_header() ?>

   <?php if(have_posts(  )) :?>
   <div class="container" style="padding-top:25px;">
   <div class="row">
   
      <?php  while(have_posts()): the_post();?>
      <div class="col-sm-4">
      
      <div class="card " style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title"><?php the_title( )?></h5>
          <h6 class="card-subtitle mb-2 text-muted"><?php the_author();?></h6>
          <p class="card-text"><?php the_content('En voir plus')?></p>
          <a href="<?php the_permalink();?>" class="card-link">Voir Plus</a>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div>
      </div>
      <?php endwhile?>
      </div>
      <?= paginate_links()?>
      </div>
    <?php else :?>
    <h1>Pas de posts</h1>
    <?php endif?>

<?php get_footer() ?>