<h2><?= $title; ?></h2>

<?php echo validation_errors(); ?>
<br>
<?php echo form_open('posts/create'); ?>

  <div class="form-group" id="titlegr">
    
      <div id="titleorig" style="display:inline">
        <label>タイトル</label>
      </div>

      <div id="titleok" style="display:none">
        <label>タイトル
          <i class="fa fa-check"></i>OK
        </label>
      </div>

      <div id="titleng" style="display:none">
        <label>タイトル
          &nbsp;15文字以内で入力してください
        </label>
      </div>
    
    <input type="text" id="titleinput" class="form-control" name="title" placeholder="タイトルを入力してください...">
    　
  </div>

  <div class="form-group">
    <label>コメント</label>
    <textarea class="form-control" id="body" name="body" rows="6" placeholder="コメントを入力してください..."></textarea>
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
        document.getElementById("titleok").style.display = 'none';
        document.getElementById("titleng").style.display = 'none';
        document.getElementById("titleorig").style.display = 'inline';
      } else if (textlength < 15) {
        $('#titlegr').removeClass();
        $('#titlegr').addClass('form-group has-success');
        document.getElementById("titleorig").style.display = 'none';
        document.getElementById("titleng").style.display = 'none';
        document.getElementById("titleok").style.display = 'inline';
      } else {
        $('#titlegr').removeClass();
        $('#titlegr').addClass('form-group has-error');
        document.getElementById("titleorig").style.display = 'none';
        document.getElementById("titleok").style.display = 'none';
        document.getElementById("titleng").style.display = 'inline';
      }
    });


});




</script>
