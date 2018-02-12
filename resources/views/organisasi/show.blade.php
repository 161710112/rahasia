@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Organisasi
			  	<div class="panel-title pull-right"><a href="{{ route('organisasis.index') }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Nama Organisasi</label>
			  			<input type="text" name="nama_organisasi" class="form-control" value="{{ $organisasis->nama_organisasi }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Tempat Latihan</label>	
			  			<input type="text" name="tempat_latihan" class="form-control" value="{{ $organisasis->tempat_latihan }}"  
			  			readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Waktu Latihan</label>	
			  			<input type="text" name="waktu_latihan" class="form-control" value="{{ $organisasis->waktu_latihan }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Hari Latihan</label>	
			  			<input type="text" name="hari_latihan" class="form-control" value="{{ $organisasis->hari_latihan }}"  readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection