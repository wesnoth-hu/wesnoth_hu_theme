<?php
/**
 * @file
 * Returns the HTML for the footer region.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728140
 */
?>
<?php if ($content): ?>
  <div id="footer-message" class="footer <?php print $classes; ?>" role="contentinfo">
    <?php print $content; ?>
  </div>
<?php endif; ?>
