@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Data Organisasi
			  	<div class="panel-title pull-right"><a href="{{ route('organisasis.index') }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('organisasis.update',$organisasis->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('nama_organisasi') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Organisasi</label>	
			  			<input type="text" name="nama_organisasi" class="form-control" value="{{ $organisasis-> nama_organisasi}}"  required>
			  			@if ($errors->has('nama_organisasi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_organisasi') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('tempat_latihan') ? ' has-error' : '' }}">
			  			<label class="control-label">Tempat Latihan</label>	
			  			<input type="text" name="tempat_latihan" class="form-control" value="{{ $organisasis->tempat_latihan }}"  
			  			required>
			  			@if ($errors->has('tempat_latihan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tempat_latihan') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('waktu_latihan') ? ' has-error' : '' }}">
			  			<label class="control-label">Waktu Latihan</label>	
			  			<input type="text" name="waktu_latihan" class="form-control" value="{{ $organisasis->pwaktu_latihan}}"  required>
			  			@if ($errors->has('waktu_latihan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('waktu_latihan') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('hari_latihan') ? ' has-error' : '' }}">
			  			<label class="control-label">Hari Latihan</label>	
			  			<input type="text" name="hari_latihan" class="form-control" value="{{ $organisasis->hari_latihan }}"  required>
			  			@if ($errors->has('hari_latihan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('hari_latihan') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Edit</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection