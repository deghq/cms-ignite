
<?php foreach ($links as $link): ?>
  <?php echo anchor('', $link->name); ?>
<?php endforeach; ?>