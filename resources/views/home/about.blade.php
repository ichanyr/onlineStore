@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-4 me-auto">
      <img src="{{ $viewData["image"] }}" alt="About Image" class="img-fluid">
    </div>
    <div class="col-lg-4 ms-auto">
      <p class="lead">{{ $viewData["description"] }}</p>
    </div>
    <div class="col-lg-4 ms-auto">
      <p class="lead">{!! nl2br(e($viewData["kontak"])) !!}</p>
    </div>
  </div>
</div>
@endsection
