$(document).ready(function(){
  $('.projects').slick({
    fade: true,
  });
  $('.slider-workshop').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true,
    fade: true,
    arrows: true,
  });
});

$(document).ready(function() {
    $(".limenu").on("click","a", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
            top = $(id).offset().top;

        $('body,html').animate({scrollTop: top}, 1000);
    });
});
$(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            if ($('#upbutton').is(':hidden')) {
                $('#upbutton').css({opacity : 1}).fadeIn('slow');
            }
        } else { $('#upbutton').stop(true, false).fadeOut('fast'); }
    });
$(document).ready(function(){
    $("#upbutton").on("click","a", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
            top = $(id).offset().top;

        $('body,html').animate({scrollTop: top}, 1000);
    });
});
$(document).ready(function() {
  $('.noColor').on('click', function () {
    window.open("examples.php","_self");
  });
});
$(document).ready(function() {
  $('#indexHref').on('click', function () {
    window.open("index.php","_self");
  });
});

var topInput = '';
var phoneInputValue = '';
var phoneCheckValue = '';
var typeOfWokk = '';


function sendEmail() {
  topInput = $('#inputTop').val();
  phoneInputValue = $('#phoneInput').val();
  typeOfWork = $('#typeOfWork').val();
  phoneCheckValue = $('#exampleCheck').is(':checked');
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
