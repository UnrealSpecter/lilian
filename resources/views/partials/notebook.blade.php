@extends('master')

@section('title') Notebook @endsection

@section('additional-css')
  <link rel="stylesheet" href="{{ asset('/css/notebook.css') }}">
  <script type="text/javascript" src="/plugins/turnjs4/extras/jquery.min.1.7.js"></script>
  <script type="text/javascript" src="/plugins/turnjs4/extras/modernizr.2.5.3.min.js"></script>
@endsection

@section('content')

    <div class="row full-view">

      <div class="flipbook-viewport">
      	<div class="container">
      		<div class="flipbook">
                <div class="page"><img src="{{ asset('/img/notebook/front.png')}}/" alt="notebook-front" /></div>
                @foreach($pages as $page)
                <div class="page"><img src="{{ asset('/storage')}}/{{ $page->image_path }}" alt="" /></div>
                @endforeach
                <div class="page"><img src="{{ asset('/img/notebook/back.png')}}/" alt="notebook-back" /></div>
      		</div>
      	</div>
      </div>

  </div>
      <script type="text/javascript">

      function loadApp() {

      	// Create the flipbook

      	$('.flipbook').turn({
      			// Width

      			width:922,

      			// Height

      			height:600,

      			// Elevation

      			elevation: 50,

      			// Enable gradients

      			gradients: true,

      			// Auto center this flipbook

      			autoCenter: true

      	});
      }

      // Load the HTML4 version if there's not CSS transform

      yepnope({
      	test : Modernizr.csstransforms,
      	yep: ['/plugins/turnjs4/lib/turn.js'],
      	nope: ['/plugins/turnjs4/lib/turn.html4.min.js'],
      	both: ['/plugins/turnjs4/samples/basic/css/basic.css'],
      	complete: loadApp
      });

      </script>


@endsection

@section('additiona-scripts')
@endsection
