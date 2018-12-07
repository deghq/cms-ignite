<h3><?php echo $post->title; ?></h3>
<p><?php echo anchor('posts/edit/' . $post->id, 'Edit'); ?></p>
<?php echo $post->content; ?>

<h3>Comments</h3>

<?php echo form_open('posts/comment/' . $post->id); ?>
<?php echo form_textarea('comments'); ?><br>
<?php echo form_submit('submit', 'Post comment'); ?>
</form>

<?php foreach ($comments as $comment): ?>
<p>
  <?php echo $comment->date; ?>
  <?php echo $comment->comments; ?>
</p>
<?php endforeach; ?>