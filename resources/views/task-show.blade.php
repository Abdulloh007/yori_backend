    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header d-flex pb-0 w-100 align-items-center justify-content-between ">
            <h6>Task</h6>
            @if ($task->status < 1)
                <a class="btn btn-primary" href="{{ route('task-approve', $task->id) }}">Одобрить</a>
            @endif
          </div>
          <div class="card-body p-5">
            <div class="d-flex justify-space-between">
              <div class="d-flex w-80">
                <div class="w-40">
                  <p><b>Title:</b> &nbsp; {{ $task->title }} </p>
                  <p><b>Description:</b> &nbsp; {{ $task->description }} </p>
                  <p><b>Status:</b> &nbsp; {{ $task->status == 0 ? 'На рассмотрении' : ($task->status == 1 ? 'Одобрено' : ($task->status == 2 ? 'Завершено/Выполнено' : ($task->status == 3 ? 'Завершено/Не выполнено' : '')))}} </p>
                  @php
                    if(!is_null($task->address))
                      $taddress = json_decode($task->address);
                    else
                      $taddress = [];
                  @endphp
                  <p><b>Address:</b> 
                  @forelse ($taddress as $idx => $item)
                      <p>{{ $idx + 1 }}. {{ $item->address }}</p>
                  @empty
                  @endforelse
                  
                  </p>
                  
                  
                  <p><b>Date of start:</b> &nbsp; {{ $task->date_of_start }} </p>
                  <p><b>Deadline:</b> &nbsp; {{ $task->deadline }} </p>
                  <p><b>Budget:</b> &nbsp; {{ $task->budget }} </p>
                  <p><b>Payment type:</b> &nbsp; {{ $task->payment_type }} </p>
                  <p><b>Price:</b> &nbsp; {{ $task->price }} </p>
                  <p><b>Views:</b> &nbsp; {{ $task->views }} </p>
                  <p><b>Status:</b> &nbsp; {{ $task->status }} </p>
                  <p><b>Category:</b> &nbsp; {{ $task->category }} </p>
                  <p><b>Subcategory:</b> &nbsp; {{ $task->subcategory }} </p>
                  <p><b>Private Description:</b> &nbsp; {{ $task->private_description }} </p>
                  <p><b>Customer:</b> &nbsp; {{ $task->customer_name }} </p>
                  <p><b>Perfomer:</b> &nbsp; {{ $task->perfomer_name }} </p>
                  
                </div>
                
              </div>
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