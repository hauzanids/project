@extends('layouts.master')
@section('content')

<div class="main">
	<div class="main-content">
	  <div class="container-fluid">

		<h1 class="text-center">Edit Daftar lomba</h1>
		<div class="row">
			
	  <form action="/lomba/{{$lomba->id}}/update" method="POST">
	  {{csrf_field()}}

	  <div class="form-group">
	    <label for="judul">Judul</label>
	    <input type="text" class="form-control" name="judul" placeholder="Masukan judul lomba" value="{{$lomba->judul}}">
	  </div>

	  <div class="form-group">
	    <label for="penyelenggara">Penyelenggara</label>
	    <input type="text" class="form-control" name="penyelenggara" placeholder="Masukan judul penyelenggara"value="{{$lomba->penyelenggara}}">
	  </div>

	  <div class="form-group">
	    <label for="tempat">Tempat</label>
	    <input type="text" class="form-control" name="tempat" placeholder="Masukan judul tempat"value="{{$lomba->tempat}}">
	  </div>

	  <div class="form-group">
	    <label for="Deksripsi">Deskripsi Lomba</label>
	    <textarea class="form-control" rows="3" name="deskripsi" placeholder="Masukan deskripsi lomba disini :)">
	    	{{$lomba->deskripsi}}
	    </textarea>
	  </div>

	  <div class="form-group">
	    <label for="waktu">Waktu Pelaksanaan</label>
	    <input type="text" class="form-control" name="waktu_pelaksanaan" placeholder="dd-mm-yyyy"value="{{$lomba->waktu_pelaksanaan}}">
	  </div>
	  <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Save changes</button>
	      </div>
	</form>

		</div>
	</div>
</div>
@endsection