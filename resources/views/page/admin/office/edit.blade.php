@extends('layouts.dashboard')

@section('title')
    edit admin
@endsection

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit office link</h1>
    <p>Periode : 2020-2021</p>
</div>

<!-- Content Row -->
<div class="page-inner mt--5">
	<div class="row">
		<div class="col-md-12">
			<div class="card full-height">
				<div class="card-header">
					<div class="card-head-row">
						<div class="card-title">Edit link</div>
						<a href="{{ route('office.index') }}" class="btn btn-primary btn-sm ml-auto">Back</a>
					</div>
				</div>
				
				<div class="card-body">
					<form action="{{ route('office.update', $office->id) }}" method="POST" enctype="multipart/form-data">
						@method('PUT')
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
                            <button class="btn btn-primary btn-sm" type="submit">Save</button>
                        </div>
					</form>
				</div>
@endsection