@extends('master')

@section('title') Writing @endsection

@section('additional-css')
  <link rel="stylesheet" href="{{ asset('/css/writing.css') }}">
@endsection

@section('content')

    <div class="row full-view">
        <div class="col-3">
            <div class="table-class">
            <table>
                <tbody>
                    <tr>
                        @foreach($writings as $writing)
                        <td><a href="/textual/writing/{{ $writing->id }}">{{ $writing->title }}, {{ $writing->year_of_publishing }}</a></td>
                        @endforeach
                    </tr>
                </tbody>
            </table>
            </div>
        </div>

        <div class="col-6 align-c img-wrapper">
            @foreach($writings as $writing)
            <img src="{{ asset('/storage/') }}/{{ $writing->image_path }}" alt="{{ $writing->title }}" style="position: absolute;">
            @endforeach
        </div>

        <div class="col-3 text-wrapper">
            @foreach($writings as $writing)
            <div class="col-12" style="position: absolute;">{{ $writing->description }}</div>
            @endforeach
        </div>
    </div>

@endsection

@section('additional-scripts')
@endsection
