@extends('layouts.app')
@section('content')

<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-heading">Data Organisasi
					<div class="panel-title pull-right"><a href="{{ route('organisasis.create') }}">Tambah Data</a>
				</div>
			</div>
<div class="panel-body">
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Organisasi</th>
					<th>Tempat Latihan</th>
					<th>Waktu Latihan</th>
					<th>Hari Latihan</th>
					<th colspan="3">Action</th>
				</tr>	
</thead>
<tbody>
	@php $no = 1; @endphp
	@foreach($organisasis as $data)
	<tr>
		<td> {{ $no++ }} </td>
		<td> {{ $data->nama_organisasi }} </td>
		<td><p> {{ $data->tempat_latihan }} </p></td>
		<td><p> {{ $data->waktu_latihan }} </p></td>
		<td><p> {{ $data->hari_latihan }} </p></td>	
	<td>
		<a class="btn btn-primary" href=" {{ route('organisasis.edit',$data->id)}} ">Edit</a>
	</td>
	<td>
		<a class="btn btn-success" href=" {{ route('organisasis.show',$data->id)}} ">Show</a>
	</td>
	<td>
							<form method="post" action="{{ route('organisasis.destroy',$data->id) }}">
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