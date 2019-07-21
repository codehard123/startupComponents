<?php 
while(have_posts()){
    the_post();
    ?>
    <a href="<?php the_permalink();?>"><?php the_title()>?></a>
}
have_posts()- Checks the presence of a post and iterates over it
the_title()- Title of the post
the_permalink()- Displays the permalink of thr post

