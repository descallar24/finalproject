@extends('students.layout')
@section('content')
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">studId : {{ $students->studId }}</h5>
        <p class="card-text">lastname : {{ $students->lastname }}</p>
        <p class="card-text">firstname : {{ $students->firstname }}</p>
        <p class="card-text">MI : {{ $students->MI }}</p>
        <p class="card-text">course : {{ $students->course }}</p>
        <p class="card-text">yearlevel : {{ $students->course }}</p>

        <p class="card-text">user_level : {{ $students->user_level }}</p>
        <p class="card-text">status : {{ $students->status }}</p>

  </div>
      
    </hr>
  
  </div>
</div>