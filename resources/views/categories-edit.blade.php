<div class="row">
  <div class="col-lg-4 col-md-6 d-flex flex-column ">
    <div class="card card-plain mt-3">
      <div class="card-body">
        <form role="form" method="post" action="{{ route('categories-update',$category->id) }}" enctype="multipart/form-data">
          <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
          <label>Name</label>
          <div class="mb-3">
            <input type="text" class="form-control" name="name" placeholder="Name" aria-label="Name" aria-describedby="name-addon" value="{{ $category->name }}">
          </div>
          <label>Tj Name</label>
          <div class="mb-3">
            <input type="text" class="form-control" name="tj_name" placeholder="Tj Name" aria-label="Tj Name" value="{{ $category->tj_name }}">
          </div>
          <label>Icon</label>
          <div class="mb-3">
            <input type="file" class="form-control" name="icon">
            <input type="hidden" value="{{ $category->icon }}" name="prev_icon">
          </div>
          <div class="text-center">
            <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Edit category</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>