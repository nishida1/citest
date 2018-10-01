<?php if($this->session->flashdata('post_deleted')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_deleted').'</p>'; ?>
<?php endif; ?>

<h2><?= $title ?></h2>
<?php foreach($posts as $post) : ?>
	<h3><?php echo $post['title']; ?></h3>
	<small>Posted on: <?php echo $post['created_at']; ?></small><br>
	<?php echo $post['body']; ?>
    <br>
    <p><a class="btn btn-default" 
    href="<?php echo site_url('/posts/'.$post['id']); ?>">Edit/Delete</a></p>
<?php endforeach; ?>

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
