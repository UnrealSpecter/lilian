@extends('master')

@section('title') CURRICULUM VITAE @endsection

@section('additional-css')
    <link rel="stylesheet" href="{{ asset('/css/cv.css') }}">
@endsection

@section('content')
        <div class="col-12 col-lg-3 col-xl-3 d-flex flex-column align-items-start justify-content-xl-start justify-content-lg-start cv-menu no-padding-margin">
            <a href="{{url('/about')}}">About</a>
            <a class="active" href="{{url('/about/cv')}}">Curriculum Vitae</a>
            <a href="{{url('/')}}">(( terug</a>
            <!-- <a style="margin-bottom: 10px; font-size: 2em;" href="{{url('/about/news')}}">News</a> -->
        </div>
        <div class="col-12 col-lg-9 col-xl-9 d-flex flex-column curriculum-vitae">
            <span class="d-none">CURRULICUM VITAE</span>
              Born 1997, the Netherlands.<br>
              Currently living and working in Groningen, the Netherlands.<br><br>
              <b> EDUCATION </b><br>
              2009 - 2014: HAVO, Winkler Prins Secondary School Veendam (2009 - 2012 VWO) <br>
              2014 - now: Fine Art, Academy Minerva, Groningen. <br><br>
              <b> EXHIBITIONS </b> <br>
              Coming up: small solo, ’Skek, Zeedijk Amsterdam <br><br>
              2018 <br>
              February 2018: ‘Its not me, it’s you’, ZUHAUSE, Groningen, NL <br><br>
              2017 <br>
              May 2017: 'Leftovers', Maydays, OOST/the Gym Groningen, NL <br>
              Februari 2017: 'January Expo', Academy Minerva Groningen, NL <br><br>
              2016 <br>
              October 2016: 'WP 150', Van Berensteyn, Veendam, NL <br>
              September 2016: the studios, Groninger Museum, Groningen, NL <br>
              April 2016: 'De Nieuwelingen', Galerie de Smederij, Sappemeer, NL <br>
              Februari 2016: 'Art 15/20', stichting WEP, Groningen, NL <br><br>
              2015 <br>
              June 2015: Kunstbende Finals, Westergasfabriek Amsterdam, NL <br><br>
              2013 <br>
              August 2013: Kunstbende Finals, Melkweg Amsterdam, NL <br>
              September 2013: Simplon, Groningen, NL <br><br>
              <b> AWARDS </b><br>
              2017 <br>
              Best Young Talent (Grootste Jong Talent) Noordelijk Filmfestival 2017 <br><br>
              2016 <br>
              1th place Kunstbende National (POETRY) <br>
              2th place Kunstbende National (FILM) <br><br>
              <b> PUBLICATIONS </b> <br>
              2018 <br>
              Van huilen krijg je honger, collection of poetry <br>
              scholieren.com interview with Elisa Lo An Joe <br>
              2016: Document 12, De Optimist, online literary magazine <br>
              2013: 'Vruchtvlees', collection of poetry <br><br>
              <b> PERFORMANCE (TEXTUAL) </b> <br>
              2017 <br>
              Poezië met, Theater de Kapel, Groningen, NL <br>
              De Poëziebus, Grote Markt, Groningen NL <br><br>
              2016 <br>
              Kunstbende Finals, Tivoli Utrecht, NL <br>
              Wintertuin Festival, Doornroosje Nijmegen, NL <br>
              Podium New Attraction, Spoken Word, Simplon Groningen, NL <br>
              Noise Soup & Knowledge, Gallery Sign, (Eurosonic) Groningen, NL <br><br>
              2015 <br>
              Kunstbende Finals, Westergasfabriek Amsterdam, NL <br><br>
              2014 <br>
              Kunstbende Finals, Melkweg Amsterdam, NL <br><br>
              2013 <br>
              Kunstbende Finals, Melkweg Amsterdam, NL <br><br>
              <b> EXPERIENCE (OTHER) </b><br>
              2018 <br>
              Reading: Why I refuse to perceive my rapist as a monster, Harmoniegebouw Universiteit Groningen, NL <br>
              Judge for Kunstbende pre-finals film/expo, Groningen, NL <br>
              Online sale of artwork <br><br>
              2017 <br>
              MovieZone Jury, IFFR Filmfestival, Rotterdam, NL <br>
              Jury Kunstbende National Finale (Poetry), Tivoli Utrecht, Jury Kunstbende Groningen, Simplon (Film), NL <br>
              Hostess and teacher/instructor, the studios, Groninger Museum, Groningen, NL <br><br>
              2016 <br>
              Young artist residence week , Villanova Festival + Kunstbende Belgium, Antwerp, BE <br><br>
              2015 <br>
              Young artist exchange, Villanova Festival + Kunstbende NL/BE, Antwerp, BE <br><br>
        </div>
@endsection

@section('additional-scripts')
@endsection
