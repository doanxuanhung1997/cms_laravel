@extends('dashboard.base')

@section('content')

<div class="container-fluid">
  <div class="animated fadeIn">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div class="card">
          <div class="card-header">
            <h4>{{ __('Create User') }}</h4></div>
            <div class="card-body">
              <form action="/action_page.php">
               <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-6">
                  <div class="form-group">
                    <label for="email">Email address:</label>
                    <input type="email" class="form-control" placeholder="Enter email" id="email" required>
                  </div>
                   <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" placeholder="Enter password" id="pwd" required>
                  </div>
                   <div class="form-group">
                    <label for="pwd">Confirm password:</label>
                    <input type="password" class="form-control" placeholder="Enter password" id="pwd2" required>
                  </div>
                  <div class="form-group">
                    <label for="pwd">Full name:</label>
                    <input type="text" class="form-control" placeholder="Enter full name" id="fname" required>
                  </div>
                  <div class="form-group">
                    <label for="sel1">Select Role:</label>
                    <select class="form-control" id="role" name="role">
                      <option>Admin</option>
                      <option>Nember</option>
                      <option>Client</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="phone">Phone number:</label>
                    <input type="text" class="form-control" placeholder="Enter phone number" id="phone" required>
                  </div>
                  <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text" class="form-control" placeholder="Enter address" id="address" required>
                  </div>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-6">
                  <div class="text-center mb-3">
                    <img src="//placehold.it/100" class="avatar img-circle" width="220" height="220" alt="avatar">
                    <h6 class="my-3">Upload Avatar</h6>
                     <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile01">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                      </div>
                    </div>
                    {{-- <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile01">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                      </div>
                    </div> --}}
                  </div>
                </div>
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection


@section('javascript')


@endsection

