@extends('layout_admin.main')
@section('content')
    <section class="content-header">
      <h1>
        Subscription
        <small>Madani Indonesia</small>
      </h1>
    </section>

    <section class="content container-fluid">
{!! $chart->container() !!}
      <br><br><hr style="color: black; border-color: black;">
      <h3 align="center">Tabel Data</h3>
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Email</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
          @foreach($show as $tm)
            <tr>
                <td>{{ $loop->index+1 }}</td>
                <td>{{ $tm->email }}</td>
                <td>{{ $tm->created_at }}</td>
            </tr>
            </tbody>
            @endforeach
        <tfoot>
            <tr>
              <td style="font-size: 13pt; color: black;">&copy; Madani Indonesia</td>
            </tr>
        </tfoot>
    </table>
  </div>
@endsection
@section('chart')
{{-- ChartScript --}}
    @if($chart)
    {!! $chart->script() !!}
    @endif
@stop

@section('link')
<script src="https://cdnjs.cloudflare.com/ajax/libs/highcharts/6.0.6/highcharts.js" charset="utf-8"></script>
@endsection
 