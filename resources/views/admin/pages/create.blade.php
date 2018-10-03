@extends('layouts.app')

@section('title', '| Create New Page')


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
        <div class="row ">
            <div class="col-md-12">
                <div class="card Dashboard_Main_card Dashboard_Main_card_Art_bottom_Left">
                    <div class="card-body ">
                        <div class="Dashboard_Main_card_Art_top_right"></div>
                            <div class="col-md-8">
                                <h1>Create New Page</h1>
                                {!! Form::open(array('route' => 'pages.create', 'data-parsley-validate' => '', 'files' => true)) !!}
                                {{ Form::label('pageName', 'Title:') }}
                                {{ Form::text('pageName', null, array('class' => 'Login_rounded_inputs form-control', 'required' => '', 'maxlength' => '255')) }}

                                {{ Form::label('slug', 'Slug:') }}
                                {{ Form::text('slug', null, array('class' => 'Login_rounded_inputs form-control', 'required' => '', 'minlength' => '5', 'maxlength' => '255') ) }}

                                {{ Form::label('excerpt', "excerpt:") }}
                                {{ Form::textarea('excerpt', null, array('class' => 'Login_rounded_inputs form-control')) }}


                                {{ Form::label('body', "Page Body:") }}
                                {{ Form::textarea('body', null, array('class' => 'Login_rounded_inputs form-control')) }}


                                {{ Form::label('page_image', 'Upload an Image') }}
                                {{ Form::file('page_image') }}

                                {{ Form::submit('Create Page', array('class' => 'btn btn-admin-color-blue btn-md btn-block', 'style' => 'margin-top: 20px;')) }}
                                {!! Form::close() !!}
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
