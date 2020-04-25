
@extends('schedules.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Jadwal</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('schedules.create') }}"> + Create</a>
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
            <th>Jadwal</th>
            <th>Hari</th>
            <th>Keterangan</th>
            
           
            <th width="280px">Action</th>
        </tr>
        @foreach ($schedules as $schedule)
        <tr>
            <td>{{$schedule -> jadwal}}</td>
            <td>{{ $schedule-> hari}}</td>
            <td>{{ $schedule-> ket}}</td>
            
            <td>
                <form action="{{ route('schedules.destroy',$schedule->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('schedules.show',$schedule->id) }}">Show</a>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <a href="home">Home</a>
   
@endsection