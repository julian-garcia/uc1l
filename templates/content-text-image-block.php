<?php for ($i = 1; $i <= 3; $i++): ?>
  <?php if (get_field( "block_" . $i )["block_title"]): ?>
  <section class="section-block <?php echo get_field( "block_" . $i )['block_type']; ?>">
    <div class="block-text col-span-2">
      <h3 class="sub-title <?php echo get_field( "block_" . $i )["block_accent"]; ?>">
        <?php echo get_field( "block_" . $i )["block_title"]; ?>
      </h3>
      <p><?php echo get_field( "block_" . $i )["block_text"]; ?></p>
      <a
        href="<?php echo get_field( "block_" . $i )["block_button"]['link']; ?>"
        class="button <?php echo get_field( "block_" . $i )["block_accent"]; ?>">
        <?php echo get_field( "block_" . $i )["block_button"]['text']; ?>
      </a>
    </div>
    <div
      class="block-image col-span-1"
      style="background-image: url(<?php echo get_field( "block_" . $i )["block_image"]; ?>)">
    </div>
  </section>
  <?php endif; ?>
<?php endfor; ?>
