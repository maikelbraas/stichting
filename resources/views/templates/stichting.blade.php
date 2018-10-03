@extends('layouts.header')

@section('content')

    <main>
        <section class="container">
            <div class="card">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card-body" style="text-align: center">
                            <img class="arrow_top" src="{{asset("../images/arrow_top.png")}}">
                            <div class="container text-postition-missie">
                                <p>{!! $page->body !!}</p>

                            </div>
                            <img class="arrow_bottom" src="{{asset("../images/arrow_bottom.png")}}">
                        </div>

                    </div>
                    <div class="col-md-6 text-white">
                        @if(!empty($page->image))

                            <img class="card-img  " src="{{asset('/uploads/' . $page->image)}}"
                                 alt="Card image">
                            <div class="card-img-overlay-contact">
                                <h1 class="card-title card-img-overlay">{{ $page->PageName }}</h1>

                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </section>
    </main>


@endsection


