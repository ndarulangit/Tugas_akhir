
$(document).ready(function(){
  if ($('#text_area').val().length >= 1000) {
    $('#text_area').val(($('#text_area').val()).substr(0, 1000))
    $('#alert1').fadeIn();
  }
})

$(document).ready(function(){
$('#count_message').html($('#text_area').val().length + ' / 1000' );
})

var text_max = 1000;
$('#count_message').html('0 / ' + text_max );

$('#text_area').keyup(function() {
  var text_length = $('#text_area').val().length;
    
  $('#count_message').html(text_length + ' / ' + text_max);
});

$('#alert1').hide();
$('#text_area').bind('input propertychange', function() {
  if (this.value.length >= 1000) {
      $("#text_area").val($("#text_area").val().substring(0,1000));
      $('#alert1').fadeIn();
  }
  else{
    $('#alert1').fadeOut();
  }
});
$('#progres_load').hide();

function clear_area(){
  $('#text_area').val('');
  $('#count_message').html($('#text_area').val().length + ' / 1000' );
  $('#alert1').fadeOut();
}