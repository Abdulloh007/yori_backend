          <div class="row">
            <div class="col-lg-4 col-md-6 d-flex flex-column">
              <div class="card card-plain mt-3">
                <div class="card-body">
                  <form role="form" method="post" action="{{ route('roles.update',$roles->id) }}">
                    <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                    <label>Title</label>
                    <div class="mb-3">
                      <input type="text" class="form-control" name="title" placeholder="Name" aria-label="Name" aria-describedby="name-addon" value="{{ $roles->title }}">
                    </div>
                    <label>Description</label>
                    <div class="mb-3">
                      <input type="text" class="form-control" name="descr" placeholder="Description" aria-label="Description" aria-describedby="description-addon" value="{{ $roles->descr }}">
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Edit role</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>