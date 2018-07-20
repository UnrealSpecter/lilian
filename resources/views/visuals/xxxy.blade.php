@extends('master')
@section('title') VISUALS @endsection

@section('additional-css')
  <link rel="stylesheet" href="{{ asset('/css/visual.css') }}">
@endsection

@section('content')

    <div class="col-sm-12 col-xl-3 d-flex flex-column align-items-start justify-content-start about-menu">
        <a href="/visual/2016/the-guns-of-youth-pt1">THE GUNS OF YOUTH PT.1</a>
        <a class="active" href="/visual/2016/xxxy">XXXY</a>
        <a href="{{url('/visual')}}">(( terug</a>
    </div>

    <div class="col-12 col-xl-9 d-flex flex-row flex-wrap no-padding-margin">
        <div class="visual-wrapper col-12 col-xl-8 d-flex flex-column wrapper-img no-padding-margin">
            <img class="img-fluid" src="{{ asset('/img/visual/2016/xxxy/1.jpg') }}" alt="" >
        </div>
        <div class="visual-description-wrapper col-12 col-xl-4 no-padding-margin">
            <b> XXXY (2017, ca. 50 x 110 cm, graphite and gold pigment on paper) </b> <br> <br> XXXY is a work inspired by transgenderism and the biological constraint of female or male chromosomes.
        </div>
    </div>

@endsection

@section('additional-scripts')
@endsection
