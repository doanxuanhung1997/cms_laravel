@extends('dashboard.base')

@section('content')

        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6">
                <div class="card">
                    <div class="card-header">
                      <i class="fa fa-align-justify"></i> Post: Title</div>
                    <div class="card-body">
                        <form method="POST" action=""> @csrf<button class="btn btn-primary">{{ __('Post') }}</button></form> 
                        <br>
                        <h4>Author:</h4>
                        <p> name</p>
                        <h4>Title:</h4>
                        <p> title</p>
                        <h4>Content:</h4> 
                        <p>content</p>
                        <h4>Applies to date:</h4> 
                        {{-- <p>{{ $note->applies_to_date }}</p> --}}
                        <p>date</p>
                        <h4> Status: </h4>
                        <p>
                            <span class="">
                              status
                            </span>
                        </p>
                        <h4>Note type:</h4>
                        <p>type</p>
                        <a href="{{ route('post') }}" class="btn btn-block btn-primary">{{ __('Return') }}</a>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection


@section('javascript')

@endsection