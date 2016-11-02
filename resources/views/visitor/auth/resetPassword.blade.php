@extends('visitor.main')

@section('title', 'Login')

@section('content')
    <div class="container" style="margin-top:15%;">
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
