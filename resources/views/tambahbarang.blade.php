@extends('layouts.app')

@section('Title')
	Tambah Barang
@endsection

@section('content')
	<div class="form" align="center">
		<h1>Tambah Barang</h1>
		<form action="/barang" method="post">
			{{csrf_field()}}
			<input type="text" name="kode" placeholder="Kode Barang"><br>
			<input type="text" name="nama" placeholder="Nama Barang"><br>
			<div>
				<select class="option" id="id_satuan" name="id_satuan">
					@foreach($satuan as $stn)
						<option value="{{$stn->id}}"> {{$stn->nama}} </option>
					@endforeach
				</select>
			</div>
			<input type="text" name="harga" placeholder="Harga"><br>
			<input type="submit" name="submit" value="Tambah" id="submit">
			@if (count($errors)>0)
		    	<div class="isa_error" align="center">
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
	        @endif
    		</div>
		</form>
	</div>
	
@endsection