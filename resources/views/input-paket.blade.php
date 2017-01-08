@extends('admin')

@section('content')
<div class="container">
    
                <div class="panel-body"></br></br></br></br></br>
                    
<body>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

<form action="{{route('paket.store')}}" method="POST">
{{csrf_field()}}
	<table width="100%">
		<tr>
			<td>Nama Paket</td>
			<td>:</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr height="60px">
			<td>Paket</td>
			<td>:</td>
			<td height="40px"><input type="string" name="paket"></td>
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