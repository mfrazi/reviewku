@extends('base.master')

@section('title', 'ReviewKu')

@section('header')
    @include('base.header')
@endsection

@section('moreStyles')
    <link href='https://fonts.googleapis.com/css?family=Dancing+Script:700' rel='stylesheet' type='text/css'>
@endsection

@section('content')
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
                    <h1>Review Terpopuler</h1>
                    <hr/>
                </div>
                @include('base.movie_card')
                @include('base.movie_card')
                @include('base.movie_card')
                @include('base.movie_card')
                @include('base.movie_card')
            </div>
            <div class="col-md-3" style="height: 1000px; background-color: white;">
                <div class="container-fluid">
                    <div style="margin: 10px 0 25px 0;">
                        <h3 style="line-height: 160%;">Review Terbaru</h3>
                        <hr/>
                        <div class="container-fluid"style="margin: 0 0 10px 0;">
                            <h4>Green Mile (1995)</h4>
                            <span style="padding: 3px; border: solid 1px blue; margin-right: 10px;">
                                <span>0</span>
                                <a href="#" class="fa fa-thumbs-down"></a>
                            </span>
                            <span style="padding: 3px; border: solid 1px blue; margin-right: 10px;">
                                <span>1000</span>
                                <a href="#" class="fa fa-thumbs-up"></a>
                            </span>
                            <hr/>
                        </div>
                        <div class="container-fluid" style="margin: 0 0 10px 0;">
                            <h4>The 802.11g allows P2P ad-hoc (non-infrastructure)The 802.11g allows P2P ad-hoc (non-infrastructure) (1995)</h4>
                            <span style="padding: 3px; border: solid 1px blue; margin-right: 10px;">
                                <span>0</span>
                                <a href="#" class="fa fa-thumbs-down"></a>
                            </span>
                            <span style="padding: 3px; border: solid 1px blue; margin-right: 10px;">
                                <span>1000</span>
                                <a href="#" class="fa fa-thumbs-up"></a>
                            </span>
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
