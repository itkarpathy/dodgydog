<?php get_header();?>
         

   <div id="banner">
      <h1>&lt;dodgYdog/&gt;</h1>
      <h3>Best places for dogs</h3>
   </div>

   <main>
      <a href="<?php echo site_url('/blog');?>">
      <h2 class="section-heading">Blogs</h2>
   </a>

   <section>
     
         <?php 

            $args = array(
            'post_type' => 'post',
            'posts_per_page' => 2,
          );

         $blogposts = new WP_Query( $args );

         while($blogposts->have_posts()) : $blogposts->the_post(); ?>

         <div class="card">
            <div class="card-image">
               <a href="<?php the_permalink();?>">
               <?php the_post_thumbnail(); ?>
               </a>
            </div> 


            <div class="card-description">
               <a href="<?php the_permalink();?>">
                  <h3><?php the_title();?></h3>
               </a>
               <p><?php //echo wp_trim_words(excerpt(),30);?>
              
               </p>
               <a href="<?php the_permalink();?>"class="btn-readmore">Read more</a>
            </div>
         </div>


        
         <?php endwhile; ?>

         </section>
         </main>

   <?php get_footer( );?>

