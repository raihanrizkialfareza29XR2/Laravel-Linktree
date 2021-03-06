@extends('layouts.dashboard')

@section('title')
    admin
@endsection

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah admin</h1>
    <p>Periode : 2020-2021</p>
</div>

<!-- Content Row -->
<div class="page-inner mt--5">
	<div class="row">
		<div class="col-md-12">
			<div class="card full-height">
				<div class="card-header">
					<div class="card-head-row">
						<div class="card-title">Tambah links</div>
						<a href="{{ route('links.index') }}" class="btn btn-primary btn-sm ml-auto">Back</a>
					</div>
				</div>
				
				@if (Auth::user()->roles == 'ADMIN')
					<div class="card-body">
						<form action="{{ route('links.store') }}" method="POST" enctype="multipart/form-data">
							@csrf
							<div class="form-group">
								<label for="judul">Link</label>
								<input type="text" class="form-control" name="link">
							</div>
							<div class="form-group">
								<label for="judul">User</label>
								<select name="user_id" id="">
									@foreach ($user as $u)
										<option value="{{ $u->id }}">{{ $u->name }}</option>
									@endforeach
								</select>
							</div>
						</form>
					</div>
				@else
					<div class="card-body">
						<form action="{{ route('links.store') }}" method="POST" enctype="multipart/form-data">
							@csrf
							<div class="form-group">
								<label for="judul">Link Placeholder</label>
								<input type="text" class="form-control" name="name">
							</div>
							<div class="form-group">
								<label for="judul">Link</label>
								<input type="text" class="form-control" name="link">
							</div>
							<div class="form-group">
								<button class="btn btn-primary">Save</button>
							</div>
						</form>
					</div>
				@endif
@endsection