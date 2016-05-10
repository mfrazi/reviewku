@extends('base.master')

@section('title', 'ReviewKu')

@section('header')
    @include('base.header')
@endsection

@section('content')
    <br/>
    <br/>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <a class="flat-butt flat-info-butt text-center" href="{{ route('review.movie.write', ['id' => $data->movie->id]) }}" role="button">
                        Tulis ulasanmu tentang film <strong>{{ $data->movie->title }}</strong> di sini....
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div id="main-content" class="container">
        <div class="row">
            <div class="col-md-9" style="background-color: white;">
                <div style="margin: 10px 0 25px 0;">
                    <h1>{{ $data->movie->title }}</h1>
                    <hr/>
                </div>
                <div><h4><i>Oleh : {{ $data->name }}</i></h4></div>
                <div><h4><i>Tanggal : {{ date('d-M-Y', strtotime($data->created_at)) }}</i></h4></div>
                <div style="margin-top: 30px;">
                    <img src="{{ $data->movie->poster }}" class="img-responsive" align="left" style="margin-bottom: 30px; margin-right: 30px;">
                    <div style="line-height: 180%; font-size: 110%; text-align: justify;">{!! $data->full_content !!}</div>
                </div>
                <br/>
                <br/>
                 <span style="padding: 3px; border: solid 1px blue; margin-right: 10px;">
                    <span>0</span>
                    <a href="#" class="fa fa-thumbs-down"></a>
                </span>
                <span style="padding: 3px; border: solid 1px blue; margin-right: 10px;">
                    <span>1000</span>
                    <a href="#" class="fa fa-thumbs-up"></a>
                </span>
                <br/>
                <br/>
                <br/>
                <div>
                    <div>
                        <a href="#">
                            <i href="#" class="fa fa-calendar"></i>Jadwal
                        </a>
                        kalau ada nanti muncul disini
                    </div>
                    <img src="{{ URL::asset('jadwal.PNG') }}"></img>
                </div>
            </div>
            <div class="col-md-3" style="height: 1000px; background-color: white;">
                <div class="container-fluid">
                    <div style="margin: 10px 0 25px 0;">
                        <h3 style="line-height: 160%;">Review Terpopuler</h3>
                        <hr/>
                        @foreach($reviews as $r)
                            <div class="container-fluid"style="margin: 0 0 10px 0;">
                                <a href="{{ route('review.show', ['id' => $r->id]) }}"><h4>{{ $r->movie->title }} ({{ $r->movie->year }})</h4></a>
                                <h5>Oleh {{ $r->name }}</h5>
                                <hr/>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @include('base.footer')
@endsection
