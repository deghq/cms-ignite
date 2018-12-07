<h3>Add link</h3>
<?php echo form_open('links/add'); ?>
<p>Name
  <?php echo form_input('name'); ?>
</p>
<p>
  <?php echo form_submit('submit', 'Save changes'); ?>
  or <?php echo anchor('links', 'cancel'); ?>
</p>
</form>