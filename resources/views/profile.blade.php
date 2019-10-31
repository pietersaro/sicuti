@extends('layouts.app')

@section('content')
<div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">FOTO AJA NANTI TARO SINI{{ Auth()->user()->name}}</h4>
                    <p class="card-description">{{ Auth()->user()->id}}</p>
                    <table class="table">
                      <thead>
                      </thead>
                      <tbody>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">{{ Auth()->user()->name}}</h4>
                    <p>{{ Auth()->user()->email}}</p>
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Role : </th>
                          <th>{{ Auth()->user()->role}}</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Email : </td>
                          <td>{{ Auth()->user()->email}}</td>
                        </tr>
                        <tr>
                          <td>Tanggal Lahir :</td>
                          <td>{{ Auth()->user()->tanggal_lahir}}</td>
                        </tr>
                        <tr>
                          <td>Jenis Kelamin :</td>
                          <td>{{ Auth()->user()->jenis_kelamin}}</td>
                        </tr>
                        <tr>
                          <td>Alamat :</td>
                          <td>{{ Auth()->user()->alamat}}</td>
                        </tr>
                        <tr>
                          <td>Handphone :</td>
                          <td>{{ Auth()->user()->handphone}}</td>
                        </tr>
                        <tr>
                          <td>Join Date :</td>
                          <td>{{ Auth()->user()->join_date}}</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
@endsection