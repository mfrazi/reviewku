@extends('base.master')

@section('title', 'ReviewKu')

@section('header')
    @include('base.header')
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @foreach($nowplayings as $np)
                    @if(count($np->nowplaying))
                        <img src="{{ $np->poster }}" alt="{{ $np->title }}">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Kota</th>
                                    <th>Nama Bioskop</th>
                                    <th>Waktu</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($np->nowplaying as $n)
                                    <tr>
                                        <td>{{ $n->cinema->place }}</td>
                                        <td>{{ $n->cinema->name }}</td>
                                        <td>{{ $n->time }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection


@section('footer')
    @include('base.footer')
@endsection
