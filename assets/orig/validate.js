
function titleinputchk(){
  var textlength = $('#titleinput').val().length;
      if (textlength === 0){
        $('#titlegr').removeClass();
        $('#titlegr').addClass('form-group');
        document.getElementById('titleword').innerHTML = `タイトル`;
        titlechk = false;
      } else if (textlength < 15) {
        $('#titlegr').removeClass();
        $('#titlegr').addClass('form-group has-success');
        document.getElementById('titleword').innerHTML = `タイトル&nbsp;<i class="fa fa-check"></i>OK`;
        titlechk = true;
      } else {
        $('#titlegr').removeClass();
        $('#titlegr').addClass('form-group has-error');
        document.getElementById('titleword').innerHTML = `タイトル&nbsp;15文字以内で入力してください`;
        titlechk = false;
      }
}

function bodyinputchk(){
  var textlength = $('#bodyinput').val().length;
      if (textlength === 0){
        $('#bodygr').removeClass();
        $('#bodygr').addClass('form-group');
        document.getElementById('bodyword').innerHTML = `コメント`;
        bodychk = false;
      } else if (textlength < 500) {
        $('#bodygr').removeClass();
        $('#bodygr').addClass('form-group has-success');
        document.getElementById('bodyword').innerHTML = `コメント&nbsp;<i class="fa fa-check"></i>OK`;
        bodychk = true;
      } else {
        $('#bodygr').removeClass();
        $('#bodygr').addClass('form-group has-error');
        document.getElementById('bodyword').innerHTML = `コメント&nbsp;500文字以内で入力してください`;
        bodychk = false;
      }
}

function btnchk(){
  if(bodychk===true && titlechk===true){
        $('#submitbtn').removeClass();
        $('#submitbtn').addClass('btn btn-success btn-lg btn-block');
        $('#submitbtn').attr('disabled', false);
      }else{
        $('#submitbtn').removeClass();
        $('#submitbtn').addClass('btn btn-lg disabled btn-block');
        $('#submitbtn').attr('disabled', true);
      }
}

