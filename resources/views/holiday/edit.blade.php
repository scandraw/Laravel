@extends('admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
        <div class="panel-heading">Create Data</div>
        <div class="panel=body"></br></br>
               
<form action="{{route('holiday.update',$holiday->id)}}" method="POST" role="form">
{{csrf_field()}}
	<div class="form-group">
		
			<td>Nama Paket</td>
			<td>:</td>
			<td><input type="text" class="form-control" name="nama_paket" value="{{$holiday->nama_paket}}"></td>
			<input type="hidden" name="_method" value="put">
			</div>
	
		<div class="form-group">
			<td>Harga Paket</td>
			<td>:</td>
			<td><input type="text" class="form-control" name="harga_paket" value="{{$holiday->harga_paket}}"></td>
			<input type="hidden" name="_method" value="put">
		</div>
		<div class="form-group">
			<td>Isi Paket</td>
			<td>:</td>
			<td><input type="text" class="form-control" name="isi_paket" value="{{$holiday->isi_paket}}"></td>
			<input type="hidden" name="_method" value="put">
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