@extends('master')
@section('title') VISUALS @endsection

@section('additional-css')
  <link rel="stylesheet" href="{{ asset('/css/visual.css') }}">
@endsection

@section('content')

    <div class="col-sm-12 col-xl-3 d-flex flex-column align-items-start justify-content-start about-menu">
        <a class="active" href="the-woman-as-a-kitchtable">THE WOMAN AS A KITCHEN TABLE</a>
        <a href="{{url('/visual')}}">(( terug</a>
    </div>

    <div class="col-12 col-xl-9 d-flex flex-row flex-wrap no-padding-margin">
            <div class="visual-wrapper col-12 col-xl-8 d-flex flex-column wrapper-img no-padding-margin">
            <img class="img-fluid" src="{{ asset('/img/visual/2018/the-woman-as-a-kitchentable/1.jpg') }}" alt="" >
            <img class="img-fluid" src="{{ asset('/img/visual/2018/the-woman-as-a-kitchentable/2.jpg') }}" alt="" >
            <img class="img-fluid" src="{{ asset('/img/visual/2018/the-woman-as-a-kitchentable/3.jpg') }}" alt="" >
            <img class="img-fluid" src="{{ asset('/img/visual/2018/the-woman-as-a-kitchentable/4.jpg') }}" alt="" >
        </div>
        <div class="visual-description-wrapper col-12 col-xl-4 no-padding-margin">
            <b>THE WOMAN AS A KITCHENTABLE (2018, ca. 82 x 112 cm, graphite on paper)</b> <br> ‘The woman as a kitchentable’ is a caricature of modern western society’s gender/social hierarchy. An enlargement of problematic representation of gender roles and femininity posed by media, culture, religion and upbringing.
        </div>
    </div>
@endsection

@section('additional-scripts')
@endsection
