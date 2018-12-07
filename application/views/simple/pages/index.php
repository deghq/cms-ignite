<h3>Pages</h3>
<p><?php echo anchor('pages/add', 'Add page'); ?></p>
<table>
  <tr>
    <th>Title</th>
    <th></th>
</tr>
<?php foreach ($pages as $page): ?>
<tr>
  <td><?php echo anchor('pages/show/' . $page->id, $page->title); ?></td>
  <td>
    <?php echo anchor('pages/edit/' . $page->id, 'Edit'); ?>
    <?php echo anchor('pages/delete/' . $page->id, 'Delete'); ?>
  </td>
</tr>
<?php endforeach; ?>
</table>