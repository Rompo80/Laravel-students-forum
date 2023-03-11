@extends('layouts.app')
@section('title', 'Inscription')
@section('content')
<div class="container-xxl">
  <div class="position-relative">
    <img src="{{ asset('img/toa-heftiba.jpg') }}" class="img-fluid" alt="header-campus-image">
    <div class="mt-5 position-absolute top-0 start-50 translate-middle-x p-3 text-wrap rounded-2 text-center" style="min-width:385px" >
      <h2 class="text-light fs-1">Welcome to student forum</h2>
      <p class="lead fw-normal">The largest student information repository</p>
      <div class="search-container">
      <form class="d-flex" action="{{ route('etudiants.search', 'query') }}" method="GET">
        <div class="input-group border border-dark shadow-sm rounded" style="background-color: #f8f9fa;">
          <input class="form-control position-relative fs-5" type="search" name="search" placeholder="Search students" aria-label="Search" style="background-color: transparent; border: none;  box-shadow: none;">
          <button class="btn" type="submit"><i class="bi bi-search fs-4"></i></button>
        </div>
      </form>
      </div>
      <div class="everyone mt-5"></div>
      <a href="{{route('forum.index')}}" class="btn btn-outline-dark border border-dark border-3 px-4 text-uppercase py-2 fw-bolder" style="backdrop-filter: blur(2px);">See Everyone</a>
      </div>
    </div>
  </div>
</div>
@endsection