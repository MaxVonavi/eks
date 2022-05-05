<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Заполните поля</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Как Вас зовут?</label>
            <input type="text" class="form-control" id="exampleInputName1" aria-describedby="emailHelp" placeholder="Введите Ваше имя" name="user_name">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Ваш номер</label>
            <input type="tel" class="form-control" id="exampleInputTel1" aria-describedby="TelHelp" placeholder="Введите номер" required name="user_phone">
            <small id="emailHelp" class="form-text text-muted">Мы позвоним один раз. И никому не передадим Ваш номер.</small>
          </div>
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" checked required>
            <label class="form-check-label" for="exampleCheck1"> <small> Я согласен на обработку своих персональных данных подробнее <a href="agreement.html">тут</a></small></label>
            <input type="hidden" id="typeOfWokk" name="typeOfWokk" value="модернизация ГПО">
          </div>
          <button type="button" onclick="sendEmail2()" class="btn btn-warning">Жду звонок!</button>
        </form>
      </div>
    </div>
  </div>
</div>
