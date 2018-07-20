@extends('master')
@section('title') VISUALS @endsection

@section('additional-css')
  <link rel="stylesheet" href="{{ asset('/css/visual.css') }}">
@endsection

@section('content')

    <div class="col-sm-12 col-xl-3 d-flex flex-column align-items-start justify-content-start about-menu">
        <a class="active" href="/visual/2016/the-guns-of-youth-pt1">THE GUNS OF YOUTH PT.1</a>
        <a href="/visual/2016/xxxy">XXXY</a>
        <a href="{{url('/visual')}}">(( terug</a>
    </div>

    <div class="col-12 col-xl-9 d-flex flex-row flex-wrap no-padding-margin">
        <div class="visual-wrapper col-12 col-xl-8 d-flex flex-column wrapper-img no-padding-margin">
            <img class="img-fluid" src="{{ asset('/img/visual/2016/the-guns-of-youth/1.jpg') }}" alt="" >
        </div>
        <div class="visual-description-wrapper col-12 col-xl-4 no-padding-margin">
            <b> THE GUNS OF YOUTH PT. 1 (2016, pencil, and thread on paper) </b> <br> <br> The guns of youth pt.1 was the beginning of a series inspired by and/or based on destructive youth, alcohol and drug use, based on personal experiences and observations at age 16. The two faces would later become more relevant, since I became to see myself, back then suffering from depression and PTSD, in the drawn image.
        </div>
    </div>

@endsection

@section('additional-scripts')
@endsection
