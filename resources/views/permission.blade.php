    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <h6>Permission Table</h6>
          </div>
          <style>
            input[type="checkbox"]{
              width: 15px;
              height: 15px;
            }
          </style>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center justify-content-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Route</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @forelse ($permissions as $permission)
                    <tr>
                      <form action="{{ route('permission-update',$permission->id) }}" id="permissions" method="post">
                    <td>
                      <div class="d-flex px-3">
                          <h6 class="mb-0 text-sm">{{ $permission->route }}</h6>
                      </div>
                    </td>
                    <td>
                        <a href="{{ route('permission-edit',$permission->id) }}" class="text-secondary font-weight-bold text-xs px-3 py-1" style="background: var(--bs-gray-200);border-radius: 5px;">Edit</a>
                      </td>
                    </form>
                  </tr>
                    @empty
                        <tr><td><h6 class="mb-0 text-sm px-3">Permission Not Found</h6><td></tr>
                    @endforelse
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
