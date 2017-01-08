@extends('admin')

@section('content')
<div class="container">
    <div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
        <div class="panel-heading">Create Data</div>
        <div class="panel=body"></br></br>
        
        <!-- /////////////////////////////////////////Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">UlinTour</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                   
                    <li>
                        <a class="page-scroll" href="{{url('/pilih/create')}}">Pilih Paket</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="{{url('/pilih')}}">Data Pesanan Paket</a>
                    </li>
                  
                    <li>
                        <a class="page-scroll" href="{{url('/logout')}}"
                        onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">

                        Logout</a> 

                        <form id="logout-form" action="{{url('/logout')}}" method="POST"  style="display: none;">
                        {{csrf_field()}} 
                        </form> 

                    </li>
                 </ul>
            </div>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>nama</th>
                        <th>holiday_id</th>
                        <th>tanggal</th>
                        
                        

                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($pilih as $data)
                    <tr>
                        <td>{{$data->id}}</td>
                        <td>{{$data->nama}}</td>                       
                        <td>{{$data->holiday->nama_paket}}</td>
                        <td>{{$data->tanggal}}</td>
                        
                        
                        <td>
                            <a href="{{route('pilih.show', $data->id)}}" class="btn btn-primary">Lihat</a>
                            {{-- <a href="{{route('pilih.edit', $data->id)}}" class="btn btn-primary">Edit</a> --}}
                            
                            <form action="{{route('pilih.destroy', $data->id)}}" method="POST">
                                {{csrf_field()}}
                                <input type="hidden" name="_method" value="delete">
                                <input type="submit" value="Hapus" class="btn btn-danger">
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $pilih->links() }}
        </div>
       </div>
  </div>
@endsection