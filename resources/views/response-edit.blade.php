          <div class="row">
            <div class="col-lg-4 col-md-6 d-flex flex-column">
              <div class="card card-plain mt-3">
                <div class="card-body">
                  <form role="form" method="post" action="{{ route('response-update',$response->id) }}">
                    <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                    <label>Price</label>
                    <div class="mb-3">
                      <input type="number" class="form-control" name="price" placeholder="Price" aria-label="Name" aria-describedby="name-addon" value="{{ $response->price }}">
                    </div>
                    <label>Description</label>
                    <div class="mb-3">
                      <input type="text" class="form-control" name="description" placeholder="Description" aria-label="Description" aria-describedby="description-addon" value="{{ $response->description }}">
                    </div>
                    <label>Status</label>
                    <div class="mb-3">
                      <select name="status" class="form-control">
                          <option selected disabled>Select</option>
                          <option value="1" {{ $response->status==1 ? "selected" : "" }}>approved</option>
                          <option value="0" {{ $response->status==0 ? "selected" : "" }}>unapproved</option>
                      </select>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Edit Response</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>