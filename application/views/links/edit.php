<h3>Edit link</h3>
<?php echo form_open('links/edit/' . $link->id); ?>
<p>Name
  <?php echo form_input('name', $link->name); ?>
</p>
<p>Reference
  <?php echo form_input('reference', $link->reference, 'id="reference"'); ?>
</p>
<p>
  <?php echo form_checkbox('is_page_reference', 1, $link->is_page_reference == 1, 'id="is_page_reference"'); ?>
  Page
  <?php echo form_dropdown('page_id', $pages, $link->page_id, 'disabled id="page_id"'); ?>
</p>
<p>
  <?php echo form_submit('submit', 'Save changes'); ?>
  or <?php echo anchor('links', 'cancel'); ?>
</p>
</form>

<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script>
$(function() {
  $('#is_page_reference').change(function() {
    var checked = $(this).prop('checked');
    $('#reference').removeAttr('disabled').prop('disabled', checked);
    var disabled = $('#page_id').prop('disabled');
    $('#page_id').removeAttr('disabled').prop('disabled', !disabled);
  });
})
</script>