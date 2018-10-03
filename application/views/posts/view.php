
<div class="col-md-12">
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
            <?php echo $post['body']; ?> 
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
</div>


  <button type="submit" class="btn btn-lg btn-block" 
    onclick="location.href='<?php echo base_url(); ?>posts/edit/<?php echo $post['id']; ?>'">
    <i class="fa fa-edit"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;編&nbsp;&nbsp;&nbsp;集
  </button>

<br>

<?php echo form_open('/posts/delete/'.$post['id']); ?>
  <button type="submit" class="btn btn-lg btn-block btn-danger">
    <i class="fa fa-trash-o"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;削&nbsp;&nbsp;&nbsp;除
  </button>
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