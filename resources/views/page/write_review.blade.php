@extends('base.master')

@section('title', 'Contact')

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

@section('header')
    @include('base.header')
@endsection

@section('content')
    <br/>
    <div class="container">
        <form>
            <textarea id="edit" name="content" rows="7"></textarea>
        </form>
    </div>
@endsection

@section('footer')
    @include('base.footer')
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
                height: 300
            })
        });
    </script>
@endsection