<h3><?php echo $page->title; ?></h3>
<p><?php echo anchor('pages/edit/' . $page->id, 'Edit'); ?></p>
<?php echo $page->content; ?>