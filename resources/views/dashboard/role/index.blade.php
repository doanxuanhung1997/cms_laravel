@extends('dashboard.base')

@section('content')

<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4>{{ __('Roles') }}</h4></div>
                        <div class="card-body">
                            <a href="{{ route('user.create') }}" class="btn btn-primary mb-2">{{ __('Create Role') }}</a>
                            <table class="table table-responsive-sm table-hover table-outline mb-0">
                                <thead class="thead-light">
                                    <tr>
                                       <th class="text-center">Role Name</th>
                                       <th>Created Date</th>
                                       <th></th>
                                       <th></th>
                                   </tr>
                               </thead>
                               <tbody>
                                <tr>
                                    <td  class="text-center">
                                        Admin
                                    </td>
                                    <td>
                                        <small class="text-muted">Jun 11, 2015</small>
                                    </td>
                                    <td>
                                        <a href="{{ route('user.edit') }}" class="btn btn-block btn-primary">Edit</a>
                                    </td>
                                    <td>

                                        <form action="" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn btn-block btn-danger">Delete</button>
                                        </form>

                                    </td>
                                </tr>
                                 <tr>
                                    <td  class="text-center">
                                        Support
                                    </td>
                                    <td>
                                        <small class="text-muted">Jun 11, 2015</small>
                                    </td>
                                    <td>
                                        <a href="{{ route('user.edit') }}" class="btn btn-block btn-primary">Edit</a>
                                    </td>
                                    <td>

                                        <form action="" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn btn-block btn-danger">Delete</button>
                                        </form>

                                    </td>
                                </tr>
                                <tr>
                                    <td  class="text-center">
                                        Member
                                    </td>
                                    <td>
                                        <small class="text-muted">Jun 11, 2015</small>
                                    </td>
                                    <td>
                                        <a href="{{ route('user.edit') }}" class="btn btn-block btn-primary">Edit</a>
                                    </td>
                                    <td>

                                        <form action="" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn btn-block btn-danger">Delete</button>
                                        </form>

                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


@section('javascript')

@endsection

