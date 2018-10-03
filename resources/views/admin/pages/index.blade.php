@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card Dashboard_Main_card Dashboard_Main_card_Art_bottom_Left">
                    <div class="card-body ">
                        <div class="Dashboard_Main_card_Art_top_right"></div>
                        <div class="row">
                            <div class="col-md-12">
                                <h1>Alle Pagina's</h1>
                            </div>
                        </div>

                        <div class="row">
                            @foreach ($pages as $page)
                                <div class="col-md-4">
                                    <div class="card Card_Blue Normal_Card_Decoration" style="height: 0rem;">
                                        <div class="card-body">
                                            <div class="card-title AdminPanel-Card-Title">
                                                <div class="card-title AdminPanel-Card-Title">
                                                    <h6 class="card-title">{{$page->PageName}}</h6>
                                                </div>
                                            </div>
                                            <p>Beschrijving: {{ substr(strip_tags($page->Excerpt), 0, 50) }}{{ strlen(strip_tags($page->Excerpt)) > 50 ? "..." : "" }}
                                            </p>
                                        </div>

                                        <div class="card-footer AminPanel-Card-footer">

                                            <a type="submit"
                                               href="{{ URL::to('admin/'.'pages/'  . $page->id . '/edit') }}">
                                                <button type="submit" class="btn  btn-admin-color-blue">Bewerk
                                                    pagina
                                                </button>

                                            </a>

                                            <p class="card-text">
                                                <small class="text-muted">{{ date('M j, Y', strtotime($page->updated_at)) }}</small>
                                            </p>
                                        </div>

                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <div class="col-md-12">
                            <a href="{{ route('pages.create') }}"
                               class="btn btn-circle-add-page btn-h1-spacing">+</a>

                            {!! $pages->links(); !!}

                        </div>
                    </div>
                </div>
            </div>

@stop