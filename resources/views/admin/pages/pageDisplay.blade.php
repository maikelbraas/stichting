@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card Dashboard_Main_card Dashboard_Main_card_Art_bottom_Left">
                    <div class="card-body ">
                        <div class="Dashboard_Main_card_Art_top_right"></div>
                        <h1 class="card-title"> <h6 class="card-title">  </h6></h1>
                        <p class="card-title"> {{ $page->pageName }}</p>
                        <div class="row">
                            <div class="col-md-8">
                                <h1>{{ $page->pageName }}</h1>

                                <p class="lead">{!! $page->body !!}</p>

                                <hr>
                            </div>

                            <div class="col-md-4">
                                <div class="well">
                                    <dl class="dl-horizontal">
                                        <label>Url:</label>
                                        <p><a href=""></a></p>
                                    </dl>


                                    <dl class="dl-horizontal">
                                        <label>Created At:</label>
                                        <p>{{ date('M j, Y h:ia', strtotime($page->created_at)) }}</p>
                                    </dl>

                                    <dl class="dl-horizontal">
                                        <label>Last Updated:</label>
                                        <p>{{ date('M j, Y h:ia', strtotime($page->updated_at)) }}</p>
                                    </dl>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            {!! Html::linkRoute('pages.edit', 'Edit', array($page->id), array('class' => 'btn btn-primary btn-block')) !!}
                                        </div>
                                        <div class="col-sm-6">
                                            {!! Form::open(['route' => ['pages.destroy', $page->id], 'method' => 'DELETE']) !!}

                                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}

                                            {!! Form::close() !!}
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            {{ Html::linkRoute('pages.index', '<< See All Posts', array(), ['class' => 'btn btn-default btn-block btn-h1-spacing']) }}
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection