@extends('layout_admin.main')
@section('content')
    <section class="content-header">
      <h1>
        Kritik & Saran
        <small>Madani Indonesia</small>
      </h1>
    </section>

    <section class="content container-fluid">
<br><hr style="color: black; border-color: black;">
<h3 align="center">Tabel Data</h3>
    <table id="list" class="table table-striped table-bordered" style="width:100%">
  <thead>
    <tr>
      <td> No </td>
      <td> Nama </td>
      <td> Email </td>
      <td> Saran</td>
    </tr>
  </thead>
  <tbody>
    @foreach($tampil as $tm)
    <tr>
      <td>{{ $loop->index+1 }}</td>
      <td>{{ $tm->nama }}</td>
      <td>{{ $tm->email }}</td>
      <td>{{ $tm->saran }}</td>
      @endforeach
    </tr>
  </tbody>

    </section>
  </div>
@endsection
 