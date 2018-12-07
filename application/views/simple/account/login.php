<h3>Login</h3>
<?php echo form_open('login'); ?>
<p>Title
  <?php echo form_input('title'); ?>
</p>
<p>Content<br>
  <?php echo form_textarea('content'); ?>
</p>
<p>
  <?php echo form_submit('submit', 'Save changes'); ?>
  or <?php echo anchor('posts', 'cancel'); ?>
</p>
</form>