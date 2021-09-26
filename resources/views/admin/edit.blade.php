@extends('layout_admin.main')
@section('content')
 <section class="content-header">
      <h1>
        Page Header
        <small>Optional description</small>
      </h1>
    </section>

    <section class="content container-fluid">

      <h2 class="text-center"> Edit Content </h2>

  <form action="{{ route('admin_new.update',$edit) }}" method="POST" enctype="multipart/form-data">
    @csrf @method('patch')
    <div class="form-group">
      <label for="judul">Judul Content</label>
      <input type="text" class="form-control" name="judul" placeholder="Add title" value="{{ $edit->judul }}">
    </div>
      <div class="form-group form-group-lg">
    <label>Kategori Content</label>
    <select name="kategori" class="form-control" name="kategori">
    <option style="display: none">Pilih Opsi Anda</option>
    <option value="politik" @if($edit->kategori == "politik") selected @endif>politik</option>
    <option value="riset" @if($edit->kategori == "riset") selected @endif>riset</option>
    <option value="sosial" @if($edit->kategori == "sosial") selected @endif>sosial</option>
    <option value="humanity" @if($edit->kategori == "humanity") selected @endif>humanity</option>
    <option value="public space" @if($edit->kategori == "public space") selected @endif>public space</option>
    </select>
  </div>
    <div class="form-group">
      <label for="Deskripsi"> Isi Content </label>
      <textarea name="isi" id="isi" cols="30" rows="25" class="form-control">{{ $edit->isi }}</textarea>
    </div>
    <div class="form-group">
      <img src="{{ asset('foto_content/'.$edit->gambar) }}" style="width: 120px; height: 120px;"><br><br>
      <input type="file" class="form-control" name="gambar" multiple>
    </div>

    <button class="btn btn-primary" type="submit"> Simpan </button>
    <a href="{{ url('admin.dashboard') }}" class="btn btn-warning"> Kembali</a>
    </div>
  </form>
    </section>
  </div>
  @endsection