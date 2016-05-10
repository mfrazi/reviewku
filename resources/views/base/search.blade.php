<div class="container" style="margin-top: 2%; margin-bottom: 1%;">
    <div class="row">
        <div class="col-xs-8 col-sm-2 col-lg-2 col-xs-offset-2 col-sm-offset-0" style="margin-bottom: 0.5%;">
            <img src="{{ URL::asset('img/logocoba.png') }}" class="img-responsive"></img>
        </div>
        <form role="form" method="GET" action="{{ route('search') }}">
        {{ csrf_field() }}
        <div class="col-xs-12 col-sm-4">
            <div id="imaginary_container">
                <div class="input-group stylish-input-group">
                    <input name="search" type="text" class="form-control"  placeholder="Cari Ulasan" >
                    <span class="input-group-addon">
                        <button type="submit" class="glyphicon glyphicon-search"></button>
                    </span>
                </div>
            </div>
        </div>
        <div class="col-sm-2">
            <select class="form-control" name="genre">
                <option value="-1">Genre</option>
                @foreach(App\Genre::all() as $genre)
                    <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-sm-2">
            <select class="form-control" name="rating">
                <option value="-1">Rating</option>
                @foreach(App\Rating::all() as $rating)
                    <option value="{{ $rating->id }}">{{ $rating->name }}</option>
                @endforeach
            </select>
        </div>
        </form>
    </div>
</div>