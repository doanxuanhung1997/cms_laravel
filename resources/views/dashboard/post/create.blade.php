@extends('dashboard.base')

@section('content')

<div class="container-fluid">
  <div class="animated fadeIn">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div class="card">
            <div class="card-header">
              <i class="fa fa-align-justify"></i> {{ __('Create Post') }}</div>
              <div class="card-body">
                <form method="POST" action="">
                    @csrf
                    <div class="form-group row">
                        <label>Title</label>
                        <input class="form-control" type="text" placeholder="{{ __('Title') }}" name="title" required autofocus>
                    </div>

                    <div class="form-group row">
                        <label>Content</label>
                        <textarea class="form-control" id="textarea-input" name="content" rows="9" placeholder="{{ __('Content..') }}" required></textarea>
                    </div>

                    <div class="form-group row">
                        <label>Applies to date</label>
                        <input type="date" class="form-control" name="applies_to_date" required/>
                    </div>

                    <div class="form-group row">
                        <label>Status</label>
                        <select class="form-control" name="status_id">
                            <option value="aa">test</option>
                            <option value="aa">test</option>
                                    {{-- @foreach($statuses as $status)
                                        <option value="{{ $status->id }}">{{ $status->name }}</option>
                                        @endforeach --}}
                                    </select>
                                </div>

                                <div class="form-group row">
                                    <label>Note type</label>
                                    <input class="form-control" type="text" placeholder="{{ __('Note type') }}" name="note_type" required>
                                </div>

                                <button class="btn btn-block btn-success" type="submit">{{ __('Add') }}</button>
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