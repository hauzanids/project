@extends('layouts.app')
@section('content')
<?php $daftar_lomba = \App\Lomba::all(); ?>
  <div class="main">
    <div class="main-content">
      <div class="container-fluid">
        <div class="row">
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
              </tr>
            </thead>
            <tbody>
              <?php $nomor = 1?>
              @foreach($daftar_lomba as $lomba)
              <tr>
                <td>{{$nomor++}}</td>
                <td>{{$lomba->judul}}</td>
                <td><img src="{{ URL::to('/') }}/img/{{ $lomba->gambar }}" class="img-thumbnail" width="75"></td>
                <td>{{$lomba->penyelenggara}}</td>
                <td>{{$lomba->tempat}}</td>
                <td>{!!$lomba->deskripsi!!}</td>
                <td>{{$lomba->waktu_pelaksanaan}}</td>
                </tr>
               @endforeach
              </tbody>
            </table>
          </div>
        </div>  
      </div>
    </div>
