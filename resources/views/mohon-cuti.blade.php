@extends('layouts.app')

@section('content')
<div class="col-md-12 grid-margin stretch-card">
	<div class="card">
		<div class="card-body">
			<h4 class="card-title">Form Input Cuti</h4>
			<p class="card-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<form class="forms-sample" method="post">
				{{ csrf_field() }}
				<div class="form-group">
					<div class="col-md-6">
						<label>Jenis Cuti</label>
						{{-- <input type="text" name="jenis" class="form-control"> --}}
						<select name="jenis" class="form-control">
							<option>--Select Jenis Cuti--</option>
							@foreach($jenis as $row)
							<option value="{{ $row->id_cuti}}">{{ $row->jenis }}</option>
							@endforeach
							
						</select>
					</div>						
				</div>
				<div class="form-group">					
					<div class="col-md-6">
						<label>Alasan Cuti</label>
						<textarea name="alasan" class="form-control" ></textarea>
					</div>
				</div>
				<div class="form-group" style="overflow: hidden;">					
					<div class="col-md-3" style="float: left; overflow: hidden;">
						<label>Mulai Cuti</label>
						<input type="date" name="dari" class="form-control" >
					</div>
					<div class="col-md-3" style="overflow: hidden;">
						<label>Akhir Cuti</label>
						<input type="date" name="sampai" class="form-control" >
					</div>
				</div>
				<div class="form-group">					
					<div class="col-md-6">
						<label>Jumlah Hari</label>
						<input type="number" name="jumlah" class="form-control" required>
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-6 text-right">
						<button class="btn btn-warning">Save</button>
					</div>
				</div>
				
			</form>
		</div>
	</div>
</div>
@endsection