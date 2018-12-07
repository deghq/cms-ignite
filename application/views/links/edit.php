<h3>Edit link</h3>
<?php echo form_open('links/edit/' . $link->id); ?>
<p>Name
  <?php echo form_input('name', $link->name); ?>
</p>
<p>Page
  <?php echo form_dropdown('page_id', $pages, $link->page_id); ?>
</p>
<p>
  <?php echo form_submit('submit', 'Save changes'); ?>
  or <?php echo anchor('links', 'cancel'); ?>
</p>
</form>