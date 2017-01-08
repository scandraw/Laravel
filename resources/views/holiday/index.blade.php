@extends('admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2"><br><br><br>
        	<table class="table table-hover">
        		<thead>
        			<tr>
        				<th>id</th>
        				<th>nama_paket</th>
        				<th>harga_paket</th>
                        <th>isi_paket</th>
                        
        				

                        <th>action</th>
        			</tr>
        		</thead>
        		<tbody>
        		@foreach ($holiday as $data)
        			<tr>
        				<td>{{$data->id}}</td>
        				<td>{{$data->nama_paket}}</td>
                        <td>{{$data->harga_paket}}</td>
        				<td>{{$data->isi_paket}}</td>
                        
        				
                        <td>
                            <a href="{{route('holiday.show', $data->id)}}" class="btn btn-primary">Lihat</a>
                            <a href="{{route('holiday.edit', $data->id)}}" class="btn btn-primary">Edit</a>
                            
                            <form action="{{route('holiday.destroy', $data->id)}}" method="POST">
                                {{csrf_field()}}
                                <input type="hidden" name="_method" value="delete">
                                <input type="submit" value="Hapus" class="btn btn-danger">
                            </form>
                        </td>
        			</tr>
        		@endforeach
        		</tbody>
        	</table>
            {{-- {{$holiday->links() }} --}}
        </div>
       </div>
  </div>
@endsection