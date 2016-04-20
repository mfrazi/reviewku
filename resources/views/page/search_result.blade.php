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
    <div id="main-content" class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2" style="background-color: white;">
                <div style="margin: 10px 0 25px 0;">
                    <h1>Hasil Pencarian</h1>
                    <hr/>
                </div>
                @include('base.movie_card')
                @include('base.movie_card')
                @include('base.movie_card')
                @include('base.movie_card')
                @include('base.movie_card')
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @include('base.footer')
@endsection
