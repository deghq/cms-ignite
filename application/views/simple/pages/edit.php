<h3>Edit page</h3>
<?php echo form_open('pages/edit/' . $page->id); ?>
<p>Title
  <?php echo form_input('title', $page->title); ?>
</p>
<p>Content<br>
  <?php echo form_textarea('content', $page->content); ?>
</p>
<p>
  <?php echo form_submit('submit', 'Save changes'); ?>
  or <?php echo anchor('pages', 'cancel'); ?>
</p>
</form>