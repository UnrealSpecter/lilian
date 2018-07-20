@extends('master')
@section('title') CONTACT @endsection

@section('additional-css')
  <link rel="stylesheet" href="{{ asset('/css/contact.css') }}">
@endsection

@section('content')
    <img src="{{ asset('/img/contact/bg.jpg')}}" style="height: 100vh; width: 100vw; position: fixed; top: 0; left: 0;">
    <div class="col-12 col-xs-12 col-sm-12 col-md-7 col-lg-5 col-xl-4 contact-wrapper">
      @if(Session::has('success'))
      <div class="alert alert-success" style=" position:absolute; top:0px; border-radius: 0%;" role="alert">
       <strong>Success:</strong> {{ Session::get('success') }}
      </div>
      @endif
      @if(count($errors) > 0)
        <div class="alert alert-danger" style=" border-radius: 0%;" role="alert">
            <strong>Errors:</strong>
            <ul>
             @foreach($errors->all() as $error)
                 <li>{{ $error }}</li>
             @endforeach
            </ul>
          </div>
        @endif
        <h4><a href="/" style="color: white;">(( terug</a><h4>
        <h4><span class="underline">Contact</span></h4>

        {{ Form::open(['action' => 'ContactController@index']) }}
        {!! Form::token() !!}
            <table style="width: 100%; margin-top: 15px;">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Tel nr</th>
                </tr>
                <tr>
                    <td><input type="text" id="name" name="name" placeholder="Your name.."></td>
                    <td><input type="text" id="email" name="email" placeholder="Your email.."></td>
                    <td><input type="text" id="phone" name="phone" placeholder="Your number.."></td>
                </tr>
            </table>
            <textarea id="message" name="textmessage" placeholder="Write something.."></textarea>
            <br>
            <input class="submit" type="submit" value="Submit">
        {{ Form::close() }}
    </div>
@endsection

@section('additional-scripts')
@endsection
