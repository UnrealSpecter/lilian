@extends('master')
@section('title') VISUALS @endsection

@section('additional-css')
  <link rel="stylesheet" href="{{ asset('/css/visual.css') }}">
@endsection

@section('content')

    <div class="col-sm-12 col-xl-3 d-flex flex-column align-items-start justify-content-start about-menu">
        <a href="/visual/2017/break-the-internet">#BREAKTHEINTERNET</a>
        <a href="/visual/2017/girls-girls-girls">GIRLS GIRLS GIRLS</a>
        <a class="active" href="/visual/2017/onkruid">ONKRUID</a>
        <a href="/visual/2017/ranja">RANJA</a>
        <a href="{{url('/visual')}}">(( terug</a>
    </div>

    <div class="col-12 col-xl-9 d-flex flex-row flex-wrap no-padding-margin">
        <div class="visual-wrapper col-12 col-xl-8 d-flex flex-column wrapper-img no-padding-margin">
            <img class="img-fluid" src="{{ asset('/img/visual/2017/onkruid/1.jpg') }}" alt="" >
        </div>
        <div class="visual-description-wrapper col-12 col-xl-4 no-padding-margin">
            <b> ONKRUID (2017, digital film) </b> <br> <br> Onkruid (WEEDS) is a experimental, autobiographic shortfilm. It shows how (sexual) trauma can carve and bruise the mental state in a rigorous way.
            <br><br><a target="_blank" href="https://www.youtube.com/watch?v=nEZox2qmhis">watch ))</a>
        </div>
    </div>

@endsection

@section('additional-scripts')
@endsection
