          <div class="row">
            <div class="col-lg-4 col-md-6 d-flex flex-column">
              <div class="card card-plain mt-3">
                <div class="card-body">
                  <form role="form" method="post" action="{{ route('permission-update',$permission->id) }}" enctype="multipart/form-data">
                    <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                    <label>Route</label>
                    <div class="mb-3">
                      <input type="text" disabled class="form-control" name="route" placeholder="Name" aria-label="Name" aria-describedby="name-addon" value="{{ $permission->route }}">
                    </div>
                    <label>Get</label>
                    <div class="mb-3">
                      @php
                          $array = explode(',',$permission->get);
                      @endphp
                        <select name="get[]" class="form-control" multiple>
                            @forelse($roles as $role)
                                <option value="{{ $role->id }}" {{ in_array($role->id,$array) ? "selected" : "" }}>{{ $role->title }}</option>
                            @empty
                                <option value="" selected>None</option>
                            @endforelse
                        </select>
                    </div>
                    <label>Post</label>
                    <div class="mb-3">
                      @php
                          $array = explode(',',$permission->post);
                      @endphp
                        <select name="post[]" class="form-control" multiple>
                            @forelse($roles as $role)
                                <option value="{{ $role->id }}" {{ in_array($role->id,$array) ? "selected" : "" }}>{{ $role->title }}</option>
                            @empty
                                <option value="" selected>None</option>
                            @endforelse
                        </select>
                    </div>
                    <label>Delete</label>
                    <div class="mb-3">
                      @php
                          $array = explode(',',$permission->delete);
                      @endphp
                        <select name="delete[]" class="form-control" multiple>
                            @forelse($roles as $role)
                                <option value="{{ $role->id }}" {{ in_array($role->id,$array) ? "selected" : "" }}>{{ $role->title }}</option>
                            @empty
                                <option value="" selected>None</option>
                            @endforelse
                        </select>
                    <div class="text-center">
                      <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Edit tariff</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <script>
            console.dir(document.querySelectorAll('select'))
          </script>