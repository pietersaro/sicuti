@extends('layouts.app')

@section('content')
<div class="col-md-12 grid-margin stretch-card">
	<div class="card">
		<div class="card-body">
			<h3 style="margin-bottom: 20px">Daftar Cuti</h3>

			<table class="table table-default">
				<thead>
					<tr>
						<td>ID Cuti</td>
						<td>ID Pegawai</td>
						<td>Nama</td>
						<td>Sisa Cuti</td>
						<td>#</td>
					</tr>
				</thead>
				<tbody>
					@foreach($cuti as $row)
					<tr>
						<td>{{ $row->id_cuti }}</td>
						<td>{{ $row->id }}</td>
						<td>{{ $row->user->name }}</td>
						<td>{{ $row->sisa_cuti }}</td>
						<td>
							<a href="{{ url('cuti/form').'/'.$row->cuti }}" class="btn btn-link">Edit</a>
						</td>
					</tr>
					@endforeach
					
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection