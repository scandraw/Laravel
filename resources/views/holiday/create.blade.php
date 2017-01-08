@extends('admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
        <div class="panel-heading">Create Data</div>
        <div class="panel=body"></br></br>
               
<form action="{{route('holiday.store')}}" method="POST" role="form">
{{csrf_field()}}
	<div class="form-group">
		
			<td>Nama Paket</td>
			<td>:</td>
			<td><input type="text" class="form-control" name="nama_paket" placeholder="masukan nama paket"></td>
			</div>
	
		<div class="form-group">
			<td>Harga Paket</td>
			<td>:</td>
			<td><input type="text" class="form-control" name="harga_paket" placeholder="masukan harga paket"></td>
		</div>
		<div class="form-group">
			<td>Isi Paket</td>
			<td>:</td>
			<td><input type="text" class="form-control" name="isi_paket" placeholder="masukan isi paket"></td>
		</div>
		
			<button type="submit" class="btn btn-primary">Simpan</button>
	
</form>
</body>
</html>
</form>
</div>
</div>
</div>
</div>
</div>
</br></br></br></br></br></br>
@endsection