@extends('dashboard.base')

@section('content')

<div class="container-fluid">
  <div class="animated fadeIn">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div class="card">
            <div class="card-header">
              <i class="fa fa-align-justify"></i> {{ __('Edit') }}: title</div>
              <div class="card-body">
                {{-- <form method="POST" action="/notes/{{ $note->id }}"> --}}
                    <form method="POST" action="">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <div class="col">
                                <label>Title</label>
                                <input class="form-control" type="text" placeholder="{{ __('Title') }}" name="title" value="title" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col">
                                <label>Content</label>
                                <textarea class="form-control" id="textarea-input" name="content" rows="9" placeholder="{{ __('Content..') }}" required>content</textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col">
                                <label>Applies to date</label>
                                <input type="date" class="form-control" name="applies_to_date" value="date" required/>
                            </div>
                        </div>

                           {{--  <div class="form-group row">
                                <div class="col">
                                    <label>Status</label>
                                    <select class="form-control" name="status_id">
                                        @foreach($statuses as $status)
                                            @if( $status->id == $note->status_id )
                                                <option value="{{ $status->id }}" selected="true">{{ $status->name }}</option>
                                            @else
                                                <option value="{{ $status->id }}">{{ $status->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div> --}}

                            <div class="form-group row">
                                <div class="col">
                                    <label>Status</label>
                                    <select class="form-control" name="status_id">
                                        <option value="aaa" selected="true">aas</option>
                                        
                                        <option value="">aaa</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col">
                                    <label>Note type</label>
                                    <input class="form-control" type="text" placeholder="{{ __('Note type') }}" name="note_type" value="text" required>
                                </div>
                            </div>
                            
                            <button class="btn btn-block btn-success" type="submit">{{ __('Save') }}</button>
                            <a href="{{ route('post') }}" class="btn btn-block btn-primary">{{ __('Return') }}</a> 
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