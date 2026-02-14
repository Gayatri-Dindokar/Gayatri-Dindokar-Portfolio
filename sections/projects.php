<section id="projects" class="project-section mb-5">
   <div class="container-fluid">
      <div class="row justify-content-center">
         <h1 class="text-white project-sub py-2">Featured Projects</h1>
         <p class="emp-sub2 py-2 ">A curated selection of projects showcasing my problem-solving skills, technical expertise, and practical development experience.</p>
         <!-- Card 1 -->
         <?php
            $args = array(
                'post_type' => 'projects',
                'posts_per_page' => -1
            );
            $query = new WP_Query($args);
            
            if($query->have_posts()) :
            while($query->have_posts()) : $query->the_post();
            ?>
         <div class="col-lg-4 col-md-6 mt-4">
            <div class="project-card p-4 d-flex flex-column h-100">
               <div class="img-box mb-3">
                  <img src="<?php echo get_field('project_image'); ?>"
                     class="img-fluid"
                     alt="">
               </div>
               <h4 class="text-white mt-3"><?php the_title(); ?></h4>
               <div class="mb-3 py-3">
                  <span class="badge project-badge me-2 py-2 px-3"><?php echo get_sub_field('project-tag'); ?></span>
               </div>
               <p class="text-white">
                  <?php echo get_field('project_description'); ?>
               </p>
               <div class="project-content mt-4">
                  <a href="<?php echo get_field('project_link'); ?>"
                     class="project-btn mt-auto"
                     target="_blank">
                  <span>View Project</span>
                  </a>
               </div>
            </div>
         </div>
         <?php endwhile; ?>
         <?php endif; ?>
      </div>
   </div>
</section>