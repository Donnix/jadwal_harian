
@extends('days.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>day</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('days.create') }}"> Create New day</a>
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
          
            <th>Hari</th>
          
            <th width="280px">Action</th>
        </tr>
        @foreach ($days as $day)
        <tr>
            <td>{{ $day-> hari}}</td>
          
            <td>
                <form action="{{ route('days.destroy',$day->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('days.show',$day->id) }}">Show</a>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <a href="home">Home</a>
   
@endsection