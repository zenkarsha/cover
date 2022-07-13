$('#loading').show();
createImage();

var countdown = Date.now(),
    currentTime = Date.now();

$(document).ready(function()
{
  $('.ellipsis').dotdotdot();
  $('input.minicolors').ColorPickerSliders({
    placement: 'top',
    order: {
      preview: 1,
      hsl: 2
    }
  });
  $("#kxgenSubmit").click(function() {
    $('#directpost').val('');
    $('#kxgenForm').attr("target","_self").submit();
    $('#plzlike').fadeIn(800);
  });
  $("#facebookSubmit").click(function() {
    $('#directpost').val('1');
    $('#kxgenForm').attr("target","_blank").submit();
  });
});

$('body').delegate('#something, #verb, #other', 'blur', function() {
  createImage();
});
$('body').delegate('#something, #verb, #other', 'keydown', function() {
  countdown = Date.now();
});
$('body').delegate('#something, #verb, #other', 'keyup', function() {
  setTimeout(function(){
    currentTime = Date.now();
    if((currentTime - countdown) >= 240 ) {
      $('#loading').show();
      createImage();
    }
  }, 250);
});
$("#colorbg, #color1, #color2").on('keyup blur change', function() {
  $('#loading').show();
  createImage();
});
$("#sentence").on('change blur', function() {
  $('#coverprint').html('<img src="images/blackbg.png" width="851" height="315">');
  $('#loading').show();
  optionchanger($(this).val());
});

function optionchanger(option){
  var url = "optionchanger/?option="+option;
  $("#settings").load(url, function() {
    createImage();
  });
}

//ajax function
function createImage(){
  $.ajax({
    url: 'ajax',
    dataType: 'html',
    type:'POST',
    data: {
      template1: $("#template1").val(),
      template2: $("#template2").val(),
      template3: $("#template3").val(),
      something: $("#something").val(),
      verb: $("#verb").val(),
      other: $("#other").val(),
      colorbg: $("#colorbg").val(),
      color1: $("#color1").val(),
      color2: $("#color2").val(),
      sentence: $("#sentence").val()
    },
    success: function(response){
      $('#coverprint').html(response).promise().done(function(){
        $('#loading').fadeOut();
      });
    }
  });
}

$(window).scroll(function (event) {
  var scroll = $(window).scrollTop();
  var height = $(window).height();
  if(scroll > height*0.5)
    $('.gototop').show();
  else
    $('.gototop').hide();
});
$('.gototop').click(function(){
  $('html,body').animate({scrollTop: 0},'fast');
});
