@extends('base.master')

@section('title', 'Contact')

@section('header')
    @include('base.header')
@endsection

@section('content')
    <div class="container">
        <br/>
        <br/>
        <div class="row">
            @if(Session::has('success'))
                <div class="col col-md-8 col-md-offset-2">
                    <div class="alert alert-success text-center">
                        <strong>{{ Session::get('success') }}</strong>
                    </div>
                </div>
                <br/>
            @endif
        </div>
        <div class="text-center">
            <h2>Kirim Saran</h2>
        </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form role="form" data-toggle="validator" method="POST" action="{{ route('contact.store') }}" >
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name">Nama <sup style="color: red;">*</sup></label>
                        <input name="name" type="text" class="form-control" id="name" data-error="Nama harus diisi" required />
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email <sup style="color: red;">*</sup></label>
                        <input name="email" type="email" class="form-control" id="email" data-error="Email tidak valid" required />
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label for="subject">Subjek <sup style="color: red;">*</sup></label>
                        <input name="subject" type="text" class="form-control" id="subject" data-error="Subjek harus diisi" required>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label for="pesan">Pesan <sup style="color: red;">*</sup></label>
                        <textarea name="content" class="form-control" rows="5" data-minlength="30" data-error="Panjang pesan minimal 30 karakter" required></textarea>
                        <div class="help-block with-errors"></div>
                    </div>
                    <button type="submit" class="btn btn-default pull-right">Kirim</button>
                </form>
            </div>
        </div>
        <br/>
        <br/>
    </div>
@endsection

@section('moreScripts')
    <script type="text/javascript" src="{{ URL::asset('js/validator.js') }}"></script>
@endsection
@section('footer')
    @include('base.footer')
@endsection
