@extends('visitor.main')

@section('title', 'Login')
@section('header')
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/login.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <!-- <h1>Log In</h1>
                        <hr class="small">
                        <span class="subheading">Log In</span>-->
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            {!! Form::open(array('route' => 'auth.sendEmail')) !!}
            {{ csrf_field() }}

            <div class="form-group">
                {{ Form::label('email', 'Email') }}
                {{ Form::email('email', null, array('class' => 'form-control', 'required' => '', 'placeholder' => 'Email')) }}
            </div>

            {{ Form::submit('Reset', array('class' => 'btn btn-success btn-block', 'style' => 'margin-top:20px')) }}

            {!! Form::close() !!}
        </div>
    </div>
@endsection
