@extends('base.master')

@section('title', 'Contact')

@section('header')
    @include('base.header')
@endsection

@section('content')
    <div class="container">
        <br/>
        <div class="text-center">
            <h2>Contact us</h2>
        </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form>
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" class="form-control" id="subject">
                    </div>
                    <div class="form-group">
                        <label for="pesan">Pesan</label>
                        <textarea class="form-control" rows="5"></textarea>
                    </div>
                    <button type="submit" class="btn btn-default pull-right">Kirim</button>
                </form>
            </div>
        </div>
        <br/>
        <br/>
    </div>
@endsection

@section('footer')
    @include('base.footer')
@endsection
