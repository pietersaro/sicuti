@extends('layouts.app')

@section('content')
<div class="col-md-12 grid-margin stretch-card">
	<div class="card">
		<div class="card-body">
			<h3 style="margin-bottom: 20px">Daftar Cuti User</h3>

			<table class="table table-default">
				<thead>
					<tr>
						<td>No</td>
						<td>Nama</td>
						<td>Email</td>
						<td>#</td>
					</tr>
				</thead>
				<tbody>
					@foreach($user as $row)
					<tr>
						<td>{{ $row->id }}</td>
						<td>{{ $row->name }}</td>
						<td>{{ $row->email }}</td>
						<td>
							<a href="{{ url('user/form').'/'.$row->id }}" class="btn btn-link">Edit</a>
						</td>
					</tr>
					@endforeach
					
				</tbody>
			</table>
			{{ $user->links() }}
		</div>
	</div>
</div>
@endsection