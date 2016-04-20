@extends('base.master')

@section('title', 'About Us')

@section('moreStyles')
    <link href='https://fonts.googleapis.com/css?family=Dancing+Script:700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=PT+Sans:700italic' rel='stylesheet' type='text/css'>
@endsection

@section('header')
    @include('base.header')
@endsection

@section('content')
    <br/>
    <br/>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">
                <blockquote class="text-center">
                    <h1 style="font-family: Dancing Script;">The More We Share, The More We Have.</h1>
                    <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                </blockquote>
            </div>
        </div>
    </div>
    <br/>
    <br/>
    <div class="container">
        <h2 class="text-center" style="font-family: 'PT Sans">ABOUT US</h2>
        <hr/>
        <div class="row">
            <h4 class="text-center col-md-8 col-md-offset-2" style="line-height: 150%;">Proin justo massa, egestas in pellentesque tempus, ullamcorper ac lorem. Curabitur justo ligula, sodales sit amet commodo id, accumsan ut nisi. Praesent condimentum nibh id tincidunt dignissim. Sed vehicula non turpis a dapibus. Aenean rhoncus aliquet eros. Mauris tincidunt egestas dui at lobortis. In congue nec ligula eget rhoncus. Quisque ac ipsum efficitur enim tincidunt auctor mattis eget quam.</h4>
            <h4 class="text-center col-md-8 col-md-offset-2" style="line-height: 150%;">In a est erat. Maecenas id massa at quam interdum congue nec sed nisl. Cras in velit congue, iaculis mi ut, tincidunt arcu. Maecenas porttitor dolor sem, et placerat risus aliquet porta. Aliquam et mi tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis pulvinar est, a fringilla dui. In aliquam aliquam ante, vel iaculis orci volutpat in. Vestibulum nec nibh sem. Vestibulum dignissim felis nec libero sagittis iaculis.</h4>
        </div>
        <hr/>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="profile-header-container">
                    <div class="profile-header-img">
                        <img class="img-circle" src="{{  URL::asset('img/dummy.png') }}" />
                        <!-- badge -->
                        <div class="rank-label-container">
                            <span class="label label-default rank-label">MFR 105</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="profile-header-container">
                    <div class="profile-header-img">
                        <img class="img-circle" src="{{  URL::asset('img/dummy.png') }}" />
                        <!-- badge -->
                        <div class="rank-label-container">
                            <span class="label label-default rank-label">DNS 070</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="profile-header-container">
                    <div class="profile-header-img">
                        <img class="img-circle" src="{{  URL::asset('img/dummy.png') }}" />
                        <!-- badge -->
                        <div class="rank-label-container">
                            <span class="label label-default rank-label">MEH 082</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="profile-header-container">
                    <div class="profile-header-img">
                        <img class="img-circle" src="{{  URL::asset('img/dummy.png') }}" />
                        <!-- badge -->
                        <div class="rank-label-container">
                            <span class="label label-default rank-label">DR 163</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr/>
    </div
@endsection


@section('footer')
    @include('base.footer')
@endsection
