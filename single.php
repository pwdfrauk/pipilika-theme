<div class="container">
<?php
  if(have_posts()): 
    while(have_posts()) : the_post();
        ?>
        <div class="single_post">
            <!-- post title -->
             <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <!-- post feature images  -->
            <div class="post-feature-image">
                <?php if(has_post_thumbnail()): the_post_thumbnail('large');
                endif; ?>
                <!-- post format icon will show on hover feature image  -->
            </div>
            <!-- date and author  -->
           <div class="post_author"> 
            <em class="post-author"> 
            <?php echo get_the_date()?> 
            |
            <?php the_author()?>
             | 
             <?php comments_popup_link('No Comments', "One Comment", "% Comments", "postcomments-show", "Unavailable"); ?>
         </em>
         </div>
             <!-- tag list -->
             <div class="category_and_tag_list">
                 <?php echo get_the_tag_list(); ?>
                 <?php echo get_the_category_list(); ?>
             </div>
           <!-- post content  -->
            <!-- <?php the_content(); ?> -->
            <!-- post description with continue  -->
           <div class="post-discription"> 
                <?php pipilika_continue(30); ?>
             <p class="continue-reading"><a href="<?php the_permalink(); ?>">Read More</a></p>
            </div>
     </div>
<?php
    endwhile;
else: echo 'No Post! Please add Post,,, ';

endif;
?>
</div>