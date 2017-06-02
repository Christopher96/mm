<?php get_header(); ?>
<section>
  <div class="row">
    <?php // look to see if we've disabled sidebar in a custom field, if not show it
     $disableSidebar = get_post_meta($post->ID, 'DisableSidebar', $single = true) === 'true';
    ?>
    <div class="border-between">
      <div class="<?= ($disableSidebar) ? "" : "col-md-9"; ?> col-left">
        <h1 class="title largest"><?= $post->post_title ?></h1>
        <?= get_thumbnail("large") ?>
        <?= apply_filters("the_content", $post->post_content) ?>
      </div>
      <div class="hidden-md hidden-lg">
        <hr>
      </div>
      <?php if (!$disableSidebar): get_sidebar(); endif; ?>
    </div>
  </div>
</section>
<?php get_footer(); ?>
