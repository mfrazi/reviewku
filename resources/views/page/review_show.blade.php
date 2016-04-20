@extends('base.master')

@section('title', 'ReviewKu')

@section('header')
    @include('base.header')
@endsection

@section('moreStyles')
    <link href='https://fonts.googleapis.com/css?family=Dancing+Script:700' rel='stylesheet' type='text/css'>
@endsection

@section('content')
    <br/>
    <div class="container">
        <div class="row text-center">
            <div class="container-fluid">
                <div class="col-md-8 col-md-offset-2" id="write-review">
                    <h1 style="color: white; font-family: Dancing Script;">"The More We Share, The More We Have"</h1>
                    <br/>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div>
                                <a class="flat-butt flat-info-butt" href="{{ route('review.write') }}" role="button">
                                    Tulis Reviewmu di sini....
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="main-content" class="container">
        <div class="row">
            <div class="col-md-9" style="background-color: white;">
                <div style="margin: 10px 0 25px 0;">
                    <h1>Spiderman 3</h1>
                    <hr/>
                </div>
                <div><h3>tanggal</h3></div>
                <div><h3>Oleh</h3></div>
                <div>
                    Spider-Man is a 2002 American superhero film directed by Sam Raimi. Based on the Marvel Comics character of the same name, the film stars Tobey Maguire as Peter Parker, a high school student living in New York, who turns to crimefighting after developing spider-like super powers. Spider-Man also stars Willem Dafoe as Norman Osborn (a.k.a. the Green Goblin), Kirsten Dunst as Peter's love interest Mary Jane Watson, and James Franco as his best friend Harry Osborn.

                    After progress on the film stalled for nearly 25 years, it was licensed for a worldwide release by Sony Pictures Entertainment in 1999 after it acquired options from MGM on all previous scripts developed by Cannon Films, Carolco and New Cannon. Exercising its option on just two elements from this multi-script acquisition (a screenplay credited to James Cameron, Ted Newsom, John Brancato, Barney Cohen, and "Joseph Goldman" (the pet name of Menahem Golan) and a later treatment credited solely to Cameron), Sony hired David Koepp to create a working screenplay from this "Cameron material". Directors Roland Emmerich, Ang Lee, Chris Columbus, Jan de Bont, M. Night Shyamalan, Tony Scott and David Fincher were considered to direct the project before Raimi was hired as director in 2000. The Koepp script was rewritten by Scott Rosenberg during preproduction and received a dialogue polish from Alvin Sargent during production.

                    Filming took place in Los Angeles, and New York City from January 8 to June 30, 2001. Spider-Man premiered in the Philippines on April 30, 2002, and had its general release in the United States on May 3, 2002. It became a critical and financial success. For its time, it was the only film to reach $100 million in its first weekend, had the largest opening weekend gross of all time, and was the most successful film based on a comic book. With $821.7 million worldwide, it was 2002's third-highest-grossing film and is the 50th-highest-grossing film of all time (7th at the time of release).

                    The film was nominated at the 75th Academy Awards ceremony for Best Visual Effects and Best Sound Mixing. Due to the success of the film, Columbia Pictures and Marvel created two sequels, Spider-Man 2 on June 30, 2004, and Spider-Man 3 on May 4, 2007. A third sequel entered development in 2008 and was originally planned for a May 6, 2011 release date, but a disagreement between Raimi and Sony resulted in Raimi leaving the project and Sony canceling Spider-Man 4. Sony instead decided to reboot the series with The Amazing Spider-Man which was released on July 3, 2012. A sequel titled, The Amazing Spider-Man 2, was released in May 2, 2014. After the sequels and spin-offs to The Amazing Spider-Man were canceled, a new trilogy will take place in the Marvel Cinematic Universe, with Spider-Man set to make his debut in Captain America: Civil War, which would be released on May 6, 2016, followed by a solo film set to be released on July 7, 2017.
                </div>
                <br/>
                <br/>
                 <span style="padding: 3px; border: solid 1px blue; margin-right: 10px;">
                    <span>0</span>
                    <a href="#" class="fa fa-thumbs-down"></a>
                </span>
                <span style="padding: 3px; border: solid 1px blue; margin-right: 10px;">
                    <span>1000</span>
                    <a href="#" class="fa fa-thumbs-up"></a>
                </span>
                <br/>
                <br/>
                <br/>
                <div>
                    <div>
                        <a href="#">
                            <i href="#" class="fa fa-calendar"></i>Jadwal
                        </a>
                        kalau ada nanti muncul disini
                    </div>
                    <img src="{{ URL::asset('jadwal.PNG') }}"></img>
                </div>
            </div>
            <div class="col-md-3" style="height: 1000px; background-color: white;">
                <div class="container-fluid">
                    <div style="margin: 10px 0 25px 0;">
                        <h3 style="line-height: 160%;">Review Terbaru</h3>
                        <hr/>
                        <div class="container-fluid"style="margin: 0 0 10px 0;">
                            <h4>Green Mile (1995)</h4>
                            <span style="padding: 3px; border: solid 1px blue; margin-right: 10px;">
                                <span>0</span>
                                <a href="#" class="fa fa-thumbs-down"></a>
                            </span>
                            <span style="padding: 3px; border: solid 1px blue; margin-right: 10px;">
                                <span>1000</span>
                                <a href="#" class="fa fa-thumbs-up"></a>
                            </span>
                            <hr/>
                        </div>
                        <div class="container-fluid" style="margin: 0 0 10px 0;">
                            <h4>The 802.11g allows P2P ad-hoc (non-infrastructure)The 802.11g allows P2P ad-hoc (non-infrastructure) (1995)</h4>
                            <span style="padding: 3px; border: solid 1px blue; margin-right: 10px;">
                                <span>0</span>
                                <a href="#" class="fa fa-thumbs-down"></a>
                            </span>
                            <span style="padding: 3px; border: solid 1px blue; margin-right: 10px;">
                                <span>1000</span>
                                <a href="#" class="fa fa-thumbs-up"></a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @include('base.footer')
@endsection
