@extends('master')
@section('title') VISUALS @endsection

@section('additional-css')
  <link rel="stylesheet" href="{{ asset('/css/visual.css') }}">
@endsection

@section('content')

    <div class="col-sm-12 col-xl-3 d-flex flex-column align-items-start justify-content-start about-menu">
        <a class="active" href="/visual/2017/break-the-internet">#BREAKTHEINTERNET</a>
        <a href="/visual/2017/girls-girls-girls">GIRLS GIRLS GIRLS</a>
        <a href="/visual/2017/onkruid">ONKRUID</a>
        <a href="/visual/2017/ranja">RANJA</a>
        <a href="{{url('/visual')}}">(( terug</a>
    </div>

    <div class="col-12 col-xl-9 d-flex flex-row flex-wrap no-padding-margin">
        <div class="visual-wrapper col-12 col-xl-8 d-flex flex-column wrapper-img no-padding-margin">
            <img class="img-fluid" src="{{ asset('/img/visual/2017/break-the-internet/1.jpg') }}" alt="" >
            <img class="img-fluid" src="{{ asset('/img/visual/2017/break-the-internet/2.jpg') }}" alt="" >
            <img class="img-fluid" src="{{ asset('/img/visual/2017/break-the-internet/3.jpg') }}" alt="" >
            <img class="img-fluid" src="{{ asset('/img/visual/2017/break-the-internet/4.jpg') }}" alt="" >
        </div>
        <div class="visual-description-wrapper col-12 col-xl-4 no-padding-margin">
            <b> #BREAKTHEINTERNET (2017, ca. 84 x 118 cm, ink on paper) </b> <br> <br> A four-part series of drawings regarding sex and sexuality in internetculture (and what being female within all of this means for both the mental and physical state of being).
        </div>
    </div>

@endsection

@section('additional-scripts')
@endsection
