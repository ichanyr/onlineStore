@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="containerProd">
<div class="input-group">
    <form id="searchthis" style="display:inline;">
      <input id="search-box" name="search" style="width: 1117px; " placeholder="Search..." value="{{ request('search') }}"/>
      <button id="namanyay-search-btn" type="submit" value="{{ request('search') }}">
      <i class="search"></i>
      </button>
    </form>
  </div>
</div>
  <div class="row">
  @foreach ($viewData["products"] as $product)
  <div class="col-md-4 col-lg-3 mb-2">
    <div class="card">
      <img src="{{ asset('/storage/'.$product->getImage()) }}" class="card-img-top img-card">
      <div class="card-body text-center">
        <a href="{{ route('product.show', ['id'=> $product->getId()]) }}"
          class="btn w-100 bg-primary text-white">{{ $product->getName() }}</a>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection
