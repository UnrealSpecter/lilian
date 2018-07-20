@extends('master')

@section('title') ABOUT @endsection

@section('additional-css')
    <link rel="stylesheet" href="{{ asset('/css/about.css') }}">
    <script src="{{ asset('/plugins/typed/lib/typed.min.js') }}" charset="utf-8"></script>
@endsection

@section('content')

        <div class="col-sm-12 col-xl-3 d-flex flex-column align-items-start justify-content-start about-menu">
            <a class="active" href="{{url('/about')}}">About</a>
            <a href="{{url('/about/cv')}}">Curriculum Vitae</a>
            <a href="{{url('/')}}">(( terug</a>
        </div>

        <div class="col-xl-8 no-padding-margin">
            <img class="img-fluid artist-statement" src="{{ $statement->first()->image_path }}" alt="artist-statement">
        </div>

@endsection

@section('additional-scripts')
@endsection
