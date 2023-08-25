    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <h6>Transaction #{{ $transaction->id }}</h6>
          </div>
          <div class="card-body p-5">
            <div class="d-flex justify-space-between">
              
              <div class="d-flex w-80">
                <div class="w-50">
                  <p>{{ $transaction->payment_date }}</p>
                  <p>{{ $transaction->enrollment_date }}</p>
                  <p>{{ $transaction->payment_amount }}</p>
                  <p>{{ $transaction->credit_amount }}</p>
                  <p>{{ $transaction->withdrawal_status }}</p>
                  <p>{{ $transaction->enrollment_status }}</p>
                  <p>{{ $transaction->card_holder }}</p>
                  <p>{{ $transaction->location }}</p>
                  <p>{{ $transaction->description }}</p>
                </div>
                
              </div>
            </div>
          
              <a href="{{ route('transactions-edit',$user->id) }}" class="text-secondary font-weight-bold text-xs px-3 py-1" style="background: var(--bs-gray-200);border-radius: 5px;">Edit</a>
              @php
                  $user = Session::get('user');
                  $role = $user->role;
              @endphp
                @if (!$role>2)
                  <a href="{{ route('transactions-delete',$user->id) }}" class="text-white font-weight-bold text-xs px-3 py-1" style="background: var(--bs-red);border-radius: 5px;">Delete</a>
                @endif
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