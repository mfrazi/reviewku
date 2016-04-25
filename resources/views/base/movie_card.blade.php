<div class="container-fluid" style="background-color: white;">
    <div class="row">
        <div class="col-xs-3 col-lg-2">
            <img src="{{ $d->poster }}" class="img-responsive pull-right" style="margin-top: 36%;">
        </div>
        <div class="col-xs-9 col-lg-10">
            <div><a href="{{ route('review.show', ['id' => 1]) }}"><h3>{{ $d->title }}</h3></a></div>
            <div><h4>{{ $d->created_at }}</h4></div>
            <div>
                {!! $d->content !!}
                <a href="#">Baca selanjutnya...</a>
            </div>
            <div style="margin-top: 15px;">
                <span style="padding: 3px; border: solid 1px blue; margin-right: 10px;">
                    <span id="value_down{{ $d->id }}">{{ $d->thumbs_down }}</span>
                    <div id="down{{ $d->id }}" style="cursor: pointer;" class="fa fa-thumbs-down"></div>
                </span>
                <span style="padding: 3px; border: solid 1px blue; margin-right: 10px;">
                    <span id="value_up{{ $d->id }}">{{ $d->thumbs_up }}</span>
                    <div id="up{{ $d->id }}" style="cursor: pointer;" class="fa fa-thumbs-up"></div>
                </span>
                <span>
                    <a href="#">
                        <i href="#" class="fa fa-calendar"></i>Jadwal <== Sementara aja, nanti dibagusin
                    </a>
                </span>
            </div>
        </div>
    </div>
    <hr/>
</div>

@section('moreScripts')
<script>
    $('#up{{ $d->id }}').click(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-Token': $('input[name="_token"]').val()
            }
        });

        $.ajax({
            url: '{{ route('thumbs_up', ['id' => $d->id]) }}',
            type: 'POST',
            success: function (data) {
                value_up{{ $d->id }}
                $('#value_up{{ $d->id }}').text(data);
            }
        });
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