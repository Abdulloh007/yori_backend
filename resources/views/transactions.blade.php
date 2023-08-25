    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header d-flex pb-0 w-100 align-items-center justify-content-between">
            <h6>Users Table</h6>
            <form method="GET" action="" class="w-md-20 d-flex justify-content-around align-items-center">
                <select name="role" id="" class="form-control mx-2">
                    <option value="0">All</option>
                    @forelse ($cities as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @empty
                        
                    @endforelse
                </select>
                <input type="submit" class="btn btn-primary mb-0" value="ok">
            </form>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center justify-content-center mb-0">
                {{-- <a href="{{ route('transactions-create') }}" class="text-white font-weight-bold text-xs mx-3 px-3 py-1" style="background: var(--bs-success);border-radius: 5px;">Add</a> --}}
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Дата оплаты</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Дата зачисления</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Оплачено</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Зачислено</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Статус снятия</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Статус зачисления</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Плательщик</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Локация</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Описание</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Действия</th>
                  </tr>
                </thead>
                <tbody>
                    @forelse ($transactions as $transaction)
                        <tr>
                          <td>
                            <div class="d-flex px-3">
                                <h6 class="mb-0 text-sm">{{ $transaction->payment_date }}</h6>
                            </div>
                          </td>
                          <td>
                            <div class="d-flex px-3">
                                <h6 class="mb-0 text-sm">{{ $transaction->enrollment_date }}</h6>
                            </div>
                          </td>
                          <td>
                            <div class="d-flex px-3">
                                <h6 class="mb-0 text-sm">{{ $transaction->payment_amount }}</h6>
                            </div>
                          </td>
                          <td>
                            <div class="d-flex px-3">
                                <h6 class="mb-0 text-sm">{{ $transaction->credit_amount }}</h6>
                            </div>
                          </td>
                          
                          <td>
                            <div class="d-flex px-3">
                                <h6 class="mb-0 text-sm">{{ $transaction->withdrawal_status }}</h6>
                            </div>
                          </td>
                          <td>
                            <div class="d-flex px-3">
                                <h6 class="mb-0 text-sm">{{ $transaction->enrollment_status }}</h6>
                            </div>
                          </td>
                          
                          <td>
                            <div class="d-flex px-3">
                                <h6 class="mb-0 text-sm">{{ $transaction->card_holder }}</h6>
                            </div>
                          </td>

                          <td>
                            <div class="d-flex px-3">
                                <h6 class="mb-0 text-sm">{{ $transaction->location }}</h6>
                            </div>
                          </td>
                          
                          <td>
                            <div class="d-flex px-3">
                                <h6 class="mb-0 text-sm">{{ $transaction->description }}</h6>
                            </div>
                          </td>

                          <td>
                              <a href="{{ route('transactions-show',$transaction->id) }}" class="text-primary font-weight-bold text-xs px-3 py-1" style="background: var(--bs-gray-200);border-radius: 5px;">View</a>
                              <a href="{{ route('transactions-edit',$transaction->id) }}" class="text-secondary font-weight-bold text-xs px-3 py-1" style="background: var(--bs-gray-200);border-radius: 5px;">Edit</a>
                              <a href="{{ route('transactions-delete',$transaction->id) }}" class="text-white font-weight-bold text-xs px-3 py-1" style="background: var(--bs-red);border-radius: 5px;">Delete</a>
                          </td>
                        </tr>
                    @empty
                        <tr><td><h6 class="mb-0 text-sm px-3">Transactions Not Found</h6><td></tr>
                    @endforelse
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer pt-3  ">
      <div class="container-fluid">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6 mb-lg-0 mb-4">
            <div class="copyright text-center text-sm text-muted text-lg-start">
              © <script>
                document.write(new Date().getFullYear())
              </script>,
              made with <i class="fa fa-heart" aria-hidden="true"></i> by
              <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">AlovesZ</a>
              for a better web.
            </div>
          </div>
          {{-- <div class="col-lg-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
              <li class="nav-item">
                <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">AlovesZ</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
              </li>
            </ul>
          </div> --}}
        </div>
      </div>
    </footer>