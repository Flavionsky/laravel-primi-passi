@extends('layouts.app')

@section('title')
<title>Lavarel First Project</title>
@endsection

@section('main')

    <main>
        <section class="hb-products container">
            <div class="hb-go col-lg-6 col-xs-12">
                <div class="hb-go-logo">
                    <img src="img/helbizgo.svg" alt="HelbizGo Logo">
                </div>
                <h2>Next generation of electric city bikes.</h2>
                <a href="#">Learn More &gt; </a>
                <div class="hb-go-image">
                    <img src="img/helbizgo-image.jpg" alt="HelbizGo Image">
                </div>
            </div>
            <div class="hb-bike col-lg-6 col-xs-12">
                <div class="hb-bike-logo">
                    <img src="img/helbizbike.svg" alt="HelbizBike Logo">
                </div>
                <h2>Seamless E-Scooter sharing globally.</h2>
                <a href="#">Cooming Soon</a>
                <div class="hb-bike-image">
                    <img src="img/helbizbike-image.jpg" alt="HelbizBike Image">
                </div>
            </div>
        </section>
    </main>

@endsection
