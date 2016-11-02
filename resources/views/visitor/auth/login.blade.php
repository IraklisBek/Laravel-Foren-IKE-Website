
<div id="login" class="hvr-glow">
    <img onclick="closeLog()" alt="close" src=visitor/images/general/close.png class="close_Log_Sign">
    <form action="{{ route('auth.logUser') }}" method="POST" id="loginForm">
        {!! csrf_field() !!}
        <div class="login_Signup_Area" >
            <!--usernamelog-->
            <input placeholder="Email" type="email" name="emaillogin" id="emaillogin" class="StyleTxtField inputBg" style="background: url('visitor/images/general/username.png') no-repeat left center; background-color:white; ">
            <!--passwordlog-->
            <input placeholder="Password" type="password" name="passwordlogin" id="passwordlogin" class="StyleTxtField inputBg" style="background: url('visitor/images/general/key.png') no-repeat left center; background-color:white;">
            <!--loginButton-->
            <input id="loginButton" type="submit" name="log" value="Login" class="btn btn-primary btn-block btn-up-spacing">
        </div>
    </form>
    <span id="resetSpan" style=" margin-left:15%; color:black">Forgot password? <a class="blueLink" onclick="reset()">Reset</a></span>
    {!! Form::open(array('route' => 'auth.sendEmail', 'id' => "resetForm", 'style' => 'display:none;')) !!}
    <div class="login_Signup_Area">
        {{ Form::email('resetemail', null, array('class' => 'StyleTxtField inputBg', 'required' => '', 'placeholder' => 'Email', 'style' => "background: url('visitor/images/general/email.png') no-repeat left center;")) }}
        {{ Form::submit('Reset', array('class' => 'btn btn-success btn-block', 'style' => 'margin-top:20px')) }}
        {!! Form::close() !!}
    </div>

</div>