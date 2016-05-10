@extends('admin.master')

@section('title', 'Saran')

@section('moreStyles')
    <link href="http://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet"/>
@endsection

@section('content')
    <br/>
    <ol class="breadcrumb">
        <li class="active">Saran</li>
    </ol>
    <div><h3 class="text-center">Daftar Saran</h3></div>
    <hr/>
    <div class="row">
        <div class="col col-md-12">
            <table id="data_movies">
                <thead>
                <tr>
                    <th class="text-center">Nama</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Subjek</th>
                    <th class="text-center">Isi</th>
                </tr>
                </thead>
                <tbody>
                @foreach($feedbacks as $f)
                    <tr>
                        <td>{{ $f->name }}</td>
                        <td>{{ $f->email }}</td>
                        <td>{{ $f->subject }}</td>
                        <td>{{ $f->content }}</td>
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