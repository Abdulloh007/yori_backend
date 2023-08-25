<div class="row">
  <div class="col-lg-4 col-md-6 d-flex flex-column">
    <div class="card card-plain mt-3">
      <div class="card-body">
        <form role="form" method="post" action="{{ route('transactions-store') }}">
          <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
         
          <label>Дата оплаты</label>
          <div class="mb-3">
            <input type="datetime-local" class="form-control" name="payment_date" placeholder="Name" aria-label="Name" aria-describedby="name-addon">
          </div>

          <label>Дата зачисления</label>
          <div class="mb-3">
            <input type="datetime-local" class="form-control" name="enrollment_date" placeholder="Name" aria-label="Name" aria-describedby="name-addon">
          </div>

          <label>Оплачено</label>
          <div class="mb-3">
            <input type="text" class="form-control" name="payment_amount" placeholder="Name" aria-label="Name" aria-describedby="name-addon">
          </div>
          
          <label>Зачислено</label>
          <div class="mb-3">
            <input type="text" class="form-control" name="credit_amount" placeholder="Name" aria-label="Name" aria-describedby="name-addon">
          </div>
          
          <label>Статус снятия</label>
          <div class="mb-3">
            <input type="text" class="form-control" name="withdrawal_status" placeholder="Name" aria-label="Name" aria-describedby="name-addon">
          </div>
          
          <label>Статус зачисления</label>
          <div class="mb-3">
            <input type="text" class="form-control" name="enrollment_status" placeholder="Name" aria-label="Name" aria-describedby="name-addon">
          </div>
          
          <label>Плательщик</label>
          <div class="mb-3">
            <input type="text" class="form-control" name="card_holder" placeholder="Name" aria-label="Name" aria-describedby="name-addon" disabled>
          </div>
          
          <label>Локация</label>
          <div class="mb-3">
            <input type="text" class="form-control" name="location" placeholder="Name" aria-label="Name" aria-describedby="name-addon">
          </div>
          
          <label>Описание</label>
          <div class="mb-3">
            <textarea type="text" class="form-control" name="description" placeholder="Name" aria-label="Name" aria-describedby="name-addon"></textarea>
          </div>

          <div class="text-center">
            <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Добавить</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

