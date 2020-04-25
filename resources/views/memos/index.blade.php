
@extends('memos.layout')
 
@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Notes</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('memos.create') }}"> + Create</a>
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
            <th>Tanggal</th>
            <th>Judul</th>
            <th>Memo</th>
            
           
            <th width="280px">Action</th>
        </tr>
        @foreach ($memos as $memo)
        <tr>
            <td>{{$memo -> created_at}}</td>
            <td>{{$memo -> judul}}</td>
            <td>{{ $memo-> memo}}</td>
            
            <td>
                <form action="{{ route('memos.destroy',$memo->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('memos.show',$memo->id) }}">Show</a>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <a href="home">Home</a>
   
@endsection