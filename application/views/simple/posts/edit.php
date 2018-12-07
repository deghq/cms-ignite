<h3>Edit post</h3>
<?php echo form_open('posts/edit/' . $post->id); ?>
<p>Title
  <?php echo form_input('title', $post->title); ?>
</p>
<p>Content<br>
  <?php echo form_textarea('content', $post->content); ?>
</p>
<p>
  <?php echo form_submit('submit', 'Save changes'); ?>
  or <?php echo anchor('posts', 'cancel'); ?>
</p>
</form>