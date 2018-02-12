@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Data Post
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('posts.update',$posts->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $posts->nama }}"  required>
			  			@if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('umur') ? ' has-error' : '' }}">
			  			<label class="control-label">Umur</label>	
			  			<input type="text" name="umur" class="form-control" value="{{ $posts->umur }}"  required>
			  			@if ($errors->has('umur'))
                            <span class="help-block">
                                <strong>{{ $errors->first('umur') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('ttl') ? ' has-error' : '' }}">
			  			<label class="control-label">TTL</label>	
			  			<input type="text" name="ttl" class="form-control" value="{{ $posts->ttl }}"  required>
			  			@if ($errors->has('ttl'))
                            <span class="help-block">
                                <strong>{{ $errors->first('ttl') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('agama') ? ' has-error' : '' }}">
			  			<label class="control-label">Agama</label>	
			  			<input type="text" name="agama" class="form-control" value="{{ $posts->agama }}"  required>
			  			@if ($errors->has('agama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('agama') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('alamat') ? ' has-error' : '' }}">
			  			<label class="control-label">Sebagai</label>	
			  			<input type="text" name="alamat" class="form-control" value="{{ $posts->alamat }}"  required>
			  			@if ($errors->has('sebagai'))
                            <span class="help-block">
                                <strong>{{ $errors->first('sebagai') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Tambah</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection