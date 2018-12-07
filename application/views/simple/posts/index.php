<h3>Posts</h3>
<p><?php echo anchor('posts/add', 'Add post'); ?></p>
<table>
  <tr>
    <th>Title</th>
    <th></th>
</tr>
<?php foreach ($posts as $post): ?>
<tr>
  <td><?php echo anchor('posts/show/' . $post->id, $post->title); ?></td>
  <td>
    <?php echo anchor('posts/edit/' . $post->id, 'Edit'); ?>
    <?php echo anchor('posts/delete/' . $post->id, 'Delete'); ?>
  </td>
</tr>
<?php endforeach; ?>
</table>