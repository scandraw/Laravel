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
               
<form action="{{route('pilih.store')}}" method="POST" role="form">

	<div class="form-group">
		
			<td>Nama Pemesan</td>
			<td>:</td>
			<td><input type="text" class="form-control" name="nama" placeholder="masukan nama pemesan"></td>
			</div>
	{{csrf_field()}}
		<div class="form-group">
                        <label>Nama Paket</label>
                 		<select name="holiday_id" class="form-control" required="required">
                 		@foreach ($holiday as $data)
                 			<option value="{{$data->id}}">{{$data->nama_paket}}</option>
                 		@endforeach		
                 		</select>  
                    </div>
		<div class="form-group">
			<td>Tanggal</td>
			<td>:</td>
			<td><input type="date" class="form-control" name="tanggal" placeholder="masukan tanggal"></td>
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