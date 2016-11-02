<div id="signup" class="hvr-glow">
    <img onclick="closeSign()" alt="close" src=visitor/images/general/close.png class="close_Log_Sign">
    <div id="register-messages"></div>

    <form name="RegisterForm" method="post" id="RegisterForm" action="{{ route('auth.registerUser') }}">
        {!! csrf_field() !!}
        <div class="login_Signup_Area">
            <div class="form-group">
                <input required placeholder="Full Name" type="text" name="registername" id="registername" class="form-control" style="background: url('visitor/images/general/username.png') no-repeat left center; padding-left:40px;">
            </div>
            <div class="form-group">
                <input required  placeholder="Choose your password" type="password" name="password" id="password" class="form-control" style="background: url('visitor/images/general/key.png') no-repeat left center; padding-left:40px; ">
            </div>
            <div class="form-group">
                <input required  placeholder="Confirm password" type="password" name="confirmPassword" id="confirmPassword" class="form-control" style="background: url('visitor/images/general/key.png') no-repeat left center; padding-left:40px;">
            </div>
            <div class="form-group">
                <input required  placeholder="Email" type="email" name="registeremail" id="registeremail" class="form-control" style="background: url('visitor/images/general/email.png') no-repeat left center; padding-left:40px;">
            </div>
            <div class="form-group">
                <input required  placeholder="Organization Name" type="text" name="orgname" id="orgname" class=form-control style="background: url('visitor/images/general/orgname.png') no-repeat left center; padding-left:40px;">
            </div>
            <input value="Sign-up" type="submit" name="submit" class="btn btn-primary btn-block btn-up-spacing"><br>

        </div>
    </form>

</div>