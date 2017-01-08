@extends('admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
        <div class="panel panel-heading">Show </div>
        <div class="panel-body">

        	<table>
        		<tr>
        			<td>ID</td>
        			<td>:</td>
        			<td>{{$pilih->id}}</td>
        		</tr>
                <tr>
                    <td>Nama Pemesan</td>
                    <td>:</td>
                    <td>{{$pilih->nama}}</td>
                </tr>
                <tr>
                    <td>Nama Paket</td>
                    <td>:</td>
                    <td>{{$pilih->holiday_id}}</td>
                </tr>
                <tr>
                    <td>Tanggal</td>
                    <td>:</td>
                    <td>{{$pilih->tanggal}}</td>
                </tr>
        	</table>
        	</div>
        </div>
       </div>
      </div>
     </div>
@endsection
