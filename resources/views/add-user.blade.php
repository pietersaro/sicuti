@extends('layouts.app')

@section('content')
<div class="col-md-12 grid-margin stretch-card">
	<div class="card">
		<div class="card-body">
			<h4 class="card-title">Form Input User</h4>
			<p class="card-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<form class="forms-sample" method="post">
				{{ csrf_field() }}
				<div class="form-group">
					<div class="form-group">
						<div class="col-md-6">
							<label>Nama</label>
							<input type="text" name="nama" class="form-control" value="{{ $user->name }}">
						</div>						
					</div>
					<div class="form-group">					
						<div class="col-md-6">
							<label>ID Pegawai</label>
							<input type="text" name="id_pegawai" class="form-control" >
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-6">
							<label>Email</label>
							<input type="text" name="email" class="form-control" value="{{ $user->email }}">
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-6">
							<label>Role</label>
							<select name="role" class="form-control">
								<option value="">-- Pilih Role --</option>
								<option value="1" {{ $user->role == 1 ? 'selected' : '' }}>Super User</option>
								<option value="2" {{ $user->role == 2 ? 'selected' : '' }}>HR</option>
								<option value="3" {{ $user->role == 3 ? 'selected' : '' }}>Pegawai</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-6">
							<label>Jumlah Cuti</label>
							<input type="number" name="jumlah_cuti" value="{{ $user->jumlah_cuti }}">
						</div>
	
						
					</div>
					<div class="form-group">
						<div class="col-md-6">
							<label>password</label>
							<input type="password" name="password" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-6 text-right">
							<button class="btn btn-warning">Save</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection