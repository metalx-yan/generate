@extends('main')

@section('title', 'Guru')

@section('content')

<h1 class="section-header">
  <div>Guru</div>
</h1>

@php
	$no = 1;
@endphp

<div class="row">
	<div class="col-lg-8">
		<div class="card">
			<div class="card-body">
				<table class="table">
				  <thead class="theadcolor fontsopher">
				    <tr>
				      <th>No</th>
				      <th>NIP</th>
				      <th>Kode</th>
				      <th>Nama</th>
				      <th>Status</th>
				      <th>Aksi</th>
				    </tr>
				  </thead>
				  <tbody class="fontsopher">
				  	@foreach ($index as $indexs)
				    <tr>
				      <th scope="row">{{ $no }}</th>
						@php
							$no++;	
						@endphp
				      <td>{{ $indexs->nip }}</td>
				      <td>{{ $indexs->code }}</td>
				      <td>{{ $indexs->name }}</td>
				      <td>{{ $indexs->status }}</td>
				      <td>
				      	<div class="row">
              				<div class="col-xs-4">
                				<a href="{{ route('teacher.edit', $indexs->id) }}" class="btn btn-warning btn-sm">
									<i class="ion ion-edit"></i>
                				</a>
              				</div>
              				<div class="col-xs-1 offset-sm-1"></div>
              
              				<div class="col-xs-4">
                				<form class="" action="{{ route('teacher.destroy', $indexs->id) }}" method="POST">
                      				@csrf
                      				@method('DELETE')
									<button class="ion ion-android-delete btn btn-danger btn-sm" name="delete" type="submit"></button>
                  				</form>
                  			</div>
				      	</div>
				      </td>
				    </tr>
				  	@endforeach
				  </tbody>
				</table>
			</div>
		</div>
	</div>

	<div class="col-lg-4">
		<div class="card">
			<div class="card-header headercolorincurrent fontsopher">
				Tambah Guru
			</div>
				<form action="{{ route('teacher.store') }}" method="POST">
				@csrf
					@include('curriculums.teachers.form', [
							'teacher' => new App\Models\Teacher,
							'submit_button' => 'Save'
						])
				</form>
			</div>
		</div>
	</div>
</div>
@endsection



