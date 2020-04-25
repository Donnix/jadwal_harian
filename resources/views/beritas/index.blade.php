
@extends('beritas.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Berita</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('beritas.create') }}">+ Create</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
           
            <th>Berita</th>
            <th>Status</th>
            <th>Tanggal</th>
           
            <th width="280px">Action</th>
        </tr>
        @foreach ($beritas as $berita)
        <tr>
            <td>{{$berita -> berita}}</td>
            <td>{{$berita -> status}}</td>
            <td>{{$berita -> tgl}}</td>
          
            <td>
                <form action="{{ route('beritas.destroy',$berita->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('beritas.show',$berita->id) }}">Show</a>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <a href="home">Home</a>
   
@endsection