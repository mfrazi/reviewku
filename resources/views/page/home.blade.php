@extends('base.master')

@section('title', 'ReviewKu')

@section('header')
    @include('base.header')
@endsection

@section('moreStyles')
    <link href='https://fonts.googleapis.com/css?family=Dancing+Script:700' rel='stylesheet' type='text/css'>
@endsection

@section('content')
    {{ csrf_field() }}
    <br/>
    <div class="container">
        <div class="row text-center">
            <div class="container-fluid">
                <div class="col-md-8 col-md-offset-2" id="write-review">
                    <h1 style="color: white; font-family: Dancing Script;">"The More We Share, The More We Have"</h1>
                    <br/>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div>
                                <a class="flat-butt flat-info-butt" href="{{ route('review.write') }}" role="button">
                                    Tulis Reviewmu di sini....
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="main-content" class="container">
        <div class="row">
            <div class="col-md-9" style="background-color: white;">
                <div style="margin: 10px 0 25px 0;">
                    <h1>Film Terpopuler</h1>
                    <hr/>
                </div>
                <div class="row">
                    @foreach($movie as $m)
                        <div class="col-sm-6">
                            @include('base.movie_card')
                        </div>
                    @endforeach
                </div>
                {!! $movie->render() !!}
            </div>
            <div class="col-md-3" style="height: 1000px; background-color: white;">
                <div class="container-fluid">
                    <div style="margin: 10px 0 25px 0;">
                        <h3 style="line-height: 160%;">Film Terbaru</h3>
                        <hr/>
                        <div class="row">
                            @foreach($new_movies as $nm)
                                <div class="col-md-6 col-md-offset-3">
                                    <a href="{{ route('review.movie.show', ['id' => $nm->id]) }}"><img src="{{ $nm->poster }}" class="img-responsive"/></a>
                                </div>
                                <div class="col-md-10 col-md-offset-1 text-center" style="margin-bottom: 4%;">
                                    <a href="{{ route('review.movie.show', ['id' => $nm->id]) }}"><h5>{{ $nm->title }} ({{ $nm->year }})</h5></a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @include('base.footer')
@endsection
