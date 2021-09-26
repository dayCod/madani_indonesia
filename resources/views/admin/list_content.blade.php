@extends('layout_admin.main')
@section('content')
    <section class="content-header">
      <h1>
        List Content
        <small>Madani Indonesia</small>
      </h1>
    </section>

    <section class="content container-fluid">

    <table class="table table-bordered text-center">
  <thead>
    <tr>
      <td> No </td>
      <td> Judul Content </td>
      <td> Kategori Content </td>
      <td> Isi Content</td>
      <td> Aksi </td>
    </tr>
  </thead>
  <tbody>
    @foreach ($data as $dt)
    <tr>
      <td>{{ $loop->index+1 }}</td>
      <td>{{ $dt->judul }}</td>
      <td>{{ $dt->kategori }}</td>
      <td>{{ str_limit($dt->isi, 50) }}</td>
      <td style="display: none;">{{ $dt->gambar }}</td>
      <div class="button-group">
      <td>
      <form action="{{ route('admin_new.destroy',$dt) }}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="DELETE" class="form-control">
      <a href="{{ route('admin_new.edit',$dt) }}" class="btn btn-primary btn-md">Ubah</a><br><br>
      <button class="btn btn-danger btn-sm">Hapus</button>
      </form>
      </td>
      </div>
    </tr>
    @endforeach
  </tbody>
    </section>
  </div>
@endsection
 