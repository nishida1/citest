
<?php if($this->session->flashdata('post_created')): ?>
    <?php 
    echo '<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <i class="icon fa fa-check"></i>'
    .$this->session->flashdata('post_created').
    '</div>
    '; ?>
<?php endif; ?>

<?php if($this->session->flashdata('post_updated')): ?>
    <?php 
    echo '<div class="alert alert-info alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <i class="icon fa fa-check"></i>'
    .$this->session->flashdata('post_updated').
    '</div>
    '; ?>
<?php endif; ?>

<?php if($this->session->flashdata('post_deleted')): ?>
    <?php 
    echo '<div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <i class="icon fa fa-check"></i>'
    .$this->session->flashdata('post_deleted').
    '</div>
    '; ?>
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
