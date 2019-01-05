@extends('main')

@section('title', 'Guru')

@section('content')

<h1 class="section-header">
  <div>Daftar Guru {{ $view->type }}</div>
</h1>

@php
	$no = 1;
@endphp

<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-body">
				<table class="table">
				  <thead class="theadcolor-room fontsopher">
				    <tr>
				      <th>No</th>
				      <th>NIP</th>
				      <th>Kode</th>
				      <th>Nama</th>
				      <th>Status</th>
				    </tr>
				  </thead>
				  <tbody class="fontsopher">
				  	@foreach ($viewteacher as $views)
				    <tr>
				      <th scope="row">{{ $no }}</th>
						@php
							$no++;	
						@endphp
						<td>{{ $views->nip }}</td>
						<td>{{ $views->code }}</td>
						<td>{{ $views->name }}</td>
						<td>
						@if ($views->status == "Aktif")
				      		<span class="badge badge-success"><b>{{ $views->status }}</b></span>
						@else
				      		<span class="badge badge-danger"><b>{{ $views->status }}</b></span>
						
						@endif
						</td>
				    </tr>
				  	@endforeach
				  </tbody>
				</table>
			</div>
		</div>
	</div>

</div>
@endsection


