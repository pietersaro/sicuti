@extends('layouts.app')

@section('content')
<div class="col-md-12 grid-margin stretch-card">
	<div class="card">
		<div class="card-body">
			<h3 style="margin-bottom: 20px">Riwayat Cuti</h3>

			<table class="table table-default">
				<thead>
					<tr>
						<td>No</td>
						<td>Jenis Cuti</td>
						<td>Alasan</td>
						<td>Approval</td>
					</tr>
				</thead>
				<tbody>
					@foreach($user as $row)
					<tr>
						<td>{{ $row->id_cuti }}</td>
						<td>{{ $row->jenis }}</td>
						<td>{{ $row->alasan }}</td>
						<td>{{ $row->persetujuan}}</td>
{{-- 						<td>
							<a href="{{ url('cuti/form').'/'.$row->id }}" class="btn btn-info">Lihat Cuti</a>
						</td> --}}
					</tr>
					@endforeach
					
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection