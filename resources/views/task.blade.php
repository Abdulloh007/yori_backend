    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <h6>Task Table</h6>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center justify-content-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Title</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date of start</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Deadline</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">budget</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @forelse ($tasks as $task)
                    <tr>
                    <td>
                      <div class="d-flex px-3">
                          <h6 class="mb-0 text-sm">{{ $task->title }}</h6>
                      </div>
                    </td>
                    <td>
                      <div class="d-flex px-3">
                          <h6 class="mb-0 text-sm">{{ $task->status == 0 ? 'На рассмотрении' : ($task->status == 1 ? 'Одобрено' : ($task->status == 2 ? 'Завершено/Выполнено' : ($task->status == 3 ? 'Завершено/Не выполнено' : '')))}}</h6>
                      </div>
                    </td>
                    <td>
                      <div class="d-flex px-3">
                          <h6 class="mb-0 text-sm">{{ $task->date_of_start }}</h6>
                      </div>
                    </td>
                    <td>
                      <div class="d-flex px-3">
                          <h6 class="mb-0 text-sm">{{ $task->deadline }}</h6>
                      </div>
                    </td>
                    
                    <td>
                      <div class="d-flex px-3">
                          <h6 class="mb-0 text-sm">{{ $task->budget }}</h6>
                      </div>
                    </td>
                    <td>
                        <a href="{{ route('task-show',$task->id) }}" class="text-primary font-weight-bold text-xs px-3 py-1" style="background: var(--bs-gray-200);border-radius: 5px;">View</a>
                        <a href="{{ route('task-edit',$task->id) }}" class="text-secondary font-weight-bold text-xs px-3 py-1" style="background: var(--bs-gray-200);border-radius: 5px;">Edit</a>
                        <a href="{{ route('task-delete',$task->id) }}" class="text-white font-weight-bold text-xs px-3 py-1" style="background: var(--bs-red);border-radius: 5px;">Delete</a>
                    </td>
                  </tr>
                    @empty
                        <tr><td><h6 class="mb-0 text-sm px-3">Tasks Not Found</h6><td></tr>
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