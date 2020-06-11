@extends('dashboard.base')

@section('content')

<div class="container-fluid">
	<div class="animated fadeIn">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
				<div class="card">
					<div class="card-header">
						<h4>{{ __('Users') }}</h4></div>
						<div class="card-body">
							<div class="row mb-2"> 
								<div class="col-lg-4 col-md-4"><a href="{{ route('user.create') }}" class="btn btn-primary">{{ __('Create User') }}</a></div>
								<div class="col-lg-8 col-md-8">Filter</div>
							</div>
							<table class="table table-responsive-sm table-responsive-md table-hover table-outline mb-0">
								<thead class="thead-light">
									<tr>
										<th class="text-center">
											<svg class="c-icon">
												 <use xlink:href="/icons/sprites/free.svg#cil-user"></use>
											</svg>
										</th>
										<th>Email</th>
										<th>FullName</th>
										<th>Role</th>
										<th>Created Date</th>
										<th></th>
										<th></th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="text-center">
											<div class="c-avatar">
												<img class="c-avatar-img" src="assets/img/avatars/1.jpg" alt="user@email.com">
											</div>
										</td>
										<td>
											Yiorgos Avraamu
										</td>
										<td>
											Yiorgos Avraamu
										</td>
										<td>
											Yiorgos Avraamu
										</td>
										<td>
											<small class="text-muted">Jun 11, 2015</small>
										</td>
										<td>
											<a href="{{ route('user.show') }}" class="btn btn-block btn-primary">View</a>
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
										<td class="text-center">
											<div class="c-avatar">
												<img class="c-avatar-img" src="assets/img/avatars/1.jpg" alt="user@email.com">
											</div>
										</td>
										<td>
											Yiorgos Avraamu
										</td>
										<td>
											Yiorgos Avraamu
										</td>
										<td>
											Yiorgos Avraamu
										</td>
										<td>
											<small class="text-muted">Jun 11, 2015</small>
										</td>
										<td>
											<a href="{{ route('user.show') }}" class="btn btn-block btn-primary">View</a>
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
										<td class="text-center">
											<div class="c-avatar">
												<img class="c-avatar-img" src="assets/img/avatars/1.jpg" alt="user@email.com">
											</div>
										</td>
										<td>
											Yiorgos Avraamu
										</td>
										<td>
											Yiorgos Avraamu
										</td>
										<td>
											Yiorgos Avraamu
										</td>
										<td>
											<small class="text-muted">Jun 11, 2015</small>
										</td>
										<td>
											<a href="{{ route('user.show') }}" class="btn btn-block btn-primary">View</a>
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
										<td class="text-center">
											<div class="c-avatar">
												<img class="c-avatar-img" src="assets/img/avatars/1.jpg" alt="user@email.com">
											</div>
										</td>
										<td>
											Yiorgos Avraamu
										</td>
										<td>
											Yiorgos Avraamu
										</td>
										<td>
											Yiorgos Avraamu
										</td>
										<td>
											<small class="text-muted">Jun 11, 2015</small>
										</td>
										<td>
											<a href="{{ route('user.show') }}" class="btn btn-block btn-primary">View</a>
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
										<td class="text-center">
											<div class="c-avatar">
												<img class="c-avatar-img" src="assets/img/avatars/1.jpg" alt="user@email.com">
											</div>
										</td>
										<td>
											Yiorgos Avraamu
										</td>
										<td>
											Yiorgos Avraamu
										</td>
										<td>
											Yiorgos Avraamu
										</td>
										<td>
											<small class="text-muted">Jun 11, 2015</small>
										</td>
										<td>
											<a href="{{ route('user.show') }}" class="btn btn-block btn-primary">View</a>
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

