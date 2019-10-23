@extends('layouts.app')

@section('content')
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Informasi Pegawai</h4>
            <table class="table" style="border-style: hidden;">
                <tr>
                    <td style="width: 15%">Nama</td>
                    <td colspan="2">: {{ $user->name }}</td>
                </tr>
                <tr>
                    <td>Id Pegawai </td>
                    <td>: {{ $user->id_pegawai }}</td>
                </tr>
            </table>
        </div>
    </div>
</div>
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Cuti Pegawai <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#myModal" style="margin-left: 10px">Add new cuti</button></h4>
            
            <table class="table table-stripped">
                <thead>
                    <tr>
                        <th>ID Cuti</th>
                        <th>Tahun</th>
                        <th>jenis Cuti</th>
                    </tr>
                </thead>
                {{-- {{dd($user->getCuti )}} --}}
                <tbody>
                    @foreach($user->getCuti as $row)
                    <tr>
                        <td>#</td>
                        <td>{{ $row->tahun }}</td>
                        <td>{{ $row->jenis }}</td>
                        <td>{{ $row->jumlah_cuti }}</td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
</div>



<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <form method="post" action="{{ url('cuti/form')}}">
        {{ csrf_field() }}
        <input type="hidden" name="id_user" value="{{ $user->id }}">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Masukan Data Cuti</h4>
          </div>
          <div class="modal-body">
            <div class="form-group">
                <div class="col-md-12">
                    <label>Input tahun</label>
                    <input type="number" name="tahun" class="form-control" required>
                </div>                
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <label>Jenis Cuti</label>
                    <select class="form-control" name="jenis" required>
                        <option value="">-- Pilih Jenis Cuti --</option>
                        <option value="Cuti Tahunan">Cuti Tahunan</option>
                        <option value="Cuti Khusus">Cuti Khusus</option>
                        <option value="Cuti Melahirkan">Cuti Melahirkan</option>
                    </select>
                </div>                
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <label>Jumlah Cuti</label>
                    <input type="number" name="jumlah_cuti" class="form-control" min="0" required>
                </div>                
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success" >Simpan</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
    </form>

  </div>
</div>
@endsection