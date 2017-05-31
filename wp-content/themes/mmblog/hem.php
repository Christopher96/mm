<?php
/*
* Template Name: Hem
*/

$this_post = $post;

get_header();

?>
<section>
  <div class="row">
    <?php // look to see if we've disabled sidebar in a custom field, if not show it
     $disableSidebar = get_post_meta($this_post->ID, 'DisableSidebar', $single = true) === 'true';
    ?>
    <div class="<?= ($disableSidebar) ? "" : "col-md-7"; ?> col-left">
      <p class="title"><?= $this_post->post_title ?></p>
      <div class="txt-medium">
          <a href='<?= the_post_thumbnail_url('large'); ?>' data-lightbox="images">
            <?= the_post_thumbnail('medium'); ?>
          </a>
          <?= apply_filters("the_content", $this_post->post_content) ?>
      </div>
    </div>
    <?php if (!$disableSidebar): get_sidebar(); endif; ?>
  </div>
</section>
<?php get_footer(); ?>
