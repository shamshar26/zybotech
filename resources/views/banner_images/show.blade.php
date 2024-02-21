@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $bannerImage->title }}</h1>
      
        <img src="{{ asset($bannerImage->image) }}" alt="{{ $bannerImage->title }}">
       
    </div>
@endsection