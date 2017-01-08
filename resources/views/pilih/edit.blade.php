@extends('admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
        <div class="panel-heading">Create Data</div>
        <div class="panel=body"></br></br>
               
<form action="{{route('pilih.update')}}" method="POST" role="form">
{{csrf_field()}}
	<div class="form-group">
                        <td>Nama Pemesan</td>
						<td>:</td>
                        <input type="text" class="form-control" name="nama" placeholder= "">   
                    </div>

                    <div class="form-group">
                        <label>Nama Paket</label>
                 		<select name="holiday_id" class="form-control" required="required">
                 		@foreach ($pilih as $data)
                 			<option value="{{$data->id}}">{{$data->holiday->nama_paket}}</option>
                 		@endforeach		
                 		</select>  
                    </div>
		<div class="form-group">
			<td>Tanggal</td>
			<td>:</td>
			<td><input type="date" class="form-control" name="tanggal" placeholder="masukan tanggal"></td>
		</div>
                    
		
			<button type="submit" class="btn btn-primary">Update</button>
	
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