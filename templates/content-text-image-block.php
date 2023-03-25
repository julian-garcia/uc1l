<?php if (get_field( "section_title")): ?>
  <h2 class="sub-title text-center"><?php the_field("section_title"); ?></h2>
<?php endif; ?>

<?php for ($i = 1; $i <= 3; $i++): ?>
  <?php if (get_field( "block_" . $i )["block_title"]): ?>
  <?php $options = get_field( "block_" . $i )['block_image_options']; ?>
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
    <div
      class="block-image col-span-1 <?php echo implode(' ',$options); ?>"
      style="background-image: url(<?php echo get_field( "block_" . $i )["block_image"]; ?>)">
    </div>
  </section>
  <?php endif; ?>
<?php endfor; ?>

<?php if (get_field("section_button")["text"]): ?>
  <section class="text-center">
    <a href="#" class="button ghost">
      <?php echo get_field("section_button")["text"]; ?>
    </a>
  </section>
<?php endif; ?>
