@extends('dashboard.base')

@section('content')

        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                      <i class="fa fa-align-justify"></i>{{ __('Post') }}</div>
                    <div class="card-body">
                        <div class="row"> 
                          <a href="{{ route('post.create') }}" class="btn btn-primary m-2">{{ __('Add Post') }}</a>
                        </div>
                        <br>
                        <table class="table table-responsive-sm table-striped">
                        <thead>
                          <tr>
                            <th>Author</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Applies to date</th>
                            <th>Status</th>
                            <th>Note type</th>
                            <th></th>
                            <th></th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                            <tr>
                              <td><strong>text</strong></td>
                              <td><strong>text</strong></td>
                              <td>text</td>
                              <td>text</td>
                              <td>
                                  <span class="">
                                      text
                                  </span>
                              </td>
                              <td><strong>text</strong></td>
                              <td>
                                <a href="{{ route('post.show') }}" class="btn btn-block btn-primary">View</a>
                              </td>
                              <td>
                                <a href="{{ route('post.edit') }}" class="btn btn-block btn-primary">Edit</a>
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

