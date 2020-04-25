@extends('layouts.layout')
 
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
          
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
   
<form action="{{ route('tasks.store') }}" method="POST">
{{ csrf_field() }}
    
        <div class="row">
      
       
       
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mulai</strong>
                </br>
                <input type="text" name="time_start" class="time" required="" class="form-control" autocomplete="off">
               
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Sampai</strong>
                </br>
                <input type="text" name="time_end" class="time" required="" class="form-control" autocomplete="off">
            </div>
        </div>

        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal</strong>
                </br>
                <input type="text" name="task_date" class="date" required="" class="form-control" autocomplete="off">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Kegiatan </strong>
                <input name="name" type="text "required="" class="form-control">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mata Pelajaran </strong>
                <input name="mapel" type="text" required="" class="form-control">
            </div>
        </div>

      
       
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Buat</button>
        </div>
    </div>
    <script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery-ui.js') }}"></script>
    <script type="text/css" src="{{ URL::asset('js/jquery.css') }}"></script>
  <script>
    $('.date').datepicker({
        autoclose: true,
        dateFormat: "yy-mm-dd"
    });
</script>
<link rel="stylesheet" href=" {{ URL ::asset('css/jquery-ui.css') }}" type="text/css" />
<link rel="stylesheet" href="{{ URL ::asset('css/jquery.ui.timepicker.css')}}" type="text/css" />
<link rel="stylesheet" href="{{ URL ::asset('css/jquery-ui.theme.css')}}" type="text/css" />
<script type="text/javascript" src="{{ URL ::asset('js/jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ URL ::asset('js/jquery-ui.js')}}"></script>
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
