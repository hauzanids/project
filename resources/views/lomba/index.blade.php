@extends('layouts.master')
@section('content')
      <div class="main">
        <div class="main-content">
          <div class="container-fluid">
                                          @if(session('success'))
                      <div class="alert alert-success" role="alert">
                          {{session('success')}}
                      </div>
                      @endif

                      <h1 class="text-center"> Daftar lomba</h1>

                      <div class="row">

                      <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
                       Tambah Lomba
                    </button>
                          <table class="table">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Judul</th>
                          <th scope="col">gambar</th>
                          <th scope="col">penyelenggara</th>
                          <th scope="col">tempat</th>
                          <th scope="col">deksripsi</th>
                          <th scope="col">Waktu Pelaksanaan</th>
                          <th scope="col">Action</th>
                          
                        </tr>
                      </thead>
                      <tbody>

                          <?php $nomor = 1?>
                          @foreach($daftar_lomba as $lomba)
                        <tr>
                          <td>{{$nomor++}}</td>
                          <td>{{$lomba->judul}}</td>
                          <td>none</td>
                          <td>{{$lomba->penyelenggara}}</td>
                          <td>{{$lomba->tempat}}</td>

                          <td>{!!$lomba->deskripsi!!}</td>
                          <td>{{$lomba->waktu_pelaksanaan}}</td>
                          <td><a href="/lomba/{{$lomba->id}}/edit" class="btn btn-warning">Edit</a>
                              <a href="/lomba/{{$lomba->id}}/delete" class="btn btn-danger"onclick="confirm('are u sure..???')">Delete</a>
                          </td>
                        </tr>

                          @endforeach
                      </tbody>
                    </table>
                        
                      </div>

                      <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Lomba</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                      <form action="/lomba/create" method="POST">
                      {{csrf_field()}}

                      <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" name="judul" placeholder="Masukan judul lomba">
                      </div>

                      <div class="form-group">
                        <label for="penyelenggara">Penyelenggara</label>
                        <input type="text" class="form-control" name="penyelenggara" placeholder="Masukan judul penyelenggara">
                      </div>

                      <div class="form-group">
                        <label for="tempat">Tempat</label>
                        <input type="text" class="form-control" name="tempat" placeholder="Masukan judul tempat">
                      </div>

                      <div class="form-group">
                        <label for="Deksripsi">Deskripsi Lomba</label>
                        <textarea class="form-control" rows="3" name="deskripsi" placeholder="Masukan deskripsi lomba disini :)"></textarea>
                      </div>

                      <div class="form-group">
                        <label for="waktu">Waktu Pelaksanaan</label>
                        <input type="text" class="form-control" name="waktu_pelaksanaan" placeholder="dd-mm-yyyy">
                      </div>
                      <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                          </div>
                    </form>
                          </div>
                          
                        </div>
                      </div>
                    </div>

                    </div>
                    @endsection
            
          </div>
        </div>        
      </div>
