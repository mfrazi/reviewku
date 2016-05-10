<div class="container-fluid" style="background-color: white;">
    <div class="row">
        <div class="col-xs-3 col-lg-2">
            <img src="{{ $d->movie->poster }}" class="img-responsive pull-right">
        </div>
        <div class="col-xs-9 col-lg-10">
            <div>
                <a style="font-size: 190%;" href="{{ route('review.show', ['id' => $d->id]) }}">{{ $d->movie->title }}</a>
            </div>
            <div>
                <h5><strong>Oleh : {{ $d->name }}</strong></h5>
                <h5><strong>Tanggal : {{ date('d-M-Y', strtotime($d->created_at)) }}</strong></h5>
            </div>
            <br/>
            <div>
                {!! $d->brief_content !!}
                <a href="{{ route('review.show', ['id' => $d->id]) }}">Baca selengkapnya...</a>
            </div>
            <div style="margin-top: 15px;">
                <span>
                    <div id="up{{ $d->id }}" style="cursor: pointer; color: #00bcd4" class="fa fa-thumbs-up fa-3x"></div>
                    <div style="display:inline-block;">
                        <h3><span id="value_up{{ $d->id }}">{{ $d->thumbs_up }}</span></h3>
                    </div>
                </span>
                <span style="margin-left: 5%;">
                    <div id="down{{ $d->id }}" style="cursor: pointer; color: red" class="fa fa-thumbs-down fa-3x"></div>
                    <div style="display:inline-block;">
                        <h3><span id="value_down{{ $d->id }}">{{ $d->thumbs_down }}</span></h3>
                    </div>
                </span>
                <span style="margin-left: 5%;">
                    <a href="#">
                        <i href="#" class="fa fa-calendar fa-3x"></i>
                    </a>
                </span>
            </div>
            <div class="captcha" id="captcha{{ $d->id }}"></div>
        </div>
    </div>
    <hr/>
</div>

@section('moreScripts')
<script>
    $('#up{{ $d->id }}').click(function() {
        var captcha = "{!! app('captcha')->display(); !!}";
        console.log(captcha);
        $('.captcha').empty();
        $('#captcha{{ $d->id }}').append(captcha);

        {{--$.ajaxSetup({--}}
            {{--headers: {--}}
                {{--'X-CSRF-Token': $('input[name="_token"]').val()--}}
            {{--}--}}
        {{--});--}}

        {{--$.ajax({--}}
            {{--url: '{{ route('thumbs_up', ['id' => $d->id]) }}',--}}
            {{--type: 'POST',--}}
            {{--success: function (data) {--}}
                {{--value_up{{ $d->id }}--}}
                {{--$('#value_up{{ $d->id }}').text(data);--}}
            {{--}--}}
        {{--});--}}
    });

    $('#down{{ $d->id }}').click(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-Token': $('input[name="_token"]').val()
            }
        });

        $.ajax({
            url: '{{ route('thumbs_down', ['id' => $d->id]) }}',
            type: 'POST',
            success: function (data) {
                value_up{{ $d->id }}
                $('#value_down{{ $d->id }}').text(data);
            }
        });
    });
</script>
@append