<h3>Links</h3>
<p><?php echo anchor('links/add', 'Add link'); ?></p>
<table>
  <tr>
    <th>Title</th>
    <th></th>
</tr>
<?php foreach ($links as $link): ?>
<tr>
  <td><?php echo anchor('links/show/' . $link->id, $link->name); ?></td>
  <td>
    <?php echo anchor('links/edit/' . $link->id, 'Edit'); ?>
    <?php echo anchor('links/delete/' . $link->id, 'Delete'); ?>
  </td>
</tr>
<?php endforeach; ?>
</table>