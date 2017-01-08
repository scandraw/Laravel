@extends('admin')
@section('content')
<div class="container">
   
    
                <div class="panel-body"></br></br></br></br></br>
                    
<body>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

<form action="{{route('tour.update', $tour->id)}}" method="POST" role="form">
{{csrf_field()}}
	<div class="form-group">
				<tr>
			<td>Nama Paket</td>
			<td>:</td>
			<td><input type="text" name="nama" value="{{$tour->nama}}">
			<input type="hidden" name="_method" value="put"></td>
		</tr>
		<tr height="60px">
			<td>Paket</td>
			<td>:</td>
			<td height="40px"><TEXTAREA name="paket" value="{{$tour->isi_paket}}">
			<input type="hidden" name="_method" value="put"></TEXTAREA></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><input type="submit"></td>
		</tr>
	</table>
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