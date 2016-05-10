@section('moreStyles')
    <style>
        .movie-card{
            padding: 0% 6% 15%;
            height: 80%
        }
        .img-movie{
            margin-left: 8%;
        }
    </style>
@append

<div class="container-fluid movie-card">
    <div>
        <a href="{{ route('review.movie.show', ['id' => $m->id]) }}"><img src="{{ $m->poster }}" class="img-responsive img-movie"/></a>
    </div>
    <div>
        <a href="{{ route('review.movie.show', ['id' => $m->id]) }}"><div class="text-center"><h4><strong>{{ $m->title }} ({{ $m->year }})</strong></h4></div></a>
        <p class="text-center">
            @foreach($m->genre_movie as $gm)
                {{ $gm->genre->name }},
            @endforeach
        </p>
        <p class="text-center">{{ $m->rating->name }}</p>
    </div>
</div>