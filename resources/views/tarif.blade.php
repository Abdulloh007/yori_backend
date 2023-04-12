    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <h6>Tariff Table</h6>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center justify-content-center mb-0">
                <a href="{{ route('tarif.create') }}" class="text-white font-weight-bold text-xs mx-3 px-3 py-1" style="background: var(--bs-success);border-radius: 5px;">Add</a>
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Title</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Description</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">price</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @forelse ($tarif as $tariff)
                    <tr>
                    <td>
                      <div class="d-flex px-3">
                          <h6 class="mb-0 text-sm">{{ $tariff->name }}</h6>
                      </div>
                    </td>
                    <td>
                      <div class="d-flex px-3">
                          <h6 class="mb-0 text-sm">{{ $tariff->description }}</h6>
                      </div>
                    </td>
                    <td>
                      <div class="d-flex px-3">
                          <h6 class="mb-0 text-sm">{{ $tariff->price }}</h6>
                      </div>
                    </td>
                    <td>
                        <a href="{{ route('tarif.edit',$tariff->id) }}" class="text-secondary font-weight-bold text-xs px-3 py-1" style="background: var(--bs-gray-200);border-radius: 5px;">Edit</a>
                        <a href="{{ route('tarif.delete',$tariff->id) }}" class="text-white font-weight-bold text-xs px-3 py-1" style="background: var(--bs-red);border-radius: 5px;">Delete</a>
                    </td>
                  </tr>
                    @empty
                        <tr><td><h6 class="mb-0 text-sm px-3">Tariff Not Found</h6><td></tr>
                    @endforelse
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
