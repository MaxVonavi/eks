var ename = '';
var ephone = '';
var epage = '';
var phoneCheckValue = '';


function sendEmailIndex() {
  ename = $('#ename').val();
  ephone = $('#ephone').val();
  epage = 'с главной страницы';
  phoneCheckValue = $('#exampleCheck1').is(':checked');
  if (ephone == '') {
    alert('Укажите Ваш номер телефона!');
  }
  else if (ehouse == '') {
    alert('Кратко опишите объект');
  }
  else if (eadress == '') {
    alert('Укажите адрес объекта');
  }
  else if (phoneCheckValue != true) {
    alert('Нужно согласиться на обработку данных!');
  }
  else {
    $.post(
          "../php/mail.php",
          {
            "name" : ename,
            "phone" : ephone,
            "house" : ehouse,
            "adress" : eadress,
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
