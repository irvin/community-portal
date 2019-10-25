<?php get_header(); ?>
  <div class="events__header">
    <div class="row middle-md events__container ">
      <div class="col-md-6 events__header__text">
        <h1 class="events__title"><?php the_title() ?></h1>
        <p class="events__text">A short paragraph about why events are great and why people should look for some near them.</p>
        <p class="events__text">Fine and event near you below, or <a href="<?php echo add_query_arg(array('action' => 'edit'), get_site_url('','events/create-event'))?>">create an event</a></p>
      </div>
    </div>
  </div>
  <div 
    class="content events__container"
  >
    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content() ?>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
<?php get_footer(); ?>