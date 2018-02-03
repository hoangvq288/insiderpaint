<section class="banner">
  <div class="banner__slider">
    <ul class="bxslider">
      <?php 
        $images = get_field('slider');
        if( $images ): ?>
            <?php foreach( $images as $id=>$image ): ?>
                 <li>
                    <img src="<?php echo $image['url']?>" alt="">
                    <div class="banner__desmain">
                      <div class="banner__des col-md-6">
                        <?php the_field('text_slider_'. ($id+1) . "") ?>
                      </div>
                    </div>
                  </li>
            <?php endforeach; ?>
      <?php endif; ?>
     
      
    </ul>
  </div>
</section>