
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

<div class="col-md-6">
    <div class="box box-info">
        <div class="box-header with-border">
              <h3 class="box-title"><?php echo $post['title']; ?></h3>
              <br><small class="text-muted">Posted on: <?php echo $post['created_at']; ?></small>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
            </div>
            <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <?php echo $post['body']; ?> <br><br>
            <a class="btn btn-app" href="<?php echo site_url('/posts/'.$post['id']); ?>">
                        <i class="fa fa-edit"></i> 編集
            </a>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
</div>

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
