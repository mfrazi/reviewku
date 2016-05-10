@extends('admin.master')

@section('title', 'Ulasan')

@section('moreStyles')
    <link href="http://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet"/>
@endsection

@section('content')
    <br/>
    <ol class="breadcrumb">
        <li class="active">Ulasan</li>
    </ol>
    <div><h3 class="text-center">Ulasan Film</h3></div>
    <hr/>
    <div class="row">
        <div class="col col-md-12">
            <table id="data_movies">
                <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Judul</th>
                    <th>Waktu</th>
                    <th>Tampil</th>
                    <th>Sunting</th>
                </tr>
                </thead>
                <tbody>
                @foreach($reviews as $r)
                    <tr>
                        <td>{{ $r->name }}</td>
                        <td>{{ $r->email }}</td>
                        <td>{{ $r->movie->title }}</td>
                        <td>{{ $r->created_at }}</td>
                        <td class="text-center">
                            @if($r->post == 1)
                            <a href="{{ route('admin.review.approve', ['id' => $r->id, 'origin' => '1']) }}" style="text-decoration: none !important; color: green;" class="fa fa-check-square" aria-hidden="true"></a>
                            @else
                                <a href="{{ route('admin.review.approve', ['id' => $r->id, 'origin' => '1']) }}" style="text-decoration: none !important; color: red;" class="fa fa-times" aria-hidden="true"></a>
                            @endif
                        </td>
                        <td class="text-center">
                            <a href="{{ route('admin.review.edit', ['id' => $r->id]) }}" style="text-decoration: none !important; color: blue;" class="fa fa-pencil-square-o" aria-hidden="true"></a>
                        </td>
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