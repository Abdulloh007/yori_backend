    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <h6>User</h6>
          </div>
          <div class="card-body p-5">
            <div class="d-flex justify-space-between">
              <div class="w-20">
                <img src="{{ asset('storage/'.$user->avatar) }}" alt="avatar" class="rounded-circle" width="200" height="200" style="object-fit: cover">
              </div>
              <div class="d-flex w-80">
                <div class="w-40">
                  <p>{{ $user->name." ".$user->surname }}</p>
                  <p>{{ $user->age }}</p>
                  <p>{{ $user->sex }}</p>
                  <p>{{ $user->phone_number }}</p>
                  <p>{{ $user->email }}</p>
                </div>
                <div class="60">
                  <p>{{ $user->rating }}</p>
                  <p>{{ $user->city }}</p>
                  <p>{{ $user->role }}</p>
                  <p>{{ $user->balance }}</p>
                </div>
              </div>
            </div>
            <div class="my-5 mx-3">
              <p>Bio:</p>
              {{ $user->bio }}
            </div>
            
            <div class="my-5 mx-3">
              <p>Tariffs:</p>
              <ul>
                @forelse ($user->tarif as $tarif)
                  <li>{{ $tarif }}</li>    
                @empty
                  <li>Hasn't Tariffs</li>    
                @endforelse
              </ul>
            </div>

            <div class="my-5 mx-3">
              <p>Video About:</p>
              <a href="{{ $user->video_about}}" class="text-primary" target="blank">{{ $user->video_about }}</a>              
            </div>
            <div>
              <a href="{{ route('users-edit',$user->id) }}" class="text-secondary font-weight-bold text-xs px-3 py-1" style="background: var(--bs-gray-200);border-radius: 5px;">Edit</a>
              @php
                  $user = Session::get('user');
                  $role = $user->role;
              @endphp
                @if (!$role>2)
                  <a href="{{ route('users-delete',$user->id) }}" class="text-white font-weight-bold text-xs px-3 py-1" style="background: var(--bs-red);border-radius: 5px;">Delete</a>
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