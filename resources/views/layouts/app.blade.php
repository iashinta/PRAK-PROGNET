<!DOCTYPE html>
<html>
<head>
	<title>@yield ('Title')</title>
	<link rel="stylesheet" type="text/css" href={{asset('css/style.css')}}>
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<div class="header">
    <center>TOKO BARANG BAGUS</center>
</div>
<div class="slash">
	<center>	</center>
</div>
<ul>
  <li><a href="/home">Home</a></li>
  <li><a href="/barang">Barang</a></li>
  <li><a href="#contact">Satuan</a></li>
  <li><a href="#about">Kategori</a></li>
  <li><a href="#about">Kasir</a></li>
  <li><a href="#about">Pembeli</a></li>
  <li><a href="#about">Nota Barang</a></li>
  <li><a href="#about">Nota</a></li>
</ul>

<div style="margin-left:25%;padding:1px 16px;height:1000px;">
	@yield ('content')
</div>

</body>
</html>