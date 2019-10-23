@extends('layouts.app')

@section('content')
{{-- {{ dd(Auth()->user()->email)}} --}}
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
        	<h3 style="margin-bottom: 20px">Profil Anda</h3>
            <table class="table table-default">
                <thead>
                    <tr>
                        <td>Nama :{{ Auth()->user()->name}}</td>
                        <td>Nama</td>
                        <td>Email</td>
                        <td>#</td>
                    </tr>
                </thead>
{{--                 <tbody>
                    @foreach($user as $row)
                    <tr>
                        <td>{{ $row->id }}</td>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->email }}</td>
                    </tr>
                    @endforeach
                </tbody> --}}
            </table>

{{--             <label>Nama :</label>
            <input type="name" name="name"  value="{{ Auth()->user()->name }}" class="form-control" readonly>
            <label>Email :</label>
            <input type="email" name="email"  value="{{ Auth()->user()->email }}" class="form-control" readonly>
            <input type="email" name="email"  value="{{ Auth()->user()->email }}" class="form-control" readonly>
            <input type="email" name="email"  value="{{ Auth()->user()->email }}" class="form-control" readonly>
            <input type="email" name="email"  value="{{ Auth()->user()->email }}" class="form-control" readonly> --}}
            {{-- <table class="table table-default">
				<thead>
					<tr>
						<td>No</td>
						<td>Nama</td>
						<td>Email</td>
						<td>#</td>
					</tr>
				</thead> --}}
        </div>
    </div>
</div>
@endsection