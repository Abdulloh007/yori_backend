<div class="row">
  <div class="col-lg-4 col-md-6 d-flex flex-column">
    <div class="card card-plain mt-3">
      <div class="card-body">
        <form role="form" method="post" action="{{ route('users-update',$user->id) }}" enctype="multipart/form-data">
          <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
          
          <label>Name</label>
          <div class="mb-3">
            <input type="text" class="form-control" name="name" placeholder="Name" aria-label="Name" aria-describedby="name-addon" value="{{ $user->name }}">
          </div>

          <label>Surname</label>
          <div class="mb-3">
            <input type="text" class="form-control" name="surname" placeholder="Surname" aria-label="Name" aria-describedby="name-addon" value="{{ $user->surname }}">
          </div>

          <label>Avatar</label>
          <div class="mb-3">
            <input type="file" class="form-control" name="avatar" placeholder="File" aria-label="Name" aria-describedby="name-addon" value="{{ $user->avatar }}">
          </div>

          <label>Age</label>
          <div class="mb-3">
            <input type="number" class="form-control" name="age" placeholder="Number" aria-label="Name" aria-describedby="name-addon" value="{{ $user->number }}">
          </div>

          <label>City</label>
          <div class="mb-3">
            <select name="city" class="form-control" id="">
                <option value="">Khujand</option>
            </select>
          </div>

          <label>Rating</label>
          <div class="mb-3">
            <input type="number" class="form-control" name="rating" placeholder="Rating" aria-label="Name" aria-describedby="name-addon" value="{{ $user->rating }}">
          </div>

          <label>Bio</label>
          <div class="mb-3">
            <textarea name="bio" id="" cols="30" rows="10" class="form-control" placeholder="Bio"></textarea>
          </div>

          <label>Video About</label>
          <div class="mb-3">
            <input type="text" class="form-control" name="video_about" placeholder="https://youtube.com/?watch=123" aria-label="Name" aria-describedby="name-addon" value="{{ $user->video_about }}">
          </div>

          {{-- <label>Status</label>
          <div class="mb-3">
            <input type="text" class="form-control" name="name" placeholder="Name" aria-label="Name" aria-describedby="name-addon" value="{{ $user->name }}">
          </div> --}}

          <label>Role</label>
          <div class="mb-3">
            <input type="text" class="form-control" name="name" placeholder="Name" aria-label="Name" aria-describedby="name-addon" value="{{ $user->name }}">
          </div>

          <label>Balance</label>
          <div class="mb-3">
            <input type="text" class="form-control" name="name" placeholder="Name" aria-label="Name" aria-describedby="name-addon" value="{{ $user->name }}">
          </div>

          <label>Email</label>
          <div class="mb-3">
            <input type="text" class="form-control" name="name" placeholder="Name" aria-label="Name" aria-describedby="name-addon" value="{{ $user->name }}">
          </div>

          <label>Date of birth</label>
          <div class="mb-3">
            <input type="text" class="form-control" name="name" placeholder="Name" aria-label="Name" aria-describedby="name-addon" value="{{ $user->name }}">
          </div>

          <div class="text-center">
            <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Edit subcategory</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>