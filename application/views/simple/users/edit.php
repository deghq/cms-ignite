<h3>Edit user</h3>
<?php echo form_open('users/edit/' . $user->id); ?>
<p>Username
  <?php echo form_input('username', $user->username); ?>
</p>
<p>Password
  <?php echo form_password('password'); ?>
</p>
<p>Confirm password
  <?php echo form_password('confirm_password'); ?>
</p>
<p>Name
  <?php echo form_input('name', $user->name); ?>
</p>
<p>Email
  <?php echo form_input('email', $user->email); ?>
</p>
<p>
  <?php echo form_submit('submit', 'Save changes'); ?>
  or <?php echo anchor('users', 'cancel'); ?>
</p>
</form>