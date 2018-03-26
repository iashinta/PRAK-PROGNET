@extends('layouts.app')

@section('Title')
	Data Barang
@endsection

@section('content')
      <div class="data">
        <h1>DATA BARANG</h1>
      </div>  
      <table class='table1'>
        <thead>
          <tr>
              <th>Kode</th>
              <th>Nama</th>
              <th>Satuan</th>
              <th>Kategori</th>
              <th>Harga</th>
              <th>Action</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($barang as $barangbaru)
          <tr>
              <td>{{$barangbaru->kode}}</td></a>
              <td>{{$barangbaru->nama}}</td>
              <td>{{$barangbaru->satuan->nama}}</td>
              <td>{{$barangbaru->kategori->kategori}}</td>
              <td>{{$barangbaru->harga}}</td>
              <td>
                <div>
                    <form method="GET" action="/barang/{{$barangbaru->id}}/edit" style="display: inline-block">
                        {{csrf_field()}}
                        <button type="submit" href="/barang/{{$barangbaru->id}}/edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        </button></form>
                    <form method="POST" action="/barang/{{$barangbaru->id}}" style="display: inline-block">
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit"><i class="fa fa-trash-o" aria-hidden="true"></i></button></form>
                </div>
              </td>
          
          </tr>
        @endforeach
        </tbody>
          
      </table><br><br>
      <a href="{{action('BarangController@create')}}" class="button"><span>Tambah Barang</span></a>
      <a href="{{action('BarangController@createSatuan')}}" class="button"><span>Tambah Satuan</span></a>
@endsection