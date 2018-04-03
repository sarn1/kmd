<?php get_header(); ?>
<div class="content">
  <?php
  if (have_posts()) :
    while (have_posts()) : the_post(); ?>
      <main>
        <h1><?php the_title(); ?></h1>
        <hr />
        <?php the_content(); ?>
      </main>

      <aside>

          <?php get_sidebar(); ?>

          <?php if ( has_post_thumbnail() ) {
              the_post_thumbnail('full',array('class' =>  'page-featured-image'));
           } ?>

          <div class="facebook">
            <iframe name="f28839df8bddac" width="225px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:like Facebook Social Plugin" src="https://www.facebook.com/plugins/like.php?app_id=&amp;channel=http%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FFdM1l_dpErI.js%3Fversion%3D42%23cb%3Df37a92e30de7904%26domain%3Dwww.thekmdfoundation.org%26origin%3Dhttp%253A%252F%252Fwww.thekmdfoundation.org%252Ff1fb63e26c64a44%26relation%3Dparent.parent&amp;container_width=0&amp;href=http%3A%2F%2Fwww.thekmdfoundation.org%2F&amp;locale=en_US&amp;sdk=joey&amp;width=225" style="border: none; visibility: visible; width: 225px; height: 32px;" class=""></iframe>
          </div>
      </aside>
  <?php
    endwhile;
  elseif (is_404()) :
      get_template_part('partials','404');
  endif;
  ?>
</div>
<?php get_footer(); ?>