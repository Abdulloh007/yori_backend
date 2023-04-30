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
                    @foreach ($roles as $role)
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">{{$role->title}}</th>  
                    @endforeach
                    
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Edit</th>
                  </tr>
                </thead>
                <tbody>
                    @forelse ($permissions as $permission)
                    <tr>
                      <form action="{{ route('permission-update-admin',$permission->id) }}" id="permissions" method="post">
                    <td>
                      <div class="d-flex px-3">
                          <h6 class="mb-0 text-sm">{{ $permission->route }}</h6>
                      </div>
                    </td>
                    <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                    @foreach ($roles as $role)
                      <td>
                          @php
                          // if $permission->get is null
                          if($permission->get != null){
                            $a = $permission->get;
                          }else if($permission->post != null){
                            $a = $permission->post;
                          }else
                            $a = $permission->delete;
                          @endphp

                          <input type="checkbox" name="{{$role->title}}" id="" {{ in_array($role->id,explode(',',$a)) ? "checked" : "" }}>
                      </td>
                    @endforeach
                    <td>
                        <input type="submit" class="btn" value="set" name="ok{{ $permission->id }}" id="">
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
