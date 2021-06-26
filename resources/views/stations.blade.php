@extends('layouts.app')

@section('content')

     <!-- ***** Features Small Start ***** -->
     <section class="section home-feature">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        
                        @foreach ($cartes as $carte)
                            
                        
                        <!-- ***** Features Small Item Start ***** -->
                        <a href="">
                            <div class=" col-md-auto " data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
                                <div class="features-small-item">
                                    <div class="icon">
                                        <i><img src="assets/images/featured-item-01.png" alt=""></i>
                                    </div>
                                    <p> {{ Auth::user()->name }}</p>
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