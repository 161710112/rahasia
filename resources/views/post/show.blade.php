@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Post 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Nama</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $posts->nama }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Umur</label>	
			  			<input type="text" name="umur" class="form-control" value="{{ $posts->umur }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">TTL</label>	
			  			<input type="text" name="ttl" class="form-control" value="{{ $posts->ttl }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Agama</label>	
			  			<input type="text" name="agama" class="form-control" value="{{ $posts->agama }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Sebagai</label>	
			  			<input type="text" name="alamat" class="form-control" value="{{ $posts->alamat }}"  readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection