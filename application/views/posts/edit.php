<h2><?= $title; ?></h2>

<?php echo form_open('posts/update'); ?>
	<input type="hidden" name="id" value="<?php echo $post['id']; ?>">
  <div class="form-group" id="titlegr">
    <label id="titleword">タイトル</label>
    <input type="text" id="titleinput" class="form-control" name="title" 
      placeholder="タイトルを入力してください..." value="<?php echo $post['title']; ?>">
  </div>

  <div class="form-group" id="bodygr">
    <label id="bodyword">コメント</label>
    <textarea class="form-control" id="bodyinput" name="body" rows="6" 
      placeholder="コメントを入力してください..."><?php echo $post['body']; ?></textarea>
  </div><br>

  <button type="submit" class="btn btn-lg disabled btn-block" id="submitbtn">
    <i class="fa fa-save"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;保&nbsp;&nbsp;&nbsp;存
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
    $('#submitbtn').attr('disabled', true);
    titleinputchk();
    bodyinputchk();
    btnchk();

    //入力チェック（タイトル）
    $('#titleinput').keyup(function() {
      titleinputchk();
      btnchk();
    });

    //入力チェック（コメント）
    $('#bodyinput').keyup(function() {
      bodyinputchk();
      btnchk();
    });

});

</script>
<script src="<?php echo base_url(); ?>assets/orig/validate.js"></script>

