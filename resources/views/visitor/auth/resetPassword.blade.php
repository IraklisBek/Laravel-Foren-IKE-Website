@extends('visitor.main')

@section('title', 'Login')
@section('header')
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/register.png')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <!--<h1>Register</h1>
                        <hr class="small">
                        <span class="subheading">Register</span>-->
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                {!! Form::open(['route' => ['auth.postResetPassword', $_GET['token']], 'method' => 'PUT']) !!}
                {{ csrf_field() }}

                <div class="form-group">
                    {{ Form::label('email', 'Email') }}
                    {{ Form::email('email', null, array('class' => 'form-control', 'required' => '', 'placeholder' => 'Email')) }}
                </div>

                <div class="form-group">
                    {{ Form::label('new_password', 'New Password') }}
                    <input type="password" class="form-control" id="new_password" name="new_password" placeholder="Password">
                </div>

                <div class="form-group">
                    {{ Form::label('confirm_password', 'Confirm Password') }}
                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Password">
                </div>

                <input type="hidden" name="country" value="<?php ?>">

                {{ Form::submit('Change Password', array('class' => 'btn btn-success btn-block', 'style' => 'margin-top:20px')) }}

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
