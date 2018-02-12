@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Siswa
			  	<div class="panel-title pull-right"><a href="{{ route('siswas.index') }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">No Absen</label>	
			  			<input type="text" name="absen" class="form-control" value="{{ $siswas->absen }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Nama Siswa</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $siswas->nama }}"  
			  			readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Kelas</label>	
			  			<input type="text" name="kelas" class="form-control" value="{{ $siswas->kelas }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Nama Jurusan</label>	
			  			<input type="text" name="jurusan" class="form-control" value="{{ $siswas->jurusan }}"  readonly>
			  		</div>

			  		
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection