@extends('layout_admin.main')
@section('content')
    <section class="content-header">
      <h1>
        Gallery
        <small>Madani Indonesia</small>
      </h1>
    </section>

    <section class="content container-fluid">
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Tambah
</button><br>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Tambah Gambar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('gambar_action') }}" method="POST" enctype="multipart/form-data">@csrf
  <div class="form-group">
    <label for="exampleFormControlFile1">Masukan Gambar</label>
    <input type="file" class="form-control-file" name="gambar" id=""><br>
    <label  for="exampleFormControlFile1">Kategori</label>
    <select name="kategori" class="form-control" name="kategori"><br>
    <option>Pilih Opsi</option>
    <option value="Politic">Politic</option>
    <option value="Social">Social</option>
    <option value="Public Dialog">Public Dialog</option>
    </select><br>
    <input type="submit" value="Simpan" class="btn btn-primary">
    <button type="reset" class="btn btn-danger">Reset</button>
  </div>
</form>
      </div>
    </div>
  </div>
</div><br>
    <table class="table table-bordered text-center">
  <thead>
    <tr>
      <td> No </td>
      <td> Gambar </td>
      <td> Kategori </td>
      <td> Created At </td>
      <td> Action </td>
    </tr>
  </thead>
  <tbody>
    @foreach ($view as $vw)
    <tr>
      <td>{{ $loop->index+1 }}</td>
      <td>
        <img src="{{ asset('gallery/'.$vw->gambar) }}" style="width: 70px; height: 40px;">
      </td>
      <td>{{ $vw->kategori }}</td>
      <td>{{$vw->created_at}}</td>
      <td>
        <form action="" method="POST">
          <input type="hidden" name="_method" value="DELETE" class="form-control">
          <a class="btn btn-danger" href="/list/hapus/{{ $vw->id }}">Hapus</a>
        </form>
      </td>
    </tr>
  </tbody>
  @endforeach
    </section>
  </div>
@endsection
 