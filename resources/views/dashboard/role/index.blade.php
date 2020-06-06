@extends('dashboard.base')

@section('content')


<div class="container-fluid">
  <div class="fade-in">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header"><h4>Menu roles</h4>
          </div>
          <div class="card-body">
            <div class="row">
                <a class="btn btn-lg btn-primary" href="{{ route('role.create') }}">Add new role</a>
            </div>
            <br>
            <table class="table table-striped table-bordered datatable">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Hierarchy</th>
                        <th>Created at</th>
                        <th>Updated at</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            Name roles
                        </td>
                        <td>
                            hierarchy
                        </td>
                        <td>
                            created_at
                        </td>
                        <td>
                            updated_at
                        </td>
                        <td>
                            <a class="btn btn-success" href="">
                                <i class="cil-arrow-thick-top"></i> 
                            </a>
                        </td>
                        <td>
                            <a class="btn btn-success" href="">
                                <i class="cil-arrow-thick-bottom"></i>  
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('role.show') }}" class="btn btn-primary">Show</a>
                        </td>
                        <td>
                            <a href="{{ route('role.edit') }}" class="btn btn-primary">Edit</a>
                        </td>
                        <td>
                            <form action="" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection

@section('javascript')

@endsection