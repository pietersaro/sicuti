@extends('layouts.app')

@section('content')
{{-- {{ dd(Auth()->user()->email)}} --}}
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <form action="" method="POST">
            	{{ csrf_field() }}
            	
            </form>
        </div>
    </div>
</div>
@endsection