@extends('layouts.app')

@section('Title')
	Edit Data
@endsection

@section('content')
	<div class="data">
		<h1>EDIT BARANG</h1>
	</div>
		<form action="/barang/{{$barangbaru->id}}" method="post">
			{{csrf_field()}}
			<input type="hidden" name="_method" value="PUT">
			<table class="table1">
				<tr>
	              <td>Kode Barang</td>
	              <td><input type="text" name="kode" value="{{$barangbaru->kode}}" placeholder="Kode Barang"><br></td>
	            </tr>
	            <tr>
	              <td>Nama Barang</td>
	              <td><input type="text" name="nama" value="{{$barangbaru->nama}}" placeholder="Nama Barang"><br></td>
	            </tr>
	            <tr>
	              <td>Satuan</td>
	              <td><div>
						<select class="option" name="id_satuan" id="id_satuan" >
							@foreach($satuan as $stn)
								<option value="{{$stn->id}}"> {{$stn->nama}} </option>
							@endforeach
						</select></div></td>
				</tr>
				<tr>
	              <td>Harga</td>
	              <td><input type="text" name="harga" value="{{$barangbaru->harga}}" placeholder="Harga"><br></td>
	            </tr>
			</table>
			<input type="submit" name="submit" value="Update" id="submit">
				@if (count($errors)>0)
			    	<div class="isa_error" align="center">
			            @foreach ($errors->all() as $error)
			                <li>{{ $error }}</li>
			            @endforeach
		        @endif
	    		</div>
		</form>
@endsection