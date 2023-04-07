<?php for ($i = 1; $i <= 3; $i++): ?>
  <?php if (get_field( "block_" . $i )["block_text"]): ?>
  <?php $options = get_field( "block_" . $i )['block_image_options']; ?>
  <? if (get_field( "block_" . $i )['block_background']): ?>
  <div class="full-width <?php echo get_field( "block_" . $i )['block_background']; ?>">
    <?php if (get_field( "section_title") && $i == 1): ?>
    <h2 class="sub-title text-center"><?php the_field("section_title"); ?></h2>
    <?php endif; ?>
  <?php endif; ?>
  <section class="section-block
    <?php echo get_field( "block_" . $i )['block_type']; ?>">
    <div class="block-text col-span-2">
      <h3 class="sub-title <?php echo get_field( "block_" . $i )["block_accent"]; ?>">
        <?php echo get_field( "block_" . $i )["block_title"]; ?>
      </h3>
      <p><?php echo get_field( "block_" . $i )["block_text"]; ?></p>
      <?php if (get_field( "block_" . $i )["block_button"]['link']): ?>
      <a
        href="<?php echo get_field( "block_" . $i )["block_button"]['link']; ?>"
        class="button <?php echo get_field( "block_" . $i )["block_accent"]; ?>">
        <?php echo get_field( "block_" . $i )["block_button"]['text']; ?>
      </a>
      <?php endif; ?>
    </div>
    <?php if (get_field( "block_" . $i )['block_video']): ?>
    <div class="col-span-1">
      <video loop autoplay muted class="video">
        <source src="<?php echo get_field( "block_" . $i )["block_video"]; ?>" type="video/mp4">
      </video>
    </div>
    <?php else: ?>
    <div class="block-image col-span-1 <?php echo implode(' ',$options); ?>">
      <div class="image" style="background-image:url(<?php echo get_field( "block_" . $i )["block_image"]; ?>)"></div>
    </div>
    <?php endif; ?>
  </section>
  <? if (get_field( "block_" . $i )['block_background']): ?>
  </div>
  <?php endif; ?>

  <?php endif; ?>
<?php endfor; ?>

<?php if (get_field("section_button")["text"]): ?>
  <section class="text-center">
    <a href="<?php echo get_field("section_button")["link"]; ?>" class="button ghost">
      <?php echo get_field("section_button")["text"]; ?>
    </a>
  </section>
<?php endif; ?>
