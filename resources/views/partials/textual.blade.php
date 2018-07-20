@extends('master')

@section('title') Textual @endsection

@section('additional-css')
  <link rel="stylesheet" href="{{ asset('/css/textual.css') }}">
@endsection

@section('content')
  <div class="col-12 full-view align-c">

    <div class="col-3 offset-3 coin-left-wrapper">
      <a href="{{url('/textual/writing')}}"><img class="coin-left" src="{{ asset('/img/textual/coin-notebook-front.png') }}" onmouseover="this.src='{{ asset('/img/textual/coin-notebook-back.png') }}'"
        onmouseout="this.src='{{ asset('/img/textual/coin-notebook-front.png') }}'"
        border="0" alt="" ></a>
    </div>

    <div class="col-4 coin-right-wrapper">
      <a href="{{url('/textual/notebook')}}"><img class="coin-right" src="{{ asset('/img/textual/coin-writing-front.png') }}" onmouseover="this.src='{{ asset('/img/textual/coin-writing-back.png') }}'"
        onmouseout="this.src='{{ asset('/img/textual/coin-writing-front.png') }}'"
        border="0" alt="" ></a>
    </div>

  </div>

@endsection

@section('additional-scripts')
@endsection
