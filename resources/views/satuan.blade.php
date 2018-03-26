@extends('layouts.app')

@section('Title')
	Tambah Satuan
@endsection

@section('content')
	<div class="form_satuan" align="center">
		<h1>Tambah Satuan</h1>
		<form action="{{action('BarangController@storeSatuan')}}" method="post">
			{{csrf_field()}}
			<input type="text" name="nama"><br>
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