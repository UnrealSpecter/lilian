@extends('master')
@section('title') News @endsection

@section('additional-css')
    <link rel="stylesheet" href="{{ asset('/css/news.css') }}">
    <script src="{{ asset('/plugins/typed/lib/typed.min.js') }}" charset="utf-8"></script>
@endsection

@section('content')

        <div class="col-3 d-flex flex-column align-items-start justify-content-center news-menu" style="padding-left: 5%;">
            <a style="margin-bottom: 10px; font-size: 2em;" href="{{url('/about')}}">About</a>
            <a style="margin-bottom: 10px; font-size: 2em;" href="{{url('/about/cv')}}">Curriculum Vitae</a>
            <a style="margin-bottom: 10px; font-size: 2em;" class="active" href="{{url('/about/news')}}">News</a>
        </div>

        @foreach($news as $newsItem)
        <div class="col-9">
            <div class="panel panel-primary">
                <a href="/about/news/{{ $newsItem->id }}">
                    <div class="panel-body"><img src="{{ asset('/storage')}}/{{$newsItem->image_path}}" class="img-responsive" alt="{{ $newsItem->title }}"></div>
                </a>
            </div>
        </div>
        @endforeach

@endsection

@section('additional-scripts')
@endsection
