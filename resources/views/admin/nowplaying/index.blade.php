@extends('admin.master')

@section('title', 'Jadwal Tayang Film')

@section('moreStyles')
    <link href="{{ URL::asset('css/bootstrap-clockpicker.min.css') }}" type="text/css" rel="stylesheet"/>
@endsection

@section('content')
    <br/>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.movies.index') }}">Film</a></li>
        <li class="active">Jadwal Tayang</li>
    </ol>
    <div><h3 class="text-center">Jadwal Tayang Film <strong>{{ $title }}</strong></h3></div>
    <hr/>
    <div class="row">
        <div class="col col-md-10 col-md-offset-1">
            @if(!count($nowplayings))
                <h3>Tidak ada jadwal</h3>
            @else
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Kota</th>
                            <th>Nama Bioskop</th>
                            <th>Jam</th>
                            <th>Hapus</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($nowplayings as $n)
                        <tr>
                            <td>{{ $n->cinema->place }}</td>
                            <td>{{ $n->cinema->name }}</td>
                            <td>{{$n->time }}</td>
                            <td><a href="{{ route('admin.nowplaying.delete', ['id' => $n->id]) }}" class="fa fa-times" aria-hidden="true" style="color: red; text-decoration: none;"></a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            @endif
            <br/>
            <br/>
            <form class="form-inline" role="form" data-toggle="validator" method="POST" action="{{ route('admin.nowplaying.store', ['id' => $id]) }}">
                {{ csrf_field() }}
                <input name="id" value="{{ $id }}" hidden/>
                <div class="form-group" style="margin-right: 20px;">
                    <select name="cinema" class="form-control">
                        @foreach($cinemas as $c)
                            <option value="{{ $c->id }}">{{ $c->place }}, {{ $c->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div data-autoclose="true" class="input-group" id="clockpicker" style="margin-right: 20px;">
                    <input name="time" type="text" class="form-control" value="12:00">
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-time"></span>
                    </span>
                </div>
                <div class="form-group">
                    <button class="btn btn-default" type="submit">Tambah Jadwal</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('moreScripts')
    <script src="{{ URL::asset('js/bootstrap-clockpicker.min.js') }}"></script>
    <script>
        $(document).ready(function(){
            $('#clockpicker').clockpicker();
        });
    </script>
@endsection