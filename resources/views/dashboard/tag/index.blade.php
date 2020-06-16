@extends('dashboard.base')

@section('content')

<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4>{{ __('Tags') }}</h4></div>
                        <div class="card-body">
                            <a href="{{ route('tag.create') }}" class="btn btn-primary mb-2">{{ __('Create Tag') }}</a>
                            <table class="table table-hover table-outline mb-0">
                                <thead class="thead-light">
                                    <tr>
                                       <th class="text-center">Tag Name</th>
                                       <th>Created Date</th>
                                       <th></th>
                                       <th></th>
                                   </tr>
                               </thead>
                               <tbody>
                                @foreach($tags as $tag)
                                <tr>
                                    <td  class="text-center">
                                        {{ $tag->tag }}
                                    </td>
                                    <td>
                                        <small class="text-muted">{{ $tag->created_at }}</small>
                                    </td>
                                    <td>
                                        <a href="{{ route('tag.edit', ['id' => $tag->id]) }}" class="btn btn-block btn-primary">Edit</a>
                                    </td>
                                    <td>
                                        <form action="{{ route('tag.destroy', ['id' => $tag->id]) }}" method="POST">
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

