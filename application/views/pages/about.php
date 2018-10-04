<h2><?= $title ?></h2>

<p>
<?php
echo 'PHP version '.phpversion();
?>
</p>

</section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<script>
jQuery(function ($){
    $('#linkabout').addClass('active');
});
</script>
