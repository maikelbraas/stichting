@extends('layouts.header')


@section('content')

    <main>
        <section class="container BlocksDimension">
            <div class="row">
                <div class="col-md-4 CardDimensionBlocksTop">
                    <a href="{{url('/pagina/Missie')}}">
                        <div class="card CardDimension text-white">
                            <img src=" {{ asset('../images/missie.png') }}"/>
                            <div class="card-img-overlay-home">
                                <h5 class="card-title card-img-overlay-text.missie">Missie</h5>
                            </div>

                        </div>
                    </a>
                </div>
                <div class="col-md-4 CardDimensionBlocksTop">
                    <a href="{{url('/pagina/Visie')}}">
                        <div class="card CardDimension text-white">
                            <img src=" {{ asset('../images/Visie.png') }}"/>
                            <div class="card-img-overlay-home">
                                <h5 class="card-title">Visie</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 CardDimensionBlocksTop">
                    <a href="{{url('/pagina/Strategie')}}">
                        <div class="card CardDimension text-white">
                            <img src=" {{ asset('../images/strategie.png') }}"/>
                            <div class="card-img-overlay-home">
                                <h5 class="card-title">Strategie</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 CardDimensionBlocksTop">
                    <a href="{{url('/pagina/ActiviteitProjecten')}}">
                        <div class="card CardDimension text-white">
                            <img src=" {{ asset('../images/Activiteitenprojecten.png') }}"/>
                            <div class="card-img-overlay-home">
                                <h5 class="card-text ">Activiteiten & Projecten</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 CardDimensionBlocksTop">
                    <a href="{{url('/pagina/wiezijnwij')}}">
                        <div class="card CardDimension text-white">
                            <img src=" {{ asset('../images/wiezijnwij.png') }}"/>
                            <div class="card-img-overlay-home">
                                <h5 class="card-title">Wie zijn wij</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 CardDimensionBlocksTop">
                    <a href="{{url('/pagina/doneren')}}">
                        <div class="card CardDimension text-white">
                            <img src=" {{ asset('../images/doneren.png') }}"/>
                            <div class="card-img-overlay-home">
                                <h5 class="card-img-overlay-text.doneren">Doneren</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>
    </main>
@endsection
