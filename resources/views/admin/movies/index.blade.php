@extends('admin.master')

@section('title', 'Film')

@section('moreStyles')
    <link href="http://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet"/>
@endsection

@section('content')
    <br/>
    <ol class="breadcrumb">
        <li class="active">Film</li>
    </ol>
    <div><h3 class="text-center">Data Film</h3></div>
    <hr/>
    <div class="row">
        <div class="col col-md-10 col-md-offset-1">
            <div style="margin-bottom: 4%;">
                <i class="fa fa-plus" aria-hidden="true"></i>
                <a href="{{ route('admin.movies.create') }}">Tambah Film</a>
                <br/>
            </div>
            <table id="data_movies">
                <thead>
                    <tr>
                        <th>ID IMDB</th>
                        <th class="text-center">Judul</th>
                        <th class="text-center">Tahun</th>
                        <th class="text-center">Ubah</th>
                        <th class="text-center">Jadwal Tayang</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($movies as $m)
                        <tr>
                            <td>{{ $m->id_imdb }}</td>
                            <td>{{ $m->title }}</td>
                            <td class="text-center">{{ $m->year }}</td>
                            <td class="text-center"><a href="{{ route('admin.movies.edit', ['id' => $m->id]) }}" class="fa fa-pencil-square-o" aria-hidden="true"></a></td>
                            <td class="text-center"><a href="{{ route('admin.nowplaying.index', ['id' => $m->id]) }}" class="fa fa-calendar" aria-hidden="true" style="color: @if(!count($m->nowplaying)) red @else green @endif;"></a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('moreScripts')
    <script src="http://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#data_movies').DataTable();
        });
    </script>
@endsection