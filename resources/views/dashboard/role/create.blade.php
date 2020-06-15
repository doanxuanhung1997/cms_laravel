@extends('dashboard.base')

@section('content')

<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4>{{ __('Create Role') }}</h4></div>
                        <div class="card-body">
                            <form action="/action_page.php">
                                <div class="d-flex flex-row mb-3">
                                    <label class="mt-1 mr-2" for="role">Role:</label>
                                    <input type="text" class="form-control" placeholder="Enter role" id="role" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
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

