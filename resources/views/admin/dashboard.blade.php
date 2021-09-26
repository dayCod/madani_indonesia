@extends('layout_admin.main')
@section('content')
    <section class="content-header">
      <h1>
        
        <small></small>
      </h1>
    </section>

    <section class="content container-fluid">
      <h2 align="center">Selamat Datang {{ Auth('login_admin')->user()->nama }}</h2>
  </aside>
</div>
</ul>
@endsection
