@extends('admin.master')

@section('title', 'Tambah Film')

@section('moreStyles')
    <link href="{{ URL::asset('css/jquery.autocomplete.css') }}" rel="stylesheet" type="text/css"/>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css" rel="stylesheet" type="text/css"/>
@endsection

@section('content')
    <br/>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.movies.index') }}">Film</a></li>
        <li class="active">Tambah</li>
    </ol>
    <div><h3 class="text-center">Tambah Film</h3></div>
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
            <form role="form" data-toggle="validator" method="POST" action="{{ route('admin.movies.store') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="input_judul">Judul film <sup style="color: red;">*</sup></label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="input_judul" placeholder="Judul film" name="id_title" data-error="Judul film harus diisi" required>
                        <a style="cursor: pointer; background-color:white; color:red;" onclick="hapusJudul();" class="input-group-addon" title="Hapus"><i class="fa fa-times"></i></a>
                    </div>
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <label for="rating">Rating</label>
                    <select name="rating" class="form-control" id="rating">
                        @foreach($ratings as $r)
                            <option value="{{ $r->id }}">{!! $r->name !!}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="genre">Genre</label>
                    <select name="genres[]" class="form-control" id="genre" multiple>
                        @foreach($genres as $g)
                            <option value="{{ $g->id }}">{!! $g->name !!}</option>
                        @endforeach
                    </select>
                </div>
                <br/>
                <div class="form-group">
                    <button type="submit" class="btn btn-default pull-right">Tambah film</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('moreScripts')
    <script type="text/javascript" src="{{ URL::asset('js/validator.js') }}"></script>
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>
    <script src="{{ URL::asset('js/jquery.autocomplete.js') }}"></script>

    <script>
        $( document ).ready(function() {
            $('select').selectpicker();
        });
        $('#input_judul').autocomplete({
            dropdownWidth:'auto',
            appendMethod:'replace',
            valid: function () {
                return true;
            },
            source:[
                function (q, add){
                    var url = 'http://www.omdbapi.com/?s=';
                    jQuery.getJSON(url+encodeURIComponent(q), function(data){
                        var suggestions = [];
                        if (data.Response) {
                            jQuery.each(data.Search, function(i, val){
                                suggestions.push(val.imdbID + " - " + val.Title);
                            });
                            add(suggestions);
                        }
                    })
                }
            ]
        });
    </script>
    <script>
        function hapusJudul(){
            document.getElementById('input_judul').value="";
        }
    </script>
@endsection