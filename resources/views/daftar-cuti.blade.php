@extends('layouts.app')

@section('content')
{{-- {{ dd(Auth()->user()->email)}} --}}
@if(session()->has('success'))
<div class="col-md-6 col-offset-6" style="float: right;" >
	<div class="alert alert-success">
	 {{ session()->get('success') }}
	</div>
</div>
@endif

<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
        	<div class="col-xs-6 grid-margin">
        		<h3>{{ $title }}</h3>
        	</div>
            <table class="table table-default">
				<thead>
					<tr>
						<th>No</th>
						<th>ID</th>
						<th>Nama Pegawai</th>
						<th>Alasan</th>
						<th>Hari</th>
						<th>Status</th>
						<th>action</th>
					</tr>
				</thead>
				<tbody>

					@php $no = 1; @endphp
					@if($cuti->count() > 1)
					@foreach($cuti as $row)
					<tr>
						<td>{{ $no++ }}</td>
						<td>{{ $row->id_mohon_cuti}}</td>
						<td>
							{{ $row->user->name }}
						</td>
						<td>{{ $row->alasan }}</td>
						<td>{{ $row->jml_hari }}</td>
						<td>
							@if($row->persetujuan == 1)
								<label class="btn btn-success btn-xs">Disetujui</label> 
							@elseif($row->persetujuan == 2)
								<label class="btn btn-danger btn-xs">Ditolak</label>
							@else
								<label class="btn btn-warning btn-xs">Pending</label>
							@endif
						</td>
						<td>
							@if(empty($row->persetujuan))
							<a href="#" class="modalApr" data-id='{{ $row->id_mohon_cuti }}'><i class="fa fa-exclamation-triangle"></i> Approve</a> 
							<a href="#" class="modalDny" data-id='{{ $row->id_mohon_cuti }}'><i class="fa fa-exclamation-triangle"></i> Deny</a> 
							@endif
						</td>
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

<!-- Modal Setuju -->
<div class="modal fade approveModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<form action="{{ url('cuti/approve')}}" method="post">
		{{ csrf_field() }}
			<input type="hidden" class="id_approve_cuti" name="id_pegawai" value="">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header" style="background-color: green; color: white">
		        <h5 class="modal-title" id="exampleModalLabel">Approve?</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
			    	<p>Apakah anda yakin ingin menyetujui cuti ?</p>
			      	<button class="btn btn-success" type="submit">SETUJUI</button>
			      	{{-- <button class="btn btn-danger" data-dismiss="modal" aria-label="Close">Thidak</button> --}}
		      </div>
		    </div>
		  </div>
	</form>
</div>

<!-- Modal deny -->
<div class="modal fade denyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<form action="{{ url('cuti/deny')}}" method="post">
		{{ csrf_field() }}
			<input type="hidden" class="id_deny_cuti" name="id_pegawai" value="">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header" style="background-color: #ff3333; color: white">
		        <h5 class="modal-title" id="exampleModalLabel">Deny?</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true" style="color: white">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
			    	<p>Apakah anda yakin ingin menolak pengajuan cuti ?</p>
			      	{{-- <button class="btn btn-success" type="submit">Ya</button> --}}
			      	<button class="btn btn-danger" type="submit">TOLAK CUTI</button>
		      </div>
		    </div>
		  </div>
	</form>
</div>
@endsection


@section('bottom')
<script type="text/javascript">
	$('.modalApr').on('click', function() {
		var id = $(this).data('id');
		$('.id_approve_cuti').val(id);
		$('.approveModal').modal('show');	
	});

	$('.modalDny').on('click', function() {
		var id = $(this).data('id');
		$('.id_deny_cuti').val(id);
		$('.denyModal').modal('show');	
	})
</script>
@endsection