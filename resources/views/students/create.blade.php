
@extends('students.layout')
@section('content')
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
      
      <form action="{{ url('student') }}" method="post">
        {!! csrf_field() !!}
        <label>studid</label></br>
        <input type="text" name="studid" id="studid" class="form-control"></br>
        <label>lastname</label></br>
        <input type="text" name="lastname" id="lastname" class="form-control"></br>
        <label>firstname</label></br>
        <input type="text" name="firstname" id="firstname" class="form-control"></br>
        <label>MI</label></br>
        <input type="text" name="MI" id="MI" class="form-control"></br>
        <label>course</label></br>
        <input type="text" name="course" id="course" class="form-control"></br>
        <label>yearlevel</label></br>
        <input type="text" name="yearlevel" id="yearlevel" class="form-control"></br>
      
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop