@extends('layout_admin.main')
@section('content')
 <section class="content-header">
      <h1>
        Page Header
        <small>Optional description</small>
      </h1>
    </section>

    <section class="content container-fluid">

      <h2 class="text-center"> Tambah Content </h2>

  <form action="{{ route('admin_new.store') }}" method="POST" enctype="multipart/form-data">
  	@csrf
    <div class="form-group">
      <label for="judul">Judul Content</label>
      <input type="text" class="form-control" name="judul" placeholder="Add title">
    </div>
      <div class="form-group form-group-lg">
    <label>Kategori Content</label>
    <select name="kategori" class="form-control" name="kategori">
      <option style="display: none">Pilih Opsi Anda</option>
      <option value="politik">politik</option>
      <option value="riset">riset</option>
      <option value="sosial">sosial</option>
      <option value="humanity">humanity</option>
      <option value="public space">public space</option>
    </select>
  </div>
    <div class="form-group">
      <label for="Deskripsi"> Isi Content </label>
      <textarea name="isi" id="isi" cols="30" rows="25" class="form-control"></textarea>
    </div>
    <div class="form-group">
      <label for="Foto"> Gambar </label>
      <input type="file" class="form-control" name="gambar">
    </div>
    <input type="hidden" name="visit_count" value="0">

    <button class="btn btn-primary" type="submit"> Simpan </button>
    <a href="{{ url('admin.dashboard') }}" class="btn btn-warning"> Kembali</a>
  	</div>
  </form>
    </section>
  </div>
  @endsection