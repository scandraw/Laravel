@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
        <div class="panel panel-heading">Show </div>
        <div class="panel-body">

        	<table>
        		<tr>
        			<td>Nama</td>
        			<td>:</td>
        			<td>{{$tour->nama}}</td>
        		</tr>
        	</table>
        	</div>
        </div>
       </div>
      </div>
     </div>
@endsection
