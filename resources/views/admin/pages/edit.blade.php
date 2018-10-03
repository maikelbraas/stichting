@extends('layouts.app')


{!! Html::style('css/parsley.css') !!}
{!! Html::style('css/select2.min.css') !!}

<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

<script>
    tinymce.init({
        selector: 'textarea',
        menubar: false
    });
</script>


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card Dashboard_Main_card Dashboard_Main_card_Art_bottom_Left">
                    <div class="card-body ">
                        <div class="Dashboard_Main_card_Art_top_right"></div>
                        <h1 class="card-title">Edit {{$page->slug}}</h1>
                        {!! Form::model($page, ['route' => ['pages.update', $page->id], 'method' => 'PUT', 'files' => true]) !!}

                        <div class="row">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-body">
                                        {{ Form::label('Titel', 'Titel:') }}
                                        {{ Form::text('pageName', null, ["class" => 'form-control input-lg']) }}

                                        {{ Form::label('slug', 'Url-Titel:', ['class' => 'form-spacing-top']) }}
                                        {{ Form::text('slug', null, ['class' => 'form-control']) }}

                                        {{ Form::label('Excerpt', "Beschrijving:", ['class' => 'form-spacing-top']) }}
                                        {{ Form::textarea('excerpt', null, ['class' => 'form-control']) }}

                                        {{ Form::label('body', "Pagina-Content:", ['class' => 'form-spacing-top']) }}
                                        {{ Form::textarea('body', null, ['class' => 'form-control']) }}

                                        {{ Form::label('Afbeelding', "Pagina Afbeelding:", ['class' => 'form-spacing-top']) }}
                                        {{ Form::file('page_image', null, ['class' => 'form-control']) }}

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">

                                <div class="card">
                                    <div class="card-body">
                                        <dl class="dl-horizontal">
                                            <dt>Created At:</dt>
                                            <dd>{{ date('M j, Y h:ia', strtotime($page->created_at)) }}</dd>
                                        </dl>

                                        <dl class="dl-horizontal">
                                            <dt>Last Updated:</dt>
                                            <dd>{{ date('M j, Y h:ia', strtotime($page->updated_at)) }}</dd>
                                        </dl>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                {!! Html::linkRoute('pages.show', 'Cancel', array($page->id), array('class' => 'btn ')) !!}
                                            </div>
                                            <div class="col-sm-6">
                                                {{ Form::submit('Opslaan', ['class' => 'btn btn-admin-color-blue btn-block']) }}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop