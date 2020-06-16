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
                            <a href="{{ route('role.create') }}" class="btn btn-primary mb-2">{{ __('Create Role') }}</a>
                            <table class="table table-hover table-outline mb-0">
                                <thead class="thead-light">
                                    <tr>
                                       <th class="text-center">Role Name</th>
                                       <th>Created Date</th>
                                       <th></th>
                                       <th></th>
                                   </tr>
                               </thead>
                               <tbody>
                                @foreach($roles as $role)
                                <tr>
                                    <td  class="text-center">
                                        {{ $role->role }}
                                    </td>
                                    <td>
                                        <small class="text-muted">{{ $role->created_at }}</small>
                                    </td>
                                    <td>
                                        <a href="{{ route('role.edit', ['id' => $role->id]) }}" class="btn btn-block btn-primary">Edit</a>
                                    </td>
                                    <td>
                                        <form action="{{ route('role.destroy', ['id' => $role->id]) }}" method="POST">
                                            @method('DELETE')
                                            {{ csrf_field() }}        
                                            <button class="btn btn-block btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
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

