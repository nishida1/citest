<h2><?= $title; ?></h2>

<?php echo validation_errors(); ?>
<br>
<?php echo form_open('posts/create'); ?>

  <div class="form-group" id="titlegr">
    <label id="titleword">タイトル</label>
    <input type="text" id="titleinput" class="form-control" name="title" placeholder="タイトルを入力してください...">
  </div>

  <div class="form-group" id="bodygr">
    <label id="bodyword">コメント</label>
    <textarea class="form-control" id="bodyinput" name="body" rows="6" placeholder="コメントを入力してください..."></textarea>
  </div>

  <button type="submit" class="btn btn-app">
    <i class="fa fa-save"></i>保存
  </button>
</form>

</section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<script>
jQuery(function ($){
    $('#linkcreate').addClass('active');

    //入力チェック（タイトル）
    $('#titleinput').keyup(function() {
      var textlength = $(this).val().length;
      if (textlength === 0){
        $('#titlegr').removeClass();
        $('#titlegr').addClass('form-group');
        document.getElementById('titleword').innerHTML = `タイトル`;
      } else if (textlength < 15) {
        $('#titlegr').removeClass();
        $('#titlegr').addClass('form-group has-success');
        document.getElementById('titleword').innerHTML = `タイトル<i class="fa fa-check"></i>OK`;
      } else {
        $('#titlegr').removeClass();
        $('#titlegr').addClass('form-group has-error');
        document.getElementById('titleword').innerHTML = `タイトル&nbsp;15文字以内で入力してください`;
      }
    });

    //入力チェック（コメント）
    $('#bodyinput').keyup(function() {
      var textlength = $(this).val().length;
      if (textlength === 0){
        $('#bodygr').removeClass();
        $('#bodygr').addClass('form-group');
        document.getElementById('bodyword').innerHTML = `コメント`;
      } else if (textlength < 500) {
        $('#bodygr').removeClass();
        $('#bodygr').addClass('form-group has-success');
        document.getElementById('bodyword').innerHTML = `コメント<i class="fa fa-check"></i>OK`;
      } else {
        $('#bodygr').removeClass();
        $('#bodygr').addClass('form-group has-error');
        document.getElementById('bodyword').innerHTML = `コメント&nbsp;500文字以内で入力してください`;
      }
    });


});




</script>
