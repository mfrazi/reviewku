@extends('base.master')

@section('title', 'Review')

@section('header')
    @include('base.header')
@endsection

@section('moreStyles')
    <link href='https://fonts.googleapis.com/css?family=Dancing+Script:700' rel='stylesheet' type='text/css'>
@endsection

@section('content')
    {{ csrf_field() }}
    <br/>
    @if($title != "ggwpnomovie")
        <br/>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <a class="flat-butt flat-info-butt text-center" href="{{ route('review.movie.write', ['id' => $id]) }}" role="button">
                            Tulis ulasanmu tentang film <strong>{{ $title }}</strong> di sini....
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <div id="main-content" class="container">
        <div class="row">
            <div class="col-md-9" style="background-color: white;">
                <div style="margin: 10px 0 25px 0;">
                    @if($title == "ggwpnomovie")
                        <h1>Review Terpopuler</h1>
                    @else
                        <h1>Review {{ $title }}</h1>
                    @endif
                    <hr/>
                </div>
                @if(!count($reviews))
                    <h3>Tidak ada ulasan untuk film {{ $title }}</h3>
                    <br/>
                    <br/>
                    <br/>
                @endif

                @foreach($reviews as $d)
                    @include('base.review_card')
                @endforeach
                {!! $reviews->render() !!}
            </div>

            @if($title == "ggwpnomovie")
            <div class="col-md-3" style="height: 1000px; background-color: white;">
                <div class="container-fluid">
                    <div style="margin: 10px 0 25px 0;">
                        <h3 style="line-height: 160%;">Review Terbaru</h3>
                        <hr/>
                        @foreach($new_reviews as $nr)
                        <div class="container-fluid"style="margin: 0 0 10px 0;">
                            <a href="{{ route('review.show', ['id' => $nr->id]) }}"><h4>{{ $nr->movie->title }} ({{ $nr->movie->year }})</h4></a>
                            <h5>Oleh {{ $nr->name }}</h5>
                            <hr/>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
@endsection

@section('footer')
    @include('base.footer')
@endsection
