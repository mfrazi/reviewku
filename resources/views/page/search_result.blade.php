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
                    <h1>Hasil Pencarian "{{ $search }}"</h1>
                    <hr/>
                </div>
                @if(!count($results))
                    <h3>Tidak ada hasil pencarian yang ditemukan</h3>
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                @endif
                @foreach($results as $d)
                    @include('base.review_card')
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @include('base.footer')
@endsection
