@extends('layouts.app')

@section('content')
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Form Input cuti</h4>

            <form class="forms-sample" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <div class="form-group">                    
                        <div class="col-md-6">
                            <label>ID Pegawai</label>
                            <input type="text" name="id" class="form-control" value="{{ $cuti->id }}" >
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-md-6">
                           
                            <input type="text" name="dari" class="form-control" value="{{ $cuti->dari }}">
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