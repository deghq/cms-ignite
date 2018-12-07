<h3>Users</h3>
<p><?php echo anchor('users/add', 'Add user'); ?></p>
<table>
  <tr>
    <th>Username</th>
    <th>Email</th>
    <th></th>
</tr>
<?php foreach ($users as $user): ?>
<tr>
  <td><?php echo $user->username; ?></td>
  <td><?php echo $user->email; ?></td>
  <td>
    <?php echo anchor('users/edit/' . $user->id, 'Edit'); ?>
    <?php echo anchor('users/delete/' . $user->id, 'Delete'); ?>
  </td>
</tr>
<?php endforeach; ?>
</table>