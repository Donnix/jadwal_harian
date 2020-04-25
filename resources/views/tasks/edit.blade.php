@extends('layouts.layout')
   
@section('content')
<section class="hero-wrap js-fullheight" style="background-image: url(images/bg_bg.jpg);" data-stellar-background-ratio="0.5">

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('tasks.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('tasks.update',[$task->id]) }}" method="POST">
    
        @csrf
        @method('PUT')
   
         <div class="row">

         <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">
                    <strong>Agenda</strong>
                    <input type="text" name="name" value="{{ $task-> name}}" class="form-control" >
                </div>
            </div>
           
            
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Mulai</strong>
                    </br>
                    <input type="text" name="time_start" value="{{ $task->time_start }}" class="time" autocomplete="off">
                  
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Selesai</strong>
                    </br>
                    <input type="text" name="time_end" value="{{ $task->time_end }}" class="time" autocomplete="off">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Deskripsi</strong>
                    <input type="text" name="description" value="{{ $task->description }}" class="form-control" >
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Edit</button>
            </div>
        </div>
<link rel="stylesheet" href=" {{ URL ::asset('css/jquery-ui.css') }}" type="text/css" />
<link rel="stylesheet" href="{{ URL ::asset('css/jquery.ui.timepicker.css')}}" type="text/css" />
<link rel="stylesheet" href="{{ URL ::asset('css/jquery-ui.theme.css')}}" type="text/css" />
<script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery-ui.js') }}"></script>
<script type="text/css" src="{{ URL::asset('js/jquery.css') }}"></script>
<script type="text/javascript" src="{{ URL ::asset('js/jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ URL ::asset('js/jquery.ui.timepicker.js') }}"></script>
<script type="text/javascript">
             $(document).ready(function() {
                $('.time').timepicker({
                    showNowButton: true,
                    showDeselectButton: true,
                    defaultTime: '',  // removes the highlighted time for when the input is empty.
                    showCloseButton: true
                   
                });
              });
</script>

</form>

@endsection


