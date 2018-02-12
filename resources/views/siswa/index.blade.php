@extends('layouts.app')
@section('content')

<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-heading">Data Siswa
					<div class="panel-title pull-right"><a href="{{ route('siswas.create') }}">Tambah Data</a>
				</div>
			</div>
<div class="panel-body">
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>No Absen</th>
					<th>Nama Siswa</th>
					<th>Kelas</th>
					<th>Nama Jurusan</th>
					<th colspan="3">Action</th>
				</tr>	
</thead>
<tbody>
	@php $no = 1; @endphp
	@foreach($siswas as $data)
	<tr>
		<td> {{ $no++ }} </td>
		<td> {{ $data->absen }} </td>
		<td><p> {{ $data->nama }} </p></td>
		<td><p> {{ $data->kelas }} </p></td>
		<td><p> {{ $data->jurusan }} </p></td>	
	<td>
		<a class="btn btn-primary" href=" {{ route('siswas.edit',$data->id)}} ">Edit</a>
	</td>
	<td>
		<a class="btn btn-success" href=" {{ route('siswas.show',$data->id)}} ">Show</a>
	</td>
	<td>
							<form method="post" action="{{ route('siswas.destroy',$data->id) }}">
								<input name="_token" type="hidden" value="{{ csrf_token() }}">
								<input type="hidden" name="_method" value="DELETE">

								<button type="submit" class="btn btn-danger">Delete</button>
							</form>
						</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection