<div class="row">
  <div class="col-lg-4 col-md-6 d-flex flex-column">
    <div class="card card-plain mt-3">
      <div class="card-body">
        <form role="form" method="post" action="{{ route('subcategories-update',$subcategory->id) }}">
          <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
          <label>Name</label>
          <div class="mb-3">
            <input type="text" class="form-control" name="name" placeholder="Name" aria-label="Name" aria-describedby="name-addon" value="{{ $subcategory->name }}">
          </div>
          <label>Category</label>
          <div class="mb-3">
            <select name="categories_id" id="" class="form-control">
                <option value="" >Select Category</option>
                @foreach ($categories as $category)
                  <option value="{{$category->id}}" @if($category->id==$subcategory->categories_id) selected @endif >{{ $category->name }}</option>
                @endforeach
            </select>
          </div>
          <label>Tariff</label>
          <div class="mb-3">
            <select name="tarif" id="" class="form-control">
                <option value="" >Select Tariff</option>
                @foreach ($tarif as $tariff)
                  <option value="{{$tariff->id}}" @if($tariff->id==$subcategory->tarif) selected @endif >{{ $tariff->name }}</option>
                @endforeach
            </select>
          </div>
          <div class="text-center">
            <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Edit subcategory</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>