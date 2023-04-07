<section class="triad">
  <?php for ($i = 1; $i <= 3; $i++): ?>
    <?php if (get_field('triad_section_' . $i)['title']): ?>
    <div class="triad-block">
      <h3 class="triad-title"><?php echo get_field('triad_section_' . $i)['title']; ?></h3>
      <div class="triad-text">
        <?php echo get_field('triad_section_' . $i)['text']; ?>
      </div>
      <a href="<?php echo get_field('triad_section_' . $i)['button']['link']; ?>" class="button">
        <?php echo get_field('triad_section_' . $i)['button']['text']; ?>
      </a>
    </div>
    <?php endif; ?>
  <?php endfor; ?>
</section>
