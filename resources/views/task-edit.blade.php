<div class="row">
  <div class="col-lg-4 col-md-6 d-flex flex-column">
    <div class="card card-plain mt-3">
      <div class="card-body">
        <form role="form" method="post" action="{{ route('task-update',$task->id) }}" enctype="multipart/form-data">
          <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
          
          <label>Title</label>
          <div class="mb-3">
            <input type="text" class="form-control" name="title" placeholder="Title" aria-label="Name" aria-describedby="name-addon" value="{{ $task->title }}">
          </div>

          <label>Description</label>
          <div class="mb-3">
            <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Description">{{ $task->description }}</textarea>
          </div>

          <label>Date of Start</label>
          <div class="mb-3">
            <input type="date" class="form-control" name="date_of_start" placeholder="Date of Start" aria-label="Name" aria-describedby="name-addon" value="{{ $task->date_of_start }}">
          </div>
          
          <label>Deadline</label>
          <div class="mb-3">
            <input type="date" class="form-control" name="deadline" placeholder="Deadline" aria-label="Name" aria-describedby="name-addon" value="{{ $task->deadline }}">
          </div>

          <label>Private Description</label>
          <div class="mb-3">
            <textarea name="private_description" id="" cols="30" rows="10" class="form-control" placeholder="Private Description">{{ $task->private_description }}</textarea>
          </div>

          <label>Budget</label>
          <div class="mb-3">
            <input type="number" class="form-control" name="budget" placeholder="Budget" aria-label="Name" aria-describedby="name-addon" value="{{ $task->budget }}">
          </div>

          <label>Price</label>
          <div class="mb-3">
            <input type="number" class="form-control" name="price" placeholder="Price" aria-label="Name" aria-describedby="name-addon" value="{{ $task->price }}">
          </div>

          <label>Payment type</label>
          <div class="mb-3">
            <input type="7" class="form-control" name="payment_type" placeholder="Payment Type" aria-label="Name" aria-describedby="name-addon" value="{{ $task->payment_type }}">
          </div>

          <label>Category</label>
          <div class="mb-3">
            <select name="category" id="" class="form-control">
              <option selected disabled>Select Category</option>
              @forelse ($category as $item)
                  <option value="{{ $item->id }}" {{ $item->id==$task->category ? "selected" : "" }}>{{ $item->name }}</option>
              @empty
              @endforelse
            </select>
          </div>

          
          <label>Subcategory</label>
          <div class="mb-3">
            <select name="subcategory" id="" class="form-control">
              <option selected disabled>Select subcategory</option>
              @forelse ($subcategory as $item)
                  <option value="{{ $item->id }}" {{ $item->id==$task->subcategory ? "selected" : "" }}>{{ $item->name }}</option>
              @empty
              @endforelse
            </select>
          </div>

          <div class="text-center">
            <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Edit task</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>