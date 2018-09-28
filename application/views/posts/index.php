<h2><?= $title ?></h2>
<?php foreach($posts as $post) : ?>
	<h3><?php echo $post['title']; ?></h3>
	<small>Posted on: <?php echo $post['created_at']; ?></small><br>
	<?php echo $post['body']; ?>
	<br>
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
