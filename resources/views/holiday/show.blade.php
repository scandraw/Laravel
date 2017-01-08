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
        			<td>{{$holiday->id}}</td>
        		</tr>
                <tr>
                    <td>Nama Paket</td>
                    <td>:</td>
                    <td>{{$holiday->nama_paket}}</td>
                </tr>
                <tr>
                    <td>Harga Paket</td>
                    <td>:</td>
                    <td>{{$holiday->harga_paket}}</td>
                </tr>
                <tr>
                    <td>Isi Paket</td>
                    <td>:</td>
                    <td>{{$holiday->isi_paket}}</td>
                </tr>
        	</table>
        	</div>
        </div>
       </div>
      </div>
     </div>
@endsection
