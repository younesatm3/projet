@extends('layouts.app')

@section('content')

     <!-- ***** Features Small Start ***** -->
     <section class="section home-feature">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        @foreach ($stations as $station)
                            
                        
                        <!-- ***** Features Small Item Start ***** -->
                        <a href="/new">
                            <div class=" col-md-auto " data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
                                <div class="features-small-item">
                                    <div class="icon">
                                        <i><img src="assets/images/featured-item-01.png" alt=""></i>
                                    </div>
                                    <h5 class="features-title">la station num : {{ $station->id_s }}</h5>
                                    <p>localiser a : {{ $station->localisation }}</p>
                                </div>
                            </div>
                        </a>
                        <!-- ***** Features Small Item End ***** -->
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Small End ***** -->

@endsection