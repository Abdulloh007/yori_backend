    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <h6>Response Table</h6>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center justify-content-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Price</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Description</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Task</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">User</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @forelse ($responses as $response)
                    <tr>
                    <td>
                      <div class="d-flex px-3">
                          <h6 class="mb-0 text-sm">{{ $response->price }}</h6>
                      </div>
                    </td>
                    <td>
                      <div class="d-flex px-3">
                          <h6 class="mb-0 text-sm">{{ $response->description }}</h6>
                      </div>
                    </td>
                    <td>
                      <div class="d-flex px-3">
                          <h6 class="mb-0 text-sm"><a href="{{ route('task-show',$response->task)}}" target="blank">{{ $response->task_title }}</a></h6>
                      </div>
                    </td>
                    <td>
                      <div class="d-flex px-3">
                          <h6 class="mb-0 text-sm"><a href="{{ route('users-show',$response->user)}}" target="blank">{{ $response->user_name }}</a></h6>
                      </div>
                    </td>
                    <td>
                        <a href="{{ route('response-edit',$response->id) }}" class="text-secondary font-weight-bold text-xs px-3 py-1" style="background: var(--bs-gray-200);border-radius: 5px;">Edit</a>
                        <a href="{{ route('response-delete',$response->id) }}" class="text-white font-weight-bold text-xs px-3 py-1" style="background: var(--bs-red);border-radius: 5px;">Delete</a>
                    </td>
                  </tr>
                    @empty
                        <tr><td><h6 class="mb-0 text-sm px-3">Responses Not Found</h6><td></tr>
                    @endforelse
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
