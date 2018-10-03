@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card Dashboard_Main_card Dashboard_Main_card_Art_bottom_Left">
                    <div class="card-body ">
                        <div class="Dashboard_Main_card_Art_top_right"></div>
                        <h1 class="card-title">Dashboard</h1>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card text-white card-color-blue text-right">
                                    <div class="card-body">
                                        <h3 class="card-title">Aantal pagina's  ( work in progress )</h3>
                                    </div>
                                    <div class="card-footer text-right">
                                        <a  class="text-light" href="{{ route('pages.create') }}">+ New Page</a>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card text-white card-color-green  text-right">
                                    <div class="card-body">repository
                                        <h3 class="card-title">( work in progress )</h3>
                                    </div>
                                    <div class="card-footer text-right"><a  class="text-light" href="#">Upload an asset</a></div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
