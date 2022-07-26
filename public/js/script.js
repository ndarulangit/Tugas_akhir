// $(document).ready(function(){
// $('#count_message').html($('#text_area').val().length + ' / 1000' );
// })

// var text_max = 1000;
// $('#count_message').html('0 / ' + text_max );

// $('#text_area').keyup(function() {
//   var text_length = $('#text_area').val().length;
    
//   $('#count_message').html(text_length + ' / ' + text_max);
// });
// $(document).ready(function(){
//   $('#count_message').html($('#text_area').val().length + ' / 1000' );
//   })
// function wordCounter(text) {
//   var text = input.value;
//   var wordCount = 0;
//   for (var i = 0; i <= text.length; i++) {
//     if (text.charAt(i) == ' ') {
//       wordCount++;
//     }
//   }
//   count.innerText = wordCount;
// }
$(function(){
  $("#up_2").on('click', function(e){
      e.preventDefault();
      $("#up_1:hidden").trigger('click');
  });
  });
var text_max = 1000;
$('#count_message').html('0 / ' + text_max );
$('#alert1').hide();
$('#text_area').keyup(function() {
  wordCounter();
})
  function wordCounter(){
  var text_length = $('#text_area').val().split(' ');
  var wordCount =0;
  for (var i = 0; i < text_length.length; i++){
    if (text_length[i] !== ' ' && isWord(text_length[i])){
      wordCount++;
    }
  }
  
  $('#count_message').html(wordCount + ' / ' + text_max);
  $('#text_area').bind('input propertychange', function() {
    if (wordCount >= 1000) {
        $("#text_area").val().split(0,1000);
        $('#alert1').fadeIn();
    }
    else{
      $('#alert1').fadeOut();
    }
  });
}
function isWord(str) {
  var alphaNumericFound = false;
  for (var i = 0; i < str.length; i++) {
    var code = str.charCodeAt(i);
    if ((code > 47 && code < 58) || // numeric (0-9)
        (code > 64 && code < 91) || // upper alpha (A-Z)
        (code > 96 && code < 123)) { // lower alpha (a-z)
      alphaNumericFound = true;
      return alphaNumericFound;
    }
  }
  return alphaNumericFound;
}
function clear_area(){
  $('#text_area').val('');
  $('#count_message').html($('#text_area').val().length + ' / 1000' );
  $('#alert1').fadeOut();
}