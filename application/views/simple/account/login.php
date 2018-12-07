<h3>Login</h3>
<?php echo form_open('login'); ?>
<p>Username
  <?php echo form_input('username'); ?>
</p>
<p>Password
  <?php echo form_password('password'); ?>
</p>
<p>
  <?php echo form_submit('submit', 'Login'); ?>
</p>
</form>