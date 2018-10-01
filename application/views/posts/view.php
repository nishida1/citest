<h2><?php echo $post['title']; ?></h2>
<small>Posted on: <?php echo $post['created_at']; ?></small><br>
<div>
	<?php echo $post['body']; ?>
</div>

<br>

<a class="btn btn-default pull-left" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['id']; ?>">Edit</a>
<?php echo form_open('/posts/delete/'.$post['id']); ?>
<input type="submit" value="Delete" class="btn btn-danger">
</form>

</section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<script>
jQuery(function ($){
    $('#linkpost').addClass('active');
});
</script>