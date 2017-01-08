@extends('admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2"><br><br><br>
        	<table class="table table-hover">
        		<thead>
        			<tr>
        				<th>id</th>
        				<th>nama</th>
        				<th>isi_paket</th>
        				<th>created_at</th>
        				<th>updated_at</th>
        			</tr>
        		</thead>
        		<tbody>
        		@foreach ($tour as $data)
        			<tr>
        				<td>{{$data->id}}</td>
        				<td>{{$data->nama}}</td>
        				<td>{{$data->isi_paket}}</td>
        				<td>{{$data->created_at}}</td>
        				<td>{{$data->updated_at}}</td>
                        <td>
                            <a href="{{route('tour.edit', $data->id)}}" class="btn btn-primary">Edit</a>
                            <a href="{{route('tour.show', $data->id)}}" class="btn btn-primary">Lihat</a>
                            <form action="{{route('tour.destroy', $data->id)}}" method="POST">
                                {{csrf_field()}}
                                <input type="hidden" name="_method" value="delete">
                                <input type="submit" value="Hapus" class="btn btn-danger">
                            </form>
                        </td>
        			</tr>
        		@endforeach
        		</tbody>
        	</table>
        </div>
       </div>
  </div>
@endsection