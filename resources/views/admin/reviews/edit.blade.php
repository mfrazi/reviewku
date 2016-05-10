@extends('admin.master')

@section('title', 'Suting Ulasan')

@section('moreStyles')
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

@section('content')
    <br/>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.reviews.index') }}">Ulasan</a></li>
        <li class="active">Sunting</li>
    </ol>
    <div><h3 class="text-center">Sunting Ulasan</h3></div>
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
        <div class="col col-md-10 col-md-offset-1">
            @if($review->post == 1)
                <a href="{{ route('admin.review.approve', ['id' => $review->id, 'origin' => '2']) }}" style="text-decoration: none !important; color: green;" class="fa fa-check-square fa-2x pull-right" aria-hidden="true"></a><h5 class="pull-right" style="display: inline-block"><strong>Status Tampil</strong></h5>
            @else
                <a href="{{ route('admin.review.approve', ['id' => $review->id, 'origin' => '2']) }}" style="text-decoration: none !important; color: red;" class="fa fa-times fa-2x pull-right" aria-hidden="true"></a><h5 class="pull-right" style="display: inline-block"><strong>Status Tampil</strong></h5>
            @endif
            <br/>
            <br/>
            <form role="form" data-toggle="validator" method="POST" action="{{ route('admin.review.update', ['id' => $review->id]) }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Oleh</label>
                    <input type="text" class="form-control" value="{{ $review->name }}" readonly>
                </div>
                <div class="form-group">
                    <label>Judul Film</label>
                    <input type="text" class="form-control" value="{{ $review->movie->title }}" readonly>
                </div>
                <div class="form-group">
                    <label>Tanggal</label>
                    <input type="text" class="form-control" value="{{ $review->created_at }}" readonly>
                </div>
                <div class="form-group">
                    <label>Review</label>
                    <textarea id="edit" name="content" rows="7">{{ $review->full_content }}</textarea>
                </div>
                <br/>
                <div class="form-group">
                    <a href="{{ route('admin.reviews.index') }}" class="btn btn-danger">Kembali</a>
                    <button type="submit" class="btn btn-default pull-right">Sunting</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('moreScripts')
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
                height: 500
            })
        });
    </script>
@endsection