@extends('layouts.app')
@section('content')

<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-heading">Data Cita Cita
					<div class="panel-title pull-right"><a href="{{ route('citas.create') }}">Tambah Data</a>
				</div>
			</div>
<div class="panel-body">
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Kelas</th>
					<th>Alamat</th>
					<th>Cita Cita</th>
					<th colspan="3">Action</th>
				</tr>	
</thead>
<tbody>
	@php $no = 1; @endphp
	@foreach($citas as $data)
	<tr>
		<td> {{ $no++ }} </td>
		<td> {{ $data->nama }} </td>
		<td><p> {{ $data->kelas }} </p></td>
		<td><p> {{ $data->alamat }} </p></td>
		<td><p> {{ $data->cita_cita }} </p></td>	
	<td>
		<a class="btn btn-primary" href=" {{ route('citas.edit',$data->id)}} ">Edit </a>
	</td>
	<td>
		<a class="btn btn-success" href=" {{ route('citas.show',$data->id)}} ">Show</a>
	</td>
	<td>
							<form method="post" action="{{ route('citas.destroy',$data->id) }}">
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