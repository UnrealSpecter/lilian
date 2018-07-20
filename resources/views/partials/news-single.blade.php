@extends('layouts.master')

@section('title')
  Lilian
@endsection

@section('css')
  <link rel="stylesheet" href="{{ asset('/css/news-single.css') }}">
    <script src="{{ asset('/plugins/typed/lib/typed.min.js') }}" charset="utf-8"></script>
@endsection

@section('content')
    <div class="row full-view">
        <div class="col-6 align-c news-img">
            <img src="{{ asset('/storage') }}/{{$news->image_path}}" alt="{{ $news->title }}">
        </div>
        <div class="col-4 offset-2 top-push">
           <h1>{{ $news->title }}</h1>
           <p>{{ $news->description }}</p>
           <a href="{{ $news->external_link }}">bekijk extern</a>
        </div>
    </div>
@endsection

@section('js')
@endsection
