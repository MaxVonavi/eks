$(document).ready(function(){
    $(".topUl").on("click","a", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
            top = $(id).offset().top;

        $('body,html').animate({scrollTop: top}, 1500);
    });
});
$(document).ready(function() {
  $('#montagHref').on('click', function () {
    window.open("montag.php","_self");
  });
});
$(document).ready(function() {
  $('#demontagHref').on('click', function () {
    window.open("demontag.php","_self");
  });
});
$(document).ready(function() {
  $('#remontHref').on('click', function () {
    window.open("remont.php","_self");
  });
});
$(document).ready(function() {
  $('#modernHref').on('click', function () {
    window.open("modern.php","_self");
  });
});
$(document).ready(function() {
  $('#remontPuteyHref').on('click', function () {
    window.open("remont-putey.php","_self");
  });
});
$(document).ready(function() {
  $('#restavHref').on('click', function () {
    window.open("restav.php","_self");
  });
});


var topInput = '';
var phoneInputValue = '';
var phoneCheckValue = '';
var typeOfWork = '';


function sendEmail2() {
  topInput = $('#exampleInputName1').val();
  phoneInputValue = $('#exampleInputTel1').val();
  phoneCheckValue = $('#exampleCheck1').is(':checked');
  typeOfWork = $('#typeOfWokk').val();
  if (topInput == '') {
    alert('укажите Ваше имя');
  }
  else if (phoneInputValue == '') {
    alert('Введите номер телефона!');
  }
  else if (phoneCheckValue != true) {
    alert('Нужно согласиться на обработку данных!');
  }
  else {
    $.post(
          "../php/mail2.php",
          {
            "ename" : topInput,
            "ephone" : phoneInputValue,
            "typework" : typeOfWork,
          },
          function (data) {
            if (data==1){
              alert('Заяка на рассчет отправлена!');
            }else {
              alert('Повторите заявку!');
            }
          }
        );
  }
}
