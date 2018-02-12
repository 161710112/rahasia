@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Cita
			  	<div class="panel-title pull-right"><a href="{{ route('citas.index') }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Nama</label>
			  			<input type="text" name="nama" class="form-control" value="{{ $citas->nama }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Kelas</label>	
			  			<input type="text" name="kelas" class="form-control" value="{{ $citas->kelas }}"  
			  			readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Alamat</label>	
			  			<input type="text" name="alamat" class="form-control" value="{{ $citas->alamat }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Cita Cita</label>	
			  			<input type="text" name="cita_cita" class="form-control" value="{{ $citas->cita_cita }}"  readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection