@extends('admin.master')

@section('title', 'Ubah Data Film')

@section('moreStyles')
    <link href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css" rel="stylesheet" type="text/css"/>
@endsection

@section('content')
    <br/>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.movies.index') }}">Film</a></li>
        <li class="active">Ubah</li>
    </ol>
    <div><h3 class="text-center">Ubah Data Film</h3></div>
    <hr/>
    <div class="row">
        @if(Session::has('success') || Session::has('error'))
            <div class="col col-md-8 col-md-offset-2">
                @if(Session::has('success')  )
                    <div class="alert alert-success text-center">
                        <strong>{{ Session::get('success') }}</strong>
                    </div>
                @endif
                @if(Session::has('error'))
                    <div class="alert alert-danger text-center">
                        <strong>{{ Session::get('error') }}</strong>
                    </div>
                @endif
            </div>
            <br/>
        @endif
        <div class="col col-md-8 col-md-offset-2">
            <form role="form" data-toggle="validator" method="POST" action="{{ route('admin.movies.update', ['id' => $data->id]) }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="input_judul">Judul film</label>
                    <input type="text" class="form-control" id="input_judul" value="{{ $data->title }}" readonly>
                </div>
                <div class="form-group">
                    <label for="id_imdb">ID IMDB</label>
                    <input type="text" class="form-control" id="id_imdb" value="{{ $data->id_imdb }}" readonly>
                </div>
                <div class="form-group">
                    <label for="year">Tahun</label>
                    <input type="text" class="form-control" id="year" value="{{ $data->year }}" readonly>
                </div>
                <div class="form-group">
                    <label for="poster">Poster</label>
                    <input name="poster" type="text" class="form-control" id="poster" value="{{ $data->poster }}">
                </div>
                <div class="form-group">
                    <label for="rating">Rating</label>
                    <select name="rating" class="form-control" id="rating">
                        @foreach($ratings as $r)
                            @if($r->id == $data->rating_id)
                                <option value="{{ $r->id }}" selected>{!! $r->name !!}</option>
                            @else
                                <option value="{{ $r->id }}">{!! $r->name !!}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="genre">Genre</label>
                    <select name="genres[]" class="form-control" id="genre" multiple>
                        @foreach($genres as $g)
                            <?php $flag = 0 ?>
                            @foreach($genre_movie as $gm)
                                @if($gm['genre_id'] == $g->id)
                                    <?php $flag = 1 ?>
                                @endif
                            @endforeach
                            @if($flag == 1)
                                <option value="{{ $g->id }}" selected>{!! $g->name !!}</option>
                            @else
                                <option value="{{ $g->id }}">{!! $g->name !!}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <br/>
                <div class="form-group">
                    <button type="submit" class="btn btn-default pull-right">Ubah film</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('moreScripts')
    <script type="text/javascript" src="{{ URL::asset('js/validator.js') }}"></script>
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>

    <script>
        $( document ).ready(function() {
            $('select').selectpicker();
        });
    </script>
@endsection