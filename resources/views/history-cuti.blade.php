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
						<td>Status</td>
					</tr>
				</thead>
				<tbody>
					{{-- {{ dd($cuti)}} --}}
					@if($cuti->count() > 0)
					@foreach($cuti as $key => $row)
					<tr>
						<td>{{ $key+1 }}</td>
						<td>{{ $row->jenis }}</td>
						<td>{{ $row->alasan }}</td>
						<td>
							@if($row->persetujuan == 1)
								<label class="btn btn-success">Disetujui</label> 
							@elseif($row->persetujuan == 2)
								<label class="btn btn-danger">Ditolak</label>
							@else
								<label class="btn btn-warning">Pending</label>
							@endif
						</td>
{{-- 						<td>
							<a href="{{ url('cuti/form').'/'.$row->id }}" class="btn btn-info">Lihat Cuti</a>
						</td> --}}
					</tr>
					@endforeach
					@else
					<tr>
						<td colspan="4" class="text-center">No Data Found</td>
					</tr>
					@endif
					
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection