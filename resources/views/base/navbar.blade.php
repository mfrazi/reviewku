<nav class="navbar navbar-default padding-nav">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav_on_mobile" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="nav_on_mobile">
            <ul class="nav navbar-nav nav-size text-center">
                @if($page == 1)
                    <li class="link-size link-left active"><a href="#"><strong>HOME</strong></a></li>
                @else
                    <li class="link-size link-left"><a href="{{ route('home') }}"><strong>HOME</strong></a></li>
                @endif
                @if($page == 2)
                    <li class="link-size active"><a href="#"><strong>REVIEW</strong></a></li>
                @else
                    <li class="link-size"><a href="{{ route('review') }}"><strong>REVIEW</strong></a></li>
                @endif
                @if($page == 3)
                    <li class="link-size active"><a href="#"><strong>NOW PLAYING</strong></a></li>
                @else
                    <li class="link-size"><a href="{{ route('nowplaying') }}"><strong>NOW PLAYING</strong></a></li>
                @endif
                @if($page == 4)
                    <li class="link-size active"><a href="#"><strong>ABOUT US</strong></a></li>
                @else
                    <li class="link-size"><a href="{{ route('aboutus') }}"><strong>ABOUT US</strong></a></li>
                @endif
                @if($page == 5)
                    <li class="link-size active"><a href="#"><strong>CONTACT</strong></a></li>
                @else
                    <li class="link-size"><a href="{{ route('contact') }}"><strong>CONTACT</strong></a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>
<div class="visible-sm-block visible-md-block visible-lg-block hidden-xs navbar-line"></div>