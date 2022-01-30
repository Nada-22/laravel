@extends('layouts.app')

@section('title') view Post @endsection

@section('content')

<div class="card col-8" style="margin:auto" >
  <p class="card-header">Post info</p>
  <div class="card-body">
    <h5 class="card-title">Title:- <span class="fs-6 fw-normal"> Special title treatment</span></h5> 
    <h5 class="card-title">Description:- <span class="fs-6 fw-normal"> Special title treatment</span></h5> 
  </div>
</div>
<br><br>
<div class="card col-8" style="margin:auto">
  <p class="card-header">Post Creator info</p>
  <div class="card-body">
    <h5 class="card-title">Name:- <span class="fs-6 fw-normal"> Special title treatment</span></h5> 
    <h5 class="card-title">Email:- <span class="fs-6 fw-normal"> Special title treatment</span></h5> 
    <h5 class="card-title">created At:- <span class="fs-6 fw-normal"> Special title treatment</span></h5> 

  </div>
</div>
@endsection
    
