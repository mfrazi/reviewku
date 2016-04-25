@extends('base.master')

@section('title', 'Tulis Review')

@section('moreStyles')
    <link href="{{ URL::asset('css/jquery.autocomplete.css') }}" rel="stylesheet" type="text/css" />

    <!-- Include Editor style. -->
    <link href="{{ URL::asset('froala/css/froala_editor.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('froala/css/froala_style.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Include Code Mirror style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">

    <!-- Include Editor Plugins style. -->
    <link rel="stylesheet" href="{{ URL::asset('froala/css/plugins/char_counter.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('froala/css/plugins/code_view.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('froala/css/plugins/colors.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('froala/css/plugins/emoticons.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('froala/css/plugins/file.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('froala/css/plugins/fullscreen.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('froala/css/plugins/image.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('froala/css/plugins/image_manager.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('froala/css/plugins/line_breaker.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('froala/css/plugins/quick_insert.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('froala/css/plugins/table.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('froala/css/plugins/video.css') }}">
@endsection

@section('header')
    @include('base.header')
@endsection

@section('content')
    <br/>
    <div class="container">
        <div class="text-center"><h2>Tulis Review</h2></div>
        <div class="row">
            <div class="col col-md-8 col-md-offset-2">
                <form role="form" data-toggle="validator" method="POST" action="{{ route('review.store') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="input_nama">Nama <sup style="color: red;">*</sup></label>
                        <input type="text" class="form-control" id="input_nama" placeholder="Nama" name="name" data-error="Nama harus diisi" required>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label for="input_email">Email <sup style="color: red;">*</sup></label>
                        <input type="email" class="form-control" id="input_email" placeholder="Email" name="email" data-error="Email yang dimasukkan tidak valid" required>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label for="input_judul">Judul film <sup style="color: red;">*</sup></label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="input_judul" placeholder="Judul film" name="id_title" data-error="Judul film harus diisi" required>
                            <a style="cursor: pointer; background-color:white; color:red;" onclick="hapusJudul();" class="input-group-addon" title="Hapus"><i class="fa fa-times"></i></a>
                        </div>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label>Review</label>
                        <textarea id="edit" name="content" rows="7"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="flat-butt flat-info-butt pull-right">Kirim review</button>
                    </div>
                </form>
            </div>
        </div>
        <br/>
    </div>
@endsection

@section('footer')
    @include('base.footer')
@endsection

@section('moreScripts')
    <script type="text/javascript" src="{{ URL::asset('js/validator.js') }}"></script>

    <!-- Include JS files. -->
    <script type="text/javascript" src="{{ URL::asset('froala/js/froala_editor.min.js') }}"></script>

    <!-- Include Code Mirror. -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js"></script>

    <!-- Include Plugins. -->
    <script type="text/javascript" src="{{ URL::asset('froala/js/plugins/align.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('froala/js/plugins/char_counter.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('froala/js/plugins/code_beautifier.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('froala/js/plugins/code_view.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('froala/js/plugins/colors.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('froala/js/plugins/emoticons.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('froala/js/plugins/entities.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('froala/js/plugins/file.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('froala/js/plugins/font_family.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('froala/js/plugins/font_size.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('froala/js/plugins/fullscreen.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('froala/js/plugins/image.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('froala/js/plugins/image_manager.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('froala/js/plugins/inline_style.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('froala/js/plugins/line_breaker.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('froala/js/plugins/link.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('froala/js/plugins/lists.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('froala/js/plugins/paragraph_format.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('froala/js/plugins/paragraph_style.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('froala/js/plugins/quick_insert.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('froala/js/plugins/quote.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('froala/js/plugins/table.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('froala/js/plugins/save.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('froala/js/plugins/url.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('froala/js/plugins/video.min.js') }}"></script>

    <!-- Initialize the editor. -->
    <script>
        $(function() {
            $('#edit').froalaEditor({
                height: 300
            })
        });
    </script>

    <script src="{{ URL::asset('js/jquery.autocomplete.js') }}"></script>
    <script>
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